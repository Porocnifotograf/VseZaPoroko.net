<?php if (!empty($page['breadcrumbs'])): ?>
<nav class="breadcrumbs" aria-label="Breadcrumb">
    <ol>
<?php foreach ($page['breadcrumbs'] as $breadcrumb): ?>
        <li><a href="<?= htmlspecialchars($breadcrumb['url']) ?>"><?= htmlspecialchars($breadcrumb['name']) ?></a></li>
<?php endforeach; ?>
    </ol>
</nav>
<?php endif; ?>
