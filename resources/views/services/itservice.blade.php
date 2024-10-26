@extends('layouts.master')

@section('title', 'IT Services')

@section('page-title', 'IT Services')

@section('content')

    @include('partials.pageheader')

    <!-- IT Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="{{ asset('img/itservice.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">IT Services</h6>
                    <h1 class="display-6 mb-4">IT Services With <span class="text-primary">10 Years</span> Of Experience</h1>
                    <p>Whether you need custom web and mobile development or a dedicated team of your own, HiTech Network Solutions is ready to help. Whether you need custom web and mobile development or a dedicated team of your own, Hi-tech Solution Network is ready to help. Whether you need custom web and mobile development or a dedicated team of your own, Hi-tech Solution Network is ready to help.</p>

                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('services.itservice') }}">Other Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- IT Services End -->


@endsection

