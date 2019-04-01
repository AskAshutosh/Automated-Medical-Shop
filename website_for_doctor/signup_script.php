<?php
include('common.php');
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$password=md5($password);
$contact=filter_input(INPUT_POST,'contact');
$city=filter_input(INPUT_POST,'city');
$address=filter_input(INPUT_POST,'address');
$sql="select email from users where email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
    echo "<script>location='index.php?database_error=Email id already exists'</script>";
else{
$sql="insert into users (name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
$result= mysqli_query($conn, $sql);
if($result)
    $_SESSION['id']= mysqli_insert_id($conn);
echo "<script>location='prescription.php'</script>";}
?>
