<?php
    session_start();
    include('config.php');
    extract($_POST);
    mysqli_query($con,"insert into registration values(NULL,'$name','$email','$age','gender')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"insert into login values(NULL,'$id','$email','$password')");
    $_SESSION['user']=$id;
    header('location:index.php');
?>