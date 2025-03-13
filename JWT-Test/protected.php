<?php
require 'vendor/autoload.php';
require 'config.php';

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

header('Content-Type: application/json');

// Get Authorization header
$headers = apache_request_headers();
$authHeader = $headers['Authorization'] ?? '';

if ($authHeader) {
    list($jwt) = sscanf($authHeader, 'Bearer %s');

    if ($jwt) {
        try {
            $decoded = JWT::decode($jwt, new Key($SECRET_KEY, 'HS256'));

            // Access granted
            echo json_encode([
                "status" => "success",
                "message" => "Access granted",
                "data" => $decoded->data
            ]);
        } catch (Exception $e) {
            http_response_code(401);
            echo json_encode([
                "status" => "error",
                "message" => "Access denied. " . $e->getMessage()
            ]);
        }
    } else {
        http_response_code(400);
        echo json_encode([
            "status" => "error",
            "message" => "Token not provided correctly"
        ]);
    }
} else {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Authorization header not found"
    ]);
}
?>
