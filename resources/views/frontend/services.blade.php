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
                    <h2>Our Services</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Services</a>
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


    <!-- Services Display Start (Kept "causes" class for CSS styling preservation) -->
    <div class="causes">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Services</p>
                <h2>Explore the services we offer to the community</h2>
            </div>
            <div class="owl-carousel causes-carousel">
                @forelse($services as $service)
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ $service->image ? asset('storage/' . $service->image) : asset('img/causes-4.jpg') }}" alt="{{ $service->title }}">
                    </div>

                    <!-- Replaced funding progress with WhatsApp contact info -->
                  

                    <div class="causes-text mb-4">
                        <h3>{{ $service->title }}</h3>
                        <p>{{ \Illuminate\Support\Str::limit($service->description, 120) }}</p>
                    </div>

                    <div class="causes-btn">
                        <a href="#" class="btn btn-custom" data-toggle="modal" data-target="#serviceModal{{ $service->id }}">Learn More</a>
                        <!-- Direct WhatsApp link button -->
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $service->whatsapp_number) }}" target="_blank" class="btn btn-custom">WhatsApp Us</a>
                    </div>
                </div>
                @empty
                <p class="text-center w-100">No services available yet.</p>
                @endforelse
            </div>
        </div>

        @foreach($services as $service)
        <div class="modal fade" id="serviceModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel{{ $service->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 15px; border: none;">

                    <div class="modal-header bg-light border-0">
                        <h5 class="modal-title font-weight-bold" id="serviceModalLabel{{ $service->id }}">{{ $service->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body p-4 p-md-5">
                        <img src="{{ $service->image ? asset('storage/' . $service->image) : asset('img/causes-4.jpg') }}" alt="{{ $service->title }}" class="img-fluid rounded mb-4 w-100 shadow-sm" style="object-fit: cover; max-height: 400px;">

                        <div class="bg-light p-3 rounded mb-4 shadow-sm text-center">
                            <h6 class="font-weight-bold mb-0">
                                <i class="fab fa-whatsapp text-success fa-lg mr-2"></i> 
                                Reach us directly on WhatsApp: <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $service->whatsapp_number) }}" target="_blank" class="text-dark">{{ $service->whatsapp_number }}</a>
                            </h6>
                        </div>

                        <h5 class="font-weight-bold text-dark mb-3">About this Service</h5>
                        <p class="text-dark" style="white-space: pre-line; line-height: 1.8; font-size: 1.05rem;">{{ $service->description }}</p>
                    </div>

                    <div class="modal-footer border-0 bg-light">
                        <button type="button" class="btn btn-secondary px-4" data-dismiss="modal">Close</button>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $service->whatsapp_number) }}" target="_blank" class="btn btn-custom px-4"><i class="fab fa-whatsapp"></i> Chat Now</a>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Services Display End -->


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