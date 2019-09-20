<?php include ('server.php'); 

if(empty($_SESSION['email'])) {

    header('location: login.php');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="teamsmokey.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>Home</title>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h2>Team Smokey's Members Area</h2>
    </div>
    <div class="content">
        <?php if(isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
                </h3>
            </div>
        <?php endif ?>
        <?php if(isset($_SESSION["firstname"])): ?>
        <p> Welcome <strong><?php echo $_SESSION['firstname']; ?></strong></p>
        <p><a href="login.php" class="logout"> Logout</a></p>
        <?php endif ?>
    </div>
</div>  

</body>
</html>
