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
      <li><a href="/contact" style="color:rgb( 66, 64,58)">{!!trans('messages.page-about-breadcrumbs-2')!!}</a></li>
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
                        <h4 style="color:navajowhite">Sobre nosotros</h4>
                    </div>
                    <div class="section-heading-line-left"></div>
                    <div class="text-content-big mt-20">
                        <p style="color: navajowhite; text-align: justify">GRS Capital es una empresa con más de 10 años de experiencia en el sistema financiero. Fundada en el año 2009, inicio operaciones como una SOFOM (Sociedad Financiera de Objeto Múltiple), cuyo objeto principal era, entre otros:</p>
                    </div>
                    <div class="row mt-20">
                        <div class="col-md-12">
                            <ul class="primary-list">
                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow">La captación de recursos provenientes de instrumentos calificados, así como de entidades financieras del
                                    país y del extranjero.</span></li>
                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow">Otorgar financiamiento a personas físicas y morales en su calidad de micro pequeñas y medianas empresas.</span></li>
                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow">Realizar operaciones de Arrendamiento y Factoraje financieros.</span></li>
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
                        <p style="color: #fde4bd; text-align: justify">En el año 2014 el Estado Mexicano aumento la regulación legal normativa y prudencial para las SOFOM, lo cual presento desventajas legales, económicas y corporativas para este tipo de sociedades, llevando a más del 80% de las mismas a cerrar sus operaciones. En este contexto GRS Capital cambio su Régimen y Objeto Sociales, migrando a una Sociedad Anónima de Capital Variable (SA de CV) y
                            además cambio su objeto social, teniendo a partir de esa fecha como algunas de sus actividades principales</p>
                    </div>
                    <div class="row mt-20">
                        <div class="col-md-12">
                            <ul class="primary-list">
                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow">La captación de recursos provenientes de instrumentos calificados, así como de entidades financieras del país y del extranjero.</span></li>
                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow">Otorgar financiamiento a personas físicas y morales en su calidad de micro pequeñas y medianas empresas.</span></li>
                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow">Realizar operaciones de Arrendamiento y Factoraje financieros.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-content-big mt-20">
                        <p style="color: #fde4bd; text-align: justify">Actualmente, entre otras actividades, GRS Capital está funcionando como Operadora de un Fondo de Inversión mixto del cual se puede encontrar más información en esta página bajo el título ‘Fondo de Inversión’ en el encabezado inicial.</p>
                    </div>
                    <div class="mt-35">
                        <a href="#" class="primary-button button-sm mb-15-xs">Contact Us</a>
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
