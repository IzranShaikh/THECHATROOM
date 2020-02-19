<?php include"../includes/header.php";
    
    $email = $_POST['email_l'];
    $password = $_POST['password_l'];

    $query = "SELECT * FROM users WHERE user_email='{$email}' and user_password='{$password}' ";
    $select_valid_user_query = mysqli_query($connection,$query);
    
    $row = mysqli_num_rows($select_valid_user_query);
    
    if($row == 0)
    {
        echo "<script>alert('Invalid Username or Password')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Logged In Successfully')</script>";
        $data_fetched = mysqli_fetch_assoc($select_valid_user_query);
        
        $user_id_db = $data_fetched['user_id'];
        $username_db = $data_fetched['username'];
        $user_email_db = $data_fetched['user_email'];
        $user_password_db = $data_fetched['user_password'];
        $user_role_db = $data_fetched['user_role'];
        $status_db = $data_fetched['status'];
        
        #updating status
        $query = "UPDATE users SET status=1 WHERE user_id={$user_id_db}";
        $user_active_query = mysqli_query($connection,$query);
        
        #Setting Sessions
        $_SESSION['username_ss'] = $username_db;
        $_SESSION['user_email_ss'] = $user_email_db;
        $_SESSION['user_id_ss'] = $user_id_db;
        
        echo "<script>window.open('../index.php','_self')</script>";
    }
    
?>