<?php
session_start();

$firstname = "";
$lastname = "";
$email = "";
$errors = array();

// connecting to database

$db = mysqli_connect('localhost', 'root', 'saintlua4357', 'hnginterns');

// on clicking the signup button

if (isset($_POST['signup'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);

    // ensuring that all fields are filled and filled correctly

    if(empty($firstname)) {
        array_push($errors, "Your first name is required");
    }

    if(empty($lastname)) {
        array_push($errors, "Your last name is required");
    }

    if(empty($email)) {
        array_push($errors, "Email is required");
    }

   

    if(empty($password1)) {
        array_push($errors, "Password is required");
    }

    if($password1 != $password2) {
        array_push($errors, "Passwords do not match");
    }

    // Submitting to Database if there are no errors

    if(count($errors) == 0) {
        $password = md5($password1);
        $sql = "INSERT INTO interns (firstname, lastname, email, password)  VALUES ('$firstname', '$lastname', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['firstname'] = $firstname;
        $_SESSION['success'] = "You are logged in";
        header('location: index.php');
    }

  
}

    // Login in from login page

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

        
    if(empty($email)) {
        array_push($errors, "Email is required");
    }
    if(empty($password)) {
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM interns WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are logged in";
            header('location: index.php'); 
         }else{
                array_push($errors, "Invalid email and password combination");
                
                }
            
    
    
    }


}


  // Login out

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['firstname']);
        header('location: login.php');

    }

   

    











?>