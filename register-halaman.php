<?php

require_once("config.php");

if(isset($_POST['regist'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO user (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: index.php");
}

?>


<head> 
    <title> CamPick </title>
    <link rel="stylesheet" href="./CSS/regist.css" type="text/css">
</head>
<body> 
<div class="judul"> 
    <p> Welcome to <br> 
    <b>CamPick<b></p>
</div>
    <div class="login-form">
        <form action="" method="POST"> 
            <h1> Register </h1>
            <div class="input">
                <h5> Name </h5>
                <input class="input" type="text" name="name"> 
            </div>
            <div class="input">
                <h5> Username </h5>
                <input class="input" type="text" name="username"> 
            </div>
            <div class="input">
                <h5> Email </h5>
                <input class="input" type="email" name="email"> 
            </div>
            <div class="input">
                <h5> Password </h5>
                <input class="input" type="password" name="password" required> 
            </div>
            <input type="submit" class="btn-register" value="register" name="regist">
        </form>
    </div>
</body>