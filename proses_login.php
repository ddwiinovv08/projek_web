<?php
include("koneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($koneksi, "select * from tb_user where username='$username'");
$jumlah_data = mysqli_num_rows($query);

if($jumlah_data > 0){
    $data = mysqli_fetch_array($query);
 
    if(password_verify($password, $data['password'])){
        session_start();
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        if($data['role'] == "admin"){
            header("location:hal_admin.php");
        }else if($data["role"] == "user"){
            header("Location:index.php"); 
        } 
    }else{
        header("Location:login.php?error=username atau password salah");
    }
}else{
    header("Location:login.php?error=username atau password salah");
}