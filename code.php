<?php
session_start();
require 'dbcon.php';
$errors = array();
if(isset($_POST['delete_customer']))
{
    $cust_id = mysqli_real_escape_string($con, $_POST['delete_customer']);
    $query = "DELETE FROM cust WHERE id='$cust_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_customer']))
{
     
    $cust_id = mysqli_real_escape_string($con, $_POST['cust_id']);

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $no = mysqli_real_escape_string($con, $_POST['no']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    $query = "UPDATE cust SET fname='$fname',lname='$lname',gender='$gender',no='$no',time='$time',address='$address',email='$email',password='$password' WHERE id='$cust_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_customer']))
{
     

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $no = mysqli_real_escape_string($con, $_POST['no']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO cust (fname,lname,gender,no,time,address,email,password) VALUES ('$fname','$lname','$gender','$no','$time','$address','$email','$password')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Customer Register Successfully! Now You Can Login";
        header("Location: takapp.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: takapp.php");
        exit(0);
    }
}
if(isset($_POST['login_user']))
{
     

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query ="SELECT * FROM cust WHERE email = '$email' and password = '$password'";    

    $query_run = mysqli_query($con, $query);
    
    if (mysqli_num_rows($query_run) == 1)
    {
         
            
  	        $_SESSION['email'] = $email;
  	        $_SESSION['message'] = "You Are Now Logged In Check Your Details";
  	        header('location: index.php');
        exit(0);
    
    }
      else 
      {
        $_SESSION['message'] = "Not Login Check Your Email or Password ";
        header("Location: login1.php");
        exit(0);
  	}
}
if(isset($_POST['login_Admin']))
{
     

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query ="SELECT * FROM cust WHERE email = '$email' and password = '$password'";    

    $query_run = mysqli_query($con, $query);
    
    if (mysqli_num_rows($query_run) == 1)
    {
         
            
  	        $_SESSION['email'] = $email;
  	        $_SESSION['message'] = "Admin Logged";
  	        header('location: index1.php');
        exit(0);
    
    }
      else 
      {
        $_SESSION['message'] = "Not Login Check Your Email or Password ";
        header("Location: admin.php");
        exit(0);
  	}
}
     
if(isset($_POST['contact']))
{
     

    $fn = mysqli_real_escape_string($con, $_POST['fn']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $details= mysqli_real_escape_string($con, $_POST['details']);

    $query = "INSERT INTO about (fn,email,details) VALUES ('$fn','$email','$details')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Your Request Generated";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Request Not Generate";
        header("Location: contactus.php");
        exit(0);
    }
}
?>
