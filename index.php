<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
// include('includes/slider.php');

?>
<!-- 
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> -->

<?php include('message.php'); ?>



<!-- <section>
                    <div class="container">
                        <div class="row ">

                            <div class="col-md-4 mt-2 border-rounded">
                                <div class="card">
                                    <img src="assets/images/slider/card1.jpg" class="card-img-top" alt="..." height="150px" width="150px">/// had been commented before
                                    <div class="card-body">
                                        <h2 class="card-title text-colden">Our Vision</h2>
                                        <p class="card-text">To ensure ease application anywhere,anytime.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mt-2 border-rounded ">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title text-colden">Our Mission</h2>
                                        <p class="card-text">To ensure smooth running of application. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4  mt-2 border-rounded">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title text-colden ">Our Values</h2>
                                        <p class="card-text">Improved user support.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> -->


<!-- Banner Section -->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-title">LEAVE MANAGEMENT SYSTEM</p>
                <p>Welcome to Leave Management System where you can apply Leave and track the progress on your own account.</p>
                <p>Get educated on how to apply Leave online by watching this video below</p>
                <a href="#"><img src="assets/images/play.png" alt="Online System image" class="play-btn">Watch this Short Tutorial</a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/home2.png" class="image" alt="">
            </div>
        </div>
    </div>
    <img src="assets/images/wave1.png" alt="" class="bottom-img">
</section>


<!-- Services Section -->
<section id="services">
    <div class="container text-center">
        <h1 class="title">OUR DAILY SERVICES ?</h1>
        <div class="row text-center">
            <div class="col-md-4 services">
                <img src="assets/images/service1.png" alt="" class="service-img">
                <h4>leave application</h4>
                <p>Apply leave at your own comfort zone,anywhere anytime. Its Easy and Faster</p>
            </div>
            <div class="col-md-4 services">
                <img src="assets/images/service2.png" alt="" class="service-img">
                <h4>leave status</h4>
                <p>Login and tab on leave application, then tab on leave status.Ensure that you keep on tracking your status!</p>
            </div>
            <div class="col-md-4 services">
                <img src="assets/images/service3.png" alt="" class="service-img">
                <h4>profile update</h4>
                <p>It is User friendly System, where you shall be able change your Profile easily. Just follow instructions carefully. </p>
            </div>
        </div>
        <button type="button" class="btn btn-primary">All Services</button>
    </div>
</section>

<!-- About Us -->
<section id="about-us">
    <div class="container">
        <h1 class="title text-center">
            WHY CHOOSE US ?
        </h1>
        <div class="row">
            <div class="col-md-6 about-us">
                <p class="about-title">Why we are Different</p>
                <ul>
                    <li>
                        We believe that fast response is the key role.
                    </li>
                    <li>
                        We provide a clear and easy application.
                    </li>
                    <li>
                        We offer assistance to our Users.
                    </li>
                    <li>
                        We train our Users to ensure full understanding of the system terms and condition.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="assets/images/network.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

</section>
<!-- TESTIMONIALS-->
<section id="testimonials">
    <div class="container">
        <h1 class="title text-center">
            WHAT OUR USERS SAY
        </h1>
        <div class="row offset-1">
            <div class="col-md-5 testimonials">
                <p>It is the best responsive Online Leave Management System which you can enjoy.</p>
                <img src="assets/images/user1.jpg" alt="">
                <p class="user-details"><b>Alicia</b><br>Co-founder at xyz</p>
            </div>
            <div class="col-md-5 testimonials">
                <p>It was easy and friendly. I got status of my application within short period</p>
                <img src="assets/images/user2.jpg" alt="">
                <p class="user-details"><b>Rony Ryan</b><br>Managing Director</p>
            </div>
        </div>
    </div>
</section>
<!-- Social media section -->
<section id="social-media">
    <div class="container text-center">
        <p>FIND US ON SOCIAL MEDIA</p>
        <div class="social-icons">
            <a href="#"><img src="assets/images/facebook-icon.png" alt=""></a>
            <a href="#"><img src="assets/images/instagram-icon.png" alt=""></a>
            <a href="#"><img src="assets/images/twitter-icon.png" alt=""></a>
            <a href="#"><img src="assets/images/linkedin-icon.png" alt=""></a>
            <a href="#"><img src="assets/images/snapchat-icon.png" alt=""></a>
        </div>
    </div>
</section>

<!-- Footer section -->
<section id="footer">
    <img src="assets/images/wave2.png" alt="" class="footer-img">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-box">
                <img src="assets/images/leave2-logo.png" alt="">
                <p>It is the best Online Leave Management System where you can enjoy at your own time,anywhere.</p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b>CONTACT US</b></p>
                <p><i class="fa fa-map-marker"></i> Leave Management Company, Kenya.</p>
                <p><i class="fa fa-phone"></i> +254 0002221</p>
                <p><i class="fa fa-envelope"></i> xyz@gmail.com</p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b>SUBSCRIBE FOR UPDATES</b></p>
                <input type="text" class="form-control" placeholder="Your Email">
                <button type="button" class="btn btn-primary">Subscribe</button>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright &copy;<?php echo date("Y"); ?><br>Website Designed By Rony Ryan</p>
    </div>
</section>




<!-- <button class="btn btn-primary">Login</button> -->
<!-- </div>
        </div>
    </div>
</div> -->

<?php
include('includes/footer.php');
?>