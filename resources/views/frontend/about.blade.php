<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.header')
</head>

<body>
    <!-- Top Bar Start -->
    @extends('frontend.layouts.app')

    @section('content')
    <div class="hero-section">
        <h4>Welcome to Alsalim Foundation</h4>
        <p>Making a difference together.</p>
    </div>

    @endsection
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
   <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>Worldwide non-profit charity organization</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Alsalim Welfare Foundation is a nonprofit organization committed to improving lives and strengthening communities through compassion, service, and sustainable development. We work with individuals, families, volunteers, and partners to provide meaningful support where it is needed most.
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                               To improve lives by providing compassionate humanitarian support, empowering vulnerable communities, and promoting sustainable development through service, partnership, and integrity.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                             To create a world where every individual and community has the opportunity to live with dignity, hope, and equal access to a better future.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
   
    <!-- Facts End -->


    <!-- Team Start -->
   
    <!-- Team End -->


    <!-- Testimonial Start -->
  
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @extends('frontend.layouts.footer')
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>