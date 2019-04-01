<?php
include ('common.php');
if(!isset($_SESSION['id']))
    echo "<script>location='login.php'</script>";
else
{
    session_unset();
    session_destroy();
    $query="update loggedin set checkif=0";
    $result=mysqli_query($conn, $query);
    echo "<script>location='login.php'</script>";
}
?>