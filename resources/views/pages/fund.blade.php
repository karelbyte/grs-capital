@extends('layouts.layout')
@section('content')
    <!-- Top-Bar START -->
    @component('components.top-bar')@endcomponent
    <!-- Navbar START -->
    @component('components.navbar')@endcomponent
    <div class="page-title-section" style="background-image: url({{asset('img/fund.png')}});">
        <div class="container">
            <h1 style="color:rgb( 66, 64,58)">{!!trans('messages.page-fund-caption')!!}</h1>
            <ul>
                <li><a href="/" style="color:rgb( 66, 64,58)">{!!trans('messages.page-fund-breadcrumbs-1')!!}</a></li>
                <li><a href="#" style="color:rgb( 66, 64,58)">{!!trans('messages.page-fund-breadcrumbs-2')!!}</a></li>
            </ul>
        </div>
    </div>
    <footer class="fund-back">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-12 col-sm-12 col-12">
                    <p class="text-justify mb-2" style="font-size: 16px; color: whitesmoke">{!!trans('messages.page-fund-caption-2')!!}</p>
                    <p class="text-justify mb-2" style="font-size: 16px; color: whitesmoke">{!!trans('messages.page-fund-caption-3')!!}</p>
                    <p class="text-justify mb-2" style="font-size: 16px; color: whitesmoke">{!!trans('messages.page-fund-caption-4')!!}</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2 style="color:#e09d22">{!!trans('messages.page-fund-features-caption')!!}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="contact-info-box">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="contact-info-section-fix">
                                    <div class="row">
                                        <div class="fund d-none d-md-block col-sm-12 col-md-2 col-sm-2 col-4 center-holder">
                                            <i class="fa fa-check-circle-o"></i>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-sm-10 col-12">
                                            {!!trans('messages.page-fund-features-requirements')!!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="contact-info-section-fix">
                                    <div class="row">
                                        <div class="fund d-none d-md-block col-sm-12 col-md-2 col-sm-2 col-4 center-holder">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-sm-10 col-12">
                                            {!!trans('messages.page-fund-features-terms')!!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="contact-info-section-fix">
                                    <div class="row">
                                        <div class="fund d-none d-md-block  col-sm-12 col-md-2 col-sm-2 col-4 center-holder">
                                            <i class="fa fa-institution"></i>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-sm-10 col-12">
                                            {!!trans('messages.page-fund-features-destiny')!!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="contact-info-section-fix">
                                    <div class="row">
                                        <div class="fund d-none d-md-block col-sm-12 col-md-2 col-sm-2 col-4 center-holder">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        {!!trans('messages.page-fund-features-strategy')!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Member Section START -->
    <div class="section-block-fund">
        <div class="container">
            <div class="team-single">
                <div class="row mb-5" style="border-bottom: 1px solid rgba(38,35,35,0.28)">
                    <div class="col-md-12 col-sm-12 col-12 text-center">
                        <h2 style="color:#e3ae50">{!!trans('messages.page-fund-admin-title')!!}</h2>
                    </div>
                </div>
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
                                <li><strong>{!!trans('messages.page-fund-admin-phone')!!}</strong><span>(+755) 557 0669</span></li>
                                <li><strong>email</strong><span>admin@grscapital.com</span></li>
                            </ul>
                            <ul class="primary-list mt-40">
                                {!!trans('messages.page-fund-admin-skills')!!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block-fund-chart">
        <div class="container">
            <div class="team-single">
                <div class="row mb-5" style="border-bottom: 1px solid rgba(38,35,35,0.28)">
                    <div class="col-md-12 col-sm-12 col-12 text-center">
                        <h2 style="color:#e3ae50"> {!!trans('messages.page-fund-chart-caption')!!}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 text-center">
                        <figure class="highcharts-figure">
                            <div id="chart"></div>
                        </figure>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12 col-sm-12 col-12 text-center">
                        <span style="color: #e3ae50;">{!!trans('messages.page-fund-pdf-1')!!} <a href="{{asset('fund-results.pdf')}}" target="_blank" style="color: #e3e1d2; font-style:italic">{!!trans('messages.page-fund-pdf-2')!!}</a> .</span>
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
            credits: {
                enabled: false
            },
            colors: ['#ded68b', '#b48432'],
            title: {
                text: "{!!trans('messages.page-fund-chart-title')!!}"
            },
            subtitle: {
                text: '-'
            },
            xAxis: {
                categories: [{!!trans('messages.page-fund-chart-month')!!}]
            },
            yAxis: {
                title: {
                    text: "{!!trans('messages.page-fund-chart-y-title')!!}"
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
                name: "{!!trans('messages.page-fund-chart-year')!!}",
                data: [155.00
                    ,254.00
                    ,248.00
                    ,347.00
                    ,411.00
                    ,341.00
                    ,430.00
                    ,411.00
                    ,493.00
                    ,560.00
                    ,420.00
                    ,520.00
                    ,558.00
                    ,592.00
                    ,545.00
                    ,540.00
                    ,552.00
                    ,550.00
                    ,650.00
                    ,669.00
                    ,660.00
                    ,796.00
                    ,725.00
                    ,846.00
                    ,899.00
                    ,929.00
                ]
            }, {
                name:  "{!!trans('messages.page-fund-chart-mon')!!}",
                data: [0.00,99.00,-6.00,99.00,64.00,-70.00,89.00,-19.00,82.00,67.00,-140.00
                    ,100.00,38.00,34.00,-47.00,-5.00,12.00,-2.00,100.00,19.00,-9.00,136.00,-71.00,121.00,53.00,143.00
                ]
            }]
        });
    </script>
@endsection
