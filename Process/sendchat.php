<?php include"../includes/header.php";
$msg = $_REQUEST['msg'];
$sender_name = $_SESSION['username_ss'];
$query = "INSERT INTO  thechatroom(chat_sender_name,chat_time,chat_content) VALUES('$sender_name',1,'$msg')";
$run = mysqli_query($connection,$query);
comfirmquery($run);
?>