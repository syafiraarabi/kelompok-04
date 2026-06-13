<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php";

include "config.php";

$name     = mysqli_real_escape_string($conn, $_POST['name']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$status   = mysqli_real_escape_string($conn, $_POST['status']);

if (!isset($_FILES['image']) || $_FILES['image']['error'] !== 0) {
    echo "error: gagal upload gambar";
    exit;
}

$imageName = time() . "_" . basename($_FILES['image']['name']);
$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$moved = move_uploaded_file(
    $_FILES['image']['tmp_name'],
    $uploadDir . $imageName
);

if (!$moved) {
    echo "error: gagal menyimpan file";
    exit;
}

$query = mysqli_query(
    $conn,
    "INSERT INTO projects (name, location, status, image)
     VALUES ('$name', '$location', '$status', '$imageName')"
);

if ($query) {
    echo "success";
} else {
    echo "error: " . mysqli_error($conn);
}

?>