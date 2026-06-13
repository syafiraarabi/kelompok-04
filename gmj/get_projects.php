<?php

include "config.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM projects ORDER BY id DESC"
);

if (!$result) {
    http_response_code(500);
    echo json_encode(["error" => mysqli_error($conn)]);
    exit;
}

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

header("Content-Type: application/json");
echo json_encode($data);

?>