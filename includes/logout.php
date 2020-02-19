<?php include"header.php";

    $user_id_db = $_SESSION['user_id_ss'];
    $query = "UPDATE users SET status=0 WHERE user_id={$user_id_db}";
    $inactivate_query = mysqli_query($connection,$query);
    session_destroy();
    echo "<script>alert('Youve been Logged Out')</script>";
    echo "<script>window.open('../index.php','_self')</script>";

?>