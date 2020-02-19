<?php include"../includes/header.php";

    $username = $_POST['username_s'];
    $email = $_POST['email_s'];
    $password = $_POST['password_s'];

    echo $query = "INSERT INTO users(username,user_email,user_password) VALUES('$username','$email','$password')";
    echo $signup_query = mysqli_query($connection,$query);
    comfirmquery($signup_query);
    echo "<script>alert('Thanks For Signing Up')</script>";
//    echo "<script>window.open('../index.php','_self')</script>";
    
?>