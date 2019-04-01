<?php
include('common.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prescription</title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION['id']))
            echo "<script>location='index.php'</script>";
        else
            include('header.php');
        ?>
        <div class="container-fluid" style="padding:0;">
            <div class="row mt-3">
                    <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3">
                        <h2>Prescription</h2>
                        <form action="prescription_script.php" method="get">
                            <div class="form-group">
                                <input type="date" placeholder="Date" name="date"  required="required">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required="required">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone" name="phone"  required="required">
                            </div>
                            <h6>Medicine 1</h6>
                            <select class="custom-select form-group form-control" name="med1">
				<option selected></option>
				<option value="Paracetamol">Paracetamol</option>
				<option value="Azithromycin">Azithromycin</option>
				<option value="Domperidone">Domperidone</option>
                            </select>
                            <div class="form-group">
                                <input class="form-control" placeholder="Quantity" name="quant1"  required="required" type='number'>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Medicine Description" name="desc1"  required="required">
                            </div>
                            <h6>Medicine 2</h6>
                            <select class="custom-select form-group form-control" name="med2">
				<option selected></option>
                                <option value="Paracetamol">Paracetamol</option>
				<option value="Azithromycin">Azithromycin</option>
				<option value="Domperidone">Domperidone</option>
                            </select>
                            <div class="form-group">
                                <input class="form-control" placeholder="Quantity" name="quant2" type='number'>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Medicine Description" name="desc2">
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