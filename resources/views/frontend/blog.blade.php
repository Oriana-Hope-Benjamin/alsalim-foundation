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
                    <h2>From Blog</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Blog</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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