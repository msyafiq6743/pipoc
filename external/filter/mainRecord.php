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

                $sql = "SELECT * FROM visitor21 ORDER BY BarCode ASC";
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
                <td align="center">
                    <?php echo $row['Fname'];?>
                </td>
                <td align="center">
                    <?php echo $row['InSector'];?>
                </td>
                <td align="center">
                    <?php echo $row['Country'];?>
                </td>
                <td align="center">
                    <?php echo $row['Email'];?>
                </td>
                <td align="center">
                    <button class="btn btn-warning btn-sm" type="button">Edit</button>
                    <button class="btn btn-danger btn-sm" type="button">Delete</button>
                </td>
            </tbody>

            <?php
                    }
                }
                else {
                    echo "No Record";
                }

                // mysqli_close($conn);
            ?>

        </table>
    </div>