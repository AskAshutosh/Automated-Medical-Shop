<?php
include ('common.php');
if(!isset($_SESSION['id']))
    echo "<script>location='index.php'</script>";
else
{
    session_unset();
    session_destroy();
    echo "<script>location='index.php'</script>";
}
?>