<?php
require __DIR__ . '/../bootstrap.php';

$page = [
    'title' => 'Fotograf Čarobni trenutki | Poročna in portretna fotografija',
    'description' => 'Najboljša poročna in družinska fotografija v Sloveniji. Čarobni trenutki ustvarja elegantne zgodbe za Ljubljano, Bled in destinacijske poroke.',
    'lang' => 'sl',
    'path' => '/',
    'canonical' => rtrim($site['brand']['domain'], '/') . '/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
    ],
];

$faqCategories = loadFaq('sl');
$pricing = loadPricing();

ob_start();
?>
<section class="hero" id="hero">
    <div>
        <span class="badge">Premium</span>
        <h1>Čarobni trenutki, ki trajajo večno</h1>
        <p class="lead">Ustvarjava ljubezenske zgodbe z nagrajenim pristopom, PWA galerijami in personaliziranim doživetjem za vsako poroko.</p>
        <div class="ribbon">
            <strong>Best Wedding Photographer Slovenia 2024</strong>
            <span>Več kot <?= htmlspecialchars($pricing['packages'][0]['price']) ?> € vredna vrednost v vsakem paketu</span>
        </div>
        <div class="metrics">
            <div class="metric">
                <strong>320+</strong>
                <span>posnetih porok</span>
            </div>
            <div class="metric">
                <strong>4.95/5</strong>
                <span>povprečna ocena</span>
            </div>
            <div class="metric">
                <strong>48 h</strong>
                <span>prvi izbor fotografij</span>
            </div>
            <div class="metric">
                <strong>PWA</strong>
                <span>galerija brez povezave</span>
            </div>
        </div>
    </div>
    <div class="hero-media" aria-hidden="true">
        <img src="https://images.unsplash.com/photo-1520854221050-0f4caff449fb?auto=format&fit=crop&w=900&q=80" alt="Poročni par ob Bledu">
    </div>
</section>

<section id="storitve" class="tier-section">
    <h2 class="section-title">Glavne storitve</h2>
    <div class="cards-grid">
<?php foreach ($services['tiers']['tier1']['services'] as $service): ?>
        <article class="card" data-service-segment="<?= htmlspecialchars($service['slug']) ?>">
            <h3><?= htmlspecialchars($service['name']) ?></h3>
            <p><?= htmlspecialchars($service['description']) ?></p>
            <ul>
<?php foreach ($service['offerings'] as $offering): ?>
                <li><?= htmlspecialchars($offering['name']) ?> <span><?= htmlspecialchars($offering['price']) ?></span></li>
<?php endforeach; ?>
            </ul>
            <a class="cta" href="<?= htmlspecialchars($service['landingPages'][0] ?? '/kontakt/') ?>">Več o storitvi</a>
        </article>
<?php endforeach; ?>
    </div>
</section>

<section class="tier-section" id="portfolio">
    <h2 class="section-title">Portfolio & micro content</h2>
    <p>Vsak projekt recikliramo v reels, blog zapise in Pinterest zgodbe za maksimalen doseg.</p>
    <div class="portfolio-grid">
        <div class="portfolio-item" style="background-image:url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80'); background-size:cover;">
            <span>Destinacijska poroka Bled</span>
        </div>
        <div class="portfolio-item" style="background-image:url('https://images.unsplash.com/photo-1465495976277-4387d4b0b63b?auto=format&fit=crop&w=800&q=80'); background-size:cover;">
            <span>Ljubljana city elopement</span>
        </div>
        <div class="portfolio-item" style="background-image:url('https://images.unsplash.com/photo-1442458370899-ae20e367c5d8?auto=format&fit=crop&w=800&q=80'); background-size:cover;">
            <span>Družinska fotografija v naravi</span>
        </div>
        <div class="portfolio-item" style="background-image:url('https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=800&q=80'); background-size:cover;">
            <span>Corporate branding kampanja</span>
        </div>
    </div>
</section>

<section class="tier-section" id="pricing">
    <h2 class="section-title">Cenik & konfigurator</h2>
    <p>Interaktivni cenik uporablja sezonske faktorje in prikazuje priporočene pakete glede na termin.</p>
    <table class="table-pricing" data-pricing-table data-season="summer">
        <thead>
            <tr>
                <th>Storitev</th>
                <th>Osnovna cena</th>
            </tr>
        </thead>
        <tbody>
<?php foreach ($pricing['base'] as $key => $value): ?>
            <tr>
                <th><?= htmlspecialchars(str_replace('_', ' ', $key)) ?></th>
                <td><?= htmlspecialchars($value) ?> €</td>
            </tr>
<?php endforeach; ?>
        </tbody>
    </table>
    <ul class="cards-grid">
<?php foreach ($pricing['packages'] as $package): ?>
        <li class="card"><strong><?= htmlspecialchars($package['name']) ?></strong><br><?= htmlspecialchars($package['price']) ?> €<br><small><?= htmlspecialchars(implode(', ', $package['includes'])) ?></small></li>
<?php endforeach; ?>
    </ul>
</section>

<section class="tier-section" id="geo">
    <h2 class="section-title">Geo-targeting & destinacije</h2>
    <div class="geo-targeting">
        <article>
            <h3>Tier 1 mesta</h3>
            <p>Ljubljana, Bled in Maribor z namenskim LocalBusiness shema markupom in hreflang povezavami.</p>
        </article>
        <article>
            <h3>Tier 2 landing strani</h3>
            <p>Kranj, Celje, Nova Gorica, Novo mesto in Koper z optimiziranimi areaServed oznakami.</p>
        </article>
        <article>
            <h3>Tier 3 omembe</h3>
            <p>Domžale, Kamnik, Radovljica in ostala mesta vključena v vsebine, schema in FAQ.</p>
        </article>
    </div>
</section>

<section class="tier-section" id="testimonial">
    <div class="testimonial">
        <p>"Čarobni trenutki sta ujela našo poroko na Bledu z neverjetno toplino in profesionalnostjo. Galerijo smo delili kot aplikacijo in gostje so bili navdušeni!"</p>
        <cite>Ana &amp; Marco, Bled</cite>
    </div>
</section>

<section class="tier-section faq-section" id="faq">
    <h2 class="section-title">Pogosta vprašanja</h2>
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
