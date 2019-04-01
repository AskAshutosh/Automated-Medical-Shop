<?php
include('common.php');
$pid=filter_input(INPUT_GET,'pid');
$sql='Select * from prescription where id="'.$pid.'"';
$result= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($result);
echo $row['date'].",";
echo $row['name'].",";
echo $row['med1'].",";
echo $row['desc1'].",";
echo $row['quant1'].",";
echo $row['med2'].",";
echo $row['desc2'].",";
echo $row['quant2'];
?>
