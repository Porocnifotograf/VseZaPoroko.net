<?php if (!empty($site) && !empty($page)): ?>
<script type="application/ld+json">
<?= schemaWebsite($site, $page, $languages['supported']) ?>
</script>
<?php endif; ?>
