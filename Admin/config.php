<?php

    $server = "localhost";
    $user = "whitnu";
    $password = "nastain123";
    $nama_database = "campick_admin";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>