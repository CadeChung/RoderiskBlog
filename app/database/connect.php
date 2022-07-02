<?php
    
$host = "localhost";
$users = "root";
$pass = 'Kdais@123';
$db_name = 'blog';

$conn = mysqli_connect($host, $users, $pass, $db_name);

if ($conn -> connect_error){
    die("Database connection error:" . $conn ->connect_error);
}else{
    echo "Database connection sucessful!!";
}