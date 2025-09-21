<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$payload = json_decode(file_get_contents('php://input'), true) ?? [];
$service = $payload['service'] ?? null;
$date = $payload['date'] ?? null;

if (!$service || !$date) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing parameters']);
    exit;
}

$available = (bool) random_int(0, 1);

echo json_encode([
    'service' => $service,
    'date' => $date,
    'available' => $available,
    'message' => $available ? 'Termin je na voljo. Pišite nam za rezervacijo.' : 'Žal je termin zaseden, predlagamo alternative v istem tednu.'
]);
