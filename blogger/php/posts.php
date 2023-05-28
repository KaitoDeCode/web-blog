<?php

include('../../config/connect.php');
// if(isset($_SESSION['user_id'])){
//     header('locate: ../../login.php');
// }
error_reporting(E_ALL);
ini_set('display_errors', 1);

$check= array(
    " " => "-",
    ":" => "",
    "," => "",
    "/" => "",
    "'" => "",
    '"' => "",
    "`" => "",
    "." => "",
    "-" => ""

);

if(isset($_POST['action'])){//DIGUNAKAN UNTUK MENANMBAH DATA DAN MENGUPDATE DATA
    $title = $_POST['title'];
    $slug  = strtolower(strtr($title, $check));
    $user_id = $_SESSION['user_id'];
    $body = $_POST['body'];
    $date = date('Y-m-d');
    $category = $_POST['category'];
    
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    $image_file = strtolower(strtr($title,$check)) . ".jpg";

    if($_POST['action'] ==='add'){
        // Jika perintah nya add maka akan dilakuakan perintah dibawah ini
        $query = mysqli_query($connect,"INSERT INTO posts SET title='$title', slug='$slug', category='$category' ,user_id='$user_id', body = '$body', date='$date',image = '$image_file'");
        copy($temp,"../../assets/images/posts/" . $image_file);

        header('location: ../posts.php');
    }elseif($_POST['action'] === 'update'){
         // Jika perintah nya update maka akan dilakuakan perintah dibawah ini
        $id = $_POST['id'];
        if(!empty($image)){
            $query = mysqli_query($connect,"UPDATE posts SET title='$title', slug='$slug', category='$category' ,user_id='$user_id', body = '$body', date='$date',image = '$image_file' WHERE id = '$id' ");
            copy($temp,"../../assets/images/posts/" . $image_file);
        }else{
            $query = mysqli_query($connect,"UPDATE posts SET title='$title', slug='$slug', category='$category' ,user_id='$user_id', body = '$body', date='$date' WHERE id = '$id' ");
        }

        header('location: ../posts.php');
    }
}elseif(isset($_GET['action'])){// NETHOD GET DIGUNAKAN UNTUK MENGHAPUS DATA

}else{
    header('location: ../posts.php');
}