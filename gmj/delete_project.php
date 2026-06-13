<?php

include "config.php";

$id = intval($_POST['id']);

if ($id <= 0) {
    echo "error: id tidak valid";
    exit;
}

$result = mysqli_query($conn, "SELECT image FROM projects WHERE id = $id");
$row    = mysqli_fetch_assoc($result);

if ($row && file_exists("uploads/" . $row['image'])) {
    unlink("uploads/" . $row['image']);
}

$query = mysqli_query($conn, "DELETE FROM projects WHERE id = $id");

if ($query) {
    echo "success";
} else {
    echo "error: " . mysqli_error($conn);
}

?>