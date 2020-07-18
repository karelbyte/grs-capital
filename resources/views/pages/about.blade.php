@extends('layouts.layout')
@section('content')
<!-- Top-Bar START -->
@component('components.top-bar')@endcomponent
<!-- Navbar START -->
@component('components.navbar')@endcomponent
<div class="page-title-section" style="background-image: url({{asset('img/about.png')}});">
  <div class="container">
    <h1 style="color:rgb( 66, 64,58)">{!!trans('messages.page-about-caption')!!}</h1>
    <ul>
      <li><a href="/" style="color:rgb( 66, 64,58)">{!!trans('messages.page-about-breadcrumbs-1')!!}</a></li>
      <li><a href="#" style="color:rgb( 66, 64,58)">{!!trans('messages.page-about-breadcrumbs-2')!!}</a></li>
    </ul>
  </div>
</div>
<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <img src="{{asset('img/valuebank.jpg')}}" class="rounded-border shadow-primary" alt="img">
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pl-30-md">
                    <div class="section-heading">
                        <h4 style="color:navajowhite"></h4>
                    </div>
                    <div class="section-heading-line-left"></div>
                    <div class="text-content-big mt-20">
                        <p style="color: navajowhite; text-align: justify">{!!trans('messages.page-about-msj-caption')!!}</p>
                    </div>
                    <div class="row mt-20">
                        <div class="col-md-12">
                            <ul class="primary-list">
                                {!!trans('messages.page-about-msj-terms-1')!!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pl-30-md">
                    <div class="section-heading-line-left"></div>
                    <div class="text-content-big mt-20">
                        <p style="color: #fde4bd; text-align: justify">{!!trans('messages.page-about-msj-name')!!}</p>
                    </div>
                    <div class="row mt-20">
                        <div class="col-md-12">
                            <ul class="primary-list">
                                {!!trans('messages.page-about-msj-message')!!}
                            </ul>
                        </div>
                    </div>
                    <div class="text-content-big mt-20">
                        <p style="color: #fde4bd; text-align: justify">{!!trans('messages.page-about-msj-emit')!!}</p>
                    </div>
                    <div class="mt-35">
                        <a href="{{url('contact')}}" class="primary-button button-sm mb-15-xs">{!!trans('messages.page-about-info-call')!!}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <img src="{{asset('img/factoring.jpg')}}" class="rounded-border" alt="img">
            </div>
        </div>
    </div>
</div>
@endsection
