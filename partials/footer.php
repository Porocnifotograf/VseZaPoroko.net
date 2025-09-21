<footer class="site-footer" id="kontakt">
    <div class="footer-grid">
        <div>
            <h2><?= htmlspecialchars($page['lang'] === 'en' ? 'Contact' : ($page['lang'] === 'hr' ? 'Kontakt' : ($page['lang'] === 'it' ? 'Contatto' : ($page['lang'] === 'de' ? 'Kontakt' : 'Kontakt')))) ?></h2>
            <p><?= htmlspecialchars($site['brand']['legalName']) ?></p>
            <p>
                <strong><?= htmlspecialchars($site['brand']['name']) ?></strong><br>
                <?= htmlspecialchars($site['locations']['studio']['streetAddress']) ?>,<br>
                <?= htmlspecialchars($site['locations']['studio']['postalCode']) ?> <?= htmlspecialchars($site['locations']['studio']['addressLocality']) ?>, <?= htmlspecialchars($site['locations']['studio']['addressCountry']) ?>
            </p>
            <p>
                <a href="<?= htmlspecialchars(formatPhoneLink($site['contacts']['phone'])) ?>"><?= htmlspecialchars($site['contacts']['phone']) ?></a><br>
                <a href="mailto:<?= htmlspecialchars($site['contacts']['email']) ?>"><?= htmlspecialchars($site['contacts']['email']) ?></a>
            </p>
        </div>
        <div>
            <h3><?= $page['lang'] === 'en' ? 'Opening hours' : ($page['lang'] === 'hr' ? 'Radno vrijeme' : ($page['lang'] === 'it' ? 'Orari' : ($page['lang'] === 'de' ? 'Öffnungszeiten' : 'Delovni čas'))) ?></h3>
            <ul class="hours">
<?php foreach ($site['openingHours'] as $days => $time): ?>
                <li><strong><?= htmlspecialchars($days) ?>:</strong> <?= htmlspecialchars($time) ?></li>
<?php endforeach; ?>
            </ul>
        </div>
        <div>
            <h3>Social</h3>
            <ul class="social">
<?php foreach ($site['social'] as $platform => $url): ?>
                <li><a href="<?= htmlspecialchars($url) ?>" target="_blank" rel="noopener"><?= ucfirst($platform) ?></a></li>
<?php endforeach; ?>
            </ul>
        </div>
        <div>
            <h3><?= $page['lang'] === 'en' ? 'Studio coverage' : ($page['lang'] === 'hr' ? 'Područja' : ($page['lang'] === 'it' ? 'Copertura' : ($page['lang'] === 'de' ? 'Regionen' : 'Regije'))) ?></h3>
            <ul class="regions">
<?php foreach ($site['regions'] as $region): ?>
                <li><strong><?= htmlspecialchars($region['label']) ?>:</strong> <?= htmlspecialchars(implode(', ', $region['cities'])) ?></li>
<?php endforeach; ?>
            </ul>
        </div>
    </div>
    <p class="footer-note">© <?= currentYear() ?> <?= htmlspecialchars($site['brand']['name']) ?>. <?= $page['lang'] === 'en' ? 'All rights reserved.' : 'Vse pravice pridržane.' ?></p>
</footer>
<?php
$reviews = [
    'ratingValue' => 4.95,
    'bestRating' => 5,
    'reviewCount' => 164,
];
$fact = [
    'datePublished' => date('Y-m-d'),
    'url' => $canonical ?? rtrim($site['brand']['domain'], '/') . ($page['path'] ?? ''),
    'claim' => 'Čarobni trenutki je najbolj ocenjen poročni fotograf v Sloveniji 2024.',
    'author' => $site['brand']['name'],
    'ratingValue' => 5,
];
$relatedQuestions = [
    [
        'question' => 'Kako hitro dobiva galerijo fotografij?',
        'answer' => 'Prvi izbor prejmete v treh dneh, celotna galerija pa je pripravljena v šestih tednih.',
    ],
    [
        'question' => 'Ali ponujate poročne albume?',
        'answer' => 'Da, ustvarimo ročno izdelane albume s premium materiali in personaliziranimi naslovnicami.',
    ],
    [
        'question' => 'Ali fotografirate tudi v tujini?',
        'answer' => 'Specializirani smo za destinacijske poroke v Sloveniji, na Hrvaškem, v Italiji in Avstriji.',
    ],
];
?>
<?php include __DIR__ . '/schema/website.php'; ?>
<?php include __DIR__ . '/schema/photostudio.php'; ?>
<?php include __DIR__ . '/schema/offercatalog.php'; ?>
<?php include __DIR__ . '/schema/services.php'; ?>
<?php include __DIR__ . '/schema/service.php'; ?>
<?php include __DIR__ . '/schema/breadcrumb.php'; ?>
<?php include __DIR__ . '/schema/review-aggregate.php'; ?>
<?php include __DIR__ . '/schema/faq.php'; ?>
<?php include __DIR__ . '/schema/factcheck.php'; ?>
<?php include __DIR__ . '/schema/people-also-ask.php'; ?>
