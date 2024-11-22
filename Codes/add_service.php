<?php
require 'config.php';
    
if(isset($_POST['submit'])) {
    
    $servicename = $_POST['Service_Name'];
    $description = $_POST['Description'];
    $cost = $_POST['Cost'];
    $image = $_POST['Image'];

    if (empty($servicename) || empty($description) || empty($cost) || empty($image)) {
        header('Location: form.php');
        exit();
    }
        $sql = "INSERT INTO `service`(`Service_Name`, `Description`, `Cost`, `Image`) VALUES (?,?,?,?)";
    
        $stmt = $pdo->prepare($sql);

        $success = $stmt->execute([$servicename,$description,$cost,$image]);

        if ($success) {
            echo 'Added Successful, ' . '<br>' . '<a href="admin.php">back</a>';
            exit();
        }
        else{
            header('Location: add_service.php');
            exit();
        }
     
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../Bootstrap_CSS/bootstrap-5.3.1-dist/css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <form action="" id='myform' method="POST">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" id='Service_Name' name='Service_Name' class='form-control' placeholder='Service Name'>
                </div>
                <div class="col-md-6">
                    <input type="text" id='Description' name='Description' class='form-control' placeholder='Description'>
                </div>
            </div><br> 
            <div class="row">
                <div class="col-md-6">
                    <input type="tel" id='Cost' name='Cost' class='form-control' placeholder='Cost'>
                </div>
                <div class="col-md-6">
                    <input type="text" id='Image' name='Image' class='form-control' placeholder='Image'>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <button type="submit" name='submit' class='btn btn-success'>Send</button>
                </div>
            </div>
            <div class="col-md-6" style="display: flex; justify-content: right;">
                <a href="admin.php">Back</a>
            </div>
        </form>
    </div>
</body>
</html>