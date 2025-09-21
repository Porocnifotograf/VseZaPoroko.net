<?php
require __DIR__ . '/../../bootstrap.php';

$page = [
    'title' => 'Kontakt | Fotograf Čarobni trenutki',
    'description' => 'Rezervirajte termin za poročno, družinsko ali komercialno fotografiranje. Hitra odzivnost in personalizirana ponudba.',
    'lang' => 'sl',
    'path' => '/sl/kontakt/',
    'breadcrumbs' => [
        ['name' => 'Domov', 'url' => '/'],
        ['name' => 'Kontakt', 'url' => '/sl/kontakt/'],
    ],
];

$faqCategories = loadFaq('sl');

ob_start();
?>
<section class="hero">
    <div>
        <span class="badge">Kontakt</span>
        <h1>Povežimo se</h1>
        <p class="lead">Izpolnite obrazec in pripravili bomo personaliziran predlog v 24 urah. Pokličite nas na <?= htmlspecialchars($site['contacts']['phone']) ?> ali pišite na <?= htmlspecialchars($site['contacts']['email']) ?>.</p>
    </div>
</section>

<section class="tier-section">
    <h2 class="section-title">Kontaktni obrazec</h2>
    <form class="card" id="contact-form">
        <label>Ime in priimek<input type="text" name="name" required></label>
        <label>E-pošta<input type="email" name="email" required></label>
        <label>Sporočilo<textarea name="message" rows="5" required></textarea></label>
        <button type="submit" class="cta">Pošlji sporočilo</button>
        <p class="form-status" aria-live="polite"></p>
    </form>
</section>

<script>
(function() {
    const form = document.getElementById('contact-form');
    if (!form) return;
    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        const status = form.querySelector('.form-status');
        status.textContent = 'Pošiljanje...';
        const formData = Object.fromEntries(new FormData(form));
        const response = await fetch('/api/contact.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formData)
        });
        const data = await response.json();
        status.textContent = data.message || data.error || 'Hvala!';
        if (response.ok) form.reset();
    });
})();
</script>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../partials/layout.php';
