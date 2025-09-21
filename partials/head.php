<?php
$languageConfig = $languages['supported'][$page['lang']] ?? $languages['supported'][$languages['default']];
$alternates = getLanguageAlternateUrls($page['path'] ?? '');
$canonical = $page['canonical'] ?? rtrim($site['brand']['domain'], '/') . ($page['path'] ?? '');
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <meta name="theme-color" content="#8B7355">
    <meta name="format-detection" content="telephone=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="carobni-trenutki-html-token">
    <meta name="yandex-verification" content="7769a4f1b206b7cf">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="<?= htmlspecialchars($site['brand']['logo']) ?>">
    <link rel="apple-touch-icon" href="<?= htmlspecialchars($site['brand']['logo']) ?>">
<?php foreach ($alternates as $code => $url): ?>
    <link rel="alternate" hreflang="<?= htmlspecialchars($languages['supported'][$code]['locale'] ?? $code) ?>" href="<?= htmlspecialchars($url) ?>">
<?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= htmlspecialchars(rtrim($site['brand']['domain'], '/') . '/') ?>">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&family=Dancing+Script:wght@500&display=swap" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&family=Dancing+Script:wght@500&display=swap">
    <style><?php readfile(__DIR__ . '/../assets/css/critical.css'); ?></style>
    <script><?php readfile(__DIR__ . '/../assets/js/critical.js'); ?></script>
    <link rel="preload" href="<?= asset('css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="<?= asset('css/style.css') ?>"></noscript>
    <script defer src="<?= asset('js/main.js') ?>"></script>
    <script defer src="<?= asset('js/pwa.js') ?>"></script>
    <script defer src="<?= asset('js/pricing.js') ?>"></script>
    <script defer src="<?= asset('js/user-segmentation.js') ?>"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars($site['analytics']['ga4']) ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= addslashes($site['analytics']['ga4']) ?>');
    </script>
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($site['brand']['ogImage']) ?>">
    <meta property="og:locale" content="<?= htmlspecialchars($languageConfig['locale']) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars($site['brand']['name']) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@fotografporocni">
</head>
