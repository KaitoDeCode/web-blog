<?php

include('../config/connect.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);


if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result =  mysqli_query($connect,"SELECT password FROM users WHERE email='$email'");
    $row = mysqli_fetch_assoc($result);
    $pw_from_db = $row['password'];
    $query = mysqli_query($connect,"SELECT * FROM users WHERE email='$email' AND password ='$password'");
    if(password_verify($password,$pw_from_db)){
        $data = mysqli_fetch_array($query);
        $_SESSION['user_id'] = $data['id'];
        header('location: ../blogger');
    }else{
        header('location: ../register.php');
    }
}else{
    header('location: ../login.php');
}


