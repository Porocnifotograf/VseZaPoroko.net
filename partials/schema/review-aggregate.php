<?php if (!empty($reviews)): ?>
<script type="application/ld+json">
<?= schemaReviewAggregate($reviews) ?>
</script>
<?php endif; ?>
