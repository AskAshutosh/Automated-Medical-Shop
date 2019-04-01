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
        <title>Cart</title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION['id']))
            echo "<script>location='index.php'</script>";
        else
            include('header.php');
        ?>
        <div class="container-fluid mb-5 pb-5" style="padding:0;">
            <div class="row mt-5 pt-5 mb-4">
                    <div class="col-md-6 offset-md-3">
                        <?php 
                            $sql='Select id from prescription order by id desc limit 1';
                            $result= mysqli_query($conn, $sql);
                            $row= mysqli_fetch_array($result);
                            $uid=$row['id'];
                        ?>
                        <h4>Patient ID: <?php echo $uid;?> </h4>
                          <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Medicine Name</th>
                                    <th>Quantity</th>
                                    <th>Desc.</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                /*$uid=$_SESSION['id'];*/
                                $query="SELECT * from prescription order by id desc limit 1";
                                $result=mysqli_query($conn, $query);
                                $num_rows= mysqli_num_rows($result);
                                $row= mysqli_fetch_array($result);
                                $sno=0;
                                if($num_rows==0)
                                {
                                    echo'<p style="color:red;">Add medicines to the cart first!</p>';
                                }
                                else
                                {
                                        $sno=$sno+1;
                                        ?> 
                                <tr>
                                    <td><?php echo"$sno"?></td>
                                    <td><?php echo"{$row['med1']}"?></td>
                                    <td><?php echo"{$row['quant1']}"?></td>
                                    <td><?php echo"{$row['desc1']}"?></td>
                                    <td></td>
                                </tr>
                                <?php
                                 if($row['med2']!="")
                                 {
                                     $sno=$sno+1;
                                ?>
                                <tr>
                                    <td><?php echo"$sno"?></td>
                                    <td><?php echo"{$row['med2']}"?></td>
                                    <td><?php echo"{$row['quant2']}"?></td>
                                    <td><?php echo"{$row['desc2']}"?></td>
                                    <td></td>
                                </tr>
                                <?php
                                }
                                }
                                if($num_rows!=0){
                                ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><p style="visibility:hidden">My name is Pratik Ranjan</p></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                          </table>
                        <div class='ml-5 pl-5'>
                        <?php
                            $str1="<a rel='nofollow' href='http://www.qrcode-generator.de' border='0' style='cursor:default'></a><img src='https://chart.googleapis.com/chart?cht=qr&chl=";
                            $str2=$row['name'];
                            $str3="%2C";
                            $str4=" ";
                            $str5=$row['date'];
                            $str6="doctor";
                            $str7=$row['med1'];
                            $str8=$row['desc1'];
                            $str9=$row['quant1'];
                            $str10=$row['med2'];
                            $str11=$row['desc2'];
                            $str12=$row['quant2'];
                            $str13="%24";
                            $str14="&chs=360x360&choe=UTF-8&chld=L|2' alt=''>";
                            echo $str1.$str2.$str3.$str4.$str3.$str5.$str3.$str6.$str3.$str7.$str3.$str8.$str3.$str9.$str3.$str10.$str3.$str11.$str3.$str12.$str13.$str14;
                        ?>
                        </div>
                    </div>
            </div>
        </div>
        
        <div class="container-fluid mt-5 pt-5" style="padding:0;">
            <div class="row mt-5 pt-5">
                <div class="col-12 mt-5">
                    <footer>
                        <p align="center" class="foot">Copyright © Team ArrayS, SRMIST- Delhi- NCR Campus | Contact: 9693371403</p>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
        