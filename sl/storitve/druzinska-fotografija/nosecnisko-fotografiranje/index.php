<?php
require __DIR__ . '/../../../../bootstrap.php';

$page = [
    'title' => 'Nosečniško fotografiranje | Čarobni trenutki',
    'description' => 'Elegantne nosečniške seanse v studiu, naravi ali doma.',
    'lang' => 'sl',
    'path' => '/sl/storitve/druzinska-fotografija/nosecnisko-fotografiranje/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Družinska fotografija', 'url' => '/sl/storitve/druzinska-fotografija/'],
        ['name' => 'Nosečniško fotografiranje', 'url' => '/sl/storitve/druzinska-fotografija/nosecnisko-fotografiranje/'],
    ],
];

$faqCategories = loadFaq('sl');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Maternity</span>
        <h1>Nosečniška eleganca</h1>
        <p class="lead">Svetovanje o stylingu, profesionalni make-up in lokacije z nežno svetlobo.</p>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Paketi</h2>
    <ul class="cards-grid">
        <li class="card">Studio paket – svetlobni setupi in couture obleke.</li>
        <li class="card">Outdoor paket – naravni parki, jezera in mestne oaze.</li>
        <li class="card">Lifestyle paket – intimen dom in vsakdanja zgodba.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../../../partials/layout.php';
