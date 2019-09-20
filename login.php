<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="teamsmokey.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>Login page</title>
</head>
<body>
<div id="myform">
	<?php include ('errormsg.php'); ?>
	  <form method="post" action="login.php">
		    <p><span>Email</span> <br>
		    <input class="email" type="email" name="email" placeholder="Enter email" name="email"><br></p>
		    <p><span>Password</span> <br>
		    <input class="password" type="password" placeholder="Enter password" name="password"><br></p>
		    <a href="#" class="forg">forgot password?</a><br>
		    <button class="btn" name="login">LOG IN</button><br>
		 	<p>Don't have an account?<a href="teamsmokeysignup.php" class="reg">Sign up</a></p>
	  </form>
  </div>

</body>
</html>
