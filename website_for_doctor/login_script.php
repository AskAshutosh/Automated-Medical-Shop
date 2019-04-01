<?php
include('common.php');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$password=md5($password);
$sql='Select id,email,password from users where email="'.$email.'"';
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==0)
{
    echo "<script>location='login.php?email_error=Email id not found'</script>";
}
else {
$row= mysqli_fetch_array($result);
if($password==$row["password"]){
    $_SESSION['id']=$row['id'];
    echo "<script>location='prescription.php'</script>";
}
 else
 {
     echo "<script>location='login.php?password_error=Wrong Password'</script>";
 }
}
?>