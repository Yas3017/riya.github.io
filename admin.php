<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="login1.css">
    <link rel="stylesheet" href="BOOTSTRAP/bootstrap.css">
    <script>
        function validation()
        {
            em=document.form.admin.value;
            var em2=/^admin12@gmail.com$/;
            if(em.match(em2)){

            }
            else{
                alert("ENTER VALID EMAIL........");
                return false;
            }
            
        }
        
            
        
    </script>
</head>
<body>
    <div>
    <?php include('message.php'); ?>
        <h1>
            <b>RIYA FASHION DESIGNER</b>
        </h1>
        </div>
        <form  name="form" action="code.php" method="POST">
        <div class="container-fluid">
        <nav>
        <a href="home.php"><b>HOME</a>
        <a href="login1.php"><b>LOGIN</a>
        <a href="takapp.php"><b>TAKE APPOINTMENT</a>
        <a href="gallery.php"><b>GALLERY</a>
        <a href="aboutus.php"><b>ABOUT US</a>
        <a href="contactus.php"><b> CONTACT US</a>
        <a href="admin.php"><b> ADMIN</a>
</nav></div></div> 
        <div>
        <h2 id="yash">  
        </h2>

        <div class="logobox">
        <img src="Photos/logo.png" class="avatar">
        <h1>Admin</h1>
             
            <p>Username</p>
            <input type="text" name="email" placeholder="Enter Admin">
            <p>Password</p>
            <input type="password" name="password" value="" placeholder="Enter Password">
            <input type="submit" name="login_Admin"   onclick="return validation()">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account</a>
            
        </form>
    
    </div>
</body>
</html> 