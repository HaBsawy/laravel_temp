<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 14-Jun-19
 * Time: 19:08
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/bootstrap-editable.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">X -Editable Inline editor</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table style="clear: both" class="table table-bordered table-striped" id="user">
                                    <tbody>
                                    <tr>
                                        <td style="width:35%">Simple text field</td>
                                        <td style="width:65%"><a href="#" id="username2" data-type="text" data-pk="1">awesome</a></td>
                                    </tr>
                                    <tr>
                                        <td>Empty text field, required</td>
                                        <td><a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a></td>
                                    </tr>
                                    <tr>
                                        <td>Select, local array, custom display</td>
                                        <td><a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" style="color: rgb(152, 166, 173);">not selected</a></td>
                                    </tr>
                                    <tr>
                                        <td>Select, error while loading</td>
                                        <td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status" class="editable editable-click">Active</a></td>
                                    </tr>
                                    <tr>
                                        <td>Combodate</td>
                                        <td><a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">24/09/2015</a></td>
                                    </tr>
                                    <tr>
                                        <td>Textarea, buttons below</td>
                                        <td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments" class="editable editable-pre-wrapped editable-click">awesome user!</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">X -Editable Popup  editor</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table style="clear: both" class="table table-bordered table-striped" id="user_2">
                                    <tbody>
                                    <tr>
                                        <td style="width:35%">Simple text field</td>
                                        <td style="width:65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click">superuser</a></td>
                                    </tr>
                                    <tr>
                                        <td>Empty text field, required</td>
                                        <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a></td>
                                    </tr>
                                    <tr>
                                        <td>Select, local array, custom display</td>
                                        <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" style="color: rgb(152, 166, 173);">not selected</a></td>
                                    </tr>
                                    <tr>
                                        <td>Select, error while loading</td>
                                        <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status" class="editable editable-click">Active</a></td>
                                    </tr>
                                    <tr>
                                        <td>Combodate</td>
                                        <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a></td>
                                    </tr>
                                    <tr>
                                        <td>Textarea, buttons below</td>
                                        <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments" class="editable editable-pre-wrapped editable-click">awesome user!</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/moment.min.js') }}"></script>
        <script src="{{ url('js/bootstrap-editable.min.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
        <script>
            /*FormXeditable Init*/
            $(function(){
                "use strict";

                /* editables*/
                $('#username').editable({
                    type: 'text',
                    pk: 1,
                    name: 'username',
                    title: 'Enter username'
                });

                $('#firstname').editable({
                    validate: function(value) {
                        if($.trim(value) == '') return 'This field is required';
                    }
                });

                $('#sex').editable({
                    prepend: "not selected",
                    source: [
                        {value: 1, text: 'Male'},
                        {value: 2, text: 'Female'}
                    ],
                    display: function(value, sourceData) {
                        var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
                            elem = $.grep(sourceData, function(o){return o.value == value;});

                        if(elem.length) {
                            $(this).text(elem[0].text).css("color", colors[value]);
                        } else {
                            $(this).empty();
                        }
                    }
                });

                $('#status').editable();

                $('#group').editable({
                    showbuttons: false
                });

                $('#dob').editable();

                $('#comments').editable({
                    showbuttons: 'bottom'
                });

                /*inline*/
                $('#inline-username').editable({
                    type: 'text',
                    pk: 1,
                    name: 'username',
                    title: 'Enter username',
                    mode: 'inline'
                });

                $('#inline-firstname').editable({
                    validate: function(value) {
                        if($.trim(value) == '') return 'This field is required';
                    },
                    mode: 'inline'
                });

                $('#inline-sex').editable({
                    prepend: "not selected",
                    mode: 'inline',
                    source: [
                        {value: 1, text: 'Male'},
                        {value: 2, text: 'Female'}
                    ],
                    display: function(value, sourceData) {
                        var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
                            elem = $.grep(sourceData, function(o){return o.value == value;});

                        if(elem.length) {
                            $(this).text(elem[0].text).css("color", colors[value]);
                        } else {
                            $(this).empty();
                        }
                    }
                });

                $('#inline-status').editable({mode: 'inline'});

                $('#inline-group').editable({
                    showbuttons: false,
                    mode: 'inline'
                });

                $('#inline-dob').editable({mode: 'inline'});

                $('#inline-comments').editable({
                    showbuttons: 'bottom',
                    mode: 'inline'
                });
            });

            $('#last_seen').editable({
                format: 'yyyy-mm-dd hh:ii',
                viewformat: 'dd/mm/yyyy hh:ii',
                datetimepicker: {
                    weekStart: 1
                }
            });

            $('#username2').editable({
                url: '/post',
                title: 'Enter username'
            });
        </script>
    @endpush

@endsection
