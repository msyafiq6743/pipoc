
<?php
	if ($_SESSION['role'] == "admin") {
    ?>
    
	 <div class="container customFont space">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="headerText">
                    MPOB - International Palm Oil Congress And Exhibition - Admin
                </h1>
            </div>
        </div>
    </div>

<?php
	}
	else if ($_SESSION['role'] == "user") {
		?>

            <div class="container customFont space">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h1 class="headerText">
                            MPOB - International Palm Oil Congress And Exhibition
                        </h1>
                    </div>
                </div>
            </div>

<?php
	}
	else {
		echo "<script type='text/javascript'>alert('Unknown Role !!!');window.location.href='../index.php';</script>";
            exit();
	}
?>

