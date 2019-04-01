<?php
$conn=mysqli_connect("localhost","root","","chemist");
if(!$conn)
{
    die("Connection Error".mysqli_connect_error());
}
session_start();
?>
