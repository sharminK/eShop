<?php 
session_start();

$con= mysqli_connect('localhost','root');

mysqli_select_db($con,'Inventory');
$name = $_POST['user'];
$pass = $_POST['password'];




if(isset($_POST['submit']))
{
$q = "SELECT * From registration where name = '$name' && password='$pass'  ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){

	$p = "SELECT * From registration where  type like 'admin' and name='$name' ";
    $result=mysqli_query($con,$p);
    $num1 = mysqli_num_rows($result);
    if ($num1 == 1)
    {
    	$_SESSION['username']=$name;
		   header('location:adminhome.php');
	
    }
    else
    {
     $_SESSION['username']=$name;
		 header('location:home.php');

    }
	

}else{
	echo "<script> alert('wrong user name or password '); window.location='everyones view.php' </script>";
}


}
 ?>