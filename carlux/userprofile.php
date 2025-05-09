<?php 
error_reporting(0);
session_start();
$user=$_SESSION['email'];
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon/logo1.png">
    <link rel="stylesheet" href="css/userprofile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .profile{
        border-radius: 50%;
        width: 100px;
        height: 100px; 
    }
    .resetbtn{
        background:#000;
        color:#fff;
        padding:5px 15px;
        border-radius:5px;
        border:none;
    }
    .resetbtn:hover{
        background:#FF4400;
    }
    .material-symbols-outlined{
        align-items: center;
        font-size:20px;
    }
    .a{
        background:none;
        border:none;
        color: rgb(0, 120, 224);
    }
    .a:hover{
        border-bottom:1px solid #5287b6;
        color:#5287b6;
    }
    .alert{
        margin-top:2%;
        color:#07553B;
        background:#D1E7DD;
        font-size:20px;
    }
    .alert1{
        margin-top:2%;
        padding: 10px 10px;
        color:#842029;
        font-size:20px;
        border-radius:4px;
        background:#F8D7DA;
    }
</style>
<body>
    <?php include 'checknetwork.php';?>
    <?php include 'loader.php';?>
    <?php

    mysqli_select_db($con, "carlux");
    $q1 = "SELECT * FROM `user_detail` where email='$user'";
    $result = mysqli_query($con, $q1);
    if(mysqli_num_rows($result) > 0){
    while($fetch_product = mysqli_fetch_assoc($result)){

        $status=$fetch_product['status'];
        $name=$fetch_product['name'];
        $email=$fetch_product['email'];
        $contact=$fetch_product['contact'];
        $user_photo=$fetch_product['user_photo'];
        $username=$fetch_product['username'];
        $city=$fetch_product['city'];
        $state=$fetch_product['state'];
        $country=$fetch_product['country'];
        $gender=$fetch_product['gender'];
        $pincode=$fetch_product['pincode'];
    }
    }
    ?>
    <form method="POST" enctype="multipart/form-data">
    <div class="container light-style flex-grow-1 container-p-y">
        <br><br>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Info</a>
                        <!-- <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notifications</a> -->
                        <a class="list-group-item list-group-item-action"
                            href="index.php">Home</a>
                        <a class="list-group-item list-group-item-action"
                            href="userprofile.php?logout=<?php echo $user;?>">Logout</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img class="profile" src="admin/vehicleimg/<?php echo $user_photo; ?>" alt="Profile" class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Select New Picture
                                        <input type="file"  accept="image/png, image/jpg, image/jpeg, image/webp" name="user_photo" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <input type="submit" name="profile" value="Edit Picture" class="resetbtn">
                                    <input type="submit" name="deleteprofile" value="Delete" class="resetbtn">
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control mb-1" value="<?php echo $username;?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <input type="text" name="gender" class="form-control" value="<?php echo $gender;?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input readonly type="text" class="form-control mb-1" value="<?php echo $email;?>">
                                    <?php if($status == 'notverified') { ?>
                                        <div class="alert1">
                                        <span class="material-symbols-outlined">gpp_maybe</span> Your Account is not Verified. Please check your inbox.<br>
                                        <input class="a" type="submit" value="Resend Verification Code" name="sendcode">
                                    </div>
                                    <?php } else { ?>
                                        <div class="alert">
                                        <span class="material-symbols-outlined">verified_user</span> Your Account Has Been Verified.<br>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                               
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" value="<?php echo $city; ?>">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input type="text" name="state" class="form-control" value="<?php echo $state; ?>">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Pincode</label>
                                    <input type="text" name="pincode" class="form-control" value="<?php echo $pincode; ?>">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <input type="text" name="country" class="form-control" value="<?php echo $country; ?>">
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone comments on my article</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone answers on my forum
                                            thread</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone follows me</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Application</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly product updates</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly blog digest</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <input type="submit" name="update" value="Save changes" class="btn btn-primary">&nbsp;
            <input type="reset" name="reset" value="Cancel" class="btn btn-default">
        </div>
    </div>
    </form>
    <br><br><br><br><br>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
<?php
error_reporting(0);
session_start();
		
		if(isset($_POST['sendcode']))
		{
        $user=$_SESSION['email'];
        $con=mysqli_connect("localhost","root","","carlux");
        if(!$con)
        {
        die("Failed to coonect");
        }	
        mysqli_select_db($con, "carlux");
        $q1="select * from user_detail where email='$user'";
        $r=mysqli_query($con, $q1);
          if(mysqli_num_rows($r)===0)
          {
            ?>
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top",
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "info",
                title:"Email Doesn't exist.",
                //text: "Password Must Be At Least 8 Charactes Long."
              });
              </script>
            <?php
          }
          else
          {
            $code = rand(999999, 111111);
            mysqli_select_db($con, "carlux");
            $q1="update user_detail set code='$code' where email='$email'";
            $data=mysqli_query($con, $q1);
            if($data)
            {
              $subject = "Account Verification Code";
              $message = "Your Account Verification Code is $code";
              $sender = "From: carlux.motors777@gmail.com";
              if(mail($email, $subject, $message, $sender)){
                  $_SESSION['email'] = $email;
                  echo '<script type="text/javascript">';
                  echo 'window.location.href="verifyuser.php";';
                  echo '</script>';
                  exit();
              }else{
                  ?>
                  <script>
                          Swal.fire({
                          icon: 'error',
                          title:'Oops!',
                          text: 'Failed while sending code,  Please Try Again Later',
                          showConfirmButton: false,
                          timer:4000
                      });
                  </script>
                  <?php
            }
          }
          else
            {
                ?>
                <script>
                        Swal.fire({
                        icon: 'error',
                        title:'Oops!',
                        text: "Something went wrong!!",
                        showConfirmButton: false,
                        timer:8000
                    });
                </script>
                <?php   
            }
          mysqli_close($con);
          }
		}

        
        if(isset($_POST['deleteprofile']))
        {
            $q1="UPDATE `user_detail` SET user_photo='profile.png' where email='$user' ";
            mysqli_select_db($con, "carlux");
            $result = mysqli_query($con, $q1);
            echo '<script type="text/javascript">';
            echo 'window.location.href="userprofile.php";';
            echo '</script>';
        }
        if(isset($_POST['profile']))
        {
            
            $user_photo = $_FILES['user_photo']['name'];
            $file_local1 = $_FILES['user_photo']['tmp_name'];
            $folder="admin/vehicleimg/";
            move_uploaded_file($file_local1,$folder.$user_photo);

            if(empty($user_photo))
            {
              ?>
              <script>
              const Toast = Swal.mixin({
                  toast: true,
                  position: "top",
                  showConfirmButton: false,
                  timer: 4000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                  }
                });
                Toast.fire({
                  icon: "warning",
                  title:"Attention Please!",
                  text: "Please Select a Picture."
                });
                </script>
              <?php
          }
          else {
            $q1="UPDATE `user_detail` SET user_photo='$user_photo' where email='$user' ";
            mysqli_select_db($con, "carlux");
            $result = mysqli_query($con, $q1);
            echo '<script type="text/javascript">';
            echo 'window.location.href="userprofile.php";';
            echo '</script>';

          }
        }

        if(isset($_POST['update']))
        {
            $name=$_POST['name'];
            $contact=$_POST['contact'];
            $gender=$_POST['gender'];
            $username=$_POST['username'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $country=$_POST['country'];
            $pincode=$_POST['pincode'];

            $q1="UPDATE `user_detail` SET name='$name',contact='$contact',gender='$gender',username='$username',city='$city',state='$state',country='$country',pincode='$pincode' where email='$user' ";
            mysqli_select_db($con, "carlux");
            $result = mysqli_query($con, $q1);
            echo '<script type="text/javascript">';
            echo 'window.location.href="userprofile.php";';
            echo '</script>';
        }

        if(isset($_GET['logout'])){
            session_start();
            session_unset();
            session_destroy();

            mysqli_select_db($con, "carlux");
            $q1="UPDATE user_detail SET activation = 'inactive', last_logout = CURRENT_TIMESTAMP WHERE email = '$user'";
            $data= mysqli_query($con, $q1);

            ?>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                    icon: 'success',
                    title: 'Visit Again .',
                    text: 'Thank You !',
                    showConfirmButton: false,
                    timer: 2000,
                    }).then(() => {
                    window.location.href = 'sign-in.php';
                    });
                });
            </script>
            <?php
            exit;
        }
?>