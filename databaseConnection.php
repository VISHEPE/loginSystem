<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'last1';

    $conn = mysqli_connect($servername,$username,$password,$db);
    // Check connection
    if (!$conn){
         die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    
?>
