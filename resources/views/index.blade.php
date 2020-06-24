@extends('layouts.layout')
@section('content')
<!-- Top-Bar START -->
@component('components.top-bar')@endcomponent
<!-- Navbar START -->
@component('components.navbar')@endcomponent
<!-- Parallax  -->
@component('components.parallax-slider')@endcomponent
<!-- Info Section START -->
@component('components.info-start')@endcomponent
<!--Boxes START -->
@component('components.boxes-start')@endcomponent
<!--Features Section START-->
@component('components.features-start')@endcomponent
<!-- Feedback Section START -->
@component('components.feedback-start')@endcomponent
@endsection
