@extends('layouts.master')

@section('title', 'Home')

@section('page-title', 'Home')

@section('content')

    @include('partials.carouselsection')
    @include('partials.factssection')
    @include('partials.aboutsection')
    @include('partials.servicesection')
    @include('partials.featuresection')
    @include('partials.projectsection')
    @include('partials.teamsection')
    @include('partials.testimonialsection')
    {{-- @include('partials.contactsection') --}}

@endsection
