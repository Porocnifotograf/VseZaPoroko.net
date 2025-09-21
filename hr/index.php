<?php
require __DIR__ . '/../bootstrap.php';

$page = [
    'title' => 'Vjenčani fotograf za Sloveniju i Jadran',
    'description' => 'Ekskluzivna vjenčana i obiteljska fotografija za Istru, Kvarner i Dalmaciju uz slovenski premium potpis.',
    'lang' => 'hr',
    'path' => 'hr/',
    'canonical' => rtrim($site['brand']['domain'], '/') . '/hr/',
    'breadcrumbs' => [
        ['name' => 'Naslovnica', 'url' => '/hr/'],
    ],
];

$faqCategories = loadFaq('hr');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Jadran</span>
        <h1>Vaša priča, snimljena srcem</h1>
        <p class="lead">Fotografiramo luksuzne destinacije od Rovinja do Dubrovnika uz opuštenu atmosferu i vrhunsku produkciju.</p>
        <div class="metrics">
            <div class="metric"><strong>24h</strong><span>brzi preview</span></div>
            <div class="metric"><strong>30%</strong><span>popust za radne dane</span></div>
            <div class="metric"><strong>5★</strong><span>recenzije parova</span></div>
        </div>
    </div>
    <div class="hero-media">
        <img src="https://images.unsplash.com/photo-1520854221050-0f4caff449fb?auto=format&fit=crop&w=900&q=80" alt="Jadransko vjenčanje">
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Premium usluge</h2>
    <div class="cards-grid">
        <article class="card"><h3>Vjenčanja</h3><p>Dokumentiramo svaki trenutak, od priprema do ponoćnog vatrometa.</p></article>
        <article class="card"><h3>Love story</h3><p>Engagement i honeymoon sesije na plažama, otocima i povijesnim gradovima.</p></article>
        <article class="card"><h3>Obitelj & lifestyle</h3><p>Topli portreti na plaži, kućne priče i boutique editorijali.</p></article>
    </div>
</section>

<section class="tier-section" id="faq">
    <h2 class="section-title">Često postavljena pitanja</h2>
<?php foreach ($faqCategories as $category): ?>
    <h3><?= htmlspecialchars($category['title']) ?></h3>
<?php foreach ($category['items'] as $item): ?>
    <details>
        <summary><?= htmlspecialchars($item['question']) ?></summary>
        <p><?= htmlspecialchars($item['answer']) ?></p>
    </details>
<?php endforeach; ?>
<?php endforeach; ?>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/../partials/layout.php';
