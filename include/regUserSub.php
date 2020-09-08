<?php

    // to check if user click the submit / register button (submit btn name)
    if (isset($_POST['regUser'])){

        require './dbConfig.php'; // connection to database

        // variable ---- input name
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

        // check the password with conform password
        else if ($password !== $password2) {
            echo "<script type='text/javascript'>alert('Password and Conform Password Did Not Match !!!');window.location.href='/pipoc/view/user.php';</script>";
            exit();
        }

        // check if username already exist
        else {
            $sql = "SELECT username FROM user WHERE Username=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "<script type='text/javascript'>alert('SQL error!!!');window.location.href='/pipoc/view/user.php';</script>";
                exit();
            }
            else{ // s = string
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0) {
                    echo "<script type='text/javascript'>alert('Username Already Exist !!!');window.location.href='/pipoc/view/user.php';</script>";
                    exit();
                }
                else{ // insert value to database --- name inside database ---
                    $sql = "INSERT INTO user (Username, Password, Role) VALUES (?,?,?)";
                    mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "<script type='text/javascript'>alert('Unseccesfull !!!');window.location.href='/pipoc/view/user.php';</script>";
                        exit();
                    }
                    else{
                        // to make password more secure
                        // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sss", $username, $password, $role);
                        mysqli_stmt_execute($stmt);
                        echo "<script type='text/javascript'>alert('Successfull Registered New User !!!');window.location.href='/pipoc/view/user.php';</script>";
                            exit();
                    }
                }
            }
        
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
        else{
            header("Location:/pipoc/view/user.php");
            exit();
        }