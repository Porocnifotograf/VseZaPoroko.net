<?php
require __DIR__ . '/../../../../bootstrap.php';

$page = [
    'title' => 'Destinacijske poroke | Čarobni trenutki',
    'description' => 'Destinacijska poročna fotografija po Evropi in širše z večjezičnim timom.',
    'lang' => 'sl',
    'path' => '/sl/storitve/porocna-fotografija/destinacijske-poroke/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Poročna fotografija', 'url' => '/sl/storitve/porocna-fotografija/'],
        ['name' => 'Destinacijske poroke', 'url' => '/sl/storitve/porocna-fotografija/destinacijske-poroke/'],
    ],
];

$faqCategories = loadFaq('sl');
$service = $services['tiers']['tier1']['services'][0];

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Destination</span>
        <h1>Destinacijske poroke</h1>
        <p class="lead">Načrtujemo poročne zgodbe od hrvaške obale do severne Italije in avstrijskih Alp. Povezujemo lokalne ekipe in ustvarjamo večjezične izkušnje.</p>
    </div>
    <div class="hero-media">
        <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=900&q=80" alt="Destinacijska poroka">
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Najljubše lokacije</h2>
    <div class="geo-targeting">
        <article><h3>Hrvaška obala</h3><p>Hvar, Rovinj, Dubrovnik in Istra z morskim vetrom in sončnimi zahodi.</p></article>
        <article><h3>Severna Italija</h3><p>Venezia, Verona in Dolomiti z eleganco in gastronomsko ponudbo.</p></article>
        <article><h3>Avstrijske Alpe</h3><p>Klagenfurt, Salzburg in Innsbruck s panoramskimi razgledi in alpskim vzdušjem.</p></article>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Logistika in podpora</h2>
    <ul class="cards-grid">
        <li class="card">Večjezična komunikacija (sl, en, hr, de, it).</li>
        <li class="card">Prilagoditev časovnic glede na vreme in svetlobo.</li>
        <li class="card">Povezava s preverjenimi wedding plannerji po Evropi.</li>
        <li class="card">Virtualni ogledi lokacij in koordinacija dobaviteljev.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../../partials/layout.php';
