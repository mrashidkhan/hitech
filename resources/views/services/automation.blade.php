@extends('layouts.master')

@section('title', 'Project')

@section('page-title', 'Project')

@section('content')

    @include('partials.pageheader')

    <!-- IT Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="{{ asset('img/automation.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Automation</h6>
                    <h1 class="display-6 mb-4">Automation Services With <span class="text-primary">10 Years</span> Of Experience</h1>
                    <p>At HiTech Network Solutions, we help businesses automate processes involving repetitive activities. We have deep expertise in automating processes in IT operations (new use onboarding), financial services (account payable provisioning, payment processing, reconciliation, and claims processing), manufacturing processes (price comparison, reporting, and data monitoring), and government processes (verification, integrating legacy systems and daily reports).</p>

                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('service') }}">Other Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- IT Services End -->

@endsection
