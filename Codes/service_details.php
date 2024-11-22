<?php
  require_once 'config.php';

  require 'navbar.php';

  if($_SERVER['REQUEST_METHOD'] =='GET') {
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM `service` WHERE id= ?";
    $stmt = $pdo -> prepare ($sql);
    $stmt -> execute ([$id]);
    $results = $stmt-> Fetch(PDO::FETCH_ASSOC);
}
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Bootstrap_CSS/bootstrap-5.3.1-dist/css/bootstrap.css">
    <script src="../Bootstrap_CSS/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
 </head>
 <body>
 <div class="container mt-5" style="display: flex; justify-content: center;">
        <div class="row">
            <div class="card" style="width: 38rem;">
            <img src="../Image/<?php echo $results['Image'] ?>" class="card-img-top" alt="photo">
            <div class="card-body">
                <p class="card-text"><?php echo $results['id'] ?></p>
                <p class="card-text"><?php echo $results['Description'] ?></p>
                <p class="card-text"><?php echo 'N' . $results['Cost'] ?></p>
                <a href="service_submit.php" class = 'btn btn-success'>Book Now</a>
                <a href="rooms.php" class = 'btn btn-dark'>back</a>
            </div>
        </div>
    </div>
</div>
 </body>
 </html>