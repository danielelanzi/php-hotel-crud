<?php
include_once __DIR__ . '/../env.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $basePath ?>dist/app.css">
  <title>Document</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
      <div class="navbar-brand">Hotel Booleana</div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="<?php echo $basePath ?>">Tutte le stanze</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo $basePath ?>create/create.php">Inserisci una stanza</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="wrapper mt-5">