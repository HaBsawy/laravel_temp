<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 16-Jun-19
 * Time: 18:38
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <style>
            .easypiechart > span > img {
                height: 60%;
                left: 0;
                margin: 0 auto;
                position: absolute;
                right: 0;
                text-align: center;
                top: 50%;
                transform: translateY(-50%);
                width: 60%;
                border-radius: 50%;
            }
        </style>
    @endpush

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">easy-pie-chart with scale</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_1" class="easypiechart" data-percent="86">
												<span class="percent head-font">86</span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_2" class="easypiechart" data-percent="46">
												<span class="percent head-font">46</span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_3" class="easypiechart" data-percent="90">
												<span class="percent head-font">90</span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">easy-pie-chart without scale</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_4" class="easypiechart" data-percent="46">
												<span class="percent head-font">46</span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_5" class="easypiechart" data-percent="66">
												<span class="percent head-font">66</span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_6" class="easypiechart" data-percent="90">
												<span class="percent head-font">90</span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">avatar with scale</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_7" class="easypiechart" data-percent="40">
												<span><img src="{{ url('images/user1.png') }}" alt="user" class="img-circle"></span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_8" class="easypiechart" data-percent="50">
												<span><img src="{{ url('images/user2.png') }}" alt="user" class="img-circle"></span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_9" class="easypiechart" data-percent="90">
												<span><img src="{{ url('images/user3.png') }}" alt="user" class="img-circle"></span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">avatar without scale</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_10" class="easypiechart" data-percent="40">
												<span><img src="{{ url('images/user1.png') }}" alt="user" class="img-circle"></span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_11" class="easypiechart" data-percent="50">
												<span><img src="{{ url('images/user2.png') }}" alt="user" class="img-circle"></span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                            <div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_12" class="easypiechart" data-percent="90">
												<span><img src="{{ url('images/user3.png') }}" alt="user" class="img-circle"></span>
											<canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/easyPieChart.min.js') }}"></script>
        <script>
            /*Easypiechart Init*/

            $(document).ready(function() {
                "use strict";

                if( $('#pie_chart_1').length > 0 ){
                    $('#pie_chart_1').easyPieChart({
                        barColor : '#09a275',
                        lineWidth: 3,
                        animate: 3000,
                        size:	100,
                        lineCap: 'square',
                        scaleColor: 'rgba(33,33,33,.1)',
                        trackColor: '#fff',
                        onStep: function(from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                }
                if( $('#pie_chart_2').length > 0 ){
                    $('#pie_chart_2').easyPieChart({
                        barColor : '#f2b701',
                        lineWidth: 3,
                        animate: 3000,
                        size:	100,
                        lineCap: 'square',
                        scaleColor: 'rgba(33,33,33,.1)',
                        trackColor: '#fff',
                        onStep: function(from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                }
                if( $('#pie_chart_3').length > 0 ){
                    $('#pie_chart_3').easyPieChart({
                        animate: 3000,
                        barColor : '#0f4fa8',
                        lineWidth: 3,
                        scaleColor: 'rgba(33,33,33,.1)',
                        size:	100,
                        lineCap: 'square',
                        trackColor: '#fff',
                        onStep: function(from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                }
                if( $('#pie_chart_4').length > 0 ){
                    $('#pie_chart_4').easyPieChart({
                        barColor : '#b10058',
                        lineWidth: 3,
                        animate: 3000,
                        size:	100,
                        lineCap: 'square',
                        trackColor: false,
                        scaleColor: false,
                        onStep: function(from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                }
                if( $('#pie_chart_5').length > 0 ){
                    $('#pie_chart_5').easyPieChart({
                        barColor : '#09a275',
                        lineWidth: 3,
                        animate: 3000,
                        size:	100,
                        lineCap: 'square',
                        trackColor: false,
                        scaleColor: false,
                        onStep: function(from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                }
                if( $('#pie_chart_6').length > 0 ){
                    $('#pie_chart_6').easyPieChart({
                        animate: 3000,
                        barColor : '#dc0030',
                        lineWidth: 3,
                        scaleColor: false,
                        size:	100,
                        lineCap: 'square',
                        trackColor: false,
                        onStep: function(from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                }
                if( $('#pie_chart_7').length > 0 ){
                    $('#pie_chart_7').easyPieChart({
                        barColor : '#0f4fa8',
                        lineWidth: 3,
                        animate: 3000,
                        size:	100,
                        lineCap: 'square',
                        scaleColor: 'rgba(33,33,33,.1)',
                        trackColor: '#fff',
                    });
                }
                if( $('#pie_chart_8').length > 0 ){
                    $('#pie_chart_8').easyPieChart({
                        barColor : '#b10058',
                        lineWidth: 3,
                        animate: 3000,
                        size:	100,
                        lineCap: 'square',
                        scaleColor: 'rgba(33,33,33,.1)',
                        trackColor: '#fff',
                    });
                }
                if( $('#pie_chart_9').length > 0 ){
                    $('#pie_chart_9').easyPieChart({
                        animate: 3000,
                        barColor : '#f2b701',
                        lineWidth: 3,
                        size:	100,
                        lineCap: 'square',
                        scaleColor: 'rgba(33,33,33,.1)',
                        trackColor: '#fff',
                    });
                }
                if( $('#pie_chart_10').length > 0 ){
                    $('#pie_chart_10').easyPieChart({
                        barColor : '#0f4fa8',
                        lineWidth: 3,
                        animate: 3000,
                        size:	100,
                        lineCap: 'square',
                        trackColor: false,
                        scaleColor: false,
                    });
                }
                if( $('#pie_chart_11').length > 0 ){
                    $('#pie_chart_11').easyPieChart({
                        barColor : '#b10058',
                        lineWidth: 3,
                        animate: 3000,
                        size:	100,
                        lineCap: 'square',
                        trackColor: false,
                        scaleColor: false,
                    });
                }
                if( $('#pie_chart_12').length > 0 ){
                    $('#pie_chart_12').easyPieChart({
                        animate: 3000,
                        barColor : '#dc0030',
                        lineWidth: 3,
                        scaleColor: false,
                        size:	100,
                        lineCap: 'square',
                        trackColor: false,
                    });
                }
            });
        </script>
    @endpush

@endsection
