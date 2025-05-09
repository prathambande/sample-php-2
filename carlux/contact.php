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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="icon" type="image/png" href="images/favicon/logo1.png">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

                        <div class="col-lg-10 col-12 header-info">
                            <h1><center>
                                <span class="d-block text-primary">Say hello to us</span>
                                <span class="d-block text-dark">love to hear you</span>
</center>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="contact section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Let's <span>begin</span></h2>

                            <form class="contact-form me-lg-5 pe-lg-3" role="form" method="post">

                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>

                                    <label for="name">Full name</label>
                                </div>

                                <div class="form-floating my-4">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                    <label for="email">Email address</label>
                                </div>
                                
                                <div class="form-floating my-4">
                                    <input type="subject" name="subject" id="subject"class="form-control" placeholder="Subject" required>

                                    <label for="subject">Subject</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <textarea id="message" name="message" class="form-control" placeholder="Leave a comment here" required style="height: 160px"></textarea>

                                    <label for="message">Tell us about the project</label>
                                </div>

                                <div class="col-lg-5 col-6">
                                    <button type="submit" name="add" class="form-control">Send</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 ms-auto">
                            <div class="row">
                                <div class="col-6 border-end contact-info">
                                    <h6 class="mb-3">Compony</h6>

                                    <a href="" class="custom-link">
                                        CarLux.com
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a>
                                </div>

                                <div class="col-6 contact-info">
                                	<h6 class="mb-3">E-Mail Id</h6>

                                    <a href="mailto:studio@company.com" class="custom-link">
                                        carlux.motors777@gmail.com
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a>
                                </div>

                                <div class="col-6 border-top border-end contact-info">
                                    <h6 class="mb-3">Our Office</h6>

                                    <p class="text-muted">Adarsh Bca College , At-Botad</p>
                                </div>

                                <div class="col-6 border-top contact-info">
                                    <h6 class="mb-3">Our Socials</h6>

                                    <ul class="social-icon">

                                        <li><a href="#" class="social-icon-link bi-messenger"></a></li>

                                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                    </ul>
                                </div>
                            </div>
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
<?php

if (isset($_POST['add'])){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mysqli_select_db($con, "carlux");
$q1 = "SELECT * FROM contact WHERE name = '$name'";
$result = mysqli_query($con, $q1);

if(mysqli_num_rows($result)>0)
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
          title:"You have Already make contact!",
        });
        </script>
      <?php
 }
 else {
    $q1="INSERT INTO `contact`(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
    mysqli_select_db($con, "carlux");
    $result = mysqli_query($con, $q1);
    if(!$result)
    {
        ?>
        <script>
            Swal.fire({
            icon: 'error',
            title:'Oops!',
            text: 'Something Went Wrong!',
            showConfirmButton: false,
            timer:4000
            });
        </script>
        <?php
    }
    elseif ($result) {
        ?>
        <script>
                Swal.fire({
                icon: 'success',
                text: 'Contact us successfully!',
                showConfirmButton: false,
                timer: 2000
                });
        </script>
        <?php
    }
}  
}
?>