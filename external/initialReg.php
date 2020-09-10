
<?php
	if ($_SESSION['role'] == "admin") {
        require "../external/statbtn.php";
        require "../external/statTable.php";
	?>
        
        

<?php
	}
	else if ($_SESSION['role'] == "user") {
		?>

    <div class="container customFont space2">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card bg-transparent border-white">
                    <div class="card-body">
                        <form method="POST" action="../include/initialRegSub.php">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col"> 
                                        <label>
                                            Bar Code :
                                        </label>
                                        <input type="text" class="form-control" name="barCode" autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>
                                            Registration Date :
                                        </label>
                                        <input type="text" class="form-control" name="regDate" readonly value="<?php echo date("Y/m/d");?>">
                                    </div>
                                </div>
                            </div>

                                <input type="hidden" class="form-control" name="fName" value="null">
                                <input type="hidden" class="form-control" name="inSector" value="null">
                                <input type="hidden" class="form-control" name="country" value="null">
                                <input type="hidden" class="form-control" name="email" value="null">
                                <input type="hidden" class="form-control" name="role" value="visitor">

                           
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success btn-block" name="register">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

