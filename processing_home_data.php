<?php


    session_start();

    include 'db_connect_info.php';

    $update = false;
    $information = "";
    $comments = "";
    

    if(isset($_POST['save'])){
        $information = $_POST['information'];
        $comments = $_POST['comments'];
       

        $db_connect_info->query("INSERT INTO homepage_data (information, comments) VALUES('$information', '$comments')") or die($db_connect_info->error);
        
        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: home_admin.php");
    }

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];

        $db_connect_info->query("DELETE FROM homepage_data WHERE id = $id") or die($db_connect_info->error());
    
        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location: home_admin.php");

    }
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $db_connect_info->query("SELECT information, comments FROM homepage_data WHERE id = $id") or die($db_connect_info->error());
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
            
        
            
    
            $db_connect_info->query("UPDATE homepage_data SET information = '$information', comments = '$comments' WHERE id = $id") or die($db_connect_info->error);
    
            $_SESSION['message'] = "Record has been updated";
            $_SESSION['msg_type'] = "warning";
    
            header("location: home_admin.php");
    }
    