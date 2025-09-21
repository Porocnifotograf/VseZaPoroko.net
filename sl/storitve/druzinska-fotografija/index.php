<?php
require __DIR__ . '/../../../bootstrap.php';

$page = [
    'title' => 'Družinska fotografija | Čarobni trenutki',
    'description' => 'Družinsko, newborn in nosečniško fotografiranje v studiu ali naravi.',
    'lang' => 'sl',
    'path' => '/sl/storitve/druzinska-fotografija/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Storitve', 'url' => '/#storitve'],
        ['name' => 'Družinska fotografija', 'url' => '/sl/storitve/druzinska-fotografija/'],
    ],
];

$faqCategories = loadFaq('sl');
$service = $services['tiers']['tier1']['services'][1];

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Družina</span>
        <h1>Topli družinski portreti</h1>
        <p class="lead">Ujamemo spontano veselje, nežne trenutke in večgeneracijske objeme. Studio ali narava – vedno s personaliziranim pristopom.</p>
    </div>
    <div class="hero-media">
        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80" alt="Družinska fotografija">
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Paketi</h2>
    <div class="cards-grid">
<?php foreach ($service['offerings'] as $offering): ?>
        <article class="card">
            <h3><?= htmlspecialchars($offering['name']) ?></h3>
            <p><?= htmlspecialchars($offering['price']) ?></p>
            <p>Vključuje stilistični vodič, izbor lokacije in galerijo za deljenje.</p>
        </article>
<?php endforeach; ?>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Zakaj Čarobni trenutki</h2>
    <ul class="cards-grid">
        <li class="card">Varne newborn tehnike in certificirana babica v ekipi.</li>
        <li class="card">Mobilni studio z naravno svetlobo in art ozadji.</li>
        <li class="card">Umetniški printi in ročno izdelane foto knjige.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../partials/layout.php';
