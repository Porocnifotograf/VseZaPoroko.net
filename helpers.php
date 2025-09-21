<?php
declare(strict_types=1);

function loadSite(): array
{
    static $site;
    if ($site === null) {
        $site = require __DIR__ . '/config/site.php';
    }

    return $site;
}

function loadServices(): array
{
    static $services;
    if ($services === null) {
        $services = require __DIR__ . '/config/services.php';
    }

    return $services;
}

function loadLanguages(): array
{
    static $languages;
    if ($languages === null) {
        $languages = require __DIR__ . '/config/languages.php';
    }

    return $languages;
}

function loadFaq(string $lang): array
{
    $file = __DIR__ . "/data/faq/{$lang}/main.json";
    if (!file_exists($file)) {
        return ['categories' => []];
    }

    $content = file_get_contents($file);
    $data = json_decode((string) $content, true);

    return $data['categories'] ?? [];
}

function loadPricing(): array
{
    $file = __DIR__ . '/data/pricing.json';
    $seasonal = json_decode((string) file_get_contents(__DIR__ . '/data/seasonal-multipliers.json'), true);
    $pricing = json_decode((string) file_get_contents($file), true);

    return [
        'base' => $pricing['base'] ?? [],
        'packages' => $pricing['packages'] ?? [],
        'seasonalMultipliers' => $seasonal ?? [],
    ];
}

function getLanguageAlternateUrls(string $currentPath): array
{
    $site = loadSite();
    $languages = loadLanguages();
    $alternates = [];
    foreach ($languages['supported'] as $code => $language) {
        $alternates[$code] = rtrim($site['brand']['domain'], '/') . $language['urlPrefix'] . ltrim($currentPath, '/');
    }

    return $alternates;
}

function formatPhoneLink(string $phone): string
{
    $digits = preg_replace('/[^\d+]/', '', $phone);

    return 'tel:' . $digits;
}

function currentYear(): string
{
    return (string) date('Y');
}

function renderCTA(array $language): string
{
    $buttons = array_map(static function ($label) {
        return '<a class="cta" href="#kontakt">' . htmlspecialchars($label) . '</a>';
    }, $language['cta']);

    return implode('\n', $buttons);
}

function asset(string $path): string
{
    return '/assets/' . ltrim($path, '/');
}
