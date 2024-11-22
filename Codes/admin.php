<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Bootstrap_CSS/css/style_admin.css">
</head>

<body>

    
        <div class="sidebar">
        <h2>Starry's Admin</h2>
        <ul>
            <li><a href="admin.php">Dashboard</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="service_submit.php">Service Booking</a></li>
            <li><a href="form_submit.php">Room Booking</a></li>
            <li><a href="add_room.php">Add Room</a></li>
            <li><a href="add_service.php">Add Service</a></li>
            <li><a href="adminLogin.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            <h3>Starry Suite's Management Dashboard</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard-card">
                        <div class="card-title">Total Bookings</div>
                        <div class="card-body">12</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-card">
                        <div class="card-title">Total Revenue</div>
                        <div class="card-body">N500,500</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-card">
                        <div class="card-title">Pending Bookings</div>
                        <div class="card-body">2</div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <h4>Recent Bookings</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Room Type</th>
                            <th>Check-In Date</th>
                            <th>Check-Out Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Mike</td>
                            <td>Regular</td>
                            <td>2024-12-01</td>
                            <td>2024-12-07</td>
                            <td><span class="badge bg-success">Confirmed</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Grace Smith</td>
                            <td>Executive</td>
                            <td>2024-12-05</td>
                            <td>2024-12-10</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sam Larry</td>
                            <td>Presidential</td>
                            <td>2024-12-10</td>
                            <td>2024-12-15</td>
                            <td><span class="badge bg-danger">Cancelled</span></td>
                        </tr>
                    </tbody>
                </table>
                <a href="" class="btn btn-primary">View All Bookings </a>
            </div>
            <div class="table-responsive">
                <h4>Customer Details</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Room Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Don</td>
                            <td>johndon@example.com</td>
                            <td>(555) 123-4567</td>
                            <td>Deluxe</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>janesmith@example.com</td>
                            <td>(555) 234-5678</td>
                            <td>Standard</td>
                        </tr>
                    </tbody>
                </table>
                <a href="" class="btn btn-primary">View Customers Details</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>