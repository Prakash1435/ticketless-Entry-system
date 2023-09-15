<?php
    session_start();

    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,"mbooking");

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $s = "select uname from userlogin where email = '$email' && phone='$phone'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION= mysqli_fetch_assoc($result);
        $reg = "UPDATE userlogin SET `password` = '$password' where phone='$phone'";
        mysqli_query($con, $reg);
        header('Refresh:1; url=index.php');
        echo '<script>
        alert("Password changed successfully.");
        </script>';
    }
    else{
        header('Refresh:1; url=forget.php');
        echo '<script>
        alert("Please enter registered email or phone number.");
        </script>';
    }
?>