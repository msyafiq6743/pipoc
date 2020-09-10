<div class="container customFont space2">
        <table class="table table-bordered">
            <thead class="tableFont">
                <tr align="center">
                    <th scope="col">
                        Username
                    </th>
                    <th scope="col">
                        Password
                    </th>
                    <th scope="col">
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#regAdmin">
                            New Admin
                        </button>
                    </th>
                </tr>
            </thead>

            <?php
                require "../include/dbConfig.php";

                $no=0;

                $sql = "SELECT * FROM user WHERE Role = 'admin';";
                $result = mysqli_query($conn, $sql);
                $checkResult = mysqli_num_rows($result);

                if ($checkResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $no++;
            ?>

            <tbody>
                <td align="center">
                    <?php echo $row['Username'];?>
                </td>
                <td align="center">
                    <?php echo $row['Password'];?>
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
                require "../userRec/regAdmin.php";
                require "../userRec/editUser.php";
                require "../userRec/deleteUser.php";
                    }
                }
                else {
                    echo "No Record";
                }

                // mysqli_close($conn);
            ?>

        </table>
    </div>