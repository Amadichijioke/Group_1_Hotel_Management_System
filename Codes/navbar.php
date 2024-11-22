<?php

require 'config.php';

    $results = [];
    if (isset($_GET['query'])) {
        $query = htmlspecialchars($_GET['query']); 
        $sql = "SELECT * FROM `rooms` WHERE Room_Name LIKE :query OR Description LIKE :query";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['query' => '%' . $query . '%']);
        $results = $stmt->fetchAll();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../Bootstrap_CSS/bootstrap-5.3.1-dist/css/bootstrap.css">
    <script src="../Bootstrap_CSS/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
<nav class=" cursor-pointer navbar navbar-expand-lg navbar-expand-sm navbar-light bg-body-tertiary fixed-top" style = 'background-color: brown; padding: 0px; cursor: pointer;'>
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="adminLogin.php"><strong>Admin</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="spinner.php"><strong>spinner</strong></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <a href="search_room.php" class="btn btn-outline-success" type="submit">Search Rooms</a>
        <a href="search_amenities.php" class="btn btn-outline-success" type="submit">Search Amenities</a>
      </form>
    </div>
  </div>
</nav>
</body>
</html>