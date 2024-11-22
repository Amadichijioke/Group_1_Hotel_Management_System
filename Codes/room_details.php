<?php
require 'config.php';

require 'navbar.php';


if($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET['id']; 

    $sql = $sql = "SELECT * FROM `rooms` WHERE id=?;";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([$id]);

    $results = $stmt->fetch();
}
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
    <div class="container mt-5" style = "display: flex; justify-content: center;">
        <div class="row" style = "height: 5rem;">
            <div class="card" style="width: 30rem;">
            <img src="../Image/<?php echo $results['Image'] ?>" class="card-img-top" alt="photo">
            <div class="card-body">
                <p class="card-text"><?php echo 'Room Name:' . ' ' . $results['Room_Name'] ?></p>
                <p class="card-text"><?php echo 'Room Type:' . ' ' . $results['Room_Type'] ?></p>
                <p class="card-text"><?php echo 'Description:' . $results['Description'] ?></p>
                <p class="card-text"><?php echo 'price:' . ' N' . $results['Price_Per_Night'] ?></p>
                <p class="card-text"><?php echo 'Available:' . ' ' . $results['Availability_Status'] ?></p>
                <a href="form_submit.php" class = 'btn btn-success'>Book Now</a>
                <a href="rooms.php" class = 'btn btn-dark'>back</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>