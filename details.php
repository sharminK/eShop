<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"inventory");
 ?>
<?php
session_start();
$id=$_GET['bid'];
$res=mysqli_query($link,"select * from products where pid='$id'");
$com=mysqli_query($link,"select * from review where pid='$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Details</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Inventory</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">

        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="product/index.php">Products</a>
      </li>

      
<li class="nav-item">
        <a class="nav-link" href="showcart.php">Cart</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="orders/myorders.php">My orders</a>
      </li>

      <li class="nav-item">

        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">contact us</a>
      </li>    
        
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">

       <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout (<?php echo $_SESSION['username'] ?>)</a>
      </li>
              
    </ul>  


  </div>
</nav>



  <style>
    body{
      background:#ffff;;
        display: flex;
    }
    .img_box{
      overflow: hidden;
      border: 1px solid green;
      width: 400px;
      height: 450px;
      padding: 20px;
      text-align: center;
      margin: 75px 50px 0px 50px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.4);
      background: #ffff;
      border-radius: 10px;
    }
    .img_box img{
      width: 80%;
      margin: auto;
      box-sizing: border-box;

    }
    .details_box
    {
      box-sizing: border-box;
      background: #e6f9ff;
      width: 700px;
      height: 500px;
      text-align: center;
      margin: 90px 50px 0px 50px;

    }
    .details{
      text-align: center;
      color:#636e72;
      text-shadow: 2px 2px 5px #636e72;
    }
    .bname,.aname{
      font-weight: bold;
      color: #6c5ce7;
      font-size: 24px;
    }
    h3{
      font-weight: lighter;
    }
    .description
    {
      font-weight: bold;
      color: #368CCC;
    }
    .bt{
      width:140px;
      padding: 10px;
      margin: auto;
      background-color: #368CCC;
      border-radius: 5px;
    }
    a{
      text-decoration: none;
      color: white;
      margin-left: 23px;

      position: relative;
    }
    i{
      position: absolute;
      left: -25px;
      top: -2px;
    }
    div.box {
  border: 1px solid gray;
  padding: 8px;
}

      body{
        background-color:  #e6f9ff;
        height: 100vh;
        background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
      }
      .Header{
        margin-top: 100px;
        margin-left: 180px;
      }
      .Header h1{
        color: white;
      }
    

  </style>
</head>
<body>

<div class="py-5">

<?php
while ($row=mysqli_fetch_array($res)) {
 ?>

 <div class="py-4">
<section class="my-5">
 
   
  </div>
   <div class="py-2" >
  <div class="rounded">  
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12"> 
       <img src="<?php echo $row["product_image"]; ?>" alt="book">
    </div>
    
     
     <div class="col-lg-6 col-md-6 col-12"> 
       <div class="details_box">
   <h2 class="details">DETAILS</h2>
   <span class="bname">Name: <?php echo $row["product_name"] ?></span>
   <br>
   <span class="aname">Brand: <?php echo $row["brand_name"] ?></span>
 <h3 class="description">Description</h3>
 <p><?php echo $row["product_details"] ?></p>
 <h3>Price: <span><?php echo $row["product_price"] ?>(tk)</span></h3>
 <div class="bt">
   <a href="cart.php?sid=<?php echo $row["pid"] ?>" class="submit2"><i class="material-icons">
   shopping_cart
 </i>Add to cart</a>
 </div>
 </div>

    </div>

   </div>
  </div>


 <?php
}
  ?>
</div> 



     <div class="py-4">
<section class="my-5">
   <div class="container">
 
    <h3 align="center" class="text-white bg-dark">Reviews</h3>
  
  <div class="comment">
    <?php
    while ($com1=mysqli_fetch_array($com)) {
      ?>
      <div class="box">
      <h1 align="center"  ><?php echo $com1["user_name"] ?></h1>
      <p align="center" ><?php echo $com1["comment"] ?></p>
      </div>
      <br>
      <?php
    }
     ?>
    

</div>



  <form action="" method="post">


         <div class="md-form">
  <i class="fas fa-pencil-alt prefix"></i>
  <textarea id="form10" name="msg" class="md-textarea form-control" rows="3"></textarea>

  <input align="center" type="submit" name="csubmit" value="Comment">

</form>
</div>


 </div>
 <?php
 $userid=$_SESSION['username'];
 $res=mysqli_query($link,"select * from registration where name='$userid'");
 while ($row=mysqli_fetch_array($res)) {
 $username=$row["name"];
 }
 if (isset($_POST["csubmit"])) {
    $msg= $_POST['msg'];
   mysqli_query($link,"insert into review(user_name,pid,comment) values('$username','$id','$msg')");
  
  
 }
  ?>



</body>
</html>
