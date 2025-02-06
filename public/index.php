<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Simple routing
$request = $_SERVER['REQUEST_URI'];

// Basic routing logic
switch ($request) {
    case '/admin/profile':
        $controller = new App\Controllers\AdminController();
        $controller->profile();
        break;
    // Add more routes as needed
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}