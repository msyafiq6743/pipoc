<?php

    if (isset($_POST['delete'])) {

        require './dbConfig.php'; // connection to database

        $id = $_POST['id'];
        
        if (empty($id)) {
            echo "<script type='text/javascript'>alert('user Id Not Found !!!');window.location.href='/pipoc/view/user.php';</script>";
            exit();
        }
        else {
            $sql = "DELETE FROM user WHERE id=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "<script type='text/javascript'>alert('SQL Error !!!');window.location.href='/pipoc/view/user.php';</script>";
                exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "i", $id);
                        mysqli_stmt_execute($stmt);
                        echo "<script type='text/javascript'>alert('Successfull Delete !!!');window.location.href='/pipoc/view/user.php';</script>";
                        exit();
                        }
        }
    } 
    else{
        header("Location:/pipoc/view/user.php");
        exit();
    }
