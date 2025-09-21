<?php
require __DIR__ . '/bootstrap.php';

$page = [
    'title' => 'Politika zasebnosti | Fotograf Čarobni trenutki',
    'description' => 'Politika zasebnosti in varstvo podatkov za studio Fotograf Čarobni trenutki.',
    'lang' => 'sl',
    'path' => 'privacy-policy.php',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Politika zasebnosti', 'url' => '/privacy-policy.php'],
    ],
];

ob_start();
?>
<section class="card">
    <h1>Politika zasebnosti</h1>
    <p>Vaše zaupanje je za nas najpomembnejše. V nadaljevanju pojasnjujemo, kako zbiramo, uporabljamo in varujemo osebne podatke v skladu z GDPR.</p>
    <h2>Katere podatke zbiramo</h2>
    <ul>
        <li>Kontaktne podatke (ime, e-pošta, telefon) za pripravo ponudb.</li>
        <li>Podatke o dogodku (datum, lokacija, program) za načrtovanje storitev.</li>
        <li>Multimedijske vsebine (fotografije, video) iz opravljenih projektov.</li>
    </ul>
    <h2>Namen obdelave</h2>
    <p>Podatke uporabljamo za izpolnitev pogodbe, pripravo ponudb in zakonsko obvezno hrambo računovodskih dokumentov.</p>
    <h2>Roki hrambe</h2>
    <p>Kontaktne podatke hranimo do zaključka projekta, računovodske dokumente pa 10 let v skladu z zakonodajo.</p>
    <h2>Vaše pravice</h2>
    <p>Imate pravico do vpogleda, popravka, izbrisa ali prenosljivosti podatkov. Zahteve pošljite na <a href="mailto:<?= htmlspecialchars($site['contacts']['email']) ?>"><?= htmlspecialchars($site['contacts']['email']) ?></a>.</p>
</section>
<?php
$content = ob_get_clean();
$faqCategories = loadFaq('sl');
include __DIR__ . '/partials/layout.php';
