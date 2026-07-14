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
                    <h2>Contact Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>Contact for any query</h2>
            </div>

            <div class="contact-img mb-5">
                <!-- Ensure your image uses the asset() helper -->
                <img src="{{ asset('img/contact.jpg') }}" alt="Contact Image">
            </div>

            <div class="contact-form">

                <!-- Success Message Display -->
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <!-- The Form -->
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf <!-- CRITICAL: CSRF Protection -->

                    <div class="control-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Your Name" required />
                        @error('name')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email" required />
                        @error('email')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group mb-3">
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject" required />
                        @error('subject')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group mb-3">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button class="btn btn-custom" type="submit">Send Message</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Contact End -->


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