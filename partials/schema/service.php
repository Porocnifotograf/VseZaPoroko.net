<?php if (!empty($service)): ?>
<script type="application/ld+json">
<?= schemaService($service, $site) ?>
</script>
<?php endif; ?>
