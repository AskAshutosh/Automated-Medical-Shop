<?php
include('common.php');
$pid=filter_input(INPUT_POST,'pid');
$phone=filter_input(INPUT_POST,'phone');
$sql='Select * from prescription where id='.$pid.' AND phone="'.$phone.'"';
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==0)
{
    echo "<script>location='login.php?email_error=Wrong Info'</script>";
}
else {
    $row= mysqli_fetch_array($result);
    $_SESSION['id']=$row['id'];
    echo "<script>location='generate.php'</script>";
}