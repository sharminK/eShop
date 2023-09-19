 <?php
  session_start();
  if(!isset($_SESSION['username']))
  {
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

  


</head>
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

       <li class="nav-item ">
        <a class="nav-link" href="orders/myorders.php">My orders</a>
      </li>


      <li class="nav-item ">

        <a class="nav-link" href="about.php">About</a>
      </li>
      
       <li class="nav-item active">
        <a class="nav-link" href="contact.php">contact us</a>
      </li>     
        
    </ul>

   
    <form class="form-inline my-2 my-lg-0" action="product/search.php" method="post">
      <input class="form-control mr-sm-2" required name="value" type="search" placeholder="Search" aria-label="Search">
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
   <div class="py-4">
<section class="my-5">
 
    <h3 class="text-center">Contact</h3>
  </div>
   <div class="py-2" >
  <div class="container-fluid">  
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12"> 
       <img src="img/contact.jpg" class="img-fluid">
    </div>
     
     <div class="col-lg-6 col-md-6 col-12 py-5"> 
       <h1>Email :</h1>
       <p>aarafath172154@bscse.uiu.ac.bd</p>
       <p>sharminkaktery@gmail.com</p>
        <h1>Mobile no :</h1>
       <p>01521426616</p>

        <div>
       <form action="contact_comments.php" method="post">
        <div class="form-group">
          <h1>Message :</h1>
         <textarea class="form-control" required name="tarea"></textarea>
             
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
       </form>

     </div>

       
    </div>

    

   </div>
  </div>
</section>

<footer class="py-4">
  <p class="p-2 bg-dark text-white text-center">@asfe</p>
   <p class="p-2 bg-dark text-white text-center">@Sharmin</p>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>