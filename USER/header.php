<?php 
    include("config.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="scroaticon" type="icon" href="img/header-logo.webp">
        <title>
            index
        </title>
    
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Sacramento&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--css-->
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!--responsive-->
        <link rel="stylesheet" href="css/responsive.css">

    </head>

    <body>
        <!--header sec start-->

        <section class="header-main-sec">
                <div class="container-fluid">
                    <div class="header-inner-area">
                        <a href="#">
                            <div class="cart-area">
                                <hxml version="1.0" encoding="utf-8"?>
                                <svg width="35px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                    
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                    
                                    <g id="SVGRepo_iconCarrier"> <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g>
                                    
                                </svg>
                           </div> 
                        </a>
                       <a href="index.php">
                        <div class="header-img-area">
                            <img src="img/header-logo.webp" alt="hader-img">
                       </div> 
                       </a>
                       
                        <?php if (isset($_SESSION['user'])) { ?>
                <li  ><a href="login.php"><span class="footer-menu-btn"></span> Login</a></li>
            <?php } else { ?>
                <li><a href="logout.php"><span class="footer-menu-btn"></span> Logout</a></li>
                <?php }
                ?>
                               
                    </div>
                </div>
            </section>
            <section class="header-nav-sec">
                <div class="container">
                    <div class="header-nav-btn">
                        <div class="header-nav-btn-area">
                            <a href="index.php" class="header-nav-btn-inner-area">
                                T-shirt 
                            </a>
                        </div>
                        <div class="header-nav-btn-area">
                            <a href="joggers.php" class="header-nav-btn-inner-area">
                                Pants 
                            </a>
                        </div>
                        <div class="header-nav-btn-area">
                            <a href="accessories.php" class="header-nav-btn-inner-area">
                                Accessory
                            </a>
                        </div>
                        <div class="header-nav-btn-area">
                            <a href="Returns.php" class="header-nav-btn-inner-area">
                                Returns                      
                            </a>
                        </div>
                        <div class="header-nav-btn-area">
                            <a href="Shipping.php" class="header-nav-btn-inner-area">
                                Shipping 
                            </a>
                        </div>
                        <div class="header-nav-btn-area">
                            <a href="Terms.php" class="header-nav-btn-inner-area">
                                Terms  
                            </a>
                        </div>
                    </div>
                </div>
            </section>