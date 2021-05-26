<head> 
    <title> CamPick </title>
    <link rel="stylesheet" href="./CSS/index.css" type="text/css">
    
</head>
<script type="text/javascript">
    function validasi(form){
        if(form.user.value,length == 0) { 
            alert("Masukkan username Anda");
            return false;
        }

        if(form.pass.value.length == 0) {
            alert("Masukkan password Anda");
            return false;
        }
        if(form.pass.value.length < 6){
            alert("password harus sedikitnya 6 karakter");
            return false;
        }
        for (var i = 0; i < form.pass.value.length; i ++){
            var ch = form.pass.value.charAt(i);
            if((ch < "A" || ch > "Z") && (ch < "a" || ch > "z") && (ch < "0" || ch > "9")){
                alert("password memuat karakter - karakter ilegal");
                return false;
            }
        }
        return true;
    }
</script>
<body> 
<div class="judul"> 
    <p> Welcome to <br> 
    <b>CamPick<b></p>
</div>
    <div class="login-form">
        <form action="login.php" method="POST" onsubmit="return validasi(this);"> 
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
            <a href="register.html" class="btn-register"> Register </a> 
            <a href="#"> Forgot Password?</a>
        </form>
    </div>
</body>