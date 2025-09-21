<?php
require __DIR__ . '/../../bootstrap.php';

$page = [
    'title' => 'Cenik fotografskih storitev | Čarobni trenutki',
    'description' => 'Pregled cen za poročno, družinsko, portretno in komercialno fotografijo z dinamičnim konfiguratorjem.',
    'lang' => 'sl',
    'path' => '/sl/cenik/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Cenik', 'url' => '/sl/cenik/'],
    ],
];

$faqCategories = loadFaq('sl');
$pricing = loadPricing();

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Cenik</span>
        <h1>Transparentne cene</h1>
        <p class="lead">Vsaka ponudba je prilagojena dogodku. Konfigurator upošteva sezonske faktorje, lokacije in dodatne storitve.</p>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Osnovne cene</h2>
    <table class="table-pricing" data-pricing-table data-season="spring">
        <thead><tr><th>Storitev</th><th>Cena</th></tr></thead>
        <tbody>
<?php foreach ($pricing['base'] as $key => $value): ?>
            <tr><th><?= htmlspecialchars(str_replace('_', ' ', $key)) ?></th><td><?= htmlspecialchars($value) ?> €</td></tr>
<?php endforeach; ?>
        </tbody>
    </table>
</section>

<section class="tier-section">
    <h2 class="section-title">Paketi</h2>
    <div class="cards-grid">
<?php foreach ($pricing['packages'] as $package): ?>
        <article class="card">
            <h3><?= htmlspecialchars($package['name']) ?></h3>
            <p><?= htmlspecialchars($package['price']) ?> €</p>
            <p><?= htmlspecialchars(implode(', ', $package['includes'])) ?></p>
        </article>
<?php endforeach; ?>
    </div>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../partials/layout.php';
