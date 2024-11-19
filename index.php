<?php
// Assuming a connection to a database $conn has been established
// Example for fetching dynamic data (replace with actual queries)
$students_count = $conn->query("SELECT COUNT(*) FROM students")->fetch_row()[0];
$departments_count = $conn->query("SELECT COUNT(*) FROM departments")->fetch_row()[0];
$employees_count = $conn->query("SELECT COUNT(*) FROM employees")->fetch_row()[0];
$faculties_count = $conn->query("SELECT COUNT(*) FROM faculties")->fetch_row()[0];

// Example mission statement (could also come from the database)
$mission_statement = "Ibn Taimiyah Foundation Academy aims to produce enlightened, competitive, and well-balanced graduates committed to promoting Islamic culture and becoming proactive members of society.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grading PHP</title>
    <meta name="description" content="Your website description here">
    <meta name="keywords" content="your, keywords, here">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style22.css" rel="stylesheet">
</head>
<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="index.php"><img src="assets/img/itfalogo.png" alt="Logo" style="width: 40px; height: 50px;"></a>
            <h1 class="logo mr-auto"><a href="index.php">ITFA Student Portal</a></h1>
            <button class="mobile-nav-toggle">
                <i class="bx bx-menu"></i>
            </button>
            <div class="nav-menu-container">
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="ooindex.php">Home</a></li>
                        <li><a href="announcements.php">Announcements</a></li>
                        <li><a href="post.php">Freedom Wall</a></li>
                        <li><a href="program.php">Activities</a></li>
                        <li><a href="program.php">Services</a></li>
                        <li class="drop-down">
                            <a href="#">Grading System <i class='bx bxs-down-arrow'></i></a>
                            <ul>
                                <li><a href="Admin_login.php">Administrator</a></li>
                                <li><a href="Teacher_login.php">Teacher</a></li>
                                <li><a href="student_login.php">Student</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section id="hero" class="d-flex justify-content-center align-items-center" style="background-image: url('assets/img/itfabuilding.jpg'); background-size: cover; background-position: center;">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>"Navigating Knowledge, Creating Connections: Your Journey to Excellence Begins Here."</h1>
            <a href="about.php" class="btn-get-started">Read More</a>
        </div>
    </section>

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Our Mission</h2>
                    <p>Our Mission</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/itfalogo.png" style="height: 400px;" class="img-fluid" alt="ITFA Logo">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <p><?php echo $mission_statement; ?></p>
                        <a href="about.php" class="learn-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="counts" class="counts section-bg">
            <div class="container">
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up"><?php echo $students_count; ?></span>
                        <p>Students</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up"><?php echo $departments_count; ?></span>
                        <p>Departments</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up"><?php echo $employees_count; ?></span>
                        <p>Employees</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up"><?php echo $faculties_count; ?></span>
                        <p>Faculties</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Student Grading System</h3>
                        <p>
                            Crossing Simuay<br>
                            Sultan Kudarat<br>
                            Maguindanao del Norte<br><br>
                            <strong>Phone:</strong> 101-000-1110<br>
                            <strong>Email:</strong> info@itfa.edu.ph<br>
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="ooindex.php">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="program.php">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="terms.php">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="grading.php">Grading System</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="announcements.php">Announcements</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="post.php">Freedom Wall</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="program.php">Activities</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <div id="preloader"></div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
