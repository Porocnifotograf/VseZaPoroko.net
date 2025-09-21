<?php
require __DIR__ . '/../../../bootstrap.php';

$service = $services['tiers']['tier1']['services'][0];

$page = [
    'title' => 'Poročna fotografija | Čarobni trenutki',
    'description' => 'Poročna fotografija s celovito pokritostjo, destinacijskimi porokami in predporočno zgodbo.',
    'lang' => 'sl',
    'path' => '/sl/storitve/porocna-fotografija/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Storitve', 'url' => '/#storitve'],
        ['name' => 'Poročna fotografija', 'url' => '/sl/storitve/porocna-fotografija/'],
    ],
];

$faqCategories = loadFaq('sl');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Poročni dan</span>
        <h1>Poročna fotografija, ki pripoveduje zgodbo</h1>
        <p class="lead">Združujeva dokumentarni pristop, umetniške portrete in kreativne filmske barve. Vsak paket vključuje predporočno sejo in PWA galerijo.</p>
    </div>
    <div class="hero-media">
        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80" alt="Poročna fotografija">
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Paketna ponudba</h2>
    <div class="cards-grid">
<?php foreach ($service['offerings'] as $offering): ?>
        <article class="card">
            <h3><?= htmlspecialchars($offering['name']) ?></h3>
            <p class="lead"><?= htmlspecialchars($offering['price']) ?></p>
            <p>Vključuje personaliziran časovni načrt, koordinacijo z videografi in varnostno kopiranje na treh lokacijah.</p>
        </article>
<?php endforeach; ?>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Destinacije</h2>
    <div class="geo-targeting">
        <article><h3>Ljubljana</h3><p>Elegantne mestne lokacije, grajska ozadja in sodobni prostori.</p></article>
        <article><h3>Bled</h3><p>Poroka na otoku, Blejski grad in luksuzni hoteli z razgledom.</p></article>
        <article><h3>Otočec</h3><p>Ekskluzivno grajsko doživetje z zasebnimi vrtovi in gourmet kulinariko.</p></article>
    </div>
</section>

<section class="tier-section" id="timeline">
    <h2 class="section-title">Timeline</h2>
    <ul class="cards-grid">
        <li class="card"><strong>06:00</strong><br>Priprave neveste in ženina z naravno svetlobo.</li>
        <li class="card"><strong>13:00</strong><br>Ceremonija in civilni obred s tihimi kamerami.</li>
        <li class="card"><strong>18:00</strong><br>Zlata ura portreti, drone posnetki in skupinske fotografije.</li>
        <li class="card"><strong>22:00</strong><br>Večerna zabava, ples in iskrene emocije.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../partials/layout.php';
