<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "crud";

    $connect_database_crud = new mysqli($db_server, $db_user, $db_pass, $db_name) or die(mysqli_error($mysqli));



?>