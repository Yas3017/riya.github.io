<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>TAKE APPOINTMENT</title>
    <link rel="stylesheet" href="take.css">
    <link rel="stylesheet" href="BOOTSTRAP/bootstrap.css">
    <script>
        function validation()
        {
            r1=document.form.fname.value;
            var d1=/^[a-zA-Z]+$/;
            if(r1.match(d1))
            {

            }
            else{
                alert("Enter Valid FirstName.........");
                return false;
            }
            r2=document.form.lname.value;
            var d2=/^[a-zA-Z]+$/;
            if(r2.match(d2))
            {

            }
            else{
                alert("ENTER VALID LastName.........");
                return false;
            }
            

            r4=document.form.no.value;
            var r5=/^[0-9]+$/;
            if(r4.match(r5) && r4.length == 10){

            }
            else{
                alert("ENTER VALID NUMBER.........")
                return false;
            }

            em=document.form.email.value;
            var em2=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
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
        <h1>Registration YourSelf</h1>
            
            <p><b>FirstName</p>
            <input type="text" name="fname" placeholder="Enter FirstName">
            <p><b>LastName</p>
            <input type="text" name="lname" placeholder="Enter LastName">
            <p><b>Gender</p>
            <input type="radio" name="gender" value="male">Male 
            <input type="radio" name="gender" value="female">Female
            <p><b>ContactNo</p>
            <input type="text" name="no" placeholder="Enter ContactNo">
            <p>Timing</p>
            <input type="time" name="time" >
            <p><b>Addresss</p>
            <input type="text" name="address" placeholder="Enter Address">
            <p><b>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p><b>Passsword</p>
            <input type="password" name="password" placeholder="Enter Password"  >
            <input type="submit" name="save_customer" value="Register" onclick="return validation()">
            <input type="submit" name="" value="Reset" >
            <a href="#">Any Query Click Here</a><br>
            <a href="#"></a>
            
        
    </form>
    </div>
</body>
</html> 