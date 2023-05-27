<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "blog";
$connect = mysqli_connect($host,$user,$password,$db);
