<?php if (!empty($relatedQuestions)): ?>
<script type="application/ld+json">
<?= schemaPeopleAlsoAsk($relatedQuestions) ?>
</script>
<?php endif; ?>
