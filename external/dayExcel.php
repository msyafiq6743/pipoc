<?php

   if (isset($_POST['day_1'])) {

        require '../include/dbConfig.php'; // connection to database

        $no=0;

        $sql = "SELECT * FROM visitor21 WHERE RegDate = '2020/09/07' ORDER BY BarCode ASC";
        $result = mysqli_query($conn, $sql);
        $checkResult = mysqli_num_rows($result);

        if ($checkResult > 0) {
?>

        <h3><center>REGISTRATION RECORD PIPOC 2021 (DAY 1)</center></h3>

            <table border="1">    
                <tr>
                    <th>No</th>
                    <th>Barcode</th>
                    <th>Reg Date</th>
                    <th>Name</th>
                    <th>Industry</th>
                    <th>Country</th>
                    <th>Email</th>
                </tr>

<?php
            while ($row = mysqli_fetch_assoc($result)) {
                $no++;
?>
                <tr>
                    <td align="center"><?php echo $no;?></td>
                    <td align="center"><?php echo $row['BarCode'];?></td>
                    <td align="center"><?php echo $row['RegDate'];?></td>
                    <td><?php echo $row['Fname'];?></td>
                    <td align="center"><?php echo $row['InSector'];?></td>
                    <td align="center"><?php echo $row['Country'];?></td>
                    <td><?php echo $row['Email'];?></td>
                </tr>

<?php  
            }
            header("Content-Type: application/vnd.ms-excel");
			header("Content-Disposition: attachment; filename= Registration Record PIPOC 2021 DAY 1.xls");  //NAME OUTPUT FILE
        }
        else {
            echo "No Record";
        }
    }
    elseif (isset($_POST['day_2'])) {
        require '../include/dbConfig.php'; // connection to database

        $no=0;

        $sql = "SELECT * FROM visitor21 WHERE RegDate = '2020/09/08' ORDER BY BarCode ASC";
        $result = mysqli_query($conn, $sql);
        $checkResult = mysqli_num_rows($result);

        if ($checkResult > 0) {
?>

        <h3><center>REGISTRATION RECORD PIPOC 2021 (DAY 2)</center></h3>

            <table border="1">    
                <tr>
                    <th>No</th>
                    <th>Barcode</th>
                    <th>Reg Date</th>
                    <th>Name</th>
                    <th>Industry</th>
                    <th>Country</th>
                    <th>Email</th>
                </tr>

<?php
            while ($row = mysqli_fetch_assoc($result)) {
                $no++;
?>
                <tr>
                    <td align="center"><?php echo $no;?></td>
                    <td align="center"><?php echo $row['BarCode'];?></td>
                    <td align="center"><?php echo $row['RegDate'];?></td>
                    <td><?php echo $row['Fname'];?></td>
                    <td align="center"><?php echo $row['InSector'];?></td>
                    <td align="center"><?php echo $row['Country'];?></td>
                    <td><?php echo $row['Email'];?></td>
                </tr>

<?php  
            }
            header("Content-Type: application/vnd.ms-excel");
			header("Content-Disposition: attachment; filename= Registration Record PIPOC 2021 DAY 2.xls");  //NAME OUTPUT FILE
        }
        else {
            echo "No Record";
        }
    }
    elseif (isset($_POST['day_3'])) {
        require '../include/dbConfig.php'; // connection to database

        $no=0;

        $sql = "SELECT * FROM visitor21 WHERE RegDate = '2020/09/09' ORDER BY BarCode ASC";
        $result = mysqli_query($conn, $sql);
        $checkResult = mysqli_num_rows($result);

        if ($checkResult > 0) {
?>

        <h3><center>REGISTRATION RECORD PIPOC 2021 (DAY 3)</center></h3>

            <table border="1">    
                <tr>
                    <th>No</th>
                    <th>Barcode</th>
                    <th>Reg Date</th>
                    <th>Name</th>
                    <th>Industry</th>
                    <th>Country</th>
                    <th>Email</th>
                </tr>

<?php
            while ($row = mysqli_fetch_assoc($result)) {
                $no++;
?>
                <tr>
                    <td align="center"><?php echo $no;?></td>
                    <td align="center"><?php echo $row['BarCode'];?></td>
                    <td align="center"><?php echo $row['RegDate'];?></td>
                    <td><?php echo $row['Fname'];?></td>
                    <td align="center"><?php echo $row['InSector'];?></td>
                    <td align="center"><?php echo $row['Country'];?></td>
                    <td><?php echo $row['Email'];?></td>
                </tr>

<?php  
            }
            header("Content-Type: application/vnd.ms-excel");
			header("Content-Disposition: attachment; filename= Registration Record PIPOC 2021 DAY 3.xls");  //NAME OUTPUT FILE
        }
        else {
            echo "No Record";
        }
    }
   else {
        header("Location:/pipoc/view/record.php");
        exit();
   }

?>