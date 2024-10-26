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
                    <img class="img-fluid" src="{{ asset('img/software.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Software Development</h6>
                    <h1 class="display-6 mb-4">Software Development services With <span class="text-primary">10 Years</span> Of Experience</h1>
                    <p>Custom software development is the process of designing, building, integrating, scaling, and upgrading software solutions to address the pressing needs or achieve objectives of your specific business.
                        We at HiTech Network Solutions provide you the solutions best suited to your requirements.</p>

                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('service') }}">Other Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Automation End -->


@endsection

