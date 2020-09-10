<?php

    if (isset($_POST['editUser'])) {

        require './dbConfig.php'; // connection to database

        // variable ---- input name
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $role = $_POST['role'];

        if (empty($username)) {
            echo "<script type='text/javascript'>alert('Username is Empty !!!');window.location.href='/pipoc/view/user.php';</script>";
            exit();
        }
        else if (empty($password)) {
            echo "<script type='text/javascript'>alert('Password is Empty !!!');window.location.href='/pipoc/view/user.php';</script>";
            exit();
        }
        else if (empty($password2)) {
            echo "<script type='text/javascript'>alert('Conform Password is Empty !!!');window.location.href='/pipoc/view/user.php';</script>";
            exit();
        }
        else if (empty($role)) {
            echo "<script type='text/javascript'>alert('Role is Empty !!!');window.location.href='/pipoc/view/user.php';</script>";
            exit();
        }
        else if ($password !== $password2) {
            echo "<script type='text/javascript'>alert('Password and Conform Password Not Match Empty !!!');window.location.href='/pipoc/view/user.php';</script>";
            exit();
        }
        else {
            $sql = "UPDATE user SET Username=?, Password=?, Role=? WHERE id=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "<script type='text/javascript'>alert('SQL Error !!!');window.location.href='/pipoc/view/user.php';</script>";
                exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "sssi", $username, $password, $role, $id);
                        mysqli_stmt_execute($stmt);
                        echo "<script type='text/javascript'>alert('Successfull Update !!!');window.location.href='/pipoc/view/user.php';</script>";
                        exit();
                        }
            }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("Location:/pipoc/view/user.php");
        exit();
    }