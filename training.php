<?php
session_start(); // Start the session

// Check if a username exists in the session
if (isset($_SESSION['username'])) {
    // If the username is set, the button will link to profile.php and show "Profile"
    $buttonText = "Profile";
    $buttonLink = "profile.php";
} else {
    // If no username, the button will link to login.html and show "Login"
    $buttonText = "Login";
    $buttonLink = "login.html";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetZee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        img{
            width: 100%;
            height: auto;
            object-fit: cover;
        }

    </style>
</head>

<body>
    <!-- Navbar Start -->
    <article class="scroller">
        <section>
            <div class="container-fluid p-0">
                <div class="slides">
                    <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-lg-5"
                        style="background-color: rgba(0, 0, 0, 0.75); position: absolute; width: 100%; z-index: 10;">
                        <!-- Brand Name "PetZee" on the Left Side -->
                        <a href="index.php" class="navbar-brand">
                            <h1 class="m-0 display-5 text-capitalize font-italic text-white">
                                <span class="text-primary">Pet</span>Zee
                            </h1>
                        </a>
                        <!-- Navbar Toggler for mobile screens -->
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link">
                                    <span class="icon-container">
                                        <i class="fas fa-home"></i>
                                        <span class="nav-hover-text">Home</span>
                                    </span>
                                </a>
                                <a href="about.php" class="nav-item nav-link">
                                    <span class="icon-container">
                                        <i class="fas fa-info-circle"></i>
                                        <span class="nav-hover-text">About</span>
                                    </span>
                                </a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                        <span class="icon-container">
                                            <i class="fas fa-concierge-bell"></i>
                                            <span class="nav-hover-text">Services</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="boarding.php" class="dropdown-item">Pet Boarding</a>
                                        <a href="treatment.php" class="dropdown-item">Pet Treatment</a>
                                        <a href="grooming.php" class="dropdown-item">Pet Grooming</a>
                                        <a href="training.php" class="dropdown-item">Pet Training</a>
                                    </div>
                                </div>
                                <a href="booking.php" class="nav-item nav-link">
                                    <span class="icon-container">
                                        <i class="fas fa-calendar-check"></i>
                                        <span class="nav-hover-text">Booking</span>
                                    </span>
                                </a>
                                <div class="nav-item dropdown">
                                    <a href="blog.php" class="nav-item nav-link">
                                        <span class="icon-container">
                                            <i class="fas fa-file-alt"></i>
                                            <span class="nav-hover-text">Blog</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <a href="<?php echo $buttonLink; ?>" class="btn btn-lg btn-primary px-3 d-none d-lg-block">
                                <?php echo $buttonText; ?>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Navbar End --> 


        <!-- Training Start -->
<section>
    <div class="container py-5">
        <div class="slides">
            <div class="row py-5">
                <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Services</h4>
                    <h1 class="display-4 mb-4"><span class="text-primary">Pet Training</span> & <span
                            class="text-secondary">Behavioral Care</span></h1>
                    <h5 class="text-muted mb-3">At PetZee, we are committed to shaping well-behaved and happy pets through
                        structured training programs that cater to their individual needs.</h5>
                    <p class="mb-4">Our training services focus on developing obedience, social skills, and good behavior in pets. Whether it's basic commands, behavior correction, or advanced skills, our experienced trainers provide personalized attention to ensure your pets become well-mannered companions. With positive reinforcement techniques and a safe, supportive environment, we help your pets reach their full potential.</p>

                    <ul class="list-inline">
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Personalized Training Plans</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Positive Reinforcement Techniques</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Group & Private Sessions</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Behavioral Assessments</h5>
                        </li>

                    </ul>
                    <a href="booking.php" class="btn btn-lg btn-primary mt-3 px-4">Enroll Now</a>
                </div>
                <div class="col-lg-5 pb-5 pb-lg-0 px-3 px-lg-5">
                    <div class="wrapper">
                        <div class="container1">
                            <div class="img box-1" style="--image: url(https://r2.fivemanage.com/pub/p9cqstzstrek.jpg)">
                            </div>
                            <div class="img box-2" style="--image: url(https://r2.fivemanage.com/pub/jpia64nvu3np.jpg)">
                            </div>
                            <div class="img box-3" style="--image: url(https://r2.fivemanage.com/pub/fpn3mvzhzenq.jpg)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Training End -->


        <!-- Footer Start -->
        <section>
            <div class="container-fluid bg-dark text-white mt-5 py-6 px-sm-3 px-md-5">
                <div class="row pt-5">
                    <div class="col-lg-4 col-md-12 mb-5">
                        <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Zee</h1>
                        <p class="m-0">We are committed to providing exceptional care and services for your pets. Whether it's
                            grooming, training, or treatment, our team ensures that your pets receive the best attention they
                            deserve. Your pet's comfort and happiness are our priority.</p>

                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <h5 class="text-primary mb-4">Get In Touch</h5>
                                <p><i class="fa fa-map-marker-alt mr-2"></i>11/7, Mint Street, Sowcarpet, Chennai-06 </p>
                                <p><i class="fa fa-phone-alt mr-2"></i>9694207540</p>
                                <p><i class="fa fa-envelope mr-2"></i>petzee@gmail.com</p>
                                <div class="d-flex justify-content-start mt-4">
                                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                        style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                        style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                        style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                        style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <h5 class="text-primary mb-4">Popular Links</h5>
                                <div class="d-flex flex-column justify-content-start">
                                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <h5 class="text-primary mb-4">News Letter</h5>
                                <form action="newsletter.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="newsuser" class="form-control border-0" placeholder="Your Name"
                                            required="required"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="newsemail" class="form-control border-0" placeholder="Your Email"
                                            required="required" />
                                    </div>
                                    <div>
                                        <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit
                                            Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                        <p class="m-0 text-white">
                            &copy; <a class="text-white font-weight-bold" href="#">PetZee</a>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <ul class="nav d-inline-flex">
                            <li class="nav-item">
                                <a class="nav-link text-white py-0" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white py-0" href="#">Terms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white py-0" href="#">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white py-0" href="#">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </article>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>