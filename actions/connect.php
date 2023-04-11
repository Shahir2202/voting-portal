<?php
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password,'voting system');
    if(!$con){
        die(mysqli_error($con));
    }
?>
