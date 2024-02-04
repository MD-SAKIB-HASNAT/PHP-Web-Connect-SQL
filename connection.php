<?php
    error_reporting(0);
  
    $conn = mysqli_connect("localhost","root", "","student");

    if($conn){
        echo "Connection OK With MySQL";
    }
    else {
        echo "Connection Failed" .mysqli_connect_error();
    }
?>