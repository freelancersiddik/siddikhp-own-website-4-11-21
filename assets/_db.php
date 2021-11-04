<?php
    $server ="localhost";
    $username ="root";
    $password ="";
    $databse ="siddikhp";
    $conn = mysqli_connect($server,$username,$password,$databse);
    if(!$conn){
        echo "Database Not Connected Properly";
    }
