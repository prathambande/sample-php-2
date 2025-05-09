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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>CarLux</title>
</head>

<body>
<?php @include 'header.php'; ?>

    <!-- Main Content -->
    <div class="content">
        <main>
            <div class="header">
                <div class="left">
                    TIME
			<div class="digital_clock "></div>

			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">

				<!-- Nav Item - Search Dropdown (Visible Only XS) -->
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
                        <li><a href="#" class="active">HOME</a></li>
                    </ul>
                </div>
            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                <i class="bi bi-person"></i>
                    <span class="info">
                        <h3>
                        <?php
                         $q1 = "SELECT * FROM user_detail";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        </h3>
                        <p>Users</p>
                    </span>
                </li>
                <li><i class="bi bi-person-fill-gear"></i>
                    <span class="info">
                        <h3>
                        <?php
                         $q1 = "SELECT * FROM admin_detail";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        </h3>
                        <p>Admin</p>
                    </span>
                </li>
                <li><i class="bi bi-ev-front"></i>
                    <span class="info">
                        <h3>
                        <?php
                         $q1 = "SELECT * FROM electric_car";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        </h3>
                        <p>electric cars</p>
                    </span>
                </li>
                <li><i class="bi bi-car-front"></i>
                    <span class="info">
                        <h3>
                        <?php
                         $q1 = "SELECT * FROM fuel_car";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        </h3>
                        <p>Fuel cars</p>
                    </span>
                </li>
                <li><i class="bi bi-journal-check"></i>
                    <span class="info">
                        <h3>
                        <?php
                         $q1 = "SELECT * FROM bookings";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        </h3>
                        <p>bookings</p>
                    </span>
                </li>
                <!-- <li><i class="bi bi-person-fill-gear"></i>
                    <span class="info">
                        <h3>
                            $6,742
                        </h3>
                        <p>Total Sales</p>
                    </span>
                </li>
                <li><i class="bi bi-person-fill-gear"></i>
                    <span class="info">
                        <h3>
                            $6,742
                        </h3>
                        <p>Total Sales</p>
                    </span>
                </li>
                <li><i class="bi bi-person-fill-gear"></i>
                    <span class="info">
                        <h3>
                            $6,742
                        </h3>
                        <p>Total Sales</p>
                    </span>
                </li> -->
            </ul>
            <!-- End of Insights -->
        </main>

    </div>

    <script src="js/admin.js"></script>
    <!-- <script src="js/time.js"></script> -->
</body>

</html>