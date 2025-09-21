<?php
declare(strict_types=1);

require __DIR__ . '/helpers.php';
require __DIR__ . '/config/schema-templates.php';

$site = loadSite();
$services = loadServices();
$languages = loadLanguages();
