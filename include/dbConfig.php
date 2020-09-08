<?php

    $servername = "localhost";
    $DBusername = "root";
    $DBpassword = "";
    $DBname = "pipoc";

    $conn = mysqli_connect($servername, $DBusername, $DBpassword, $DBname);

    if (!$conn) {
        die("Connection to Database Failed : ".mysqli_connect_error());
    }