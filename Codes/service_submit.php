<?php
require 'config.php';

if (isset($_POST['button'])) {
    
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $serviceType = $_POST['service_type'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $duration = $_POST['duration'];

    if (empty($firstName) || empty($lastName) || empty($serviceType) || empty($email) || empty($phoneNumber) || empty($duration)) {
        header('Location: form_submit.php');
        exit();
    }
    $sql = "INSERT INTO `service_submit`(`first_name`, `last_name`, `service_type`, `email`, `phone_number`, `duration`, `created`) VALUES (?,?,?,?,?,?, NOW())";

    $stmt = $pdo->prepare($sql);

    $result = $stmt->execute([$firstName,$lastName,$serviceType,$email,$phoneNumber,$duration]);


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
    <title>Bookings</title>
    <link rel="stylesheet" href="../Bootstrap_CSS/bootstrap-5.3.1-dist/css/bootstrap.css">
    <script src="../Bootstrap_CSS/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container mt-5">
        <form action="https://formspree.io/f/xjkvrvev" method="POST">
        
            <h2 class="booking alert alert-danger" style="display: flex; justify-content: center; padding: 2px;">SERVICE BOOKING</h2>
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
                    <select name="service_type" id="service_type" class="form-control" onchange="updateCost()" required>
                        <option value="" data-cost="0">Select Service</option>
                        <option value="gym" data-cost="50">Gym - $50/day</option>
                        <option value="restaurant" data-cost="75">Restaurant - $75/day</option>
                        <option value="auditorium" data-cost="100">Auditorium - $100/day</option>
                        <option value="spa" data-cost="100">Spa - $100/day</option>
                        <option value="Pool" data-cost="100">Pool - $30/day</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
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
                    
                    <input type="text" id="total_cost" placeholder="Total Cost ($)" class="form-control" readonly>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" name="button" class="btn btn-success">Submit</button>
                </div>
                <div class="col-md-6" style="display: flex; justify-content: right;">
                    <a href="service.php">Back</a>
                </div>
            </div>
        </form>
    </div>

    <script>
        function updateCost() {
            const serviceType = document.getElementById('service_type');
            const selectedOption = serviceType.options[serviceType.selectedIndex];
            const costPerDay = parseFloat(selectedOption.getAttribute('data-cost'));

            const duration = parseInt(document.getElementById('duration').value) || 0;

            const totalCost = costPerDay * duration;

            document.getElementById('total_cost').value = totalCost ? `$${totalCost.toFixed(2)}` : '';
        }
    </script>
</body>
</html>
