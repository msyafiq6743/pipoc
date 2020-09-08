<?php

    if (isset($_POST['register'])) {

        require './dbConfig.php'; // connection to database

        // variable ---- input name
        $barCode = strtoupper($_POST['barCode']);
        $regDate = $_POST['regDate'];
        $fName = ucwords($_POST['fName']);
        $inSector = $_POST['inSector'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        if (empty($barCode)) {
            echo "<script type='text/javascript'>alert('Bar Code is Empty !!!');window.location.href='/pipoc/view/home.php';</script>";
            exit();
        }
        else if (empty($regDate)) {
            echo "<script type='text/javascript'>alert('Registration Date is Empty !!!');window.location.href='/pipoc/view/home.php';</script>";
            exit();
        }
        else {
            $sql = "SELECT BarCode FROM visitor21 WHERE BarCode=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "<script type='text/javascript'>alert('SQL Error !!!');window.location.href='/pipoc/view/home.php';</script>";
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $barCode);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0) {
                    echo "<script type='text/javascript'>alert('Barcode Already Exist !!!');window.location.href='/pipoc/view/home.php';</script>";
                    exit();
                }
                else {
                    $sql = "INSERT INTO visitor21 (BarCode, RegDate, Fname, InSector, Country, Email, Role) VALUES (?,?,?,?,?,?,?)";
                    mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "<script type='text/javascript'>alert('Unseccesfull !!!');window.location.href='/pipoc/view/home.php';</script>";
                        exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "sssssss", $barCode, $regDate, $fName, $inSector, $country, $email, $role);
                        mysqli_stmt_execute($stmt);
                        echo "<script type='text/javascript'>alert('Successfull Registered !!!');window.location.href='/pipoc/view/home.php';</script>";
                            exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("Location:/pipoc/view/home.php");
        exit();
    }