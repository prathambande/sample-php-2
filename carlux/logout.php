<?php
error_reporting(0);
session_start();
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
<?php
error_reporting(0);
session_start();
session_unset();
session_destroy();
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
?>
</body>
</html>