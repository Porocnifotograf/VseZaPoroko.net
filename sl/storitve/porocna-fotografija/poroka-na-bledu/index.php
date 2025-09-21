<?php
require __DIR__ . '/../../../../bootstrap.php';

$page = [
    'title' => 'Poroka na Bledu | Čarobni trenutki',
    'description' => 'Specializirana poročna fotografija na Bledu z lokalnimi partnerji in logistiko.',
    'lang' => 'sl',
    'path' => '/sl/storitve/porocna-fotografija/poroka-na-bledu/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Poročna fotografija', 'url' => '/sl/storitve/porocna-fotografija/'],
        ['name' => 'Poroka na Bledu', 'url' => '/sl/storitve/porocna-fotografija/poroka-na-bledu/'],
    ],
];

$faqCategories = loadFaq('sl');
$service = $services['tiers']['tier1']['services'][0];

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Bled</span>
        <h1>Poroka na Bledu</h1>
        <p class="lead">Blejsko jezero, otok in grad ustvarijo sanjsko kuliso. Poskrbimo za logistiko ladjic, koordinacijo z wedding plannerjem in fotografske lokacije.</p>
    </div>
    <div class="hero-media">
        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=900&q=80" alt="Poroka na Bledu">
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Ekskluzivna doživetja</h2>
    <div class="cards-grid">
        <article class="card"><h3>Blejski otok</h3><p>Intimni obredi v cerkvi Marijinega vnebovzetja z zasebnim dostopom.</p></article>
        <article class="card"><h3>Blejski grad</h3><p>Sunset portreti in gala večerje z razgledom na jezero.</p></article>
        <article class="card"><h3>Vila Bled</h3><p>Retro šarm in vrtne zabave z jazz orkestrom.</p></article>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Kaj je vključeno</h2>
    <ul class="cards-grid">
        <li class="card">Lokalni vodič po fotografsko najboljših točkah.</li>
        <li class="card">Koordinacija s pletnarji in ladjicami.</li>
        <li class="card">PWA galerija za goste v štirih jezikih.</li>
        <li class="card">After wedding seja na Pokljuki ali v Bohinju.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../../partials/layout.php';
