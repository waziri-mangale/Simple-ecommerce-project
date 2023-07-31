<?php
$con = new mysqli("localhost", "root", "", "shoedb");
if(!$con){
    die(mysqli_error($con));     
 }
?>