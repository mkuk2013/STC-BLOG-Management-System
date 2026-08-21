<?php

$database = new mysqli('localhost', 'root', '', 'stc_blog');

if ($database->connect_errno) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
    exit;
}

$database->set_charset('utf8mb4');
