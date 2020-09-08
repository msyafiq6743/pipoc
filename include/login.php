<?php

    // to check if user click the submit / register button (submit btn name)
    if (isset($_POST['login'])) {

        require './dbConfig.php'; // connection to database

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            echo "<script type='text/javascript'>alert('Username is Empty !!!');window.location.href='../index.php';</script>";
            exit();
        }

        else if (empty($password)) {
            echo "<script type='text/javascript'>alert('Password is Empty !!!');window.location.href='../index.php';</script>";
            exit();
        }
        else{
            $sql = "SELECT * FROM user WHERE Username=?";
            $stmt = mysqli_stmt_init($conn);
            
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "<script type='text/javascript'>alert(' SQL Error !!!');window.location.href='../index.php';</script>";
                exit();
            }
            else {
                // mysqli_stmt_bind_param($stmt, "ss", $username, $password);
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    
                    // $passCheck = password_verify($password, $row['password']); // verify password inside database using hash password
                    
                    $passCheck = $password === $row['Password'];

                    if ($passCheck == false) {
                        echo "<script type='text/javascript'>alert('Wrong Password 21231 !!!');window.location.href='../index.php';</script>";
                        exit();
                    }
                    else if ($passCheck == true) {
                        session_start(); // create session
                        $_SESSION['userId'] = $row['id']; // take form database name
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['role'] = $row['Role'];

                        header("Location:../view/home.php");
                        exit();
                    }
                    else {
                        echo "<script type='text/javascript'>alert('Wrong Password 2 !!!');window.location.href='../index.php';</script>";
                        exit();
                    }
                }
                else {
                    echo "<script type='text/javascript'>alert('No User !!!');window.location.href='../index.php';</script>";
                    exit();
                }
            }
        }
    }
    else{
        header("Location:/pipoc21/index.php");
        exit();
    }
