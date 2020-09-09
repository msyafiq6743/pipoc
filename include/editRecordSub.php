<?php

    if (isset($_POST['update'])) {

        require './dbConfig.php'; // connection to database

        // variable ---- input name
        $id = $_POST['id'];
        $barCode = strtoupper($_POST['barCode']);
        $regDate = $_POST['regDate'];
        $fName = ucwords($_POST['fName']);
        $inSector = $_POST['inSector'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        if (empty($barCode)) {
            echo "<script type='text/javascript'>alert('Bar Code is Empty !!!');window.location.href='/pipoc/view/record.php';</script>";
            exit();
        }
        else if (empty($regDate)) {
            echo "<script type='text/javascript'>alert('Registration Date is Empty !!!');window.location.href='/pipoc/view/record.php';</script>";
            exit();
        }
        else if (empty($fName)) {
            echo "<script type='text/javascript'>alert('Full Name is Empty !!!');window.location.href='/pipoc/view/record.php';</script>";
            exit();
        }
        else if (empty($inSector)) {
            echo "<script type='text/javascript'>alert('Industry is Empty !!!');window.location.href='/pipoc/view/record.php';</script>";
            exit();
        }
        else if (empty($country)) {
            echo "<script type='text/javascript'>alert('Countryis Empty !!!');window.location.href='/pipoc/view/record.php';</script>";
            exit();
        }
        else if (empty($email)) {
            echo "<script type='text/javascript'>alert('Email is Empty !!!');window.location.href='/pipoc/view/record.php';</script>";
            exit();
        }
        else {
            $sql = "UPDATE visitor21 SET BarCode=?, RegDate=?, Fname=?, InSector=?, Country=?, Email=?, Role=? WHERE id=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "<script type='text/javascript'>alert('SQL Error !!!');window.location.href='/pipoc/view/record.php';</script>";
                exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "sssssssi", $barCode, $regDate, $fName, $inSector, $country, $email, $role, $id);
                        mysqli_stmt_execute($stmt);
                        echo "<script type='text/javascript'>alert('Successfull Update !!!');window.location.href='/pipoc/view/record.php';</script>";
                        exit();
                        }
            }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("Location:/pipoc/view/record.php");
        exit();
    }