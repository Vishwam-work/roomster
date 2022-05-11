<?php
    $mysqlserverhost = "localhost";
    $database_name = "pg";
    $username_mysql = "root";
    $password_mysql = "";
    
   

        $con = mysqli_connnect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
        if ($con) {
              echo "Connnection successfully mysql: ";
        }
 ?>