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
                    <img class="img-fluid" src="{{ asset('img/staffing.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">IT & Telecom Staffing and Placements</h6>
                    <h1 class="display-6 mb-4">IT & Telecom Staffing and Placements services With <span class="text-primary">10 Years</span> Of Experience</h1>
                    <p>Finding and hiring 10X talent takes valuable time and resources. When you work with HiTech Network Solutions, you get a dedicated team of expert web and mobile app developers who are ready to get to work for you.
                        It saves you the time and effort of having to go through a recruitment process. You get to bring in immediate development talents and skills to your existing team without any long-term commitments or potential HR issues. Less risk, more immediate productivity.</p>

                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('service') }}">Other Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Automation End -->


@endsection

