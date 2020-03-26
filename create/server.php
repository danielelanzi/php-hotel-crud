<?php
include_once __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';

if (empty($_POST['beds'])) {
  die('Non hai inserito il numero di letti');
}
if (empty($_POST['floor'])) {
  die('Non hai inserito il piano');
}
if (empty($_POST['room_number'])) {
  die('Non hai inserito il numero di stanza');
}

$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNumber = $_POST['room_number'];

// INSERT INTO table_name (column1, column2, column3, ...)
// VALUES (value1, value2, value3, ...);

$sql = "INSERT INTO `stanze` (`beds`, `floor`, `room_number`, `created_at`, `updated_at`) VALUES (?,?,?, NOW(), NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $beds, $floor, $roomNumber);
$stmt->execute();

if (isset($stmt->insert_id)) {
  header("Location: $basePath/show/show.php?id=$stmt->insert_id");
} else {
  echo 'KO';
}

$conn->close();
