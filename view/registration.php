<?php
    require "../external/header.php"
?>

<main>

    <?php
       require "../external/mainText.php";
       require "../external/navbar.php";
    ?>

<?php
	// if ($_SESSION['role'] == "admin") {
    ?>
        <!-- <div class="container customFont">
            <div class="row space">
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#regUser">
                        New User
                    </button>
                </div>
            </div>
        </div> -->

        <?php
            // require "visitorReg.php";
        ?>

        <!-- <div class="container customFont">
            <div class="modal fade" id="regUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Register New User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <?php
                                // require "regUser.php";
                            ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> -->

<?php 
    // }
    // else if ($_SESSION['role'] == "user") {
    //     require "visitorReg.php";
        ?>

<?php
    // }
    // else {
    //     echo "<script type='text/javascript'>alert('Unknown Role !!!');window.location.href='../index.php';</script>";
    //     exit();
    // }
?>  

</main>

    <?php
        require "../external/footer.php"
    ?>