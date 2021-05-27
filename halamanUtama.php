<head> 
    <title> Campick </title>
    <link rel="stylesheet" href="./CSS/HU.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>
    
<div class="navbar">
    <ul>
        <li> <a href="index.php"> Login </a> </li>    
        <li> <a href="#">About us</a></li>
        <li> <a href="#">Galeri</a></li>
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


</body>