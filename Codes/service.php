<?php
session_start();
require 'config.php';

require 'navbar.php';


$sql = "SELECT * FROM `service`";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="../Bootstrap_CSS/bootstrap-5.3.1-dist/css/bootstrap.css">
    <script src="../Bootstrap_CSS/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container mt-5 mb-5" style = "display: flex; justify-content: center;">
        <div class="row">
            <?php foreach($services as $service): ?>
            <div class="col-md-3 col-sm-3">
                <div class="card" style="width: 28rem;">
                    <img src="../Image/<?php echo $service['Image'] ?>" class="card-img-top" style = "max-height: 5cm;" alt="photo">
                    <div class="card-body">
                    <p class="card-text"><?php echo $service['Service_Name'] ?></p>
                    <a href="service_details.php?id=<?php echo $service['id']; ?>" class = 'btn btn-dark'>View Details</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
</body>
</html>