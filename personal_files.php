<?php
session_start();
//$_SESSION['ref'] = $_SERVER['SCRIPT_NAME'];
require  'php_includes/config.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software" />
	<meta name="author" content="themefisher.com" />

	<title>Υπουργείο εργασίας</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css" />
</head>

<body id="top">
	<header>

		<div class="covidWarning">
			<span id="covidWarning-content">
				<img id="covid-logo" src="images/nav/covid2.png" />
				<a href="categories_covid.php">Πληροφορίες και υπηρεσίες για τον SARS-COVID-2019</a>
			</span>
		</div>

		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/nav/ypakp-logo.png" alt="" class="img-fluid" />
				</a>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Αρχική</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Ανακοινώσεις</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Εργασιακά Θέματα</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="communication.php">Επικοινωνία</a>
						</li>
					</ul>
				</div>


				<ul class="navbar-nav ml-auto">
					<?php
					if (isset($_SESSION['username'])) {
						//echo 
						$name = $_SESSION['username'];

						echo <<< account
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle profile-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icofont-ui-user"></i>Λογαριασμος
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="personal_files.php"><i class="icofont-ui-note"></i>Δηλώσεις</a>
                                    <a class="dropdown-item" href="profile_options.php"><i class="icofont-options"></i>Επεξεργασία προφίλ</a>
                                    <a class="dropdown-item" href="php_includes/logout.inc.php"><i class="icofont-sign-out"></i>Αποσύνδεση</a>
                                </div>
                            </div>
                            account;
					} else {
						echo <<< enter
                            <li class="nav-item">
                                <a href="signin.php" class="nav-link">
                                    Σύνδεση
                                    <i class="icofont-login"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="signup.php" class="nav-link">
                                    Εγραφή
                                    <i class="icofont-notepad"></i>
                                </a>
                            </li>
                            enter;
					}
					?>
				</ul>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

			</div>
		</nav>
	</header>

	<section class="tabsGroup">
		<div class="container mt-5">
			<ul class="nav nav-tabs mt-4">
				<li class="nav-item">
					<a class="nav-link" href="profile_options.php">Στοιχεία</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  active" href="personal_files.php">Δηλώσεις</a>
				</li>

			</ul>
			

			<div class="tabBox personal_files_tab_box">
				
				<h3><i class="icofont-history mr-2"></i>Το ιστορικό των δηλώσεών σας</h3>
				<div class="personal_files_box">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Εναρξη</th>
									<th>Λήξη</th>
									<th>Είδος δήλωσης</th>
									<th></th>
								</tr>
							</thead>
							<tbody id="tableRows">
								<?php
									//fetc
									$temp = $_SESSION['username'];
									$query = "SELECT * FROM forms WHERE username='$temp' ORDER BY start DESC";
									$rows = mysqli_query ($conn,$query);

									
									
									foreach ($rows as $row){
										$start = $row['start'];
										$start = date('m-d-Y', strtotime($start));

										$end = $row['end'];
										$end = date('m-d-Y',strtotime($end));

										$formType = $row['formType'];
										echo <<< row
										<tr>
										<td>$start</td>
										<td>$end</td>
										<td>$formType</td>
										<td></td>
										</tr>
										row;
									}
									/* BEUTIFY
									$numOfRows = mysqli_num_rows($rows);
									for ($i = 0; $i < 8-$numOfRows; $i++) {
										echo <<< row
										<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										</tr>
									row;
									}*/
									mysqli_close($conn);
								?>

								<tr>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<h3 class="mb-4"><i class="icofont-ui-add mr-2"></i>Δημιουργήστε μια νέα δήλωση</h3>
				<form id="personalFiles_form" method="post" action="php_includes/new_personal_file.inc.php" onsubmit="return mysubmit()">
					<div class="row d-flex justify-content-center">
						<div class="form-group dilosi">
							<label>
								Έναρξη
							</label>
							<input name="date_start" id="date_start" type="date" class="form-control">
							<i class="icofont-check"></i>
							<i class="icofont-exclamation-circle"></i>
							<small>Σφάλμα</small>
						</div>

						<div class="form-group dilosi">
							<label>
								Λήξη
							</label>
							<input name="date_end" id="date_end" type="date" class="form-control">
							<i class="icofont-check"></i>
							<i class="icofont-exclamation-circle"></i>
							<small>Σφάλμα</small>
						</div>
						<div class="form-group dilosi">
							<label>
								Έιδος Δήλωσης
							</label>
							<select name="typeOfForm" id="typeOfForm" class="form-control ">
								<?php
									if ($_SESSION['typeOfUser']==1){
										echo	"<option>Αναστολή Σύμβασης</option>";
										echo 	"<option>Τηλεργασία</option>";
									}else{
										echo	"<option>Άδεια ειδικού Σκοπού</option>";									
									}
								?>
							</select>
						</div>

					</div>
					<div class="form-group d-flex justify-content-center">
						<div class="text-center">
							<input class="btn btn-main btn-round-full form-btn" name="submit_btn" type="submit" value="Δημιουργία νέας Δήλωσης"  
							<?php 
								if($_SESSION['typeOfUser']==0 && $_SESSION['isParent']==0){
									echo "disabled";
								}
							?> 
							></input>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</section>


	<!-- footer Start -->
	<footer class="footer section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mr-auto col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<div class="logo mb-4">
							<img src="images/nav/ypakp-logo-white-letters.png" alt="" class="img-fluid" />
						</div>
						<p>Μέσα κοινωνικής δικτύωσης</p>

						<ul class="list-inline footer-socials mt-4">
							<li class="list-inline-item">
								<a href="#"><i class="icofont-facebook"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="icofont-twitter"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="icofont-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Υπουργείο</h4>
						<div class="divider mb-4"></div>

						<ul class="list-unstyled footer-menu">
							<li><a href="#">Οργανοτική δομή</a></li>
							<li><a href="#">Ασφαλιστικοί φορείς </a></li>
							<li><a href="#">Όροι χρήσης</a></li>
							<li><a href="#">Δραστηριότητες</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget widget-contact mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Επικοινωνήστε μαζί μας</h4>
						<div class="divider mb-4"></div>

						<div class="footer-contact-block">
							<div class="icon d-flex align-items-center">
								<i class="icofont-email mr-3"></i>
								<a href="tel:+23-345-67890">ypakp@email.com</a>
							</div>
						</div>

						<div class="footer-contact-block">
							<div class="icon d-flex align-items-center">
								<i class="icofont-support mr-3"></i>
								<a href="tel:210-8989-6588">210-8989-6588</a><br />
							</div>
						</div>

						<a href="communication.php" class="btn btn-main-2 btn-round-full appointment">Κλειστε
							ραντεβου</a>
					</div>
				</div>
			</div>

			<div class="footer-btm py-2 mt-3">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="copyright">
							&copy; Copyright ΥΠΟΥΡΓΕΙΟ ΕΡΓΑΣΙΑΣ ΚΑΙ ΚΟΙΝΩΝΙΚΩΝ ΥΠΟΘΕΣΕΩΝ
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- 
    Essential Scripts
    =====================================-->

	<!-- Main jQuery -->
	<script src="plugins/jquery/jquery.js"></script>
	<!-- Bootstrap 4.3.2 -->
	<script src="plugins/bootstrap/js/popper.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/counterup/jquery.easing.js"></script>
	<!-- Slick Slider -->
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<!-- Counterup -->
	<script src="plugins/counterup/jquery.waypoints.min.js"></script>

	<script src="plugins/shuffle/shuffle.min.js"></script>
	<script src="plugins/counterup/jquery.counterup.min.js"></script>
	<!-- Google Map -->
	<script src="plugins/google-map/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

	<script src="js/script.js"></script>
	<script src="js/formUtil.js"></script>
	<script src="js/profile_forms.js"></script>
</body>

</html>