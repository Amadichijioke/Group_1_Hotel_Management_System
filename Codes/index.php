<?php require 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Home</title>
    <link rel="stylesheet" href="../Bootstrap_CSS/css/style_index.css">
    <script src="../Bootstrap_CSS/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
</head>
<body>
<div class="container mt-5 mb-1">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner row">
        <div class="carousel-item active">
        <img src="../Image/HOTEL.jpg" class="d-block w-100" alt="...">
        <div class="card-img-overlay">
        </div>
        </div>
        <div class="carousel-item">
        <img src="../Image/Guest_house.jpg" class="d-block w-100" alt="...">
        <div class="card-img-overlay">
        </div>
        </div>
        <div class="carousel-item">
        <img src="../Image/wedding-hall-with-view-lake.jpg" class="d-block w-100" alt="...">
        <div class="card-img-overlay">
        </div>
        </div>
    </div>
    </div><br>

        <div class="row" style = 'display: flex; justify-content: center;'>
            <div class = 'col-md-3'>
            <a href="aboutus.php" class="btn btn-dark ">About Us</a>
            </div>
            <div class = 'col-md-3'>
            <a href="testimonial.php" class="btn btn-dark ">Customers Testimony</a>
            </div>
            <div class = 'col-md-3' style = 'display: flex; justify-content: right;'>
            <a href="contactus.php" class="btn btn-dark ">Contact Us</a>
            </div>
        </div>

    <div class="hero">
    </div>

    <section id="rooms" class="py-5">
        <div class="container">
            <h1 class="text-center mb-5"><strong>GALLARY</strong></h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="featured-room">
                        <img src="../Image/presidential2.jpg" alt="Deluxe Room" class="img-fluid">
                        <h4 class="mt-2">Room</h4>
                        <p>Enjoy a luxurious stay with stunning views.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-room">
                        <img src="../Image/hotel_pool2.jpg" alt="Suite" class="img-fluid">
                        <h4 class="mt-2">Pool</h4>
                        <p>Spacious and elegant rooms for your comfort.</p>
                    </div>
                    <div style = 'display: flex; justify-content: center;'>
                    <a href="gallary.php" class="btn btn-dark btn-lg">See More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-room">
                        <img src="../Image/Spa_centre.jpg" alt="Standard Room" class="img-fluid">
                        <h4 class="mt-2">Spa</h4>
                        <p>Comfort and affordability combined.</p>
                    </div>
                </div>
    </section>
    
    <section id="amenities" class="bg-light" style = 'border-top-left-radius:10px; border-top-right-radius:10px ;'>
        <div class="container" style = 'color: black';>
            <h2 class="text-center mb-5"><strong>Our Amenities</strong></h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <i class="bi bi-wifi" style="font-size: 2rem;"></i>
                    <p>Free Wi-Fi</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-cup-hot" style="font-size: 2rem;"></i>
                    <p>Complimentary Breakfast</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-geo-alt" style="font-size: 2rem;"></i>
                    <p>Gym</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-swim" style="font-size: 2rem;"></i>
                    <p>Swimming Pool</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="py-4 bg-dark text-white text-center" style = 'border-bottom-left-radius:10px; border-bottom-right-radius:10px ;'>
        <p>&copy; <?php echo date("Y"); ?> Starry Suite. All rights reserved.</p>
        <p>Contact us: <a href="mailto:amadichijioke5969@gmail.com" class="text-white">starrysuite24@gmail.com</a></p>
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class= "fab fa-twitter"></i></a>
        <a href=""><i class= "fab fa-instagram"></i></a>

    </footer>
    
</div>
</body>
</html>