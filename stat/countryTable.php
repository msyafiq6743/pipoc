<div class="container customFont space2">
        <table class="table table-bordered">
            <thead class="tableFont">
                <tr align="center">
                    <th scope="col">
                        Color
                    </th>
                    <th scope="col">
                        Country
                    </th>
                    <th scope="col">
                        Visitor
                    </th>
                </tr>
            </thead>

            <?php
                require "../include/dbConfig.php";

                $no=0;

                $sql = "SELECT Country, count(*) as number FROM visitor21 GROUP BY Country ";
                $result = mysqli_query($conn, $sql);
                $checkResult = mysqli_num_rows($result);

                if ($checkResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $no++;
            ?>

            <tbody>
            <td align="center">
                    
                </td>
                <td align="center">
                    <?php echo $row['Country'];?>
                </td>
                <td align="center">
                    <?php echo $row['number'];?>
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