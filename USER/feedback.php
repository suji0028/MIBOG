<!DOCTYPE html>
<html>
    <head>
        <title>
            Feedback
        </title>
    
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Sacramento&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!--css-->
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!--responsive-->
        <link rel="stylesheet" href="css/responsive.css">

    </head>
    <body>
        <section class="header-main-sec">
            <div class="container-fluid">
                <div class="header-inner-area">
                   <a href="index.html">
                    <div class="header-img-area">
                        <img src="img/header-logo.webp" alt="hader-img">
                   </div> 
                   </a>
                   <a href="login.html">
                    <button class="styled-button">
                        Login Now
                        <div class="inner-button">
                            <svg
                            id="Arrow"
                            viewBox="0 0 32 32"
                            xmlns="http://www.w3.org/2000/svg"
                            height="30px"
                            width="30px"
                            class="icon"
                            >
                            <defs>
                                <linearGradient y2="100%" x2="100%" y1="0%" x1="0%" id="iconGradient">
                                <stop style="stop-color:#FFFFFF;stop-opacity:1" offset="0%"></stop>
                                <stop style="stop-color:#AAAAAA;stop-opacity:1" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <path
                                fill="url(#iconGradient)"
                                d="M4 15a1 1 0 0 0 1 1h19.586l-4.292 4.292a1 1 0 0 0 1.414 1.414l6-6a.99.99 0 0 0 .292-.702V15c0-.13-.026-.26-.078-.382a.99.99 0 0 0-.216-.324l-6-6a1 1 0 0 0-1.414 1.414L24.586 14H5a1 1 0 0 0-1 1z"
                            ></path>
                            </svg>
                        </div>
                        </button>
                </a>
                </div>
            </div>
        </section>


        <section class="feed-back-main-sec">
            <div class="container-fuid">
               <h1>
                    Tell us what you think
               </h1>
                   <form id="feedback-form">
                      <div class="form-group">
                          <label for="name">Name:</label>
                              <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                           </div>
                            <div class="form-group">
                                <label for="feedback">Tell us what you think:</label>
                                <textarea id="feedback" name="feedback" rows="5" required></textarea>
                            </div>
                            <div class="rating">
                                <label for="rating">Rate your experience:</label>
                                <div class="stars">
                                    <input type="radio" id="star5" name="rating" value="5">
                                    <label for="star5">★</label>
                                    <input type="radio" id="star4" name="rating" value="4">
                                    <label for="star4">★</label>
                                    <input type="radio" id="star3" name="rating" value="3">
                                    <label for="star3">★</label>
                                    <input type="radio" id="star2" name="rating" value="2">
                                    <label for="star2">★</label>
                                    <input type="radio" id="star1" name="rating" value="1">
                                    <label for="star1">★</label>
                                </div>
                            </div>
                            <button type="submit" class="feedback-btn">
                                Submit
                            </button>
                        </div>
                    </form>
            </div>  
        </section>

        
         <!--footer area start-->

         <div class="footer-area">
            <div class="container">
                <div class="footer-inner-area">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-menu-title-area">
                                <div class="footer-menu-title-inner-area">
                                    <p>
                                        Collections
                                    </p>
                                </div>
                                <div class="footer-menu-title">
                                    <ul>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="index.html" class="footer-menu-btn">
                                                    Top
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="joggers.html" class="footer-menu-btn">
                                                    Bottom
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="accessories.html" class="footer-menu-btn">
                                                    Accessory
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-menu-title-area">
                                <div class="footer-menu-title-inner-area">
                                    <p>
                                        Information
                                    </p>
                                </div>
                                <div class="footer-menu-title">
                                    <ul>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="Returns.html" class="footer-menu-btn">
                                                    Returns
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="Shipping.html" class="footer-menu-btn">
                                                    Shipping
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="Terms.html" class="footer-menu-btn">
                                                    Terms 
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-menu-title-area">
                                <div class="footer-menu-title-inner-area">
                                    <p>
                                        more
                                    </p>
                                </div>
                                <div class="footer-menu-title">
                                    <ul>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="Blvcklist.html" class="footer-menu-btn">
                                                    Blvcklist
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="Contact.html" class="footer-menu-btn">
                                                    Contact
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="pass.html" class="footer-menu-btn">
                                                    Member
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-menu-title-area">
                                <div class="footer-menu-title-inner-area">
                                    <p>
                                        Follow us
                                    </p>
                                </div>
                                <div class="footer-menu-title">
                                    <ul>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="https://x.com/blvckparis" class="footer-menu-btn">
                                                    Twitter
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="https://instagram.com/black" class="footer-menu-btn">
                                                    Instagram
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-menu-btn-area">   
                                                <a href="https://facebook.com/getblvck" class="footer-menu-btn">
                                                    Facebook
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--footer area end-->
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>     
    <script src="js/custom.js"></script>
    </body>
</html>
