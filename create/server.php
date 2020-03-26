<?php
  include_once __DIR__ . '/../env.php';
  include __DIR__ . '/../database.php';

  if (empty($_POST['room_number'])) {
    die('NO NUMBER');
  }
  if (empty($_POST['beds'])) {
    die('NO BEDS');
  }
  if (empty($_POST['floor'])) {
    die('NO FLOOR');
  }

  $roomNumber = $_POST['room_number'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];


  // id esistente viene creato
  // $sql = "UPDATE `stanze` SET `room_number` = $roomNumber , `beds`= $beds , `floor` = $floor WHERE `id` = $roomId ";
  $sql = "INSERT INTO `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ?, `created_at` = NOW() `update_at` = NOW()";

  // $sql = "INSERT INTO `stanze` SET (`room_number`, `beds`, `floor`, `created_at`, `update_at`) = VALUES(?, ?, ?, NOW(), NOW())";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iii", $roomNumber, $beds, $floor);
  $stmt->execute();
  // var_dump($stmt); die();

  // $result = $conn->query($sql);

  // if ($result = true) {
  //   header("Location: $basePath/show/show.php?id=$roomId");
  // }
  if (isset($stmt->insert_id)) {
    header("Location: $basePath/show/show.php?id=$stmt->insert_id");
  } else {
    echo "KO";
  }
  $conn->close();

 ?>
