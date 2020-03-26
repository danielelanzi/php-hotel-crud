<?php

function getAll($conn, $table)
{
  $sql = "SELECT * FROM `$table`";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $results = [];
    while ($row = $result->fetch_assoc()) {
      $results[] = $row;
      // echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
    }
  } elseif ($result) {
    // echo "0 results";
    $results = [];
  } else {
    // echo "query error";
    $results = false;
  }
  // $conn->close();
  return $results;
}

function getById($conn, $table, $id)
{
  $sql = "SELECT * FROM `$table` WHERE `id` = '$id'";
  $resultQuery = $conn->query($sql);

  if ($resultQuery && $resultQuery->num_rows > 0) {
    $result = $resultQuery->fetch_assoc();
  } elseif ($result) {
    // echo "0 results";
    $result = [];
  } else {
    // echo "query error";
    $result = false;
  }
  // $conn->close();
  return $result;
}
