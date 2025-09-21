<?php
require __DIR__ . '/../../../../bootstrap.php';

$page = [
    'title' => 'Newborn fotografija | Čarobni trenutki',
    'description' => 'Varno in nežno newborn fotografiranje s certificirano babico in toplim studiem.',
    'lang' => 'sl',
    'path' => '/sl/storitve/druzinska-fotografija/novorojencki/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Družinska fotografija', 'url' => '/sl/storitve/druzinska-fotografija/'],
        ['name' => 'Newborn fotografija', 'url' => '/sl/storitve/druzinska-fotografija/novorojencki/'],
    ],
];

$faqCategories = loadFaq('sl');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Newborn</span>
        <h1>Nežni začetki</h1>
        <p class="lead">Fotografiranje v prvih 14 dneh življenja v toplem studiu ali na domu. Uporabljamo naravne materiale in skrbimo za varnost.</p>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Kaj vključuje</h2>
    <ul class="cards-grid">
        <li class="card">Dve sceni z različnimi rekviziti in barvnimi paletami.</li>
        <li class="card">Portreti z bratci, sestricami in starši.</li>
        <li class="card">Galerija in izbor printov na fine art papir.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../../partials/layout.php';
