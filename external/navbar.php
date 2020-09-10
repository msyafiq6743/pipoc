
<?php
	if ($_SESSION['role'] == "admin") {
	?>
		<div class="adminNavbar">
			<nav class="navbar navbar-expand-lg" id="myNavbar">		
				<a href="#" class="navbar-brand font-weight-bold">PIPOC 2021</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">		
					<span class="navbar-toggler-icon"></span>	
				</button>	
				<div class="collapse navbar-collapse" id="navbarMenu"> 		
					<ul class="navbar-nav mr-auto">		
						<li class="nav-item">
							<a href="./home.php" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="./registration.php" class="nav-link">Registration</a>
						</li>
						<li class="nav-item">
							<a href="./user.php" class="nav-link">User</a>
						</li>
						<li class="nav-item">
							<a href="./record.php" class="nav-link">Record</a>
						</li>
					</ul>
				
					<form class="form-inline" method="POST">
						<input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search"> 
						<button class="btn btn-light my-sm-0" type="submit" name="search">Search</button>
					</form>

					<ul class="navbar-nav ml-auto">	
						<li class="nav-item">
							<a href="#" class="nav-link disabled" aria-disabled="true"><?=$_SESSION['username'];?> - ADMIN </a>
						</li>
						<li class="nav-item">
							<a href="../include/logout.php" class="nav-link">Log out</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

<?php
	}
	else if ($_SESSION['role'] == "user") {
		?>

		<div class="userNavbar">
			<nav class="navbar navbar-expand-lg" id="myNavbar">		<!-- navbar-expand-lg big screen size-->
				<a href="#" class="navbar-brand font-weight-bold">PIPOC 2021</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">		<!-- button for small screen size --> <!-- data-toggle="collapse" to show back list item in small screen -->
					<span class="navbar-toggler-icon"></span>	<!-- icon for small screen size -->
				</button>	
				<div class="collapse navbar-collapse" id="navbarMenu"> 		<!-- prevent item to be in new line-->
					<ul class="navbar-nav mr-auto">		<!-- mr-auto force item align to left-->
						<li class="nav-item">
							<a href="./home.php" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="./registration.php" class="nav-link">Registration</a>
						</li>
						<li class="nav-item">
							<a href="./record.php" class="nav-link">Record</a>
						</li>
						<li class="nav-item">
							<a href="./statistics.php" class="nav-link">Statistic</a>
						</li>
					</ul>
				
					<form class="form-inline" method="POST">
						<input class="form-control mr-sm-3" type="search" placeholder="Search" name="search"> 
						<button class="btn btn-light my-sm-0" type="submit" name="searchBtn">Search</button>
					</form>

					<ul class="navbar-nav ml-auto">		<!-- mr-auto force item align to left-->
						<li class="nav-item">
							<a href="#" class="nav-link disabled" aria-disabled="true"><?=$_SESSION['username'];?></a>
						</li>
						<li class="nav-item">
							<a href="../include/logout.php" class="nav-link">Log out</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

<?php
	}
	else {
		echo "<script type='text/javascript'>alert('Unknown Role !!!');window.location.href='../index.php';</script>";
            exit();
	}
?>

