<link rel="stylesheet" href="../Frameworks/bootstrap.min.css">
<link rel="stylesheet" href="../Styles/styles.css">

<?php include"../includes/header.php";
$query = "SELECT * FROM  thechatroom ORDER BY chat_id DESC";
$output = "";
$sel_query = mysqli_query($connection,$query);
if(mysqli_num_rows($sel_query) > 0)
{
while($row = mysqli_fetch_array($sel_query))
{
$output .= "<br>";
$output .= "<div class='container msgcontainer'><div id='msgbox' class='container msgbox'>
<small style='color:black;'>".$row['chat_sender_name']."</small><br>
<span class='juicymsg'>".$row['chat_content']."</span>
</div></div>";
}
}
else
{
    $output = "Waiting for peoples to join the chat...";
}
$output .= "<br>";
echo $output;
?>