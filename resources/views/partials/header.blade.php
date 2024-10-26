<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Ramtek Network Solutions: Empowering businesses with cutting-edge IT solutions tailored to your specific needs.">
    <meta name="author" content="">

    <!-- Social Media Meta Tags (Replace content with your actual information) -->
    <meta name="keywords"
          content="Hitech, IT Solutions, IT, Automation, Software, Digital Margeting" />
    <meta property="og:title" content="Hitech Network Solutions" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
          content="Hitech Network Solutions: Empowering businesses with cutting-edge IT solutions tailored to your specific needs." />

    <meta property="og:image"
          content="{{ asset('img/logo.png') }}" />
    <meta property="og:url" content="https://hitechnetworksolutions.com" />
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hitech Network Solutions">
    <meta name="twitter:description"
          content="Hitech Network Solutions: Empowering businesses with cutting-edge IT solutions tailored to your specific needs.">
    <meta name="twitter:image"
          content="{{ asset('img/favicon.png') }}">

    <!-- Favicon and touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon_io/site.webmanifest') }}">

    {{-- <meta charset="utf-8">
    <title>DGcom - Web Design Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description"> --}}

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-secondary" href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Career</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Privacy</a></li>
                </ol>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand & Contact Start -->
    <div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <h1 class="fw-bold text-primary m-0"><i class="fa fa-laptop-code me-3"></i>HITECH</h1>
                    <!-- <img src="{{ asset('img/logo.png') }}" alt="Logo"> -->
                </a>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-clock text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Opening Hour</p>
                                <h6 class="mb-0">Mon - Fri, 9:00 - 5:00</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Call Us</p>
                                <h6 class="mb-0">+1 214-679-6818</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-envelope text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Fax</p>
                                <h6 class="mb-0">972-247-8155</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About Us</a>

                <div class="nav-item dropdown">
                    <a href="{{ route('service') }}" class="nav-link dropdown-toggle {{ (Request::routeIs('services.*') ? 'active' : '') }}" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                      <a href="{{ route('service') }}" class="dropdown-item">All Services</a>
                      <a href="{{ route('services.automation') }}" class="dropdown-item">Automation</a>
                      <a href="{{ route('services.staffing') }}" class="dropdown-item">Staffing</a>
                      <a href="{{ route('services.itservice') }}" class="dropdown-item">IT Services</a>
                      <a href="{{ route('services.itsolutions') }}" class="dropdown-item">IT Solutions</a>
                      <a href="{{ route('services.training') }}" class="dropdown-item">Training</a>
                      <a href="{{ route('services.softwaredevelopment') }}" class="dropdown-item">Software Development</a>
                    </div>
                  </div>
                <a href="{{ route('project') }}" class="nav-item nav-link {{ Request::is('project') ? 'active' : '' }}">Projects</a>
                <a href="{{ route('team') }}" class="nav-item nav-link {{ Request::is('team') ? 'active' : '' }}">Our Team</a>
                <a href="{{ route('testimonials') }}" class="nav-item nav-link {{ Request::is('testimonials') ? 'active' : '' }}">Testimonial</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact Us</a>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block">Contact Us</a>
        </div>
    </nav>
    <!-- Navbar End -->
