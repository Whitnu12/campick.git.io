<?php 

    include("config.php");
    
    if(isset($_POST["login-button"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    
        $data = mysqli_query($db, $sql);
        $cek = mysqli_num_rows($data);
        
        if($cek > 0){
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