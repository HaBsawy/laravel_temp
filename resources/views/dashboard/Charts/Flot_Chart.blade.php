<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 15-Jun-19
 * Time: 20:08
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">line Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="flot-container" style="height:200px">
                            <div id="real_time_chart" class="demo-placeholder" style="padding: 0px; position: relative;">
                                <canvas class="flot-base" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas>
                                <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                    <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                        <div style="position: absolute; top: 186px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 12px; text-align: right;">0</div>
                                        <div style="position: absolute; top: 140px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">25</div>
                                        <div style="position: absolute; top: 94px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">50</div>
                                        <div style="position: absolute; top: 48px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">75</div>
                                        <div style="position: absolute; top: 2px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">100</div></div>
                                </div>
                                <canvas class="flot-overlay" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">composite line Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="flot-container" style="height:200px">
                            <div id="flot_line_chart" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 170px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">-1.0</div><div style="position: absolute; top: 132px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">-0.5</div><div style="position: absolute; top: 94px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 3px; text-align: right;">0.0</div><div style="position: absolute; top: 55px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 3px; text-align: right;">0.5</div><div style="position: absolute; top: 17px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 3px; text-align: right;">1.0</div></div></div><canvas class="flot-overlay" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas><div class="legend"><div style="position: absolute; width: 55px; height: 35px; top: 13px; right: 13px; background-color: transparent; opacity: 0.85;"> </div><table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#878787"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(242,183,1);overflow:hidden"></div></div></td><td class="legendLabel">sin(x)</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(15,79,168);overflow:hidden"></div></div></td><td class="legendLabel">cos(x)</td></tr></tbody></table></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">pie Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div id="flot_pie_chart" style="width:600px;height:300px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">filled line Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="flot-container" style="height:200px">
                            <div id="flot_line_chart_moving" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 186px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 12px; text-align: right;">0</div><div style="position: absolute; top: 140px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">25</div><div style="position: absolute; top: 94px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">50</div><div style="position: absolute; top: 48px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">75</div><div style="position: absolute; top: 2px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">bar Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="flot-container" style="height:200px">
                            <div id="flot_bar_chart" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 74px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 88px; text-align: center;">12/05</div><div style="position: absolute; max-width: 74px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 175px; text-align: center;">12/07</div><div style="position: absolute; max-width: 74px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 262px; text-align: center;">12/09</div><div style="position: absolute; max-width: 74px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 349px; text-align: center;">12/11</div><div style="position: absolute; max-width: 74px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 437px; text-align: center;">12/13</div><div style="position: absolute; max-width: 74px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 524px; text-align: center;">12/15</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 19px; text-align: right;">0</div><div style="position: absolute; top: 151px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">1000</div><div style="position: absolute; top: 126px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">2000</div><div style="position: absolute; top: 101px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">3000</div><div style="position: absolute; top: 76px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">4000</div><div style="position: absolute; top: 51px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">5000</div><div style="position: absolute; top: 26px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">6000</div><div style="position: absolute; top: 2px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">7000</div></div></div><canvas class="flot-overlay" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">stacked bar Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="flot-container" style="height:200px">
                            <div id="sales_bars_chart" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 20px; text-align: center;">0</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 76px; text-align: center;">1</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 131px; text-align: center;">2</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 187px; text-align: center;">3</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 243px; text-align: center;">4</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 298px; text-align: center;">5</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 354px; text-align: center;">6</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 410px; text-align: center;">7</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 465px; text-align: center;">8</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 521px; text-align: center;">9</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 574px; text-align: center;">10</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 12px; text-align: right;">0</div><div style="position: absolute; top: 141px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">20</div><div style="position: absolute; top: 106px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">40</div><div style="position: absolute; top: 71px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">60</div><div style="position: absolute; top: 36px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 6px; text-align: right;">80</div><div style="position: absolute; top: 1px; font: 400 11px/13px Roboto, sans-serif; color: rgb(135, 135, 135); left: 0px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="746" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 597px; height: 200px;"></canvas><div class="legend"><div style="position: absolute; width: 239px; height: 18px; top: 7px; right: 16px; background-color: transparent; opacity: 0.85;"> </div><table style="position:absolute;top:7px;right:16px;;font-size:smaller;color:#878787"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(220,0,48);overflow:hidden"></div></div></td><td class="legendLabel">Data One&nbsp;&nbsp;</td><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(177,0,88);overflow:hidden"></div></div></td><td class="legendLabel">Data Two&nbsp;&nbsp;</td><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(242,183,1);overflow:hidden"></div></div></td><td class="legendLabel">Data Three&nbsp;&nbsp;</td></tr></tbody></table></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/excanvas.min.js') }}"></script>
        <script src="{{ url('js/jquery.flot.js') }}"></script>
        <script src="{{ url('js/jquery.flot.pie.js') }}"></script>
        <script src="{{ url('js/jquery.flot.resize.js') }}"></script>
        <script src="{{ url('js/jquery.flot.time.js') }}"></script>
        <script src="{{ url('js/jquery.flot.stack.js') }}"></script>
        <script src="{{ url('js/jquery.flot.crosshair.js') }}"></script>
        <script src="{{ url('js/jquery.flot.tooltip.min.js') }}"></script>
        <script>
            /*Flot Init*/
            $(function() {
                "use strict";

                var data = [],
                    totalPoints = 300;

                /*Getting Random Data*/
                function getRandomData() {

                    if (data.length > 0)
                        data = data.slice(1);

                    // Do a random walk

                    while (data.length < totalPoints) {

                        var prev = data.length > 0 ? data[data.length - 1] : 50,
                            y = prev + Math.random() * 10 - 5;

                        if (y < 0) {
                            y = 0;
                        } else if (y > 100) {
                            y = 100;
                        }

                        data.push(y);
                    }

                    // Zip the generated y values with the x values

                    var res = [];
                    for (var i = 0; i < data.length; ++i) {
                        res.push([i, data[i]])
                    }

                    return res;
                }

                /***Real time Chart***/
                if( $('#real_time_chart').length > 0 ){
                    /*Defining Option*/
                    var realtime_chartop = {
                        series:{
                            shadowSize: 0,
                            lines: {
                                fill: false
                            },
                        },
                        grid: {
                            color: "#878787",
                            hoverable: true,
                            borderWidth: 0,
                            backgroundColor: 'transparent'
                        },
                        colors: ["#0f4fa8"],
                        tooltip: true,
                        tooltipOpts: {
                            content: "Y: %y",
                            defaultTheme: false
                        },
                        yaxis: {
                            min: 0,
                            max: 100,
                            font : {
                                color : '#878787'
                            }
                        },
                        xaxis: {
                            show: false,
                            font : {
                                color : '#878787'
                            }
                        }

                    };

                    /*Defining Data*/
                    var realtime_chartop_data = {
                        data: getRandomData(),
                    }

                    /*Chart Plot*/
                    $.plot($("#real_time_chart"), [realtime_chartop_data], realtime_chartop);

                    /*Realtime Data*/
                    setInterval(function updateRandom() {
                        realtime_chartop_data = getRandomData();
                        $.plot($("#real_time_chart"), [realtime_chartop_data], realtime_chartop)
                    }, 40);
                }

                /***Line Chart***/

                if( $('#flot_line_chart').length > 0 ){
                    /*Defining Option*/
                    var line_chartop = {
                        series: {
                            shadowSize: 0,
                            lines: {
                                show: true
                            },
                            points: {
                                show: true
                            }
                        },

                        yaxis: {
                            min: -1.2,
                            max: 1.2,
                            font : {
                                color : '#878787'
                            }
                        },
                        xaxis: {
                            show: false,
                        },
                        colors: ["#f2b701", "#0f4fa8"],
                        grid: {
                            color: "#878787",
                            hoverable: true,
                            borderWidth: 0,
                        },
                        legend : {
                            backgroundColor: 'transparent',
                        },
                        tooltip: true,
                        tooltipOpts: {
                            content: "'%s' of %x.1 is %y.4",
                            shifts: {
                                x: -60,
                                y: 25
                            }
                        }
                    };

                    var sin = [],
                        cos = [];
                    var offset = 0;
                    for (var i = 0; i < 12; i += 0.2) {
                        sin.push([i, Math.sin(i + offset)]);
                        cos.push([i, Math.cos(i + offset)]);
                    }
                    /*Defining Data*/
                    var line_chart_data= [{
                        label: "sin(x)",
                        data: sin,
                    },
                        {
                            label: "cos(x)",
                            data: cos,
                        }];

                    /*Plot*/
                    $.plot($("#flot_line_chart"), line_chart_data, line_chartop);
                }


                /***Pie Chart***/
                if( $('#flot_pie_chart').length > 0 ){
                    var pie_data = [{
                        label: "Series 0",
                        data: 10,
                        color: "#09a275",

                    }, {
                        label: "Series 1",
                        data: 1,
                        color: "#b10058",
                    }, {
                        label: "Series 2",
                        data: 3,
                        color:"#0f4fa8",
                    }, {
                        label: "Series 3",
                        data: 1,
                        color:"#dc0030",
                    }];

                    var pie_op = {
                        series: {
                            pie: {
                                innerRadius: 0.5,
                                show: true,
                                stroke: {
                                    width: 0,
                                }
                            }
                        },
                        legend : {
                            backgroundColor: 'transparent',
                        },
                        grid: {
                            hoverable: true
                        },
                        color: null,
                        tooltip: true,
                        tooltipOpts: {
                            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                            shifts: {
                                x: 20,
                                y: 0
                            },
                            defaultTheme: false
                        },
                    };
                    $.plot($("#flot_pie_chart"), pie_data, pie_op);
                }

                /***Filled Line Chart***/
                if( $('#flot_line_chart_moving').length > 0 ){
                    /*Defining Option*/
                    var fill_line_chartop = {
                        series:{
                            shadowSize: 0,
                            lines: {
                                fill: true
                            },
                        },
                        grid: {
                            color: "#878787",
                            hoverable: true,
                            borderWidth: 0,
                            backgroundColor: 'transparent'
                        },
                        colors: ["#ea65a2"],
                        tooltip: true,
                        tooltipOpts: {
                            content: "Y: %y",
                            defaultTheme: false
                        },
                        yaxis: {
                            min: 0,
                            max: 100,
                            font : {
                                color : '#878787'
                            }
                        },
                        xaxis: {
                            show: false
                        }
                    };

                    /*Defining Data*/
                    var fill_line_chart_data = {
                        data: getRandomData(),
                    }

                    /*Chart Plot*/
                    $.plot($("#flot_line_chart_moving"), [fill_line_chart_data], fill_line_chartop);

                    /*Realtime Data*/
                    setInterval(function updateRandom() {
                        fill_line_chart_data = getRandomData();
                        $.plot($("#flot_line_chart_moving"), [fill_line_chart_data], fill_line_chartop)
                    }, 40);
                }

                /***Bar Chart***/
                if( $('#flot_bar_chart').length > 0 ){
                    /*Defining Option*/
                    var barOptions = {
                        series: {
                            bars: {
                                show: true,
                                barWidth: 43200000
                            }
                        },
                        yaxis: {
                            font : {
                                color : '#878787'
                            }
                        },
                        xaxis: {
                            mode: "time",
                            timeformat: "%m/%d",
                            minTickSize: [2, "day"],
                            font : {
                                color : '#878787'
                            }
                        },

                        legend: {
                            show: false
                        },
                        grid: {
                            color: "#878787",
                            hoverable: true,
                            borderWidth: 0,
                            backgroundColor: 'transparent'
                        },
                        tooltip: true,
                        tooltipOpts: {
                            content: "x: %x, y: %y"
                        }
                    };

                    /*Defining Data*/
                    var barData = {
                        label: "bar",
                        color: "#dc0030",
                        data: [
                            [1354521600000, 1000],
                            [1355040000000, 2000],
                            [1355223600000, 3000],
                            [1355306400000, 4000],
                            [1355487300000, 5000],
                            [1355571900000, 6000]
                        ]
                    };

                    /*Plot*/
                    $.plot($("#flot_bar_chart"), [barData], barOptions);
                }

                /***Sales Chart***/
                if( $('#sales_bars_chart').length > 0 ){
                    /*Defining Data*/
                    var d1 = [];
                    for (var i = 0; i <= 10; i += 1)
                        d1.push([i, parseInt(Math.random() * 60)]);

                    var d2 = [];
                    for (var i = 0; i <= 10; i += 1)
                        d2.push([i, parseInt(Math.random() * 40)]);

                    var d3 = [];
                    for (var i = 0; i <= 10; i += 1)
                        d3.push([i, parseInt(Math.random() * 25)]);

                    var ds = [{
                        label : "Data One",
                        data : d1,
                        bars : {
                            order : 1
                        }
                    },
                        {
                            label : "Data Two",
                            data : d2,
                            bars : {
                                order : 2
                            }
                        },
                        {
                            label : "Data Three",
                            data : d3,
                            bars : {
                                order : 3
                            }
                        }];

                    var stack = 0,
                        bars = true,
                        lines = true,
                        steps = true;

                    /*Defining Option*/
                    var sales_op = {
                        bars : {
                            show : true,
                            barWidth : 0.2,
                            fill : 1
                        },
                        grid : {
                            show : true,
                            aboveData : false,
                            labelMargin : 5,
                            axisMargin : 0,
                            borderWidth : 0,
                            minBorderMargin : 5,
                            clickable : true,
                            hoverable : true,
                            autoHighlight : false,
                            mouseActiveRadius : 20,
                            borderColor : '#878787',
                            color:'#878787'
                        },
                        series : {
                            stack : stack
                        },
                        legend : {
                            position : "ne",
                            margin : [10, 0],
                            backgroundColor: 'transparent',
                            noColumns : 0,
                            labelBoxBorderColor : null,
                            labelFormatter : function(label, series) {
                                // just add some space to labes
                                return '' + label + '&nbsp;&nbsp;';
                            },
                            width : 30,
                            height : 5
                        },
                        yaxis : {
                            font : {
                                color : '#878787'
                            }
                        },
                        xaxis : {
                            font : {
                                color : '#878787'
                            }
                        },
                        colors : ["#dc0030", "#b10058", "#f2b701"],
                        tooltip : true, //activate tooltip
                        tooltipOpts : {
                            content : "%s : %y.0",
                            shifts : {
                                x : -30,
                                y : -50
                            }
                        }
                    };

                    $.plot($("#sales_bars_chart"), ds, sales_op);
                }
            });

        </script>
    @endpush

@endsection
