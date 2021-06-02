<?php
    include("config.php");

        if(isset($POST['regist'])){
            $nama = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO user(name,username,email,password) VALUE ('$nama' , '$username', '$email', '$password')";
            $quert = mysqli_query($db, $sql);

            if( $query ){ 
                header('Location: login.php');
            }else{ 
                header('location: register-halaman.php');
            }
            

        } else{ 
            die('location:#?status=gagal');
        }

    ?>