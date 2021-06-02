<?php

    include("config.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['input-barang'])){

        // ambil data dari formulir
        $kode = $_POST['kode_barang'];
        $nama = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $satuan = $_POST['satuan'];

        // buat query
        $sql = "INSERT INTO campick_admin(kode_barang,nama_barang,harga,satuan) VALUE ('$kode', '$nama', '$harga', '$satuan')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: user.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: #?status=gagal');
        }


    } 
    else {
        die("Akses dilarang...");
    }

?>