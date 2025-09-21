<?php
declare(strict_types=1);
require __DIR__ . '/../bootstrap.php';
$page = [
    'title' => 'Admin | Portfelj Čarobni trenutki',
    'description' => 'Interni modul za upravljanje portfelja, cen in vsebin.',
    'lang' => 'sl',
    'path' => 'admin/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Admin', 'url' => '/admin/'],
    ],
];
$faqCategories = loadFaq('sl');
ob_start();
?>
<section class="card">
    <h1>Admin nadzorna plošča</h1>
    <p>Ta razdelek je namenjen hitremu posodabljanju galerij, cenikov in vsebinskih sklopov. API-ji podpirajo real-time sinhronizacijo z javno stranjo.</p>
    <ul>
        <li><strong>Portfelj:</strong> dodajanje in urejanje galerij v formatu WebP/AVIF.</li>
        <li><strong>Cenik:</strong> upravljanje baznih cen in sezonskih faktorjev.</li>
        <li><strong>Analitika:</strong> pregled KPI metrik in izvozi v CSV.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../partials/layout.php';
