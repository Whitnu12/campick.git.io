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
        <form action="Register.php" method="POST"> 
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