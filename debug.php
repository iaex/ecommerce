<?php
require_once __DIR__ . "/app/bootstrap.php";

$sql = "SELECT * FROM products";
$result = $mysqli->query($sql);

if (!$result) {
    die("SQL ERROR: " . $mysqli->error);
}

echo "Rows found: " . $result->num_rows . "<br><br>";

while ($row = $result->fetch_assoc()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
