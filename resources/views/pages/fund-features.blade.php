
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
                <li><a href="{{url('fund-features')}}" style="color:rgb( 66, 64,58)">{!!trans('messages.page-contact-breadcrumbs-2')!!}</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="contact-info-box">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="contact-info-section-fix">
                                    <div class="row">
                                        <div class="fund col-sm-12 col-md-2 col-sm-2 col-4 center-holder">
                                            <i class="fa fa-check-circle-o"></i>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-sm-10 col-12">
                                            <h4 style="color: navajowhite">Requisitos de inversión del Fondo</h4>
                                            <ul class="primary-list">
                                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow;  text-align:justify">Para acceder al fondo y ser parte del mismo se necesita ser mayor de edad y hacer una inversión inicial mínima de $50 mil USD. Dicha inversión se hará directamente a la cuenta del fondo en Suiza. Esta cuenta pertenece y es administrada por el fondo de inversión
                                                y los depósitos de los inversionistas se hacen a través de un contrato de sociedad con el fondo.</span></li>
                                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow;  text-align:justify"> También se pueden abrir cuentas “master” privadas, las cuales pertenecen al inversionista y son monitoreadas y administradas por él mismo, solo la operación es ejecutada por el fondo de inversión. La inversión mínima en este tipo de cuenta es de $500 mil USD
                                                y se opera con los mismos criterios de riesgo, cuotas y comisiones de las cuentas estándar.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="contact-info-section-fix">
                                    <div class="row">
                                        <div class="fund col-sm-12 col-md-2 col-sm-2 col-4 center-holder">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-sm-10 col-12">
                                            <h4 style="color: navajowhite">Plazos</h4>
                                            <ul class="primary-list">
                                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow;  text-align:justify">Aunque los retiros de utilidad se recomienda y podrán hacerse mes con mes, el plazo mínimo más recomendable de estancia en el fondo es de 6 meses a un año</span></li>
                                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow;  text-align:justify">Las utilidades no retiradas son reinvertidas y pasan a ser parte del monto total del fondo de forma automática, con el correspondiente aumento de capital para los propietarios.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="contact-info-section-fix">
                                    <div class="row">
                                        <div class="fund col-sm-12 col-md-2 col-sm-2 col-4 center-holder">
                                            <i class="fa fa-institution"></i>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-sm-10 col-12">
                                            <h4 style="color: navajowhite">Destino y Montos de Inversión</h4>
                                            <ul class="primary-list">
                                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow; text-align:justify">El fondo, por el momento, tiene como únicos destinos la inversión en el mercado de divisas (Forex) y en el Mercado de dinero o de renta fija.</span></li>
                                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow; text-align:justify">La mayoría del monto total del fondo podrá invertirse en el mercado, siempre y cuando se garanticen y cumplan las reglas del control de riesgo del mismo.</span></li>
                                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow; text-align:justify">Este es un fondo donde se administran solo los recursos líquidos depositados en el fondo, por lo tanto no habrá necesidad de hacer llamados a capital.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="contact-info-section-fix">
                                    <div class="row">
                                        <div class="fund col-sm-12 col-md-2 col-sm-2 col-4 center-holder">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-sm-10 col-12">
                                            <h4 style="color: navajowhite">Estrategia</h4>
                                            <ul class="primary-list">
                                                <li><i class="fa fa-caret-right"></i><span style="color:lightgoldenrodyellow;  text-align:justify">Se usa una estrategia de mediano/largo plazo usando análisis técnico para el cual se emplean cuatro indicadores; dos osciladores y dos seguidores de tendencias. Los osciladores utilizados son el Comodity Channel Index (CCI por sus siglas en Ingles) y Estocástico Momentum Index (SMI por sus siglas en ingles) y los seguidores de tendencia son una Súper Tendencia (SuperTrend)  y una Media Móvil ponderada de 200 periodos (MM200).</span></li>
                                            </ul>
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
