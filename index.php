<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <title> CamPick </title>
    <link rel="stylesheet" href="./CSS/index.css" type="text/css">
    
</head>

</script>
<body> 
<div class="judul"> 
    <p> Welcome to <br> 
    <b>CamPick<b></p>
</div>
    <div class="login-form">
        <form action="login.php" method="POST"> 
            <h1> Login </h1>
            <div class="input">
                <h5> Username </h5>
                <input class="input" type="text" name="username" id="user"> 
            </div>
            <div class="input">
                <h5> Password </h5>
                <input class="input" type="password" name="password" id="pass"> 
            </div>
            <input type="submit" class="btn-login" value="Login" name="login-button">
            <a href="register-halaman.php" class="btn-register"> Register </a> 
            <a href="#"> Forgot Password?</a>
        </form>
    </div>
</body>

</html>