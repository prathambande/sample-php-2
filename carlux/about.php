<?php
error_reporting(0);
session_start();
@include 'config.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Carlux</title>

        <!-- CSS FILES -->
        <link rel="icon" type="image/png" href="images/favicon/logo1.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/styles.css" rel="stylesheet">
    </head>
    
    <body>

    <?php include'loader.php';?>
    <?php include'header.php';?>
    <?php include'checknetwork.php';?>
    
        <main> 
            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">
                        <center>
                        <div class="col-lg-6 col-12 header-info">
                            <h2>
                                <span class="d-block text-primary">Welcome</span>
                                <span class="d-block text-dark">To</span>
                                <span class="d-block text-dark">CarLux</span>
                            </h2>
                        </div>
                        <p class="d-block text-primary">Home / About Us</p>
                        </center>
                    </div>
                </div>
            </header>

            <section class="testimonial section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 mx-auto col-11">
                            <h2 class="text-center">Customer love, <br> <span>Little</span> Fashion</h2>

                            <div class="slick-testimonial">
                                <div class="slick-testimonial-caption">
                                    <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>George, <strong class="text-muted">Digital Art Fashion</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Sandar, <strong class="text-muted">Zoom Fashion Idea</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/portrait-british-woman.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Marie, <strong class="text-muted">Art Fashion Design</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/woman-wearing-mask-face-closeup-covid-19-green-background.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Catherine, <strong class="text-muted">Dress Fashion</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="don" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Don Haruko</h3>

                        <h6 class="text-muted">Product, VP</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Over three years in business had the chance to work on variety of projects, with companies</h5>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="col-lg-6 col-12">
                                <p>Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="kelly" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Kelly Lisa</h3>

                        <h6 class="text-muted">Global, Head of Marketing</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Over three years in business had the chance to work on variety of projects, with companies</h5>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="col-lg-6 col-12">
                                <p>Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <?php include 'footer.php';?>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
