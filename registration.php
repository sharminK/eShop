
 <?php 
session_start();


$con= mysqli_connect('localhost','root');
if($con){
echo "connection successfull";
}else{
echo "connection faild";
}

mysqli_select_db($con,'Inventory');
$name = $_POST['nam'];
$pass = $_POST['password'];
$add = $_POST['address'];
$email=$_POST['email'];
$number=$_POST['phnno'];
$word='admin';


if(isset($_POST['submit1']))
{

$q = "SELECT * From registration where name = '$name' || email ='$email' || mobile_no='$number' ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
	
	 header('location:everyones view.php');

}else{
	if (strpos($email, $word)!==false){

	$qy=" INSERT INTO registration (name,password,address,email,mobile_no,type) values('$name','$pass','$add','$email','$number','admin')";
	mysqli_query($con,$qy);
	
	echo "<script> alert('Signup as a admin'); window.location='everyones view.php' </script>";

       }
       else{
       	$qy=" INSERT INTO registration (name,password,address,email,mobile_no,type) values('$name','$pass','$add','$email','$number','user')";
	mysqli_query($con,$qy);
	header('location:login.php');
	echo "<script> alert('Signup as a user'); window.location='everyones view.php' </script>";


       }
}

}
 ?>