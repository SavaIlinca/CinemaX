<?php
session_start();

$_SESSION['movie']=$_GET['movie'];
if(isset($_SESSION['user']))
{
    header('location:reservation.php');
}
else
{
    header('location:login.php');
}
?>