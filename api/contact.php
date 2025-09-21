<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$payload = json_decode(file_get_contents('php://input'), true) ?? $_POST;
$name = trim($payload['name'] ?? '');
$email = trim($payload['email'] ?? '');
$message = trim($payload['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(422);
    echo json_encode(['error' => 'All fields are required']);
    exit;
}

$response = [
    'status' => 'success',
    'message' => 'Hvala za sporočilo! Odgovorimo v 24 urah.',
    'data' => [
        'name' => $name,
        'email' => $email,
    ],
];

echo json_encode($response);
