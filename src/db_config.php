<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bojler_db";
        $con = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($con,"utf8");
        if ($con->connect_error) 
        {
         die("Connection failed: " . $con->connect_error);
        } 

?>