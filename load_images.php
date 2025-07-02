<?php
$folder = 'assets/images/tickets/';
$path = $_SERVER['DOCUMENT_ROOT'] . '/' . $folder;
$files = glob($path . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

$images = [];
foreach ($files as $file) {
    $filename = basename($file);
    $images[] = $folder . $filename;
}

header('Content-Type: application/json');
echo json_encode($images);