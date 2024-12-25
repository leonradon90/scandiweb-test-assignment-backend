<?php
// Set CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Include Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// Conditionally load Dotenv in non-production environments
if (getenv('APP_ENV') !== 'production') {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

// Your application logic starts here
// For example, setting up GraphQL schema, handling requests, etc.
?>
