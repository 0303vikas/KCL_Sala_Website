<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "users_list_info";

    $connect_database_users = new mysqli($db_server, $db_user, $db_pass, $db_name) or die(mysqli_error($mysqli));



?>