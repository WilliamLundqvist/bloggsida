<?php 
        session_start();

        // connect to databasen
        $conn = mysqli_connect("localhost", "root", "", "bloggsida");
       
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

        define ('ROOT_PATH', realpath(dirname(__FILE__)));
        define('BASE_URL', 'http://localhost/bloggsida/');
?>
