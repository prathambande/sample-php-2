<?php
error_reporting(0);
session_start();
$admin = $_SESSION['admin_email'];
if(!isset($admin)){
   header('location:adminlogin.php');
}
@include 'config.php';	

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_select_db($con, "carlux");
    $q1 = "DELETE FROM `user_detail` WHERE id = $delete_id ";
    $result = mysqli_query($con, $q1);
    if($result){
       header('location:usertable.php');
    }
 }
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/table.css">
    <title>CarLux</title>
</head>

<body>

<?php include 'header.php'; ?>
    <!-- Main Content -->
    <div class="content">
        <main>
            <div class="header">
                <div class="left">
                    TIME
                        <div class="digital_clock "></div>
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
                        <li><a href="#" class="active">admin log</a></li>
                    </ul>
                </div>
            </div>
            <input id="search-input" placeholder="Search by vehicle name or brand" type="text" name="text" class="input">
            <br><br>
            <table id="vehicle-table" class="table">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>E-MAIL ID</th>
                    <th>CONTACT NO</th>
                    <th>USER NAME</th>
                  </tr>
                </thead>
                <tbody>
                  
                <?php
                mysqli_select_db($con, "carlux");
                $q1 = "SELECT * FROM `admin_detail`";
                $result = mysqli_query($con, $q1);
                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                ?>

                  <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['admin_email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                  </tr>
                  <?php
                  }    
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