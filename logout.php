

<?php


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"inventory");
?>
<?php
session_start();
$pid=$_GET['sid'];
$username=$_SESSION['username'];

mysqli_query($link,"Update cart set flag='1' where user_name='$username'");

 ?>


<?php


session_unset();
session_destroy();
header('location:everyones view.php');
exit();



?>