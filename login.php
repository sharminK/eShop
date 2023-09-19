<!DOCTYPE html>
<html>
<head>
	<style >
     ::-webkit-input-placeholder { 
        color:  #E0E0E0;
      }

      :-ms-input-placeholder { 
          color: #E0E0E0;
       }

       ::placeholder {
           color: #E0E0E0;
        }
      
	</style>


				
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
	<body1>
		<div class="loginbox">
			<img src="img/log.png" class ="log">
			<h1>Login Here</h1>

			<form action="loghome.php" method="post">

				<p>Username</p>
				<input type="text" required name="user" placeholder="Enter Username">

				<p>Password</p>
				<input type="Password" required name="password" placeholder ="Enter Password" >

				<input type="submit" name="" value="Login">
				
				<a href="signup.php">Don't have an account ?</a>
				<a href="everyones view.php">Back to home</a>


			



			</form>


			
		</div>
	</body1>

</head>
<body>

</body>
</html>