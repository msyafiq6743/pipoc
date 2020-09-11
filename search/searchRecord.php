
<div class="container-fluid customFont space2">
    <table class="table table-bordered">
        <thead class="tableFont">
            <tr align="center">
                <th scope="col">
                    Barcode
                </th>
                <th scope="col">
                    Reg Date
                </th>
                <th scope="col">
                    Name
                </th>
                <th scope="col">
                    Industry
                </th>
                <th scope="col">
                    Country
                </th>
                <th scope="col">
                    Email
                </th>
                <th scope="col"></th>
            </tr>
        </thead>

        <?php
            require "../include/dbConfig.php";

            $no=0;
            $searchValue = $_POST['search'];

            $sql = "SELECT * FROM visitor21 WHERE (BarCode like '%$searchValue%') or (RegDate like '%$searchValue%') or (Fname like '%$searchValue%') or (InSector like '%$searchValue%') or (Country like '%$searchValue%') or (Email like '%$searchValue%') ORDER BY BarCode ASC";
            $result = mysqli_query($conn, $sql);
            $checkResult = mysqli_num_rows($result);

            if ($checkResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $no++;
        ?>

        <tbody>
            <td align="center">
                <?php echo $row['BarCode'];?>
            </td>
            <td align="center">
                <?php echo $row['RegDate'];?>
            </td>
            <td>
                <?php echo $row['Fname'];?>
            </td>
            <td align="center">
                <?php echo $row['InSector'];?>
            </td>
            <td align="center">
                <?php echo $row['Country'];?>
            </td>
            <td>
                <?php echo $row['Email'];?>
            </td>
            <td align="center">
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $row['id']; ?>">
                    Edit
                </button>

                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $row['id']; ?>">
                    Del
                </button>
            </td>
        </tbody>

        <?php
            require "../external/editRecord.php";
            require "../external/deleteRecord.php";
                }
            }
            else {
                echo "No Record";
            }

            // mysqli_close($conn);
        ?>

    </table>
</div>
