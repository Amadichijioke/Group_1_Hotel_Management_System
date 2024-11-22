<?php
require 'config.php';

require 'navbar.php';

$sql = $sql = "SELECT * FROM `rooms` WHERE 1;";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .card-text {
            width: 250px;
            height: 70px;
            border: 5px;
        }
    </style>
    <link rel="stylesheet" href="../Bootstrap_CSS/bootstrap-5.3.1-dist/css/bootstrap.css">
    <script src="../Bootstrap_CSS/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container mt-5" style = "display: flex; justify-content: center;">
        <div class="card mb-3" style="max-width: 940px;">
            <div class="row g-0">
                <?php foreach($results as $result): ?>
                <div class="card-container col-md-4" >
            <img  src="../Image/<?php echo $result['Image'] ?>" class="card-img-top bordered" style = "max-height: 200px;" alt="photo">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <p class="card-text"><?php echo 'Room Name:' . ' ' . $result['Room_Name'] ?></p>
                <p class="card-text"><?php echo 'Room Type:' . ' ' . $result['Room_Type'] ?></p>
                <a href="room_details.php?id=<?php echo $result['id']; ?>" class = 'btn btn-primary'>View</a>
                <?php '<br>' ?>
            </div>
        </div>
        <?php endforeach; ?>
        </div>
        </div>
    </div>
</div>
</body>
</html>