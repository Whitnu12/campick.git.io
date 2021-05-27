<?php 

    include("./config.php");
    
    if(isset($_POST["login-button"])) {
        // menangkap data yang dikirim dari form
        $Username = $_POST['username'];
        $Password = $_POST['password'];
    
        $sql = "SELECT * FROM user WHERE username='$Username, $Email' AND password='$Password'";
    
        $data = mysqli_query($db, $sql);
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($data);
        
        if($cek > 0){
            header("location: halamanUtama.php");
        }else{
            header("location: index.php?pesan=gagal");
        }

    }
?>