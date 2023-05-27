<?php

include('../config/connect.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $query = mysqli_query($connect,"INSERT INTO users SET name='$name' ,email='$email', password='$password', photo='default'");
   
    if($query){
        $data = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM users WHERE email='$email' AND password ='$password'"));
        $_SESSION['user_id'] = $data['id'];
        header('location: ../blogger');
    }else{
        header('location: ../register.php');
    }
}else{
    header('location: ../register.php');
}


