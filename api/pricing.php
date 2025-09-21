<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

require __DIR__ . '/../helpers.php';

$pricing = loadPricing();

$season = $_GET['season'] ?? null;
if ($season && isset($pricing['seasonalMultipliers'][$season])) {
    $multiplier = (float) $pricing['seasonalMultipliers'][$season];
    foreach ($pricing['base'] as $key => $value) {
        $pricing['base'][$key] = round($value * $multiplier, 2);
    }
}

echo json_encode($pricing);
