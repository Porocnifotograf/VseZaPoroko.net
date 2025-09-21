<?php
require __DIR__ . '/../bootstrap.php';

$page = [
    'title' => 'Fotografo matrimonio Slovenia & Nord Italia',
    'description' => 'Servizi fotografici di lusso per matrimoni a Bled, Venezia, Trieste e destinazioni alpine.',
    'lang' => 'it',
    'path' => 'it/',
    'canonical' => rtrim($site['brand']['domain'], '/') . '/it/',
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => '/it/'],
    ],
];

$faqCategories = loadFaq('it');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Eleganza</span>
        <h1>Emozioni autentiche con stile editoriale</h1>
        <p class="lead">Narrazioni visive per matrimoni esclusivi tra Slovenia e Italia, con album artigianali e assistenza bilingue.</p>
    </div>
    <div class="hero-media">
        <img src="https://images.unsplash.com/photo-1520854221050-0f4caff449fb?auto=format&fit=crop&w=900&q=80" alt="Matrimonio elegante">
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Servizi principali</h2>
    <div class="cards-grid">
        <article class="card"><h3>Matrimoni esclusivi</h3><p>Reportage artistico, sessioni di coppia e feste glamour.</p></article>
        <article class="card"><h3>Engagement in Italia</h3><p>Sessioni tra Venezia, Verona e Trieste con styling dedicato.</p></article>
        <article class="card"><h3>Family & lifestyle</h3><p>Sessioni premium per famiglie e brand di lusso.</p></article>
    </div>
</section>

<section class="tier-section" id="faq">
    <h2 class="section-title">Domande frequenti</h2>
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
