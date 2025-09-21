<?php
require __DIR__ . '/../../bootstrap.php';

$page = [
    'title' => 'O nas | Fotograf Čarobni trenutki',
    'description' => 'Spoznajte zgodbo studia Čarobni trenutki, nagrade, ekipo in pristop k fotografiji.',
    'lang' => 'sl',
    'path' => '/sl/o-nas/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'O nas', 'url' => '/sl/o-nas/'],
    ],
];

$faqCategories = loadFaq('sl');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Ekipa</span>
        <h1>Zgodba Čarobnih trenutkov</h1>
        <p class="lead">Več kot pet let izkušenj, nagrada Best Wedding Photographer Slovenia 2024 in več kot 320 dokumentiranih porok.</p>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Naše vrednote</h2>
    <ul class="cards-grid">
        <li class="card">Pristnost – lovimo spontane emocije in iskrene poglede.</li>
        <li class="card">Inovativnost – PWA galerije, AI podpora in svetovanje.</li>
        <li class="card">Skupnost – sodelovanje z lokalnimi ustvarjalci in wedding plannerji.</li>
    </ul>
</section>

<section class="tier-section">
    <h2 class="section-title">Ekipa</h2>
    <div class="cards-grid">
        <article class="card"><h3>Tina</h3><p>Lead fotografinja, specializirana za portrete in umetniško osvetlitev.</p></article>
        <article class="card"><h3>Mark</h3><p>Destinacijski fotograf in koordinator logistike.</p></article>
        <article class="card"><h3>Mia</h3><p>Stilistka in ustvarjalka socialnih vsebin.</p></article>
    </div>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../partials/layout.php';
