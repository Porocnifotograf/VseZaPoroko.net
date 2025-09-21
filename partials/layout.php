<?php
?><!DOCTYPE html>
<html lang="<?= htmlspecialchars($languages['supported'][$page['lang']]['locale'] ?? 'sl-SI') ?>">
<?php include __DIR__ . '/head.php'; ?>
<body class="theme-light">
    <a class="skip-link" href="#content">Preskoči na vsebino</a>
    <?php include __DIR__ . '/header.php'; ?>
    <?php include __DIR__ . '/breadcrumbs.php'; ?>
    <main id="content" class="page-content">
        <?= $content ?? '' ?>
    </main>
    <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
