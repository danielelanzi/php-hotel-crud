<?php
  include_once __DIR__ . '/../env.php';
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';

  if (empty($_POST['id'])) {
    die('NO ID');
  }
  if (empty($_POST['room_number'])) {
    die('NO NUMBER');
  }
  if (empty($_POST['beds'])) {
    die('NO BEDS');
  }
  if (empty($_POST['floor'])) {
    die('NO FLOOR');
  }

  $roomId = $_POST['id'];
  $roomNumber = $_POST['room_number'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];

  // controllo dei dati inseriti
  foreach ($_POST as $key => $value) {
    if (intval($value) == 0) {
      die("$key non è un numero");
   }
  }


  // controllo id
  // $sql = "SELECT FROM `stanze` WHERE `id` = $roomId";
  // $result = $conn->query($sql);
  // if ($result && $result->num_rows > 0) {
  //   $row = $result->fetch_assoc();
  // } else {
  //   die('NO ID');
  // }
  $result = getById($conn, `stanze`, $roomId);
  if(count($result) > 0) {
    // id esistente viene aggiornato
    // $sql = "UPDATE `stanze` SET `room_number` = $roomNumber , `beds`= $beds , `floor` = $floor WHERE `id` = $roomId ";
    $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ?, `update_at` = NOW() WHERE `id` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiii", $roomNumber, $beds, $floor, $roomId);
    $stmt->execute();
    $conn->close();
    // var_dump($stmt); die();

    // $result = $conn->query($sql);

    // if ($result = true) {
    //   header("Location: $basePath/show/show.php?id=$roomId");
    // }
    if ($stmt->affected_rows > 0) {
      header("Location: $basePath/show/show.php?id=$roomId");
    } else {
      echo "KO";
    }
  } else {
    die('La stanza non esiste');
  }

 ?>
