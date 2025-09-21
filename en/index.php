<?php
require __DIR__ . '/../bootstrap.php';

$page = [
    'title' => 'Slovenia Wedding Photographer | Carobni Trenutki',
    'description' => 'Luxury destination wedding photography studio capturing elegant celebrations across Slovenia, Croatia, Italy and Austria.',
    'lang' => 'en',
    'path' => 'en/',
    'canonical' => rtrim($site['brand']['domain'], '/') . '/en/',
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => '/en/'],
    ],
];

$faqCategories = loadFaq('en');
$pricing = loadPricing();

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Destination</span>
        <h1>Timeless destination wedding storytelling</h1>
        <p class="lead">From Lake Bled to Adriatic villas, we craft refined narratives for international couples seeking poetic imagery and seamless planning.</p>
        <div class="metrics">
            <div class="metric">
                <strong>15+</strong>
                <span>countries photographed</span>
            </div>
            <div class="metric">
                <strong>48h</strong>
                <span>teaser delivery</span>
            </div>
            <div class="metric">
                <strong>98</strong>
                <span>PageSpeed score</span>
            </div>
        </div>
    </div>
    <div class="hero-media">
        <img src="https://images.unsplash.com/photo-1520854221050-0f4caff449fb?auto=format&fit=crop&w=900&q=80" alt="Lake Bled destination wedding">
    </div>
</section>

<section class="tier-section" id="services">
    <h2 class="section-title">Signature services</h2>
    <div class="cards-grid">
        <article class="card" data-service-segment="wedding">
            <h3>Wedding experience</h3>
            <p>Full-day coverage, editorial portraits, film-inspired color grading and concierge-level logistics.</p>
        </article>
        <article class="card" data-service-segment="engagement">
            <h3>Engagement journeys</h3>
            <p>Sunrise shoots in alpine meadows, sunset yacht cruises and intimate city escapes.</p>
        </article>
        <article class="card" data-service-segment="lifestyle">
            <h3>Fine-art lifestyle</h3>
            <p>Editorial sessions for creative entrepreneurs, fashion-forward couples and personal brands.</p>
        </article>
    </div>
</section>

<section class="tier-section" id="pricing">
    <h2 class="section-title">Tailored collections</h2>
    <p>Starting investment for full wedding weekends from 2.800 EUR. Request a bespoke itinerary for multi-day celebrations.</p>
    <table class="table-pricing" data-pricing-table data-season="summer">
        <thead><tr><th>Service</th><th>Starting at</th></tr></thead>
        <tbody>
<?php foreach ($pricing['base'] as $key => $value): ?>
            <tr><th><?= htmlspecialchars(str_replace('_', ' ', $key)) ?></th><td><?= htmlspecialchars($value) ?> €</td></tr>
<?php endforeach; ?>
        </tbody>
    </table>
</section>

<section class="tier-section" id="faq">
    <h2 class="section-title">Frequently asked questions</h2>
<?php foreach ($faqCategories as $category): ?>
    <h3><?= htmlspecialchars($category['title']) ?></h3>
<?php foreach ($category['items'] as $item): ?>
    <details>
        <summary><?= htmlspecialchars($item['question']) ?></summary>
        <p><?= htmlspecialchars($item['answer']) ?></p>
    </details>
<?php endforeach; ?>
<?php endforeach; ?>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../partials/layout.php';
