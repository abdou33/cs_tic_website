<?php

            $servername = "127.0.0.1";
            $username = "root";
            $password = "stores33";
            $dbname = "cs_club";
                
            //connect
            $connect = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if ($connect->connect_error) {
                die("Connection failed: " . $connect->connect_error);
            }
            echo '<script>console.log("connected successfully");</script>';
?>