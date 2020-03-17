<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 31-May-19
 * Time: 20:19
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/RangeSlider.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Range slider type 1</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Default grid slider with min and max values.</p>
                        <div class="mt-40">
                            <input type="hidden" id="range" value="" name="range" class="irs-hidden-input" readonly="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Range slider type 2</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Grid with slider labels are far away outside it's container.</p>
                        <div class="mt-40">
                            <input type="hidden" id="range_1" value="" name="range" class="irs-hidden-input" readonly="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Range slider type 3</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Grid with labels inside container using force_edges attribute.</p>
                        <div class="mt-40">
                            <input type="hidden" id="range_2" value="" name="range" class="irs-hidden-input" readonly="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Range slider type 4</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Create Grid with pre-defined steps.</p>
                        <div class="mt-40">
                            <input type="hidden" id="range_3" value="" name="range" class="irs-hidden-input" readonly="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Range slider type 5</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Prevent one from dragging the labels.</p>
                        <div class="mt-40">
                            <input type="hidden" id="range_4" value="" name="range" class="irs-hidden-input" readonly="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Range slider type 6</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Grid with minimum and maximum values.</p>
                        <div class="mt-40">
                            <input type="hidden" id="range_5" value="" name="range" class="irs-hidden-input" readonly="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/RangeSlider.min.js') }}"></script>
        <script>
            $("#range_2").ionRangeSlider({
                type: "double",
                min: 1000000,
                max: 2000000,
                grid: true,
                force_edges: true
            });

            $("#range").ionRangeSlider({
                hide_min_max: true,
                keyboard: true,
                min: 0,
                max: 5000,
                from: 1000,
                to: 4000,
                type: 'double',
                step: 1,
                prefix: "$",
                grid: true
            });

            $("#range_1").ionRangeSlider({
                type: "double",
                min: 1000000,
                max: 2000000,
                grid: true
            });

            $("#range_3").ionRangeSlider({
                type: "double",
                min: 0,
                max: 10000,
                step: 500,
                grid: true,
                grid_snap: true
            });

            $("#range_4").ionRangeSlider({
                type: "double",
                min: 0,
                max: 100,
                from: 30,
                to: 70,
                from_fixed: true
            });

            $("#range_5").ionRangeSlider({
                type: "double",
                min: 0,
                max: 100,
                from: 30,
                to: 70,
                max_interval: 50
            });
        </script>
    @endpush

@endsection
