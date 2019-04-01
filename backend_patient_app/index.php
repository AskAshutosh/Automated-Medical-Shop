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
        <title>Login</title>
    </head>
    <body>
        <?php
        if(isset($_SESSION['id'])){
        echo "<script>location='generate.php'</script>";
        }
        ?>
        <?php
        include('header.php');
        ?>
        <div class="container-fluid" style="padding:0;">
            <div class="row mt-5">
                    <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3">
                          <div class="card">
                              <div class="card-header"><h1>Find Prescription</h1></div>
                              <div class="card-body">
                                  <form method="post" action="login_script.php">
                                    <div class="form-group">
                                        <label for="pid">Patient ID:</label>
                                        <input class="form-control" id="pid" required="required" name="pid">
                                        <div><p style="color:red;"><?php echo filter_input(INPUT_GET,'email_error');?></p></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                    <input class="form-control" id="phone" required="required" name="phone">
                                    <div><?php echo filter_input(INPUT_GET,'password_error');?></div>
                                    </div>
                                    <div class="form-group form-check">

                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Find</button>
                                    </form>
                              </div> 
                           </div>
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