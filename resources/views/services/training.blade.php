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
                    <img class="img-fluid" src="{{ asset('img/training.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Training</h6>
                    <h1 class="display-6 mb-4">Training With <span class="text-primary">10 Years</span> Of Experience</h1>
                    <p>HiTech Network Solutions offers instructor-led courses featuring leading partner technologies. We provide flexible education options delivered virtually or on site. We also limit class sizes to maximize instructor/student interaction. Hitech Solution Network offers instructor-led courses featuring leading partner technologies. We provide flexible education options delivered virtually or on site. We also limit class sizes to maximize instructor/student interaction.</p>

                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('service') }}">Other Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Automation End -->


@endsection

