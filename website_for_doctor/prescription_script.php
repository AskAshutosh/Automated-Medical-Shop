<?php
include('common.php');
$date=filter_input(INPUT_GET,'date');
$name=filter_input(INPUT_GET,'name');
$phone=filter_input(INPUT_GET,'phone');
$med1=filter_input(INPUT_GET,'med1');
$quant1=filter_input(INPUT_GET,'quant1');
$desc1=filter_input(INPUT_GET,'desc1');
$med2=filter_input(INPUT_GET,'med2');
$quant2=filter_input(INPUT_GET,'quant2');
$desc2=filter_input(INPUT_GET,'desc2');
$query="INSERT INTO prescription(date,name,phone,med1,quant1,desc1,med2,quant2,desc2) VALUES('$date','$name','$phone','$med1','$quant1','$desc1','$med2','$quant2','$desc2')";
$result= mysqli_query($conn, $query);
if($result)
    echo "<script>location='cart.php'</script>";
?>

