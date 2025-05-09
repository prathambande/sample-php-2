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
    <link rel="_lambda
    <link rel="icon" type="image/png" href="images/logo1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/table.css">
    <title>CarLux - Date Range Wise Booking Report</title>
</head>

<body>
    <?php @include 'header.php'; ?>
    <div class="content">
        <main>
            <div class="header">
                <div class="left">
                    TIME
                    <div class="digital_clock"></div>
                    <ul class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        /
                        <li><a href="#">Reports</a></li>
                        /
                        <li><a href="#" class="active">Date Range Wise Booking Report</a></li>
                    </ul>
                </div>
            </div>

            <div class="group">
                <form method="POST" action="">
                    <div class="date-filter">
                        <div class="date-input">
                            <label>From Date</label>
                            <input type="date" name="from_date" class="input" required>
                        </div>
                        <div class="date-input">
                            <label>To Date</label>
                            <input type="date" name="to_date" class="input" required>
                        </div>
                        <div class="date-input">
                            <label> </label>
                            <button type="submit" class="btn-search">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <br><br><br><br><br><br>
            <table id="vehicle-table" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Car Name</th>
                        <th>Brand</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $con = mysqli_connect("localhost", "root", "", "carlux");
                if(!$con) {
                    die("Failed to connect: " . mysqli_connect_error());
                }

                // Only process and display records if form is submitted
                if(isset($_POST['from_date']) && isset($_POST['to_date'])) {
                    mysqli_select_db($con, "carlux");
                    $from_date = mysqli_real_escape_string($con, $_POST['from_date']);
                    $to_date = mysqli_real_escape_string($con, $_POST['to_date']);
                    
                    // Using prepared statement to prevent SQL injection
                    $query = "SELECT id, customer_name, email, contact, carname, brand, booking_date, status 
                             FROM `bookings` 
                             WHERE UPPER(status) IN ('APPROVED', 'PENDING') 
                             AND booking_date BETWEEN ? AND ?
                             ORDER BY booking_date DESC";
                    
                    $stmt = mysqli_prepare($con, $query);
                    if($stmt === false) {
                        die("Query preparation failed: " . mysqli_error($con));
                    }
                    
                    mysqli_stmt_bind_param($stmt, "ss", $from_date, $to_date);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    
                    $cnt = 1;

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                            <tr>
                                <td><?php echo $cnt; ?></td>
                                <td><?php echo htmlspecialchars($row['customer_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['contact']); ?></td>
                                <td><?php echo htmlspecialchars($row['carname']); ?></td>
                                <td><?php echo htmlspecialchars($row['brand']); ?></td>
                                <td><?php echo htmlspecialchars($row['booking_date']); ?></td>
                                <td><?php echo htmlspecialchars($row['status']); ?></td>
                            </tr>
                <?php
                            $cnt++;
                        }
                    } else {
                ?>
                        <tr>
                            <td colspan="8" style="text-align:center; color: red;">No bookings found</td>
                        </tr>
                <?php
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    // Message shown when page loads without search
                ?>
                    <tr>
                        <td colspan="8" style="text-align:center; color: blue;">Please select date range and click Search to view bookings</td>
                    </tr>
                <?php
                }
                mysqli_close($con);
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