<?php
function schemaWebsite(array $site, array $page, array $languages): string
{
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $site['brand']['name'],
        'url' => rtrim($site['brand']['domain'], '/'),
        'alternateName' => $site['brand']['tagline'],
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => rtrim($site['brand']['domain'], '/') . '/?q={search_term_string}',
            'query-input' => 'required name=search_term_string',
        ],
        'inLanguage' => $languages[$page['lang']]['locale'] ?? 'sl-SI',
    ];

    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaPhotostudio(array $site, string $lang): string
{
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        '@id' => rtrim($site['brand']['domain'], '/') . '#photographyStudio',
        'name' => $site['brand']['name'],
        'legalName' => $site['brand']['legalName'],
        'description' => 'Profesionalni poročni in portretni fotograf z več kot petimi leti izkušenj.',
        'image' => $site['brand']['ogImage'],
        'priceRange' => $site['brand']['priceRange'],
        'telephone' => $site['contacts']['phone'],
        'email' => $site['contacts']['email'],
        'url' => rtrim($site['brand']['domain'], '/'),
        'logo' => $site['brand']['logo'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $site['locations']['studio']['streetAddress'],
            'postalCode' => $site['locations']['studio']['postalCode'],
            'addressLocality' => $site['locations']['studio']['addressLocality'],
            'addressCountry' => $site['locations']['studio']['addressCountry'],
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => $site['locations']['studio']['latitude'],
            'longitude' => $site['locations']['studio']['longitude'],
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '08:00',
                'closes' => '19:00',
            ],
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Saturday', 'Sunday'],
                'opens' => '08:00',
                'closes' => '23:59',
            ],
        ],
        'sameAs' => array_values($site['social']),
        'areaServed' => array_map(static fn ($region) => [
            '@type' => 'AdministrativeArea',
            'name' => $region['label'],
        ], $site['regions']),
    ];

    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaOfferCatalog(array $services): string
{
    $offers = [];
    foreach ($services['tiers']['tier1']['services'] as $service) {
        foreach ($service['offerings'] as $offering) {
            $offers[] = [
                '@type' => 'Offer',
                'name' => $offering['name'],
                'priceSpecification' => [
                    '@type' => 'PriceSpecification',
                    'priceCurrency' => 'EUR',
                    'price' => $offering['price'],
                ],
            ];
        }
    }

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'OfferCatalog',
        'name' => 'Čarobni trenutki Photography Services',
        'itemListElement' => $offers,
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaService(array $service, array $site): string
{
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'serviceType' => $service['name'],
        'description' => $service['description'] ?? '',
        'provider' => [
            '@type' => 'LocalBusiness',
            'name' => $site['brand']['name'],
            'areaServed' => array_map(static fn ($region) => $region['label'], $site['regions']),
        ],
        'offers' => array_map(static fn ($offering) => [
            '@type' => 'Offer',
            'name' => $offering['name'],
            'priceCurrency' => 'EUR',
            'price' => $offering['price'],
        ], $service['offerings'] ?? []),
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaVideoObject(array $video): string
{
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'VideoObject',
        'name' => $video['name'],
        'description' => $video['description'],
        'thumbnailUrl' => $video['thumbnail'],
        'contentUrl' => $video['url'],
        'uploadDate' => $video['uploadDate'],
        'duration' => $video['duration'],
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaReviewAggregate(array $reviews): string
{
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'AggregateRating',
        'ratingValue' => $reviews['ratingValue'],
        'bestRating' => $reviews['bestRating'],
        'reviewCount' => $reviews['reviewCount'],
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaBreadcrumb(array $breadcrumbs): string
{
    $list = [];
    foreach ($breadcrumbs as $index => $breadcrumb) {
        $list[] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $breadcrumb['name'],
            'item' => $breadcrumb['url'],
        ];
    }

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $list,
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaServices(array $services): string
{
    $items = [];
    foreach ($services['tiers']['tier1']['services'] as $service) {
        $items[] = [
            '@type' => 'Service',
            'name' => $service['name'],
            'serviceType' => $service['name'],
            'areaServed' => ['Slovenia', 'Croatia', 'Italy', 'Austria'],
            'description' => $service['description'],
        ];
    }

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Čarobni trenutki service portfolio',
        'hasOfferCatalog' => json_decode(schemaOfferCatalog($services), true),
        'serviceOutput' => $items,
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaFAQ(array $faqCategories): string
{
    $entities = [];
    foreach ($faqCategories as $category) {
        foreach ($category['items'] as $item) {
            $entities[] = [
                '@type' => 'Question',
                'name' => $item['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $item['answer'],
                ],
            ];
        }
    }

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $entities,
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaFactCheck(array $fact): string
{
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ClaimReview',
        'datePublished' => $fact['datePublished'],
        'url' => $fact['url'],
        'claimReviewed' => $fact['claim'],
        'author' => [
            '@type' => 'Organization',
            'name' => $fact['author'],
        ],
        'reviewRating' => [
            '@type' => 'Rating',
            'ratingValue' => $fact['ratingValue'],
            'bestRating' => '5',
            'worstRating' => '1',
        ],
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function schemaPeopleAlsoAsk(array $questions): string
{
    $related = [];
    foreach ($questions as $question) {
        $related[] = [
            '@type' => 'Question',
            'name' => $question['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $question['answer'],
            ],
        ];
    }

    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'name' => 'People also ask',
        'mainEntity' => $related,
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
