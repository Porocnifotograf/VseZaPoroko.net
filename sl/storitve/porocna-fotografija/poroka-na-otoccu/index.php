<?php
require __DIR__ . '/../../../../bootstrap.php';

$page = [
    'title' => 'Poroka na Otočcu | Čarobni trenutki',
    'description' => 'Ekskluzivna grajska poroka na Otočcu z ekipo Čarobni trenutki.',
    'lang' => 'sl',
    'path' => '/sl/storitve/porocna-fotografija/poroka-na-otoccu/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Poročna fotografija', 'url' => '/sl/storitve/porocna-fotografija/'],
        ['name' => 'Poroka na Otočcu', 'url' => '/sl/storitve/porocna-fotografija/poroka-na-otoccu/'],
    ],
];

$faqCategories = loadFaq('sl');
$service = $services['tiers']['tier1']['services'][0];

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Otočec</span>
        <h1>Grajska eleganca</h1>
        <p class="lead">Poroka na grajskem otoku s privatiziranimi vrtovi, svetlobnimi instalacijami in večerjo pod zvezdami.</p>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Posebnosti</h2>
    <ul class="cards-grid">
        <li class="card">Koordinacija z grajskim protokolom in glamp taborom.</li>
        <li class="card">Svetlobni design za plesni parket in vrt.</li>
        <li class="card">After wedding brunch v vinorodnih goricah.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../../partials/layout.php';
