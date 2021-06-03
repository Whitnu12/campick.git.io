<?php 

session_start();
 
include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

    if($cek > 0){

    $data = mysqli_fetch_assoc($login);
        if($data['Role']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['Role'] = "admin";

            echo "<script>
                alert('Selamat datang $username!')
                document.location.href = '/campick/admin/user.php'
                </script>
                ";
        }else if($data['Role']=="user"){ 
            $_SESSION['username'] = $username;
            $_SESSION['Role'] = "user";

            echo "<script>
                alert('Selamat datang $username!')
                document.location.href = 'index.php'
                </script>
                ";
        }else{
            echo "<script>
                alert('Anda Belum Memiliki Akun')
                document.location.href = 'Form-Login.php?login=gagal'
                </script>
                ";
            }
    }        
    
?>