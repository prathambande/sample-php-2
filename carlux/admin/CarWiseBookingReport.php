<?php
error_reporting(0);
session_start();
$admin = $_SESSION['admin_email'];
if(!isset($admin)){
   header('location:adminlogin.php');
}
@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/table.css">
    <title>CarLux - Car Wise Booking Report</title>
</head>

<body>

   <?php @include 'header.php'; ?>
    <div class="content">
        <main>
            <div class="header">
                <div class="left">
                    TIME
                        <div class="digital_clock"></div>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                            <div class="topbar-divider d-none d-sm-block"></div>
                    <ul class="breadcrumb">
                        <li><a href="#">
                        Dashboard
                            </a></li>
                        /
                        <li><a href="#">
                        Reports
                            </a></li>
                        /
                        <li><a href="#" class="active">Car Wise Booking Report</a></li>
                    </ul>
                </div>
            </div>

            <div class="group">
                <!-- <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg> -->
                <!-- <input id="search-input" placeholder="Search by car or brand" type="search" class="input"> -->
            </div>

            <br><br><br><br><br><br>
            <table id="vehicle-table" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Brand Name</th>
                    <th>Car Name</th>
                    <th>Total Revenue</th>
                    <th>Total Bookings</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $con = mysqli_connect("localhost", "root", "", "carlux");
                if(!$con) {
                    die("Failed to connect");
                }
                
                mysqli_select_db($con, "carlux");
                
                // Get unique car and brand combinations with booking counts
                $q1 = "SELECT 
                       brand AS BrandName, 
                       carname AS CarName, 
                       COUNT(id) AS TotalBookings 
                       FROM `bookings` 
                       GROUP BY brand, carname 
                       ORDER BY TotalBookings DESC";
                
                $result = mysqli_query($con, $q1);
                $cnt = 1;
                
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        // Get price for this car/brand
                        $brand = $row['BrandName'];
                        $carname = $row['CarName'];
                        
                        $priceQuery = "SELECT price FROM `bookings` WHERE brand = '$brand' AND carname = '$carname' LIMIT 1";
                        $priceResult = mysqli_query($con, $priceQuery);
                        $priceRow = mysqli_fetch_assoc($priceResult);
                        
                        $priceStr = $priceRow['price'];
                        
                        // Extract numeric value from price string
                        $priceValue = 0;
                        if (preg_match('/(\d+(\.\d+)?)/', $priceStr, $matches)) {
                            $priceValue = floatval($matches[1]);
                        }
                        
                        // Calculate estimated revenue
                        $estimatedRevenue = $priceValue * $row['TotalBookings'];
                        
                        // Format the revenue
                        $formattedRevenue = "Rs." . number_format($estimatedRevenue, 2);
                        if (stripos($priceStr, 'Cr') !== false) {
                            $formattedRevenue .= " Cr";
                        } else if (stripos($priceStr, 'Lakh') !== false) {
                            $formattedRevenue .= " Lakh";
                        }
                ?>
                  <tr>
                    <td><?php echo $cnt; ?></td>
                    <td><?php echo $row['BrandName']; ?></td>
                    <td><?php echo $row['CarName']; ?></td>
                    <td><?php echo $formattedRevenue; ?></td>
                    <td><?php echo $row['TotalBookings']; ?></td>
                  </tr>
                <?php
                    $cnt++;
                    }    
                } else {
                ?>
                  <tr>
                    <td colspan="5" style="text-align:center; color: red;">No bookings found</td>
                  </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </main>
    </div>
    <script src="js/admin.js"></script>
    <script src="js/time.js"></script>
    <script src="js/search.js"></script>
</body>
</html>