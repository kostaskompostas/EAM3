<?php
	session_start();
	$_SESSION['ref'] = $_SERVER['SCRIPT_NAME'];
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software" />
	<meta name="author" content="themefisher.com" />

	<title>Υπουργείο εργασίας - Επικοινωνία</title>

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

						<li class="nav-item active">
							<a class="nav-link" href="communication.php">Επικοινωνία</a>
						</li>
					</ul>
				</div>


                <ul class="navbar-nav ml-auto">
                    <?php
                        if (isset($_SESSION['username'])){
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
                        }else{
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

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
					aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

			</div>
		</nav>
	</header>



	<!--breadcrumbs-->
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
				<li class="breadcrumb-item active" aria-current="page">Επικοινωνία</li>
			</ol>
		</nav>
	</div>

	<!--communication icons start-->
	<section class="section contact-info pb-0">
		<div class="container">
			<div class="section-title text-center mb-5">
				<h2 class="text-md mb-2">Eπικοινωνήστε μαζί μας</h2>
				<div class="divider mx-auto my-4"></div>
			</div>
			<div class="row mb-2 justify-content-center">
				<div class="col-lg-4 col-sm-6 col-md-6">
					<div class="contact-block mb-4 mb-lg-0">
						<i class="icofont-live-support"></i>
						<h5>Καλέστε μας</h5>
						<div>Κεντρική γραμματεία</div>
						<div class="font-weight-bolder mb-1">+30 213-1234567</div>
						<div>Για θέματα εργασιακών σχέσεων</div>
						<div class="font-weight-bolder mb-1"> +30 213-1516649 </div>
						<div>Για θέματα πρόνοιας</div>
						<div class="font-weight-bolder mb-1"> +30 213-1516651</div>
						<div>Για θέματα κοινωνικής ασφάλισης</div>
						<div class="font-weight-bolder mb-1"> +30 210-3311676</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-md-6">
					<div class="contact-block mb-4 mb-lg-0">
						<i class="icofont-support-faq"></i>
						<h5>Ηλεκτρονικό ταχυδρομείο</h5>
						<div>Κεντρική γραμματεία</div>
						<div class="font-weight-bolder mb-1">gramateia@ypakp.gr </div>
						<div>Για θέματα εργασιακών σχέσεων</div>
						<div class="font-weight-bolder mb-1">pliroforisi-politi@ypakp.gr </div>
						<div>Για θέματα πρόνοιας</div>
						<div class="font-weight-bolder mb-1">pronoia@ypakp.gr</div>
						<div>Για θέματα κοινωνικής ασφάλισης</div>
						<div class="font-weight-bolder mb-1">koinasf@ypakp.gr</div>

					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-md-6">
					<div class="contact-block mb-4 mb-lg-0">
						<i class="icofont-location-pin"></i>
						<h5>Τοποθεσία υπουργείου</h5>
						<a
							href="https://www.google.com/maps/place/Ministry+of+Labour+and+Social+Affairs/@37.9804215,23.728891,17z/data=!3m1!4b1!4m5!3m4!1s0x14a1bd3bad145a41:0x6db1fc0cbb58a00a!8m2!3d37.9804173!4d23.7310797">Σταδίου
							29, Αθήνα 105 59</a>><br>
						<i class="icofont-clock-time mt-3"></i>
						<h5>Ώρες λειτουργίας υπουργείου</h5>
						Δευτερα-Παρασκευή: 8:00-20:00<br>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- contact form start -->
	<section class="contact-form-wrap section">
		<div class="container">
			<div class="row justify-content-center">

			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form id="contact-form" class="contact__form " method="post" action="#">

						<div class="section-title text-center mb-5">
							<h2 class="text-md mb-2">Κλείστε ραντεβού</h2>
							<div class="divider mx-auto my-4"></div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>
										Ονοματεπώνυμο
									</label>
									<input name="name" id="name" type="text" class="form-control" maxlength="65">
									<i class="icofont-check"></i>
									<i class="icofont-exclamation-circle"></i>
									<small>Σφάλμα</small>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<label>
										Το e-mail σας
									</label>
									<input name="email" id="email" type="text" class="form-control" maxlength="65">
									<i class="icofont-check"></i>
									<i class="icofont-exclamation-circle"></i>
									<small>Σφάλμα</small>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>
										Ημερομηνία
									</label>
									<input name="date" id="date" type="date" class="form-control">
									<i class="icofont-check"></i>
									<i class="icofont-exclamation-circle"></i>
									<small>Σφάλμα</small>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<label>
										Ώρα
									</label>
									<input name="time" id="time" type="time" class="form-control">
									<i class="icofont-check"></i>
									<i class="icofont-exclamation-circle"></i>
									<small>Σφάλμα</small>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>
										Το θέμα σας
									</label>
									<input name="subject" id="subject" type="text" class="form-control" maxlength="65">
									<i class="icofont-check"></i>
									<i class="icofont-exclamation-circle"></i>
									<small>Σφάλμα</small>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>
										Τηλέφωνο
									</label>
									<input name="phone" id="phone" type="tel" class="form-control" maxlength="10">
									<i class="icofont-check"></i>
									<i class="icofont-exclamation-circle"></i>
									<small>Σφάλμα</small>
								</div>
							</div>
						</div>

						<div class="form-group-2 mb-4">
							<label>
							Σύντομη περιγραφή λόγου αίτησης ραντεβού (προαιρετικό)
							</label>
							<textarea name="message" id="message" class="form-control" rows="8"></textarea>
						</div>

						<div class="text-center">
							<input class="btn btn-main btn-round-full appointment-btn" name="submit" type="submit"
								value="Καταχώριση ραντεβού"></input>
						</div>
					</form>
				</div>
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
								<a href="tel:23-345-67890">210-8989-6588</a><br />
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
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

	<script src="js/script.js"></script>
	
    <script src="js/formUtil.js"></script>
	<script src="js/appointment.js"></script>
</body>

</html>