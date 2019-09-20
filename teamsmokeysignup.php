<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="teamsmokeysignup.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>Signup page</title>
</head>
  
<body>

<div id="mymodal" class="modal">
    <div class="modal-content">
      <span class="close-button">&times;</span>
      <h1>The Firstname, Surname, and Password must exceed 4 characters</h1>
    </div>
  </div>
  <div id="mymodal2" class="modal">
    <div class="modal-content">
      <span class="close-button2">&times;</span>
      <h1>Congratulations. You can now <a href="index.html">login</a> with your details</h1>
    </div>
  </div>

  <div id="myform">
    <?php include ('errormsg.php'); ?>
    <form method="post" action="teamsmokeysignup.php" id="valid_psswd">
       <p> <span>Full Name</span> <br>
        <input class="firname" type="text" placeholder="First Name" id="fir_name" name="firstname" value="<?php echo $firstname; ?>"><input class="surname" type="text" placeholder="Surname"id="sur_name" name="lastname" value="<?php echo $lastname; ?>"><br> <br></p>
        <p><span>Email</span> <br>
        <input class="email" type="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>"><br></p>
        <p><span>Password</span> <br>
        <input class="password" type="password" id="psswd" placeholder="Enter password" name="password1"><br></p>
        <p><span>Confirm password</span> <br>
        <input class="conpassword" type="password" id="conf_psswd" placeholder="Confirm password" name="password2"><br></p>
        
        <p class="use"><input type="checkbox" required>I accept the Terms of Use & Privacy Policy</p>.
        <button class="button" name="signup">SIGN UP</button><br>
        <p class="have">Already have an account?<a href="login.php" class="reg">Login</a></p> 
    </form>
  </div>




 <!--  <script type="text/javascript" src="smokey.js"></script> -->
<footer> <p> Copyright &copy; 2019, Teamsmokey </p> </footer>
</body>
</html>
