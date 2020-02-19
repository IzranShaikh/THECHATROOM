<?php

    ob_start();

    session_start();

    $connection = mysqli_connect('localhost','root','','chatroom');

    if(!$connection)
    {
        die("404 DB NOT FOUND");
    }

    function comfirmquery($result)
    {
        global $connection;
        
        if(!$result)
        {
            die("Query Failed" . mysqli_error($connection));
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THECHATROOM</title>
    <link rel="stylesheet" href="Frameworks/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="Styles/styles.css">
    <script src="Frameworks/jQuery.min.js"></script>
</head>