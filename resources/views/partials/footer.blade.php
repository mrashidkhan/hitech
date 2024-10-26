<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>2727 LBJ Freeway, Suite 200
                    Dallas, TX, 75234</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1 214-679-6818</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@hitechnetworksolutions.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">

                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="{{ route('index') }}">Home</a>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('service') }}">Our Services</a>
                <a class="btn btn-link" href="{{ route('testimonials') }}">Testimonials</a>

            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Gallery</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{ asset('img/project-1.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{ asset('img/project-2.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{ asset('img/project-3.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{ asset('img/project-4.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{ asset('img/project-5.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{ asset('img/project-6.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Stay updated with the latest news and offers.</p>
                <form action="{{ route('subscribe') }}" method="POST">
                @csrf
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="email" name="email" placeholder="Your email">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </form>
                @if ($errors->any())
                            <div class="alert alert-danger" style="margin-top: 10px;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('info'))
                            <div id="subscribemessage" class="alert alert-info" style="margin-top: 10px;">
                                {{ session('info') }}
                            </div>
                        @endif
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Hitech Network Solutions</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
<script>
    window.addEventListener('load', function() {
        var element = document.getElementById('contactmessage');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
<script>
    window.addEventListener('load', function() {
        var element = document.getElementById('subscribemessage');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>

</body>

</html>
