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
    <title>CarLux</title>
    <link rel="icon" type="image/png" href="images/favicon/logo1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS FILES --> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css"/>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<?php include 'loader.php';?>
<?php include 'header.php';?>
<?php include 'checknetwork.php';?>

<main>
    <section class="slick-slideshow">   
    <div class="slick-custom">
                    <img src="images/slideshow/original.jpeg" class="img-fluid" alt="">
                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Welcome To CarLux</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Thinking of buying a car? At Carlux.com</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="images/slideshow/electric.png" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Electric car</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Best Electric Cars in India 2024 ; Tata Nexon EV, Rs. 14.49 Lakh, 465 km.</p>

                                    <!-- <a href="products.php" class="btn custom-btn">Explore products</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="images/slideshow/lx.jpg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <!-- <h1 class="slick-title">Topoffers</h1> -->

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Most trusted place to buy cars. Simple and transparent process.</p>

                                    <!-- <a href="contact.php" class="btn custom-btn">Contact</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="products section-padding">
                <div class="container" >
                    <div class="row" id="product-list">
                        <?php
                                mysqli_select_db($con, "carlux");
                                $q1 = "SELECT * FROM `fuel_car` limit 3";
                                $result = mysqli_query($con, $q1);
                                if(mysqli_num_rows($result) > 0){
                                while($fetch_product = mysqli_fetch_assoc($result)){
                                ?>
                        <div class="col-lg-4 col-12 mb-3">
                       
                        
                            <div class="product-thumb">
                            <a href="fcardetail.php?edit=<?php echo $fetch_product['id'];?>">
                                <img src="admin/vehicleimg/.<?php echo $fetch_product['image1']; ?>" width="300px">
                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="car_name">
                                        <?php echo $fetch_product['carname']; ?>
                                        </h5>
                                        <h6 class="car_brand"><?php echo $fetch_product['brand']; ?></h6>
                                        </a>
                                        <small class="car_price"><i class="material-symbols-outlined">currency_rupee</i>&nbsp;Price : 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $fetch_product['price']; ?></small>
                                
                                        <br>
                                        <small class="product-p"><i class="material-symbols-outlined">filter_alt</i>&nbsp;Fuel Type : 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $fetch_product['fueltype'];?> </small>
                                        <br>
                                        <small class="product-p"><i class="material-symbols-outlined">airline_seat_recline_extra</i>&nbsp;Seating : 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $fetch_product['seating_capacity']; ?>&nbsp;People</small>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            
                           
                        </div>
                        <?php
                                    };
                                    };
                                ?>
                        </div>
                    </div>
                </div>
            </section>

    <section class="products section-padding">
                <div class="container" >
                    <div class="row" id="product-list">
                        <?php
                                mysqli_select_db($con, "carlux");
                                $q1 = "SELECT * FROM `electric_car` limit 3";
                                $result = mysqli_query($con, $q1);
                                if(mysqli_num_rows($result) > 0){
                                while($fetch_product = mysqli_fetch_assoc($result)){
                                ?>
                        <div class="col-lg-4 col-12 mb-3">
                       
                        
                            <div class="product-thumb">
                            <a href="ecardetail.php?edit=<?php echo $fetch_product['id'];?>">
                                <img src="admin/vehicleimg/.<?php echo $fetch_product['image1']; ?>" width="300px">
                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="car_name">
                                        <?php echo $fetch_product['carname']; ?>
                                        </h5>
                                        <h6 class="car_brand"><?php echo $fetch_product['brand']; ?></h6>
                                        </a>
                                        <small class="car_price"><i class="material-symbols-outlined">currency_rupee</i>&nbsp;Price : 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $fetch_product['price']; ?></small>
                                
                                        <br>
                                        <small class="product-p"><i class="material-symbols-outlined">filter_alt</i>&nbsp;Fuel Type : 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $fetch_product['fueltype'];?> </small>
                                        <br>
                                        <small class="product-p"><i class="material-symbols-outlined">airline_seat_recline_extra</i>&nbsp;Seating : 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $fetch_product['seating_capacity']; ?>&nbsp;People</small>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            
                           
                        </div>
                        <?php
                                    };
                                    };
                                ?>
                        </div>
                    </div>
                </div>
            </section>

</main>
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
