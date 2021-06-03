<?php

    include("config.php");

    $kodebarang = $_GET['kode_barang']; 
    
    // buat query hapus
    $sql = "DELETE FROM campick_admin WHERE kode_barang=$kodebarang";
    $query = mysqli_query($db, $sql);

        // apakah query hapus berhasil?
    if( $query ){
        header('Location: user.php?sukses');
    } else {
        die("Gagal menghapus...");
    }

?>