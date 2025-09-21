<?php
require __DIR__ . '/../../../../bootstrap.php';

$page = [
    'title' => 'Poroka v Ljubljani | Čarobni trenutki',
    'description' => 'Poročna fotografija v Ljubljani z urbanimi kulisami in skritimi kotički.',
    'lang' => 'sl',
    'path' => '/sl/storitve/porocna-fotografija/poroka-v-ljubljani/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Poročna fotografija', 'url' => '/sl/storitve/porocna-fotografija/'],
        ['name' => 'Poroka v Ljubljani', 'url' => '/sl/storitve/porocna-fotografija/poroka-v-ljubljani/'],
    ],
];

$faqCategories = loadFaq('sl');
$service = $services['tiers']['tier1']['services'][0];

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Ljubljana</span>
        <h1>Ljubljanska romanca</h1>
        <p class="lead">Staro mestno jedro, grajski hrib in moderni prostori – ustvarimo urbano zgodbo z elegantnim pridihom.</p>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Priporočene lokacije</h2>
    <ul class="cards-grid">
        <li class="card">Ljubljanski grad in pogled na mesto.</li>
        <li class="card">Botanični vrt in Tivoli za naravne portrete.</li>
        <li class="card">Mestni muzej in sodobne galerije.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../../partials/layout.php';
