<?php

require_once("./config.php");

if(isset($_POST["btn-register"])){

    // filter data yang diinputkan
    $Nama_lengkap = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $Username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $assword = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO user (Nama_lengkap, Username, Email, Password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $Nama_lengkap,
        ":username" => $Username,
        ":password" => $Password,
        ":email" => $Email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>