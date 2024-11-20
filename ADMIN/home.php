<?php include 'config.php'?>


<?php include 'includes/header.php'; ?>


<body class="homebody">


<div class="banner">
        <video src="./files/bgvid.mp4" type="video/mp4" autoplay muted loop></video>
    
        <div class="content" id="home">
        <div class="title">
            <h1>TOUR AND TRAVELS</h1>
            <p>Plan your trip with us and travel around the world with the most affordable packages!</p>
            <?php if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="button">Logout</a>
                <?php } else { ?>
                    <a href="login.php" class="button">Login</a>
                <?php } ?>
        </div>
    </div>
</div>


<section class="container">
    <div class="text">
        <h2>We have the best services available for you!</h2>
    </div>
    <div class="rowitems">
        <div class="container-box">
        <div class="container-image">
           <img src="./files/1a.jpg" alt="Flight Services">
        </div>
            <h4>Flight Services</h4>
            <p>Arrival and Departure</p>
        </div>
    
        <div class="container-box">
        <div class="container-image">
           <img src="./files/2a.jpg" alt="Food Services">
        </div>
            <h4>Food Services</h4>
            <p>Catering</p>
        </div>

        <div class="container-box">
        <div class="container-image">
            <img src="./files/3a.jpg" alt="Travel Services">
        </div>
            <h4>Travel Services</h4>
            <p>Pick-up/drop</p>
        </div>

        <div class="container-box">
        <div class="container-image">
            <img src="./files/4a.jpg" alt="Hotel Services">
        </div>
            <h4>Hotel Services</h4>
            <p>Check-in/out</p>
        </div>

    </div>

</section>


<section class="newsletter">
    <div class="newstext">
        <h2>Newsletter</h2>
        <p>
        "Discover your next adventure with exclusive travel tips, <br>destination highlights, and special deals, straight to your inbox!"</p>
    </div>


</section>
</body>

<?php include 'includes/footer.php'; ?>
