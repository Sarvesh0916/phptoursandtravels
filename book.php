<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
    <link rel="stylesheet" href="styles/mainstyle.css">

</head>
<body>

<!-- header section -->
<section class="header">
    <a href="home.php" class="logo">Travel</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>


<div class="heading" style="background: url(images/11.jpg) no-repeat;">
    <h1>Book Now</h1>
</div>


<section class="booking">
    <h1 class="heading-title">Book your trip now</h1>

    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name: </span>
                <input type="text" placeholder="Your name" name="name">
            </div>
            <div class="inputBox">
                <span>Email: </span>
                <input type="email" placeholder="Your email" name="email">
            </div>
            <div class="inputBox">
                <span>Phone </span>
                <input type="text" placeholder="Your phone" name="phone">
            </div>
            <div class="inputBox">
                <span>Address: </span>
                <input type="text" placeholder="Your address" name="address">
            </div>
            <div class="inputBox">
                <span>Trip to: </span>
                <input type="text" placeholder="Trip location" name="location">
            </div>
            <div class="inputBox">
                <span>Number of persons: </span>
                <input type="number" placeholder="Number of persons" name="guests">
            </div>

            <div class="inputBox">
                <span>Date of Arrival </span>
                <input type="date"  name="arrivals">
            </div>

            <div class="inputBox">
                <span>Date of leaving </span>
                <input type="date"  name="leaving">
            </div>

        </div>

        <input type="submit" value="Submit" class="btn" name="send">




    </form>
</section>




<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
        <a href="index.php"><i class="fas fa-angle-right"></i> Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>

        </div>
        <div class="box">
        <h3>Others</h3>
        <a href="#"><i class="fas fa-angle-right"></i> Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
        <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i> Terms & conditions</a>
        </div>

        <div class="box">
        <h3>Contacts</h3>
        <a href="#"><i class="fas fa-phone"></i>+91 6386765823</a>
        <a href="#"><i class="fas fa-phone"></i>+91 8840268332</a>
        <a href="#"><i class="fas fa-envelope"></i>misshrasarvesh16@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Gorakhpur, Uttar Pradesh</a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook"> </i>Facebook</a>
            <a href="#"><i class="fab fa-twitter"> </i>Twitter</a>
            <a href="#"><i class="fab fa-instagram"> </i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"> </i>Linkedin</a>
        </div>
    </div>

    <div class="credit">
        by <span>Sarvesh</span>
    </div>
</section>
    


















<script  src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<script src="js/mainscript.js"></script>
</body>
</html>