<?php
  include __DIR__ . '/database.php';
  include __DIR__ . '/functions.php';
  

  // $sql = "SELECT * FROM `stanze`";
  // $result = $conn->query($sql);

  // if ($result && $result->num_rows > 0) {
  //   $room = [];
  //   while($row = $result->fetch_assoc()) {
  //     $room[] = $row;
  //   // echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
  //   }
  // } elseif ($result) {
  //   echo "0 results";
  // } else {
  //   echo "query error";
  // }
  // $conn->close();

  $results = getAll($conn, 'stanze');
 ?>
