<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="BOOTSTRAP/bootstrap.css">
</head>
<body>
    <div>
    <h1>
        <b>RIYA FASHION DESIGNER</b>
    </h1>
    </div>

 
      

    <div class="container-fluid">
    <nav>
        <a  href="home.php"><b>HOME</a>
        <a href="login1.php"><b>LOGIN</a>
        <a href="takapp.php"><b>TAKE APPOINTMENT</a>
        <a href="gallery.php"><b>GALLERY</a>
        <a href="aboutus.php"><b>ABOUT US</a>
        <a href="contactus.php"><b> CONTACT US</a>
        <a href="admin.php"><b> ADMIN</a>
         
    </nav></div></div> 
    <div>
    <h2 id="yash">
        <div class="magic"> 
        <span style="color: rgb(206, 197, 197);font-family:Georgia, 'Times New Roman', Times, serif;"><b>We Make <br>Cloths<br> </span>
           </div>
            <div class="magic1">
               <span style="color: rgb(206, 197, 197);font-family:Georgia, 'Times New Roman', Times, serif;"><b>That Suit<br>You</br></span>
        </div> 
        
    </h2>
    </div>
      <div class="slider-frame"> 
        <div id="sldie-images">  
            
                <img src="Photos/men/m1.jpg"  >
            
                <img  src="Photos/men/m2.png" >
           
                <img src="Photos/women/w1.png" >
           
                <img src="Photos/women/w2.png" >
            </div>
         </div>
         <div class="indicators">
            <span id="btn1" class="active"></span>
            <span id="btn2"></span>
            <span id="btn3"></span>
            <span id="btn4"></span>
        </div>
    </div>

   
    <script>

        var slide = document.getElementById("sldie-images");
        var btn1 = document.getElementById('btn1');
        var btn2 = document.getElementById('btn2');
        var btn3 = document.getElementById('btn3');
        var btn4 = document.getElementById('btn4');

        btn1.onclick = function () {
            slide.style.transform = "translateX(0px)";
            btn1.classList.add('active');
            btn2.classList.remove('active');
            btn3.classList.remove('active');
            btn4.classList.remive('active');
        };
        btn2.onclick = function () {
            slide.style.transform = "translateX(-100%)";
            btn1.classList.remove('active');
            btn2.classList.add('active');
            btn3.classList.remove('active');
            btn4.classList.remove('active');
        };
        btn3.onclick = function () {
            slide.style.transform = "translateX(-200%)";
            btn1.classList.remove('active');
            btn2.classList.remove('active');
            btn3.classList.add('active');
            btn4.classList.remove('active');
        };
        btn4.onclick = function () {
            slide.style.transform = "translateX(-300%)";
            btn1.classList.remove('active');
            btn2.classList.remove('active');
            btn3.classList.remove('active');
            btn4.classList.add('active');
        };
    
    </script>

     
</body>
</html>