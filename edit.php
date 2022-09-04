<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Customer Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $cust_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cust WHERE id='$cust_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $customer = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="cust_id" value="<?= $customer['id']; ?>">

                                    <div class="mb-3">
                                        <label>FirstName</label>
                                        <input type="text" name="fname" value="<?=$customer['fname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>LastName</label>
                                        <input type="text" name="lname" value="<?=$customer['lname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gender</label>
                                        <input type="text" name="gender" value="<?=$customer['gender'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ContactNo</label>
                                        <input type="text" name="no" value="<?=$customer['no'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Timing</label>
                                        <input type="text" name="time" value="<?=$customer['time'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$customer['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?=$customer['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="text" name="password" value="<?=$customer['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_customer" class="btn btn-primary">
                                            Update Customer
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>