<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 31-May-19
 * Time: 16:59
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">skill counter type 1</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <div class="col-sm-4 mb-15">
                                <span class="skill-head mb-20">Ammenity</span>
                                <span id="pie_chart_1" class="easypiechart skill-circle" data-percent="86">
                                    <span class="percent head-font">86</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
                            </div>
                            <div class="col-sm-4 mb-15">
                                <span class="skill-head mb-20">Transport</span>
                                <span id="pie_chart_2" class="easypiechart skill-circle" data-percent="46">
                                    <span class="percent head-font">46</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
                            </div>
                            <div class="col-sm-4 mb-15">
                                <span class="skill-head mb-20">Nightlife</span>
                                <span id="pie_chart_3" class="easypiechart skill-circle" data-percent="90">
                                    <span class="percent head-font">90</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
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
                        <h6 class="panel-title">skill counter type 2</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <div class="col-sm-4 mb-15">
                                <span class="skill-head mb-20">Ammenity</span>
                                <span id="pie_chart_7" class="easypiechart skill-circle skill-circle-fill" data-percent="86">
                                    <span class="percent head-font">86</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
                            </div>
                            <div class="col-sm-4 mb-15">
                                <span class="skill-head mb-20">Transport</span>
                                <span id="pie_chart_8" class="easypiechart skill-circle skill-circle-fill" data-percent="46">
                                    <span class="percent head-font">46</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
                            </div>
                            <div class="col-sm-4 mb-15">
                                <span class="skill-head mb-20">Nightlife</span>
                                <span id="pie_chart_9" class="easypiechart skill-circle skill-circle-fill" data-percent="90">
                                    <span class="percent head-font">90</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
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
                        <h6 class="panel-title">skill counter type 3</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <div class="col-sm-4 mb-15">
                                <span id="pie_chart_4" class="easypiechart skill-circle" data-percent="86">
                                    <span class="skill-head skill-head-inside">Ammenity</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
                            </div>
                            <div class="col-sm-4 mb-15">
                                <span id="pie_chart_5" class="easypiechart skill-circle" data-percent="46">
                                    <span class="skill-head skill-head-inside">Transport</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
                            </div>
                            <div class="col-sm-4 mb-15">
                                <span id="pie_chart_6" class="easypiechart skill-circle" data-percent="90">
                                    <span class="skill-head skill-head-inside">Nightlife</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
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
                        <h6 class="panel-title">skill counter type 4</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <div class="col-sm-4 mb-15">
                                <span id="pie_chart_10" class="easypiechart skill-circle skill-circle-fill" data-percent="86">
                                    <span class="skill-head skill-head-inside">Ammenity</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
                            </div>
                            <div class="col-sm-4 mb-15">
                                <span id="pie_chart_11" class="easypiechart skill-circle skill-circle-fill" data-percent="46">
                                    <span class="skill-head skill-head-inside">Transport</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
                            </div>
                            <div class="col-sm-4 mb-15">
                                <span id="pie_chart_12" class="easypiechart skill-circle skill-circle-fill" data-percent="90">
                                    <span class="skill-head skill-head-inside">Nightlife</span>
                                    <canvas height="125" width="125" style="height: 100px; width: 100px;"></canvas>
                                </span>
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
            $('#pie_chart_1').easyPieChart({
                barColor : '#13dafe',
                lineWidth: 2,
                animate: 3000,
                size:	100,
                lineCap: 'square',
                scaleColor:false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_2').easyPieChart({
                barColor : '#13dafa',
                lineWidth: 2,
                animate: 3000,
                size:	100,
                lineCap: 'square',
                scaleColor:false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_3').easyPieChart({
                animate: 3000,
                barColor : '#6164c1',
                lineWidth: 2,
                size:	100,
                scaleColor:false,
                lineCap: 'square',
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_4').easyPieChart({
                barColor : '#13dafe',
                lineWidth: 2,
                animate: 3000,
                size:	100,
                lineCap: 'square',
                trackColor: false,
                scaleColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_5').easyPieChart({
                barColor : '#abdafb',
                lineWidth: 2,
                animate: 3000,
                size:	100,
                lineCap: 'square',
                trackColor: false,
                scaleColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_6').easyPieChart({
                animate: 3000,
                barColor : '#6164c1',
                lineWidth: 2,
                scaleColor: false,
                size:	100,
                lineCap: 'square',
                trackColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_7').easyPieChart({
                barColor : '#13dafe',
                lineWidth: 2,
                animate: 3000,
                size:	100,
                lineCap: 'square',
                scaleColor:false,
                trackColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_8').easyPieChart({
                barColor : '#13dafa',
                lineWidth: 2,
                animate: 3000,
                size:	100,
                lineCap: 'square',
                scaleColor:false,
                trackColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_9').easyPieChart({
                animate: 3000,
                barColor : '#6164c1',
                lineWidth: 2,
                size:	100,
                scaleColor:false,
                lineCap: 'square',
                trackColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_10').easyPieChart({
                barColor : '#13dafe',
                lineWidth: 2,
                animate: 3000,
                size:	100,
                lineCap: 'square',
                trackColor: false,
                scaleColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_11').easyPieChart({
                barColor : '#abdafb',
                lineWidth: 2,
                animate: 3000,
                size:	100,
                lineCap: 'square',
                trackColor: false,
                scaleColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });

            $('#pie_chart_12').easyPieChart({
                animate: 3000,
                barColor : '#6164c1',
                lineWidth: 2,
                scaleColor: false,
                size:	100,
                lineCap: 'square',
                trackColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        </script>
    @endpush

@endsection
