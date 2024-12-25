<?php
// Set CORS headers
header("Access-Control-Allow-Origin: *"); // Ideally, set to your frontend's URL
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Include Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// Remove Dotenv loading in production since Render manages environment variables

// Your application logic starts here
// For example, setting up GraphQL schema, handling requests, etc.
?>
