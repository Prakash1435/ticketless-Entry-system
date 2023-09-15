<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,"miniproject_login");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['birthday'];
    

    $s = "select * from register where username = '$username' or email='$email' or phone='$phone'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num >= 1){
        //echo "Username Already Taken";
        header('Refresh:1; url=login.php');
        echo '<script>alert("******REGISTER SUCCESSFULLY******")</script>';
    }
    else{
        $reg = "insert into register (uname, email, phone, password, gender, birthday) values ('$username','$email', '$phone', '$password', '$gender', '$birthday')";
        mysqli_query($con, $reg);
        $_SESSION['uname'] = $username;
        header('Refresh:2; url=index.php');
        echo "Registrations done Successful enjoy now.";
        // echo '<script>
        // alert("Registrations done Successfully");
        // </script>';
    }
?>