<?php
require __DIR__ . '/../bootstrap.php';

$page = [
    'title' => 'Hochzeitsfotograf Slowenien & Alpen',
    'description' => 'Premium Hochzeitsreportagen für Kärnten, Graz, Salzburg und alpine Destinationen in Slowenien.',
    'lang' => 'de',
    'path' => 'de/',
    'canonical' => rtrim($site['brand']['domain'], '/') . '/de/',
    'breadcrumbs' => [
        ['name' => 'Startseite', 'url' => '/de/'],
    ],
];

$faqCategories = loadFaq('de');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Alpen</span>
        <h1>Authentische Hochzeitsreportagen in den Alpen</h1>
        <p class="lead">Wir begleiten deutschsprachige Paare in Slowenien, Österreich und Italien – mit zweisprachiger Betreuung und exklusiven Alben.</p>
    </div>
    <div class="hero-media">
        <img src="https://images.unsplash.com/photo-1520854221050-0f4caff449fb?auto=format&fit=crop&w=900&q=80" alt="Alpen Hochzeit">
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Leistungen</h2>
    <div class="cards-grid">
        <article class="card"><h3>Hochzeiten</h3><p>Ganztägige Reportagen mit Fokus auf Emotionen, Tradition und Landschaft.</p></article>
        <article class="card"><h3>After Wedding</h3><p>Fotoshootings am Wörthersee, in Bled oder in alpinen Tälern.</p></article>
        <article class="card"><h3>Business & Portrait</h3><p>Moderne Unternehmensportraits und Headshots für Teams in Österreich.</p></article>
    </div>
</section>

<section class="tier-section" id="faq">
    <h2 class="section-title">Häufige Fragen</h2>
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
