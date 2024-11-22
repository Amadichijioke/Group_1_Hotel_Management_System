<?php
require 'config.php';
    
if(isset($_POST['submit'])) {
    
    $roomname = $_POST['Room_Name'];
    $roomtype = $_POST['Room_Type'];
    $description = $_POST['Description'];
    $price = $_POST['Price_Per_Night'];
    $image = $_POST['Image'];
    $Availability = $_POST['Availability_Status'];

    if (empty($roomname) || empty($roomtype) || empty($description) || empty($price) || empty($image) || empty($Availability)) {
        header('Location: form.php');
        exit();
    }
        $sql = "INSERT INTO `rooms`(`Room_Name`, `Room_Type`, `Description`, `Price_Per_Night`, `Image`, `Availability_Status`, `Created`) VALUES (?,?,?,?,?,?, NOW())";
    
        $stmt = $pdo->prepare($sql);

        $success = $stmt->execute([$roomname,$roomtype,$description,$price,$image,$Availability]);

        if ($success) {
            echo 'Added Successful, ' . '<br>' . '<a href="admin.php">back</a>';
            exit();
        }
        else{
            header('Location: add_room.php');
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
                    <input type="text" id='Room_Name' name='Room_Name' class='form-control' placeholder='Room Name'>
                </div>
                <div class="col-md-6">
                    <input type="text" id='lastname' name='Room_Type' class='form-control' placeholder='Room Type'>
                </div>
            </div><br> 
            <div class="row">
                <div class="col-md-6">
                    <input type="text" id='Description' name='Description' class='form-control' placeholder='Description'>
                </div>
                <div class="col-md-6">
                    <input type="number" id='Price_Per_Night' name='Price_Per_Night' class='form-control' placeholder='Price'>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" id='Image' name='Image' class='form-control' placeholder='Image'>
                </div>
                <div class="col-md-6">
                    <input type="text" id='Availability_Status' name='Availability_Status' class='form-control' placeholder='Availability'>
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