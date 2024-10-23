<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="sweetshop";

$conn= new mysqli($localhost,$username,$password,$dbname);
if($conn->connect_error){
    die("kết nối lỗi:".$conn->connect_error);
}

// Hàm để lấy thông tin người dùng từ cơ sở dữ liệu

?>