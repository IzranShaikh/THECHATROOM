<?php include"includes/header.php";

if(isset($_POST['upload_img']))
{
    $id = $_SESSION['user_id_ss'];
    $img_to_upload = $_FILES['image']['name'];
    $temp_img_to_upload = $_FILES['image']['tmp_name'];
    $status=move_uploaded_file($temp_img_to_upload,"img/$img_to_upload");
    if($status)
    {
    $query = "UPDATE users SET user_img='$img_to_upload' WHERE user_id=$id";
    $up_img_query = mysqli_query($connection,$query);
    comfirmquery($up_img_query);
    }
    else
    {
        
        
    }
    echo "<script>alert('Image Uploaded')</script>";
    echo "<script>window.open('profile.php','_self')</script>";
}

?>
<body><br>
    <?php include"includes/navigation.php"; ?>
    <br>
    <div class="container col-md-6">
        <div class="widget-content-expanded">
            <form class="form-group" method="post" action="" enctype="multipart/form-data">
                <input type="file" name="image"><br>
                <center><input type="submit" value="Upload" name="upload_img" class="btn btn-success"></center>
            </form>
        </div>
        <?php
        $id = $_SESSION['user_id_ss'];
        $query = "SELECT user_img FROM users WHERE user_id=$id";
        $run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($run))
        {
            $img = $row['user_img'];
        }
        ?>
        <img width="300" height="200" src="img/<?php echo $img; ?>" alt="img missing">
    </div><br>
<?php include"includes/modals.php"; ?>
<?php include"includes/footer.php"; ?>