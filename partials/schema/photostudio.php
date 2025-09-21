<?php if (!empty($site)): ?>
<script type="application/ld+json">
<?= schemaPhotostudio($site, $page['lang'] ?? 'sl') ?>
</script>
<?php endif; ?>
