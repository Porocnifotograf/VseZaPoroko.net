<?php
require __DIR__ . '/../../../../bootstrap.php';

$page = [
    'title' => 'Otroško fotografiranje | Čarobni trenutki',
    'description' => 'Igrivo fotografiranje otrok, rojstnih dni in šolskih dogodkov.',
    'lang' => 'sl',
    'path' => '/sl/storitve/druzinska-fotografija/otroci/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Družinska fotografija', 'url' => '/sl/storitve/druzinska-fotografija/'],
        ['name' => 'Otroško fotografiranje', 'url' => '/sl/storitve/druzinska-fotografija/otroci/'],
    ],
];

$faqCategories = loadFaq('sl');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Kids</span>
        <h1>Otroci v gibanju</h1>
        <p class="lead">Igrive zgodbe z naravno svetlobo, tematskimi scenami in veliko smeha.</p>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Najbolj priljubljeno</h2>
    <ul class="cards-grid">
        <li class="card">Rojstnodnevne zabave s foto kotičkom.</li>
        <li class="card">Cake smash s personaliziranimi rekviziti.</li>
        <li class="card">Šolski projekti in gledališke predstave.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../../partials/layout.php';
