<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Campick </title>
        <link rel="stylesheet" href="./CSS/HU.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    </head>

    <body>

    <div class="navbar">
        <ul>
            <li> <a href="Form-Login.php"> Login </a> </li>    
            <li> <a href="aboutUs.html">About us</a></li>
            <li> <a href="galeri.php">Galeri</a></li>
            <li> <a href="#">Product</a> </li>
            <li> <a href="#" class="active1">Home</a></li>
            <li style="float: left; padding-left:20px ; margin: 10px;"> <img src="./IMG/Logo Campick .png" id="logo"></li>
        </ul>
    </div>
    <div class="header">
        <div class="title">
            <h3> Welcome To </h3>
            <h1> CamPick </h1>
            <a href="index.php"><strong>Join Us!</strong></a>
            <a href="#">take a Tour!</a> 
        </div>
    </div>

    <div class="feature">
        <h1> Alat Dan Bahan Lengkap! </h1>
            <img align="right" style="padding-right: 0px; padding-left:20px;" width="350px" src="./IMG/camping-hiking-equipment-cartoon-icon-illustration-nature-recreation-icon-concept_138676-2114.jpg">             
        <p> Maecenas bibendum blandit lorem, et mattis mauris semper nec. Vivamus fringilla enim tellus, sed facilisis dui convallis in. Nulla et nisi eget elit aliquam tempor. Duis nisi urna, dignissim ac lorem ut, dictum ultricies ex. Nullam rhoncus sapien eget mauris tempus viv</p>     
    </div>
    <div class="image-container">

        <div class="slide"> 
            <img src="./IMG/Tenda.jpg" style="width:100%"> 
            <div class="text"> Tenda </div> 
        </div> 

        <div class="slide"> 
            <img src="./IMG/Matras.jpg" style="width:100%"> 
            <div class="text"> Matras </div> 
        </div> 

        <div class="slide"> 
            <img src="./IMG/Sleeping-Bag.jpg" style="width:100%"> 
            <div class="text"> Sleeping Bag </div> 
        </div> 
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div> 
    <br> 

    <div style="text-align:center"> 
        <span class="dot" onclick="currentSlide(1)"></span>  
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> 

    <script src="./js/slide.js">
    </script>

<div class="desc-par2"> 
<img src=IMG\kisspng-checklist-digital-estate-planning-marketing-requir-vector-notebook-5a8e2a3cb42843.0068702015192663647379.png>
<h1> Syarat yang Mudah! </h1><br>
<p> Persyaratan Untuk meminjam Perlengkapan camping sangat mudah <br> 
Cukup dengan : <br><br>
KTP ✔<br>
Nomor Handphone ✔ <br>
DP 50% Dari Total Harga ✔<br> 
<br>
Kalian Sudah Bisa Menggunakan Alat Alat Camping Yang 
masih Mulus dan Baru!
 </p>
</div>

<div class="call">
    <a href="https://wa.me/081337391723">
    <img src="/campick/IMG/whatsapp.svg"> </a>
        <div class="show"> 
            <p> Butuh bantuan? </p>
        </div> 
</div>
</body>

    <div class="footer"> 
        <div class="container1">
             <h1> Ayo Booking Sekarang! </h1> 
             <a href="#"> Booking! </a> 
        </div> 
        <div class="container2">  
            <p id="p1"> ©Campick - 2021 </p> 
            <p id="p2"> Penyewaan Alat Camping Termurah di Jogja </p>  
    </div>

</html> 
