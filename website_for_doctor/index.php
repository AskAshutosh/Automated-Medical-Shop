<?php
include('common.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>
    </head>
    <body>
        <?php
        if(isset($_SESSION['id']))
        {
            echo "<script>location='prescription.php'</script>";
        }
        ?>
        <?php
        include('header.php');
        ?>
        <div class="container-fluid" style="padding:0;">
            <div class="row mt-3">
                    <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3">
                        <h2>SIGN UP (Doctor)</h2>
                        <div><p style="color:red"><?php echo filter_input(INPUT_GET,'database_error')?></p></div>
                        <form action="signup_script.php" method="post">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "required">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "required">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "required">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        <div class="container-fluid"style="padding:0;">
            <div class="row mt-5 pt-5">
                <div class="col-12">
                    <footer>
                        <p align="center" class="foot">Copyright © Team ArrayS, SRMIST- Delhi- NCR Campus | Contact: 9693371403</p>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>