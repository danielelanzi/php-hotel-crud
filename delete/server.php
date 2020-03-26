<?php
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';


  if (empty($_POST['id'])) {
    die('NO ID');
  }
  $roomId = $_POST['id'];

  // controllo id
  // $sql = "SELECT FROM `stanze` WHERE `id` = $roomId";
  // $result = $conn->query($sql);
  $result = getById($conn, 'stanze', $roomId);
  // if ($result && $result->num_rows == 0) {
  //   die('NO ID');
  // }
  if (!$result) {
    die('NO ID');
  }

  // id esistente viene eliminato
  $sql = "DELETE FROM `stanze` WHERE `id` = $roomId";
  $resultDelete = $conn->query($sql);
  if ($resultDelete = true) {
    header("Location: $basePath?roomNumber=$roomId");
  } else {
    echo "KO";
  }
  $conn->close();
 ?>
