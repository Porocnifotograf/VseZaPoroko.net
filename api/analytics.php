<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$metrics = [
    'pageSpeedScore' => 98,
    'coreWebVitals' => [
        'lcp' => '1.7s',
        'fid' => '10ms',
        'cls' => '0.04'
    ],
    'conversionRate' => 0.042,
    'leadSources' => [
        'google' => 54,
        'social' => 23,
        'direct' => 18,
        'referral' => 5
    ]
];

echo json_encode($metrics);
