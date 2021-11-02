<?php
include("config.php");

if(isset($_POST['regist'])) {
$nama = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

    if($nama == "" || $username == "" || $email == "" || $password == ""){ 
        echo "<script> 
        alert('belum ada data yang anda masukkan!')
        </script>";
    }else{ 
        mysqli_query($koneksi, "INSERT INTO user(name, email, password, username,Role) VALUES ('$nama', '$email', '$password', '$username', 'user')")
        or die("ada kesalahan Dalam query");

        echo "<script> 
        alert('selamat datang $username!') 
        document.location.href = 'Form-login.php'
        </script>";
    }
}else{
    echo "<script> alert('data gagal dijalankan')</script>";
}       
?>