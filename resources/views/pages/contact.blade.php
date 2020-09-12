@extends('layouts.layout')
@section('content')
<!-- Top-Bar START -->
@component('components.top-bar')@endcomponent
<!-- Navbar START -->
@component('components.navbar')@endcomponent
<div class="page-title-section" style="background-image: url({{asset('img/contact.png')}});">
  <div class="container">
    <h1 style="color:rgb( 66, 64,58)">{!!trans('messages.page-contact-caption')!!}</h1>
    <ul>
      <li><a href="/" style="color:rgb( 66, 64,58)">{!!trans('messages.page-contact-breadcrumbs-1')!!}</a></li>
      <li><a href="#" style="color:rgb( 66, 64,58)">{!!trans('messages.page-contact-breadcrumbs-2')!!}</a></li>
    </ul>
  </div>
</div>
<div id="email" class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-12">
                <div class="section-heading mt-15">
                    <h4 style="color: navajowhite">{!!trans('messages.page-contact-msj-caption')!!}</h4>
                    <div class="section-heading-line-left"></div>
                </div>
                <div class="contact-form-box mt-30">
                    <!-- Form START -->
                    <form class="contact-form" method="post" action="/email-to-client">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="name" placeholder="{!!trans('messages.page-contact-msj-name')!!}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="email" name="email" placeholder="{!!trans('messages.page-contact-msj-email')!!}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <textarea name="message" placeholder="{!!trans('messages.page-contact-msj-message')!!}"></textarea>
                                @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-30">
                                <button class="primary-button button-md" type="submit">{!!trans('messages.page-contact-msj-emit')!!}</button>
                            </div>
                            <input type="text" name="url" value="/contact/" hidden>
                        </div>
                    </form>
                    <!-- Form END -->
                </div>
                @if (session('msj'))
                    <div class="alert alert-success">
                        {!!trans('messages.send-msj-success')!!}
                    </div>
                @endif
            </div>

            <div class="col-md-5 col-sm-5 col-12">
                <div class="contact-info-box">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 center-holder">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4 style="color: navajowhite">{!!trans('messages.page-contact-info-call')!!}</h4>
                                        <p>(+755) 557 0669</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 center-holder">
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4 style="color: navajowhite">{!!trans('messages.page-contact-info-message')!!}</h4>
                                        <p>contacto@grscapital.com.mx</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 center-holder">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4 style="color: navajowhite">{!!trans('messages.page-contact-info-address')!!}</h4>
                                        <p>Bamboo #44, Los Hujes</p>
                                        <p>Zihuatenejo Gro, CP: 40880</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 center-holder">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4 style="color: navajowhite">{!!trans('messages.page-contact-info-hours')!!}</h4>
                                        <p>{!!trans('messages.page-contact-info-days')!!} 09:00 - 19:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
