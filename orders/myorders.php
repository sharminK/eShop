<?php
  session_start();
  if(!isset($_SESSION['username']))
  {
    header('location:../login.php');
  }
  include_once('../connection.php');
  $name=$_SESSION['username'];
   $query="select p.product_name,p.pid,p.brand_name,p.category_name,p.product_price,r.confirmation,r.delevery,r.Date from products p join cart r on (p.pid=r.pid) where r.user_name='$name' and r.flag='1' ";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
  <div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Inventory</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">

        <a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">

        <a class="nav-link" href="../product/index.php">Products</a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="../showcart.php">Cart</a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="../orders/myorders.php">My orders</a>
      </li>

      <li class="nav-item">

        <a class="nav-link" href="../about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contact.php">contact us</a>
      </li>
            
        
    </ul>

    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
      <input class="form-control mr-sm-2" required name="value" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">

       <li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout (<?php echo $_SESSION['username'] ?>)</a>
      </li>
              
    </ul>  


  </div>
</nav>

</head>
<style media="screen">
      body{
        background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("../img/g.jpg");
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

<body>

<div class="py-5">

<div class="container" >
  <div class="py-4"></div>
   <h2 align="center" class="text-white bg-dark">My Order History</h2>    
          
  <table class="table table-bordered table-dark">
    <thead>
      <tr>

         <th>Date</th>
        <th>Product name</th>
        <th>Category</th>
        <th>Brand</th>
         <th>Product_id</th>
         <th>Price(TK)</th>
         <th>Corfirmation</th>
          <th>Delevery</th>
         
       
      </tr>
    </thead>
    <tbody>
      <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
      ?>
          <tr>
             <td><?php echo $rows['Date'] ?></td>
            <td><?php echo $rows['product_name'] ?></td>
            <td><?php echo $rows['category_name'] ?></td>
             <td><?php echo $rows['brand_name'] ?></td>
             <td><?php echo $rows['pid'] ?></td>
            
             <td><?php echo $rows['product_price'] ?></td>
              <td><?php echo $rows['confirmation'] ?></td>
               <td><?php echo $rows['delevery'] ?></td>
            

          <?php 
        }
       ?>
       
    </tbody>
  </table>
</div>


</div>


</body>
</html>