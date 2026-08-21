<?php

include 'db.php';

$blogName = $_POST['blogName'];
$category = $_POST['category'];
$description = $_POST['description'];

if ($blogName === '' || $category === '' || $description === '') {
    echo 'error';
} else {
    $query = "INSERT INTO blogs (title, category, description)
              VALUES ('$blogName', '$category', '$description')";

    if (!$database->query($query)) {
        echo 'error';
    } else {
        echo 'success';
    }
}

$database->close();
