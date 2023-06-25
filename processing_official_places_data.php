<?php


    session_start();

    include 'db_connect_info.php';

    $update = false;
    $information = "";
    $comments = "";
    

    if(isset($_POST['save'])){
        $information = $_POST['information'];
        $comments = $_POST['comments'];
       

        $db_connect_info->query("INSERT INTO official_places_data (information, comments) VALUES('$information', '$comments')") or die($db_connect_info->error);
        
        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: official_places_admin.php");
    }

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];

        $db_connect_info->query("DELETE FROM official_places_data WHERE id = $id") or die($db_connect_info->error());
    
        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location: official_places_admin.php");

    }
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $db_connect_info->query("SELECT information, comments FROM official_places_data WHERE id = $id") or die($db_connect_info->error());
        if ($result->num_rows){
            $row = $result->fetch_array();
            $information = $row['information'];
            $comments = $row['comments'];
            }
        }
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $information = $_POST['information'];
            $comments = $_POST['comments'];
            
        
            
    
            $db_connect_info->query("UPDATE `official_places_data` SET `information` = '$information', `comments` = '$comments' WHERE `id` = $id") or die($db_connect_info->error);
    
            $_SESSION['message'] = "Record has been updated";
            $_SESSION['msg_type'] = "warning";
    
            header("location: official_places_admin.php");
    }
