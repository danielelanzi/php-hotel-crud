<?php
  include_once __DIR__ . '/../env.php';
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';

if (empty($_POST['id'])) {
  die('Id non inserito');
}
if (empty($_POST['beds'])) {
  die('Non hai inserito il numero di letti');
}
if (empty($_POST['floor'])) {
  die('Non hai inserito il piano');
}
if (empty($_POST['room_number'])) {
  die('Non hai inserito il numero di stanza');
}

$roomId = $_POST['id'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNumber = $_POST['room_number'];

foreach ($_POST as $key => $value) {
  if (intval($value) == 0) {
    die("$key non è un numero");
  }
}

  // controllo dei dati inseriti
  foreach ($_POST as $key => $value) {
    if (intval($value) == 0) {
      die("$key non è un numero");
   }
  }


  // controllo id
  // $sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";
  // $result = $conn->query($sql);
  // if ($result && $result->num_rows > 0) {
  //   $row = $result->fetch_assoc();
  // } else {
  //   die('NO ID');
  // }
  $result = getById($conn, 'stanze', $roomId);
  
  if(count($result) > 0) {
    // id esistente viene aggiornato
    // $sql = "UPDATE `stanze` SET `room_number` = $roomNumber , `beds`= $beds , `floor` = $floor WHERE `id` = $roomId ";
    $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW() WHERE id = ?";

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
