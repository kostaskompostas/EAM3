<?php
	session_start();
	$_SESSION['ref'] = $_SERVER['SCRIPT_NAME'];
?>

<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta
			name="description"
			content="Orbitor,business,company,agency,modern,bootstrap4,tech,software"
		/>
		<meta name="author" content="themefisher.com" />

		<title>Υπουργείο εργασίας - Τηλεργασία‎‎‎‎</title>

		<!-- Favicon -->

		<!-- bootstrap.min css -->
		<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
		<!-- Icon Font Css -->
		<link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
		<!-- Slick Slider  CSS -->
		<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
		<link
			rel="stylesheet"
			href="plugins/slick-carousel/slick/slick-theme.css"
		/>

		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body id="top">
		<header>
			<!---->
			<div class="covidWarning">
				<span id="covidWarning-content">
					<img id="covid-logo" src="images/nav/covid2.png" />
					<a href="categories_covid.php"
						>Πληροφορίες και υπηρεσίες για τον SARS-COVID-2019</a
					>
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

					<button
						class="navbar-toggler collapsed"
						type="button"
						data-toggle="collapse"
						data-target="#navbarmain"
						aria-controls="navbarmain"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
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
					<li class="breadcrumb-item">
						<a href="categories_covid.php">COVID-2019</a>
					</li>
					<li class="breadcrumb-item" aria-current="page">
						Τηλεργασία , άδειες , αναστολές σύμβασης‎‎‎‎
					</li>
				</ol>
			</nav>
		</div>

		<!-- Slider Start -->
		<section class="tabsGroup">
			<div class="container mt-5">
				<ul class="nav nav-tabs mt-4">
					<li class="nav-item">
						<a class="nav-link active" href="#">Τηλεργασία</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="FamilySpecialVac_Info.php">Άδεια ειδικού σκοπού για γονείς</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="StopWork_Info.php">Αναστολή σύμβασης‎‎‎‎</a>
					</li>
				</ul>

				<div class="tabBox">
					<h3>Διαδικασία</h3>
					<p>
						Λόγο της εμφάνισης του COVID-19 δίνεται η δυνατότητα στους εργοδότες ,
						να καθορίζουν μονομερώς με απόφασή τους, ότι η εργασία που παρέχεται
						από τον εργαζόμενο στον προβλεπόμενο, από την ατομική σύμβαση, τόπο
						εργασίας θα πραγματοποιείται με το σύστημα της εξ αποστάσεως εργασίας.
						Οι εργοδότες που θα καθορίσουν με απόφασή τους ότι εργαζόμενοι η
						εργαζόμενος που εργάζονται στην επιχείρησή τους, θα παρέχουν τις
						υπηρεσίες τους με το σύστημα της τηλεργασίας, υποχρεούνται να δηλώσουν
						τους εργαζομένους τους εντός της ηλεκτρονικής πλατφόρμας που παρέχεται
						από το υπουργείο εργασίας στην αντίστοιχη καρτέλα εντός του προσωπικού
						τους λογαριασμού. </br></br> Η πληροφορία αυτή εμφανίζεται και στο αντίστοιχο
						profile του εκάστοτε εργαζομένου εντός της ίδιας σελίδας κάτω από την
						επιλογή Τηλεργασία.
					</p>

					<h3>Μισθός</h3>
					<p>
						Η τηλεργασία δεν θα εχει καμια επίπτωση στον μισθό του εργαζομένου
					</p>


					<h3>Για τους εκπαιδευτικούς</h3>
					<p>
						Κατα την διάρκεια lockdown καθώς δεν είναι εφικτή η φυσική παρουσία
						του εκπαιδευτικού ή των μαθητών στην αίθουσα διδασκαλίας, παρέχονται
						όλα τα μέσα ώστε να γίνεται το μάθημα εξ αποστάσεως με τεχνικά μέσα
						παρακολούθησης. Το υπουργείο παιδείας συνιστά την χρήση της πλατφόρμας
						webex
					</p>
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
								<img
									src="images/nav/ypakp-logo-white-letters.png"
									alt=""
									class="img-fluid"
								/>
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

							<a
								href="communication.php"
								class="btn btn-main-2 btn-round-full appointment"
								>Κλειστε ραντεβου</a
							>
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
		<!-- Slick Slider -->
		<script src="plugins/slick-carousel/slick/slick.min.js"></script>
		<!-- Counterup -->
		<script src="plugins/counterup/jquery.waypoints.min.js"></script>

		<script src="plugins/shuffle/shuffle.min.js"></script>
		<script src="plugins/counterup/jquery.counterup.min.js"></script>
		<!-- Google Map -->

		<script src="js/contact.js"></script>
	</body>
</html>
