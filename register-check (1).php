<html>
<head>
	<title>Halaman registrasi</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>

<body>
<!-- 
 -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <label><strong>Bookstore online</strong></label>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><strong>SILAHKAN MELAKUKAN REGISTRASI</strong></h3>
  </div>
  <div class="panel-body">
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  
  <strong>Data inputan</strong> anda belum di isi semua, isi kembali. &nbsp;<br/><br/> <a class='btn btn-warning' href='register.php' style='border-radius: 0px'>Kembali</a>
</div>";
		
	} else {
		mysqli_query($mysqli, "INSERT INTO registrasi(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
			or die("Ada kesalahan dalam queri insert silahkan periksa kembali.");
			
		echo "<div class='alert alert-success alert-dismissible' role='alert'>
  
  <strong>Terimakasih</strong> data anda berhasil disimpan. &nbsp;<br/><br/> <a class='btn btn-success' href='./viewproduct/index.php' style='border-radius: 0px'>Sign in</a>
</div>";
	}
} else {}
?>
	<form name="form1" method="POST" action="">
  <div class="form-group">
    <label for="name">Nama :</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Alamat email :</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
   <div class="form-group">
    <label for="username">Masukan username :</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
   <div class="form-group">
    <label for="password">password :</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary pull-right" style='border-radius: 0px'>Simpan</button>
</form>
<?php
}
?>
</div>
</div>
</div>
</div>
</body>
</html>
