<?php

include "config.php";

$id   = intval($_POST['id']);
$name = mysqli_real_escape_string($conn, $_POST['name']);

if ($id <= 0 || empty($name)) {
    echo "error: data tidak valid";
    exit;
}

$query = mysqli_query(
    $conn,
    "UPDATE projects SET name = '$name' WHERE id = $id"
);

if ($query) {
    echo "success";
} else {
    echo "error: " . mysqli_error($conn);
}

?>