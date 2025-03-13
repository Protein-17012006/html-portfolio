<?php
require 'vendor/autoload.php';
require 'config.php';

use \Firebase\JWT\JWT;

// Sample user for demo (replace with DB check in real apps)
$valid_username = "admin";
$valid_password = "admin";

header('Content-Type: application/json');

// ✅ Fetch JSON input properly
$input = json_decode(file_get_contents("php://input"), true);
$username = $input['username'] ?? '';
$password = $input['password'] ?? '';

// ✅ Validate user
if ($username === $valid_username && $password === $valid_password) {
    $payload = [
        "iss" => "http://localhost",
        "aud" => "http://localhost",
        "iat" => time(),
        "exp" => time() + (60 * 60), // 1 hour expiry
        "data" => [
            "username" => $username
        ]
    ];

    $jwt = JWT::encode($payload, $SECRET_KEY, 'HS256');

    echo json_encode([
        "status" => "success",
        "token" => $jwt
    ]);
} else {
    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid credentials"
    ]);
}
?>
