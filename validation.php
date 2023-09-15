<?php
    session_start();

    $con = mysqli_connect('localhost','root','',);

    mysqli_select_db($con,"miniproject_login");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $s = "select * from login where username = '$username' && password='$password'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $username;
        header('location:index.php');
    }
    else{
       header('Refresh:1; url=qr.html');
    //    echo 'Please enter valid username & password.';
       echo '<script>
        alert("LOGIN!!!!!!!!.");
        </script>';
    }
?>