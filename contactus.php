<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="con1.css">
    <link rel="stylesheet" href="BOOTSTRAP/bootstrap.css">
</head>
<body>
<?php include('message.php'); ?>

    <div>
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
    <div class="yash">
    <div class="container">
        <figure>
            <h7>Contact Us</h7>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam totam iure vitae nesciunt quaerat sed, et ullam placeat ut? Impedit dolorem nostrum itaque molestias nemo delectus animi fuga illum magnam earum pariatur reiciendis, explicabo id velit facilis, necessitatibus cum! Magnam.</p>
        </figure>
        <div class="content">
            <div class="content-form">
                <section>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2>Address</h2>
                    <p>
                        Lorem ipsum dolor sit. <br>
                        Lorem, ipsum dolor. <br>
                        lorem
                    </p>
                </section>

                <section>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2>Phone</h2>
                    <p>123-456-78901548</p>
                </section>

                <section>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2>E-mail</h2>
                    <p>dghdgqd@temporary.net</p>
                </section>
            </div>
        </div>

      <form>
        <div class="form">
            <div class="right">
              <div class="contact-form">
                  <input type="text" name="fn" required>
                  <span>Full Name</span>
              </div>
  
              <div class="contact-form">
                  <input type="E-mail"  name="email" required>
                  <span>E-mail Id</span>
              </div>
              <div class="contact-form">
                  <input type="text" name="details">
                    
            
                  <span> Type your Message....</span>
              </div>
  
              <div class="contact-form">
                  <input type="submit" name="contact">
              </div>
              </div>
            </div>
          </div>
    </form>
        
        <div class="empty">

        </div>
    </div>
    </div> 
</body>
</html> 