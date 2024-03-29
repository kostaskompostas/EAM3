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

		<title>Υπουργείο εργασίας - Οδηγίες πρόληψης στον εργασιακό τομέα</title>

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
						Οδηγίες πρόληψης στον εργασιακό τομέα‎‎
					</li>
				</ol>
			</nav>
		</div>

		<!-- Slider Start -->
		<section class="tabsGroup">
			<div class="container mt-5">
				<div class="simple-box">
					<h3>Γενικά</h3>

					<p>
						Οι εργοδοτούμενοι πρέπει να εργάζονται με ελεγχόμενες συνθήκες
						ασφάλειας και υγείας στην εργασία, έτσι ώστε να εξαλειφθεί ή να
						μειωθεί στον μέγιστο δυνατό βαθμό ο κίνδυνος εξάπλωσης του ιού στους
						εργαζόμενους και στο κοινωνικό σύνολο. εργασιακο χώρο. Οι
						εργαζόμενοι καλούνται να λάβουν όλα τα απαραίτητα προληπτικά και
						προστατευτικά μέτρα για την προστασία της υγείας τους, και να
						συνεργάζονται με τον λειτουργό ασφάλειας του εργοδότη, όπου υπάρχει,
						τα μέλη της Επιτροπής Ασφάλειας, τους αντιπροσώπους ασφάλειας και τα
						πρόσωπα που έχουν ορισθεί από τον εργοδότη ως Εσωτερικές ή
						Εξωτερικές Υπηρεσίες Προστασίας και Πρόληψης καθώς και με τον ιατρό
						εργασίας της επιχείρησης όπου υπάρχει.
					</p>

					<div class="embed-responsive embed-responsive-16by9">
						<iframe
							class="embed-responsive-item"
							src="https://www.youtube.com/embed/8dlUqlMDkR4"
							allowfullscreen
						></iframe>
					</div>

					<h3>Τι μπορούν να κάνουν οι εργαζόμενοι</h3>

					<ul>
						<li>
							Να λαμβάνουν όλα τα κατάλληλα προληπτικά και προστατευτικά μέτρα
							που έχουν καθοριστεί από την εκτίμηση του κινδύνου και αφορούν,
							μέτρα ατομικής υγιεινής και ατομικής προστασίας, μέτρα φυσικής και
							κοινωνικής αποστασιοποίησης από τους συναδέλφους και τους
							εξωτερικούς συνεργάτες, αερισμού χώρων εργασίας, καθαρισμού
							επιφανειών και προσωπικών αντικειμένων στους χώρους εργασίας,
						</li>
						<li>
							Να προβαίνουν σε συστηματικό και επιμελές πλύσιμο των χεριών με
							νερό και σαπούνι τουλάχιστον για 20 δευτερόλεπτα ή αν τα χέρια δεν
							είναι εμφανώς λερωμένα, να κάνουν χρήση κάποιου αλκοολούχου
							διαλύματος περιεκτικότητας μεγαλύτερο του 60% σε οινόπνευμα. Το
							πλύσιμο χεριών πρέπει να γίνεται σχολαστικά πριν την είσοδο και
							έξοδο από τον χώρο εργασίας και κάθε φορά πριν την είσοδο και
							έξοδο από τον χώρο σίτισης.
						</li>
						<li>
							Να χρησιμοποιούν τα μέσα ατομικής προστασίας (π.χ. μάσκα, γάντια
							κ.ά.) σε περίπτωση που απαιτούνται με βάση την εκτίμηση του
							κινδύνου και έχουν δοθεί σχετικές οδηγίες από τον εργοδότη ή
							απαιτείται από τον περί Λοιμοκαθάρσεως Νόμο,
						</li>
						<li>
							Να τηρούν αποστάσεις τουλάχιστον 2 μέτρα από συναδέλφους,
							επισκέπτες/πελάτες ή άλλους εργαζόμενους που επισκέπτονται χώρους
							εργασίας,
						</li>
						<li>
							Να εισάγουν φρέσκο αέρα στον χώρο εργασίας τους καθημερινά και σε
							τακτά χρονικά διαστήματα εκεί που είναι εφικτό, τουλάχιστον 10
							λεπτά ημερησίως
						</li>
						<li>
							Να καθαρίζουν τα προσωπικά αντικείμενα (κινητά τηλέφωνα, τσάντες,
							γυαλιά, ταμπλέτες) με απολυμαντικό ή απολυμαντικά μαντηλάκια,
						</li>
						<li>
							Να προσαρμόζουν τη θέση εργασίας και τον εξοπλισμό τους (πάγκοι,
							γραφεία) ώστε να τηρούνται οι αναγκαίες αποστάσεις.
						</li>
						<li>
							Να μην προσέρχονται στους χώρους εργασίας όταν έχουν συμπτώματα
							λοίμωξης του αναπνευστικού ή πυρετό και ενημερώνουν άμεσα τον
							εργοδότη
						</li>
						<li>
							Να αποφεύγουν να αγγίζουν με τα χέρια τη μύτη, το στόμα και τα
							μάτια
						</li>
						<li>
							Να τηρούν την αναλογία έως ένα άτομο ανά 8τ.μ. ωφέλιμου χώρου σε
							χώρους εξυπηρέτησης του κοινού.
						</li>
					</ul>

					<h3>Τι μπορούν να κάνουν οι εργοδότες</h3>

					<p>
						Οι οδηγίες αυτές είναι συμπληρωματικές και δεν αντικαθιστούν τις
						υποχρεώσεις που επιβάλλονται με τον περί Λοιμοκαθάρσεως Νόμο και τα
						σχετικά Διατάγματα που εκδόθηκαν.
					</p>

					<ul>
						<li>
							Παρουσία ικανοποιητικού αριθμού σταθμών απολύμανσης των χεριών με
							τρεχούμενο νερό και σαπούνι ή και με υγρό απολύμανσης σε εμφανή
							σημεία εισόδου και εξόδου των χώρων εργασίας και εντός των χώρων
							εργασίας καθώς και εκεί όπου υπάρχουν διευκολύνσεις καθαρισμού.
							Εάν ο μηχανισμός τής εισόδου είναι αυτόματος, το αντισηπτικό
							διάλυμα να τοποθετηθεί στην εσωτερική πλευρά της εισόδου. Εάν κατά
							την είσοδο στη εργασία απαιτείται άνοιγμα της πόρτας με χερούλι, η
							τοποθέτηση διαλύματος να γίνει και από τις δύο πλευρές (έσω και
							έξω της πόρτας εισόδου).
						</li>
						<li>
							Ανάρτηση αφισών/οδηγιών για το πλύσιμο των χεριών και την εφαρμογή
							κανόνων ατομικής υγιεινής στα σημεία εισόδου και εξόδου των χώρων
							εργασίας και σε περίοπτα σημεία εντός των χώρων εργασίας.
						</li>
						<li>
							Παροχή κατάλληλων και επαρκών χώρων υγειονομικών διευκολύνσεων
							όπως τουαλέτες και εκεί όπου επιβάλλεται, από το είδος της
							εργασίας ή για λόγους υγιεινής, αποδυτηρίων και ντους.
						</li>
						<li>
							Εφαρμογή μέτρων υγιεινής στις τουαλέτες (κλείσιμο καπακιού της
							τουαλέτας μετά τη χρήση και πριν την ενεργοποίηση του καζανακιού
							και διατήρηση του καπακιού πάντα στην κλειστή θέση όταν η τουαλέτα
							δεν χρησιμοποιείται). Αποφυγή χρησιμοποίησης μηχανημάτων αέρα (air
							jets) για το στέγνωμα των χεριών
						</li>
						<li>
							Παροχή κατάλληλων οδηγιών χρήσης προστατευτικού εξοπλισμού και
							εκπαίδευσης στους εργαζόμενους, ειδικά σε αυτούς που ανήκουν σε
							ευαίσθητες ομάδες πληθυσμού.
						</li>
						<li>
							Παραχώρηση σε κάθε εργοδοτούμενο, στο μέτρο του δυνατού,
							ξεχωριστών εργαλείων και εξοπλισμού εργασίας. Όπου είναι δυνατόν
							πρέπει να γίνεται τακτικός καθαρισμός των εργαλείων, ειδικά πριν
							από την παράδοση σε άλλο πρόσωπο.
						</li>
					</ul>

					<h3>Περισσότερες πληροφορίες</h3>

					<p>
						Για περισσότερες πληροφορίες επισκεφθείτε τον παρακάτω σύνδεσμο ή
						βρείτε τρόπους για το πως μπορείτε να επικοινωνήσετε μαζί μας στην
						σελίδα της
						<a href="communication.php">επικοινωνίας</a>
					</p>
					<p>
						<a href="https://www.pio.gov.cy/coronavirus/pdf/erg20.pdf"
							>Οδηγός Διαχείρισης Θεμάτων Ασφάλειας και Υγείας στην Εργασία σε
							συνθήκες Κορωνοϊού <i class="icofont-file-pdf"></i
						></a>
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
		<script src="plugins/google-map/map.js"></script>

		<script src="js/contact.js"></script>
	</body>
</html>
