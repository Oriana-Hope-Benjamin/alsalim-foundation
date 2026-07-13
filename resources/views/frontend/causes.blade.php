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
                    <h2>Popular Causes</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Causes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
  <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>We believe that we can save more lifes with you</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-diet"></i>
                        </div>
                        <div class="service-text">
                            <h3>Healthy Food</h3>
                            <p>Through generous donations, we provide nutritious food and essential supplies to vulnerable families, helping reduce hunger and improve health within our communities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-water"></i>
                        </div>
                        <div class="service-text">
                            <h3>Pure Water</h3>
                            <p>Through donations, we support clean water initiatives by improving access to safe drinking water and sanitation, helping communities live healthier and safer lives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                        <div class="service-text">
                            <h3>Health Care</h3>
                            <p>Through charitable donations, we help provide essential healthcare services, medical outreach, health education, and basic treatment for people in need.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="service-text">
                            <h3>Primary Education</h3>
                            <p>Through the support of donors, we provide school fees, learning materials, uniforms, and educational opportunities that help children build a brighter future.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="service-text">
                            <h3>Residence Facilities</h3>
                            <p>Through donations, we assist vulnerable families with safe shelter, housing improvements, and basic household necessities to promote security and dignity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-social-care"></i>
                        </div>
                        <div class="service-text">
                            <h3>Social Care</h3>
                            <p>Through the generosity of our donors, we support orphans, older adults, people with disabilities, and vulnerable families by providing care, essential assistance, and programs that restore hope and strengthen communities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Causes Start -->
    <div class="causes">
        <div class="container">
            <div class="section-header text-center">
                <p>Popular Causes</p>
                <h2>Let's know about charity causes around the world</h2>
            </div>
            <div class="owl-carousel causes-carousel">
                @forelse($causes as $cause)
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ $cause->image ? asset('storage/' . $cause->image) : asset('img/causes-4.jpg') }}" alt="{{ $cause->title }}">
                    </div>

                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar"
                                role="progressbar"
                                aria-valuenow="{{ $cause->progress_percentage }}"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width: {{ $cause->progress_percentage }}%;">
                                <span>{{ $cause->progress_percentage }}%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> ${{ number_format($cause->amount_raised) }}</p>
                            <p><strong>Goal:</strong> ${{ number_format($cause->goal_amount) }}</p>
                        </div>
                    </div>

                    <div class="causes-text">
                        <h3>{{ $cause->title }}</h3>
                        <p>{{ \Illuminate\Support\Str::limit($cause->description, 120) }}</p>
                    </div>

                    <div class="causes-btn">
                        <a href="#" class="btn btn-custom" data-toggle="modal" data-target="#causeModal{{ $cause->id }}">Learn More</a>
                        <a href="#" class="btn btn-custom">Donate Now</a>
                    </div>
                </div>
                @empty
                <p class="text-center">No causes available yet.</p>
                @endforelse
            </div>
        </div>
        @foreach($causes as $cause)
        <div class="modal fade" id="causeModal{{ $cause->id }}" tabindex="-1" role="dialog" aria-labelledby="causeModalLabel{{ $cause->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 15px; border: none;">

                    <div class="modal-header bg-light border-0">
                        <h5 class="modal-title font-weight-bold" id="causeModalLabel{{ $cause->id }}">{{ $cause->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body p-4 p-md-5">
                        <img src="{{ $cause->image ? asset('storage/' . $cause->image) : asset('img/causes-4.jpg') }}" alt="{{ $cause->title }}" class="img-fluid rounded mb-4 w-100 shadow-sm" style="object-fit: cover; max-height: 400px;">

                        <div class="bg-light p-3 rounded mb-4 shadow-sm">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="font-weight-bold text-dark">Raised: ${{ number_format($cause->amount_raised) }}</span>
                                <span class="font-weight-bold text-muted">Goal: ${{ number_format($cause->goal_amount) }}</span>
                            </div>
                            <div class="progress" style="height: 10px; border-radius: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: {{ $cause->progress_percentage }}%; background-color: #FDBE33;" aria-valuenow="{{ $cause->progress_percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <h5 class="font-weight-bold text-dark mb-3">About this Cause</h5>
                        <p class="text-dark" style="white-space: pre-line; line-height: 1.8; font-size: 1.05rem;">{{ $cause->description }}</p>
                    </div>

                    <div class="modal-footer border-0 bg-light">
                        <button type="button" class="btn btn-secondary px-4" data-dismiss="modal">Close</button>
                        <a href="#" class="btn btn-custom px-4">Donate Now</a>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>

    </div>
    </div>
    <!-- Causes End -->


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