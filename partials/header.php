<?php
$languageConfig = $languages['supported'][$page['lang']] ?? $languages['supported'][$languages['default']];
?>
<header class="site-header">
    <div class="site-branding">
        <a class="logo" href="<?= $page['lang'] === 'sl' ? '/' : '/' . $page['lang'] . '/' ?>" aria-label="<?= htmlspecialchars($site['brand']['name']) ?>">
            <img src="<?= htmlspecialchars($site['brand']['logo']) ?>" alt="<?= htmlspecialchars($site['brand']['name']) ?> logo">
        </a>
        <div class="brand-text">
            <span class="brand-name"><?= htmlspecialchars($site['brand']['name']) ?></span>
            <span class="brand-tagline"><?= htmlspecialchars($site['brand']['tagline']) ?></span>
        </div>
    </div>
    <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
    <nav class="primary-nav" aria-label="Main navigation">
        <ul>
            <li><a href="#storitve"><?= $page['lang'] === 'en' ? 'Services' : ($page['lang'] === 'hr' ? 'Usluge' : ($page['lang'] === 'it' ? 'Servizi' : ($page['lang'] === 'de' ? 'Leistungen' : 'Storitve'))) ?></a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#pricing"><?= $page['lang'] === 'en' ? 'Pricing' : ($page['lang'] === 'hr' ? 'Cijene' : ($page['lang'] === 'it' ? 'Prezzi' : ($page['lang'] === 'de' ? 'Preise' : 'Cenik'))) ?></a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#kontakt"><?= $page['lang'] === 'en' ? 'Contact' : ($page['lang'] === 'hr' ? 'Kontakt' : ($page['lang'] === 'it' ? 'Contatto' : ($page['lang'] === 'de' ? 'Kontakt' : 'Kontakt'))) ?></a></li>
        </ul>
    </nav>
    <div class="header-actions">
        <a class="phone" href="<?= htmlspecialchars(formatPhoneLink($site['contacts']['phone'])) ?>">📞 <?= htmlspecialchars($site['contacts']['phone']) ?></a>
        <div class="cta-group">
            <?= renderCTA($languageConfig) ?>
        </div>
        <div class="language-switcher" aria-label="Language switcher">
            <button class="language-toggle" aria-haspopup="listbox">🌐 <?= strtoupper($page['lang']) ?></button>
            <ul class="language-menu" role="listbox">
<?php foreach ($languages['supported'] as $code => $language): ?>
                <li role="option" <?= $code === $page['lang'] ? 'aria-selected="true"' : '' ?>>
                    <a href="<?= $code === 'sl' ? '/' : '/' . $code . '/' ?>" hreflang="<?= htmlspecialchars($language['locale']) ?>">
                        <?= htmlspecialchars($language['label']) ?>
                    </a>
                </li>
<?php endforeach; ?>
            </ul>
        </div>
    </div>
</header>
