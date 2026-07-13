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


    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-1.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Al-salim Welfare Foundation</h1>
                        <p>
                             dedicated to transforming lives through compassion, community support, and sustainable hope for a better tomorrow.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="">Donate Now</a>
                           
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Video Modal Start-->
    <!---->
    <!-- Video Modal End -->


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


    <!-- 
     <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-home"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                            <p>Countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-charity"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                            <p>Volunteers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-kindness"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                            <p>Our Goal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-donation"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                            <p>Raised</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   -->
    <!-- Facts End -->


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


    <!-- Donate Start -->
    
    <!-- Donate End -->


    <!-- Event Start -->
    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>Upcoming Events</p>
                <h2>Be ready for our upcoming charity events</h2>
            </div>
            <div class="row">

                @forelse($events as $event)
                <div class="col-lg-6 mb-4">
                    <div class="event-item h-100">
                        <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('img/event-2.jpg') }}" alt="{{ $event->title }}" style="height: 250px; width: 100%; object-fit: cover;">

                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>{{ $event->event_date->format('d-M-y') }}</p>

                                <p>
                                    <i class="far fa-clock"></i>
                                    {{ $event->start_time->format('H:i') }}
                                    @if($event->end_time)
                                    - {{ $event->end_time->format('H:i') }}
                                    @endif
                                </p>

                                <p><i class="fa fa-map-marker-alt"></i>{{ Str::limit($event->location, 15) }}</p>
                            </div>
                            <div class="event-text">
                                <h3>{{ $event->title }}</h3>
                                <p>
                                    {{ Str::limit($event->description, 120) }}
                                </p>
                                <a class="btn btn-custom" href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No upcoming events are scheduled at the moment. Please check back later!</p>
                </div>
                @endforelse

            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Team Start -->
    
    <!--
     <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Meet Our Team</p>
                <h2>Awesome guys behind our charity activities</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Donald John</h2>
                            <p>Founder & CEO</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Chef Executive</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Thomas Olsen</h2>
                            <p>Chef Advisor</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>James Alien</h2>
                            <p>Advisor</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   -->
    <!-- Team End -->


    <!-- Volunteer Start -->

    <!-- Volunteer End -->


    <!-- Testimonial Start -->
  
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>Contact for any query</h2>
            </div>
            <div class="contact-img">
                <img src="img/contact.jpg" alt="Image">
            </div>
            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Blog</p>
                <h2>Latest news & articles directly from our blog</h2>
            </div>
            <div class="row">
                @forelse($blogs as $blog)
                <div class="col-lg-4 mb-4">
                    <div class="blog-item h-100">
                        <div class="blog-img">
                            <a href="#" data-toggle="modal" data-target="#blogModal{{ $blog->id }}">
                                <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('img/blog-3.jpg') }}" alt="{{ $blog->title }}" style="width: 100%; height: 250px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#" data-toggle="modal" data-target="#blogModal{{ $blog->id }}">{{ $blog->title }}</a></h3>
                            <p>{{ \Illuminate\Support\Str::limit($blog->description, 120) }}</p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">{{ $blog->uploaded_by }}</a></p>
                            <p><i class="fa fa-calendar"></i><a href="#">{{ $blog->created_at->format('M d, Y') }}</a></p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No blog posts available yet.</p>
                </div>
                @endforelse
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>

            @foreach($blogs as $blog)
            <div class="modal fade" id="blogModal{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="blogModalLabel{{ $blog->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content" style="border-radius: 15px; border: none;">

                        <div class="modal-header bg-light border-0">
                            <h5 class="modal-title font-weight-bold" id="blogModalLabel{{ $blog->id }}">{{ $blog->title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body p-4 p-md-5">
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('img/blog-3.jpg') }}" alt="{{ $blog->title }}" class="img-fluid rounded mb-4 w-100 shadow-sm" style="object-fit: cover; max-height: 400px;">

                            <div class="d-flex justify-content-between mb-4 text-muted small border-bottom pb-2">
                                <span><i class="fa fa-user mr-1 text-primary"></i> {{ $blog->uploaded_by }}</span>
                                <span><i class="fa fa-calendar mr-1 text-primary"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                            </div>

                            <p class="text-dark" style="white-space: pre-line; line-height: 1.8; font-size: 1.05rem;">{{ $blog->description }}</p>
                        </div>

                        <div class="modal-footer border-0 bg-light">
                            <button type="button" class="btn btn-secondary px-4" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Blog End -->


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