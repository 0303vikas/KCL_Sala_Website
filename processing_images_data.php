<?php


    session_start();

    include 'db_connect_info.php';

    $update = false;
    $source = "";
    $comments = "";
    

    if(isset($_POST['save'])){
        $source = $_POST['source'];
        $comments = $_POST['comments'];
       

        $db_connect_info->query("INSERT INTO images (source, comments) VALUES('$source', '$comments')") or die($db_connect_info->error);
        
        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: images_admin.php");
    }

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];

        $db_connect_info->query("DELETE FROM images WHERE id = $id") or die($db_connect_info->error());
    
        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location: images_admin.php");

    }
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $db_connect_info->query("SELECT source, comments FROM images WHERE id = $id") or die($db_connect_info->error());
        if ($result->num_rows){
            $row = $result->fetch_array();
            $source = $row['source'];
            $comments = $row['comments'];
            }
        }
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $source = $_POST['source'];
            $comments = $_POST['comments'];
            
        
            
    
            $db_connect_info->query("UPDATE `images` SET `source` = '$source', `comments` = '$comments' WHERE `id` = $id") or die($db_connect_info->error);
    
            $_SESSION['message'] = "Record has been updated";
            $_SESSION['msg_type'] = "warning";
    
            header("location: images_admin.php");
    }
