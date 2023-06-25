<?php


    session_start();

    include 'user_database_connect.php';
    $id = 0;
    $update = false;
    $user_name = "";
    $user_first_name = "";
    $user_last_name = "";
    $user_email = "";
    $user_admin_privilege = "No";


    if(isset($_POST['save'])){
        $user_name = $_POST['user_name'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        if(isset($_POST['check_admin'])){
        $admin_privilege = 1;
        }
        else{
            $admin_privilege = 0;
        }
        $password = $_POST['password'];

        $connect_database_users->query("INSERT INTO users (username, email, password, first_name, last_name, is_admin) VALUES('$user_name', '$email', '$password', '$first_name', '$last_name', '$admin_privilege')") or die($connect_database_users->error);
        
        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: mainAdminUser.php");
    }

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];

        $connect_database_users->query("DELETE FROM users WHERE id = $id") or die($connect_database_users->error());
    
        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location: mainAdminUser.php");

    }
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $connect_database_users->query("SELECT username, first_name, last_name, email, is_admin FROM users WHERE id = $id") or die($connect_database_users->error());
        if ($result->num_rows){
            $row = $result->fetch_array();
            $user_name = $row['username'];
            $user_first_name = $row['first_name'];
            $user_last_name = $row['last_name'];
            $user_email = $row['email'];
            if($row['is_admin'] == 1){
            $user_admin_privilege = "Yes";
            }
        }
    }
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $user_name = $_POST['user_name'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
    
        if(isset($_POST['check_admin'])){
            $is_admin = 1;
        }
        else{
            $is_admin = 0;
        }

        $connect_database_users->query("UPDATE users SET username='$user_name', first_name = '$first_name', last_name = '$last_name', email= '$email', is_admin = '$is_admin' WHERE id = $id") or die($connect_database_users->error);

        $_SESSION['message'] = "Record has been updated";
        $_SESSION['msg_type'] = "warning";

        header("location: mainAdminUser.php");
}
