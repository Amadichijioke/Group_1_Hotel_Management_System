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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Search</title>
    <link rel="stylesheet" href="../Bootstrap_CSS/bootstrap-5.3.1-dist/css/bootstrap.css">
</head>
<body>
<div class="container mt-5">
    <form action="" method="GET">
        <div class="row">
            <div class = 'col-md-2'>
                <a href="index.php" class = 'btn btn-dark'>Back</a>
            </div>
            <div class = 'col-md-8'>
                <input type="text" name="query" placeholder="Search Rooms..." required class = 'form-control'>
            </div>
            <div class = 'col-md-2'>
                <button type="submit" class = 'btn btn-outline-success'>Search</button>
            </div>
        </div>
    </form>

    <?php if (isset($_GET['query'])): ?>
        <?php if (!empty($results)): ?>
            <?php foreach ($results as $result): ?>
                <div>
                    <a href="index.php">back</a>
                    <h2><?php echo htmlentities($result['Room_Name']); ?></h2>
                    <p><?php echo htmlentities($result['Description']); ?></p>
                    <?php if (!empty($result['Image'])): ?>
                        <img src="../Image/<?php echo htmlentities($result['Image']); ?>" alt="<?php echo htmlentities($result['Room_Name']); ?>" style="max-width:300px;">
                    <?php else: ?>
                        <p>No image available</p>
                    <?php endif; ?>
                </div>
                <hr>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No results found for: <?php echo htmlentities($_GET['query']); ?></p>
        <?php endif; ?>
    <?php endif; ?>
</div>
</body>
</html>
