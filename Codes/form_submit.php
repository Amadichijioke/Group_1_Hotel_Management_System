<?php
require 'config.php';

if (isset($_POST['button'])) {
    

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $roomNumber = $_POST['room_number'];
    $roomType = $_POST['room_type'];
    $phoneNumber = $_POST['phone_number'];
    $duration = $_POST['duration'];
    $email = $_POST['email'];

    if (empty($firstName) || empty($lastName) || empty($roomNumber) || empty($roomType) || empty($phoneNumber) || empty($duration) || empty($email)) {
        header('Location: form_submit.php');
        exit();
    }
    $sql = "INSERT INTO `form_submit`(`first_name`, `last_name`, `room_number`, `room_type`, `phone_number`, `duration`, `email`, `created`) VALUES (?,?,?,?,?,?,?, NOW())";

    $stmt = $pdo->prepare($sql);

    $result = $stmt->execute([$firstName,$lastName,$roomNumber,$roomType,$phoneNumber,$duration,$email]);


    if ($result) {
        echo 'Submission successful';
    } else {
        echo 'Error: ' . implode(", ", $stmt->errorInfo());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <link rel="stylesheet" href="../Bootstrap_CSS/bootstrap-5.3.1-dist/css/bootstrap.css">
    <script src="../Bootstrap_CSS/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container mt-5">
        <form action="https://formspree.io/f/xjkvrvev" method="POST">
        
            <h2 class="booking alert alert-danger" style="display: flex; justify-content: center; padding: 2px;">ROOM BOOKING</h2>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <input type="number" name="room_number" placeholder="Room Number" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <select name="room_type" id="room_type" class="form-control" onchange="updateCost()" required>
                        <option value="" data-cost="0">Select Room Type</option>
                        <option value="Regular" data-cost="100">Regular - $100/day</option>
                        <option value="Exclusive" data-cost="150">Exclusive - $150/day</option>
                        <option value="Presidential Suite" data-cost="250">Presidential Suite - $250/day</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <input type="number" name="phone_number" placeholder="Phone No." class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="tel" name="duration" id="duration" placeholder="Duration (days)" class="form-control" oninput="updateCost()" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="number" id="total_cost" placeholder="Total Cost ($)" class="form-control" readonly>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" name="button" class="btn btn-success">Submit</button>
                </div>
                <div class="col-md-6" style="display: flex; justify-content: right;">
                    <a href="rooms.php">Back</a>
                </div>
            </div>
        </form>
    </div>

    <script>
        function updateCost() {
            const roomType = document.getElementById('room_type');
            const selectedOption = roomType.options[roomType.selectedIndex];
            const costPerDay = parseFloat(selectedOption.getAttribute('data-cost'));

            const duration = parseInt(document.getElementById('duration').value) || 0;

            const totalCost = costPerDay * duration;

            document.getElementById('total_cost').value = totalCost ? `$${totalCost.toFixed(2)}` : '';
        }
    </script>
</body>
</html>
