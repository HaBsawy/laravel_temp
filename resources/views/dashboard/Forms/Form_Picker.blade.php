<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 14-Jun-19
 * Time: 02:36
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/bootstrap-colorpicker.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/daterangepicker.css') }}" />
        <link rel="stylesheet" href="{{ url('css/bootstrap-datetimepicker.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Color picker</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">simple input</label>
                                            <input type="text" class="colorpicker form-control colorpicker-element" value="#5367ce">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">As a component</label>

                                            <div class="colorpicker input-group colorpicker-component colorpicker-element">
                                                <input type="text" value="#00AABB" class="form-control">
                                                <span class="input-group-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-0">
                                            <label class="control-label mb-10 text-left">With custom options</label>
                                            <div id="cp3" class="colorpicker-rgb input-group colorpicker-component colorpicker-element">
                                                <input type="text" value="#00AABB" class="form-control">
                                                <span class="input-group-addon"><i style="background-color: rgb(170, 51, 153);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-0">
                                            <label class="control-label mb-10 text-left">Inline mode</label>
                                            <div class="inl-bl colorpicker-inline"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Date Range Picker</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group mb-0">
                                            <label class="control-label mb-10 text-left">Date Range Pick</label>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2016 - 01/31/2016">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-0">
                                            <label class="control-label mb-10 text-left">Date Range With Time</label>
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2016 1:30 PM - 01/01/2016 2:00 PM">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-0">
                                            <label class="control-label mb-10 text-left">Limit Selectable Dates</label>
                                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2016 - 06/07/2016">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Date time picker</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">date time pick</label>
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">
                                                    <span class="fas fa-calendar-alt"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">time pick</label>
                                            <div class="input-group date" id="datetimepicker2">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">
                                                    <span class="fas fa-clock"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label mb-10 text-left">inline date pick</label>
                                        <div class="form-group">
                                            <div id="datetimepicker3"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label mb-10 text-left">inline date time pick</label>
                                        <div class="form-group">
                                            <div id="datetimepicker4"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ url('js/moment.min.js') }}"></script>
        <script src="{{ url('js/daterangepicker.js') }}"></script>
        <script src="{{ url('js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
        <script>
            $(document).ready(function() {
                "use strict";

                /* Bootstrap Colorpicker Init*/
                $('.colorpicker').colorpicker();

                $('.colorpicker-rgb').colorpicker({
                    color: '#AA3399',
                    format: 'rgba'
                });

                $('.colorpicker-inline').colorpicker({
                    color: '#ffaa00',
                    container: true,
                    inline: true
                });

                /* Datetimepicker Init*/
                $('#datetimepicker1').datetimepicker({
                    useCurrent: false,
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    },
                }).on('dp.show', function() {
                    if($(this).data("DateTimePicker").date() === null)
                        $(this).data("DateTimePicker").date(moment());
                });

                $('#datetimepicker2').datetimepicker({
                    format: 'LT',
                    useCurrent: false,
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    },
                }).data("DateTimePicker").date(moment());;

                $('#datetimepicker3').datetimepicker({
                    format: 'DD-MM-YYYY',
                    inline:true,
                    sideBySide: true,
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    },
                });

                $('#datetimepicker4').datetimepicker({
                    inline:true,
                    sideBySide: true,
                    useCurrent: false,
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    },
                }).data("DateTimePicker").date(moment());

                /* Daterange picker Init*/
                $('.input-daterange-datepicker').daterangepicker({
                    buttonClasses: ['btn', 'btn-sm'],
                    applyClass: 'btn-info',
                    cancelClass: 'btn-default'
                });
                $('.input-daterange-timepicker').daterangepicker({
                    timePicker: true,
                    format: 'MM/DD/YYYY h:mm A',
                    timePickerIncrement: 30,
                    timePicker12Hour: true,
                    timePickerSeconds: false,
                    buttonClasses: ['btn', 'btn-sm'],
                    applyClass: 'btn-info',
                    cancelClass: 'btn-default'
                });
                $('.input-limit-datepicker').daterangepicker({
                    format: 'MM/DD/YYYY',
                    minDate: '06/01/2015',
                    maxDate: '06/30/2015',
                    buttonClasses: ['btn', 'btn-sm'],
                    applyClass: 'btn-info',
                    cancelClass: 'btn-default',
                    dateLimit: {
                        days: 6
                    }
                });
            });
        </script>
    @endpush

@endsection
