<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 17-Jun-19
 * Time: 06:36
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/bootstrap-table.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Tables.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Basic Table</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="bootstrap-table">
                                <table data-toggle="table">
                                    <thead>
                                    <tr>
                                        <th>Item ID</th>
                                        <th>Item Name</th>
                                        <th>Item Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Item 1</td>
                                        <td>$1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Item 2</td>
                                        <td>$2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Item 3</td>
                                        <td>$3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Item 4</td>
                                        <td>$4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Item 5</td>
                                        <td>$5</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Item 6</td>
                                        <td>$6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Item 7</td>
                                        <td>$7</td>
                                    </tr>
                                    </tbody>
                                </table>
                                {{--<table data-toggle="table" class="table table-hover">--}}
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th style="" data-field="0" tabindex="0"><div class="th-inner ">Item ID</div><div class="fht-cell"></div></th>--}}
                                        {{--<th style="" data-field="1" tabindex="0"><div class="th-inner ">Item Name</div><div class="fht-cell"></div></th>--}}
                                        {{--<th style="" data-field="2" tabindex="0"><div class="th-inner ">Item Price</div><div class="fht-cell"></div></th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--<tr data-index="0">--}}
                                        {{--<td style="">1</td>--}}
                                        {{--<td style="">Item 1</td>--}}
                                        {{--<td style="">$1</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr data-index="1">--}}
                                        {{--<td style="">2</td>--}}
                                        {{--<td style="">Item 2</td>--}}
                                        {{--<td style="">$2</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr data-index="2">--}}
                                        {{--<td style="">3</td>--}}
                                        {{--<td style="">Item 3</td>--}}
                                        {{--<td style="">$3</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr data-index="3">--}}
                                        {{--<td style="">4</td>--}}
                                        {{--<td style="">Item 4</td>--}}
                                        {{--<td style="">$4</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr data-index="4">--}}
                                        {{--<td style="">5</td>--}}
                                        {{--<td style="">Item 5</td>--}}
                                        {{--<td style="">$5</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr data-index="5">--}}
                                        {{--<td style="">6</td>--}}
                                        {{--<td style="">Item 6</td>--}}
                                        {{--<td style="">$6</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr data-index="6">--}}
                                        {{--<td style="">7</td>--}}
                                        {{--<td style="">Item 7</td>--}}
                                        {{--<td style="">$7</td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}
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
                        <h6 class="panel-title">Data from JSON file</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <table
                                    id="table"
                                    data-toggle="table"
                                    data-url="{{ url('json/data1.json') }}"
                                    data-search="true"
                                    data-pagination="true"
                                    data-id-field="id"
                                    data-page-list="[10, 25]">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="name">Item Name</th>
                                    <th data-field="price">Item Price</th>
                                </tr>
                                </thead>
                            </table>
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
                        <h6 class="panel-title">Data from JS</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <table id="table_js"
                                   data-sortable="true"
                                   data-buttons-class="default  btn-outline"
                                   data-search="true"
                                   data-show-columns="true"
                                   data-show-toggle="true"
                                   data-click-to-select="true"
                                   data-pagination="true"
                                   data-height="300">

                                <thead>
                                <tr>
                                    <th data-field="stargazers_count" tabindex="0" data-sortable="true"><div class="th-inner">Stars</div><div class="fht-cell"></div></th>
                                    <th data-field="name" tabindex="0" data-sortable="true"><div class="th-inner">Name</div><div class="fht-cell"></div></th>
                                    <th data-field="forks_count" tabindex="0" data-sortable="true"><div class="th-inner">Forks</div><div class="fht-cell"></div></th>
                                    <th data-field="description" tabindex="0" data-sortable="true"><div class="th-inner">Description</div><div class="fht-cell"></div></th>
                                </tr>
                                </thead>
                            </table>
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
                        <h6 class="panel-title">Table with Radio Button</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <table id="table_js_1"
                                   data-id-field="id"
                                   data-sortable="true"
                                   data-click-to-select="true"
                                   data-select-item-name="myRadioName"
                                   class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="bs-checkbox " style="width: 36px; " data-radio="true" tabindex="0"><div class="th-inner "></div><div class="fht-cell"></div></th>
                                    <th style="" data-field="stargazers_count" tabindex="0" data-sortable="true"><div class="th-inner">Stars</div><div class="fht-cell"></div></th>
                                    <th style="" data-field="name" tabindex="0" data-sortable="true"><div class="th-inner">Name</div><div class="fht-cell"></div></th>
                                    <th style="" data-field="forks_count" tabindex="0" data-sortable="true"><div class="th-inner">Forks</div><div class="fht-cell"></div></th>
                                    <th style="" data-field="description" tabindex="0" data-sortable="true"><div class="th-inner">Description</div><div class="fht-cell"></div></th>
                                </tr>
                                </thead>
                            </table>
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
                        <h6 class="panel-title">Table with Checkbox Button</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <table id="table_js_2"
                                   data-sortable="true"
                                   data-click-to-select="true"
                                   data-select-item-name="myChk"
                                   class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="bs-checkbox " style="width: 36px; " data-field="state" data-checkbox="true" tabindex="0"><div class="th-inner"><input name="btSelectAll" type="checkbox"></div><div class="fht-cell"></div></th>
                                    <th style="" data-field="stargazers_count" tabindex="0" data-sortable="true"><div class="th-inner">Stars</div><div class="fht-cell"></div></th>
                                    <th style="" data-field="name" tabindex="0" data-sortable="true"><div class="th-inner">Name</div><div class="fht-cell"></div></th>
                                    <th style="" data-field="forks_count" tabindex="0" data-sortable="true"><div class="th-inner">Forks</div><div class="fht-cell"></div></th>
                                    <th style="" data-field="description" tabindex="0" data-sortable="true"><div class="th-inner">Description</div><div class="fht-cell"></div></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/bootstrap-table.min.js') }}"></script>
        <script src="{{ url('js/plugin_Tables.js') }}"></script>
        <script>
            /*Bootstrap Table Init*/

            var data = [{
                "name": "bootstrap-table",
                "stargazers_count": "10",
                "forks_count": "122",
                "description": "An extended Bootstrap table"
            }, {
                "name": "multiple-select",
                "stargazers_count": "288",
                "forks_count": "20",
                "description": "A jQuery plugin to select multiple elements with checkboxes :)"
            }, {
                "name": "bootstrap-table",
                "stargazers_count": "32",
                "forks_count": "11",
                "description": "Show/hide password plugin for twitter bootstrap."
            }, {
                "name": "bootstrap-table",
                "stargazers_count": "1",
                "forks_count": "4",
                "description": "my blog"
            }, {
                "name": "scutech-redmine 1",
                "stargazers_count": "50",
                "forks_count": "3",
                "description": "Redmine notification tools for chrome extension."
            }];

            $(function () {
                "use strict";
                $('#table_js,#table_js_1,#table_js_2').bootstrapTable({
                    data: data
                });

                /*Scroll to top*/
                $(document).on('click','#mybtn_top',function(e) {
                    $('#table_js').bootstrapTable('scrollTo', 0);
                    return false;
                });

                /*Scroll to index*/
                $(document).on('click','#mybtn_row',function(e) {
                    var index = +$('#row_index').val(),
                        top = 0;
                    $('#table_js').find('tbody tr').each(function (i) {
                        if (i < index) {
                            top += $(this).height();
                        }
                    });
                    $('#table_js').bootstrapTable('scrollTo', top);
                    return false;
                });

                /*Scroll to bottom*/
                $(document).on('click','#mybtn_btm',function(e) {
                    $('#table_js').bootstrapTable('scrollTo', 'bottom');
                    return false;
                });

            });
        </script>
    @endpush

@endsection
