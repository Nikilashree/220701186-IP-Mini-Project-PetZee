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
    <title>PetLover - Pet Care Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <div class="slides">
            <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-lg-5"
                style="background-color: rgba(0, 0, 0, 0.5); position: absolute; width: 100%; z-index: 10;">
                <!-- Brand Name "PetZee" on the Left Side -->
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 display-5 text-capitalize font-italic text-white">
                        <span class="text-primary">Pet</span>Zee
                    </h1>
                </a>
                <!-- Navbar Toggler for mobile screens -->
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
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
    <!-- Navbar End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row pb-3">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-box">
                    <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Pet Boarding</h3>
                    <p>We provide a safe and comfortable environment for your pet while you're away. Our
                        dedicated staff
                        ensures their well-being and happiness.</p>
                    <a class="text-uppercase font-weight-bold" href="">Read More</a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-box">
                        <h3 class="flaticon-doctor display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Treatment</h3>
                        <p>Your pet's nutritional needs are our top priority. We provide healthy, balanced meals to
                            keep
                            your pet happy and healthy.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-box">
                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Grooming</h3>
                        <p>Our grooming services ensure your pet looks and feels their best. We offer bathing,
                            trimming, and
                            other care to keep them clean and stylish.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Booking Start -->
        <section>
            <div class="container-fluid bg-light">
                <div class="slides">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 my-5">
                                <div class="bg-primary py-5 px-4 px-sm-5">
                                    <form action="booking1.php" method="POST" class="py-5">
                                        <div class="form-group">
                                            <input type="text" name="userodaname" class="form-control border-0 p-4"
                                                placeholder="Your Name" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="userodaemail" class="form-control border-0 p-4"
                                                placeholder="Your Email" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" name="reservationdate"
                                                    class="form-control border-0 p-4 datetimepicker-input"
                                                    placeholder="Reservation Date" data-target="#date"
                                                    data-toggle="datetimepicker" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" name="reservationtime"
                                                    class="form-control border-0 p-4 datetimepicker-input"
                                                    placeholder="Reservation Time" data-target="#time"
                                                    data-toggle="datetimepicker" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select name="service" class="custom-select border-0 px-4" style="height: 47px;">
                                                <option selected>Select a service</option>
                                                <option value="1">Boarding</option>
                                                <option value="2">Treatment</option>
                                                <option value="3">Grooming</option>
                                                <option value="4">Training</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Book Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7 py-5 py-lg-0 px-3 mt-5 px-lg-5">
                                <h4 class="text-secondary mb-3">Going for a vacation?</h4>
                                <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                                <p>Need to travel? We make sure your pet is taken care of while you're away. Enjoy peace of
                                    mind,
                                    knowing your furry
                                    friend is in safe hands.</p>
                                <div class="row py-2">
                                    <div class="col-sm-6">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-2">
                                                <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                                <h5 class="text-truncate m-0">Pet Boarding</h5>
                                            </div>
                                            <p>Safe and comfortable boarding for your pet while you're away. We provide a loving
                                                environment with
                                                all the care they need.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-2">
                                                <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                                                <h5 class="text-truncate m-0">Pet Treatment</h5>
                                            </div>
                                            <p>Ensure your pet stays healthy with our medical care and health services. Regular
                                                checkups
                                                and
                                                treatments available.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-2">
                                                <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                                <h5 class="text-truncate m-0">Pet Grooming</h5>
                                            </div>
                                            <p class="m-0">Pamper your pet with our grooming services, including bathing,
                                                trimming, and
                                                styling to
                                                keep them looking their best.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-2">
                                                <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                                <h5 class="text-truncate m-0">Pet Training</h5>
                                            </div>
                                            <p class="m-0">Professional pet training to help improve behavior and teach new
                                                skills. We
                                                make learning
                                                fun for your pet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Booking Start -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Pricing Plan</h4>
                <h1 class="display-4 m-0">Choose the <span class="text-primary">Best Price</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/price-1.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Basic</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Feeding</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Boarding</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Spa & Grooming</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Veterinary Medicine</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/price-2.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Standard</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Feeding</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Boarding</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Spa & Grooming</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Veterinary Medicine</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/price-3.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Premium</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i></li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Boarding</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Spa & Grooming</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Veterinary Medicine</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking1.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


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
                                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <h5 class="text-primary mb-4">Newsletter</h5>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control border-0" placeholder="Your Name"
                                            required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control border-0" placeholder="Your Email"
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

</html>
