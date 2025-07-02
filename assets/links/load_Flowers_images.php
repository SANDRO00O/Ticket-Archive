<?php
$folder = '/assets/images/Flowers';
$path = $_SERVER['DOCUMENT_ROOT'] . '/' . $folder;
$files = glob($path . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

$images = [];
foreach ($files as $file) {
    $filename = basename($file);
    $images[] = $folder . $filename;
}

// إزالة التكرار
$images = array_unique($images);

header('Content-Type: application/json');
echo json_encode(array_values($images)); // reset indexes
?>