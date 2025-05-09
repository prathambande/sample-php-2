<?php
error_reporting(0);
session_start();
$admin = $_SESSION['admin_email'];
if (!isset($admin)) {
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
    <title>CarLux - Customer Wise Booking Report</title>
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
                        <li><a href="#">Dashboard</a></li> /
                        <li><a href="#">Bookings</a></li> /
                        <li><a href="#" class="active">Customer Wise Booking Report</a></li>
                    </ul>
                </div>
            </div>

            <!-- Search Filter -->
            <div class="group">
                <input id="search-input" placeholder="Search by Customer Name" type="search" class="input"><br><br><br><br><br><br><br>
            </div>

            <br><br>
            <table id="vehicle-table" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Total Revenue</th>
                        <th>Total Bookings</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "carlux");
                    if (!$con) {
                        die("Failed to connect to database");
                    }

                    $query = "SELECT 
                                customer_name AS CustomerName, 
                                email AS CustomerEmail, 
                                SUM(CAST(REPLACE(price, 'Rs.', '') AS DECIMAL(10,2))) AS TotalRevenue, 
                                COUNT(id) AS TotalBookings 
                              FROM `bookings` 
                              GROUP BY customer_name, email ";

                    $result = mysqli_query($con, $query);
                    $cnt = 1;

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $revenue = $row['TotalRevenue'];
                            $priceStr = $priceRow['price'];
                            
                            // Format the revenue
                            $formattedRevenue = "Rs." . number_format($revenue, 2);
                            if (stripos($priceStr, 'Cr') !== false) {
                                $formattedRevenue .= " Cr";
                            } else if (stripos($priceStr, 'Lakh') !== false) {
                                $formattedRevenue .= " Lakh";
                            }



                    ?>
                            <tr>
                                <td><?php echo $cnt; ?></td>
                                <td><?php echo $row['CustomerName']; ?></td>
                                <td><?php echo $row['CustomerEmail']; ?></td>
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
    <script>
        // Inline search script for customer table
        document.getElementById('search-input').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const table = document.getElementById('customer-table');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            Array.from(rows).forEach(row => {
                const customerNameCell = row.getElementsByTagName('td')[1]; // Customer Name column
                if (customerNameCell) {
                    const text = customerNameCell.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                }
            });
        });
    </script>
</body>
</html>