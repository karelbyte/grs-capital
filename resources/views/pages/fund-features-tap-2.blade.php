@extends('layouts.layout')
@section('content')
    <!-- Top-Bar START -->
    @component('components.top-bar')@endcomponent
    <!-- Navbar START -->
    @component('components.navbar')@endcomponent
    <div class="page-title-section" style="background-image: url({{asset('img/contact.png')}});">
        <div class="container">
            <h1 style="color:rgb( 66, 64,58)">FONDO DE INVERSION</h1>
            <ul>
                <li><a href="/" style="color:rgb( 66, 64,58)">Inicio</a></li>
                <li><a href="#" style="color:rgb( 66, 64,58)">Fondo</a></li>
            </ul>
        </div>
    </div>
    <footer class="fund-back">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-12 col-sm-12 col-12">
                    <p class="text-justify mb-2" style="font-size: 16px; color: whitesmoke">GRS Capital es La Operadora de un fondo de inversión privado enfocado en aquellos inversionistas interesados en obtener rendimientos mucho más competitivos por su dinero que los bajos rendimientos que se obtienen cuando el dinero permanece en el banco o cuando se invierte en los fondos tradicionales ofrecidos por dichos bancos.</p>
                    <p class="text-justify mb-2" style="font-size: 16px; color: whitesmoke">A corto plazo el objetivo principal de este fondo es pagar altos rendimientos a un bajo costo y con un riesgo aceptable para cada tipo de inversionista.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Tabs (Hortizonal Center) START -->
    <div class="section-block" id='admin'>
        <div class="container">
            <div class="default-tabs">
                <div class='tabs tabs_animate mt-50'>
                    <ul class="tab-menu center-holder">
                        <li><a @if ($tap == 'features') class="active-tab" @endif href="{{ route('features').'#features' }}">@if ($tap == 'features') <i class="fa fa-eye"></i> @endif CARACTERISTICAS DEL FONDO</a></li>
                        <li><a @if ($tap == 'admin') class="active-tab" @endif href="#ad">@if ($tap == 'admin') <i class="fa fa-eye"></i> @endif SOBRE EL ADMINISTRADOR</a></li>
                        <li ><a @if ($tap == 'results') class="active-tab" @endif  href="{{ route('results').'#results' }}"> @if ($tap == 'results') <i class="fa fa-eye"></i> @endif RESULTADOS DE FONDO</a></li>
                    </ul>

                    <div id="ad" class="clearfix tab-body">
                        <div class="section-block-fund-2">
                            <div class="container">
                                <div class="team-single">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12 col-12">
                                            <div class="team-single-img">
                                                <img src="{{asset('img/admin.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <!-- Personal Info START -->
                                        <div class="col-md-8 col-sm-8 col-xs-12 col-12">
                                            <div class="team-single-text">
                                                <!--   <span>Agency Director</span> -->
                                                <h3 style="color: whitesmoke; margin-top: 10px;">Alcides Diaz Santos</h3>
                                                <ul class="team-single-info">
                                                    <li><strong>Telf:</strong><span>(+755) 557 0669</span></li>
                                                    <li><strong>email</strong><span>admin@grscapital.com</span></li>
                                                </ul>
                                                <ul class="primary-list mt-40">
                                                    <li style="text-align: justify" ><i class="fa fa-check"></i><span style="color: #caab88">El administrador del fondo es Ingeniero en Software y cuenta con Maestría en administración por el Instituto Superior Politécnico de la Ciudad de la Habana.</span></li>
                                                    <li style="text-align: justify"><i class="fa fa-check"></i><span style="color: #caab88">Esta certificado como Master Trader por el Market Trader Institute de Orlando Florida y posee más de 10 años de experiencia como operador master del mercado FOREX</span></li>
                                                    <li style="text-align: justify"><i class="fa fa-check"></i><span style="color: #caab88">También está titulado por el Rich Dad Coaching de Robert Kiyosaki, para la creación y administración de negocios</span></li>
                                                    <li style="text-align: justify"><i class="fa fa-check"></i><span style="color: #caab88">Desde el año 2014 es Trader (Money Manager) en el Fondo de Inversión Apiary Investment Fund® con base en Utah, Estados Unidos</span></li>
                                                    <li style="text-align: justify"><i class="fa fa-check"></i><span style="color: #caab88">Además está titulado por el Tecnológico de Monterrey para la administración de Empresas de la Construcción, contando con experiencia en construcción ecológica y sustentable, así como en desarrollo de viviendas de interés medio/alto</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id='tab-s-3' class="clearfix tab-body">
                        <div class="section-block-fund-chart">
                            <div class="container">
                                <div class="team-single">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12 text-center">
                                            <figure class="highcharts-figure">
                                                <div id="chart"></div>
                                            </figure>
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
@section('css')
    <style>
        .highcharts-figure, .highcharts-data-table table {
            min-width: 360px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }
        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }
    </style>
@endsection
@section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/themes/dark-unica.js"></script>
    <script>
        Highcharts.chart('chart', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Gráfica ganacias fondo'
            },
            subtitle: {
                text: '-'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Ganacias %'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Anual',
                data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'Mensual',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    </script>
@endsection
