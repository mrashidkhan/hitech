@extends('layouts.master')

@section('title', 'Automation')

@section('page-title', 'Automation')

@section('content')

    @include('partials.pageheader')

    <!-- Automation Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="{{ asset('img/itsolutions.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">IT Solutions</h6>
                    <h1 class="display-6 mb-4">IT Solutions services With <span class="text-primary">10 Years</span> Of Experience</h1>
                    <p>At HiTech Network Solutions, we’ve learned that there is no substitute for a well designed and well-supported technology environment. Whether you are updating hardware in support of a new enterprise application or trying to optimize your daily operational support,
                        HiTech Network Solutions understands your needs and we have taken our experiences and expertise to develop a suite of services that will help you get the most out of your information technology (IT).</p>

                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('service') }}">Other Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Automation End -->


@endsection

