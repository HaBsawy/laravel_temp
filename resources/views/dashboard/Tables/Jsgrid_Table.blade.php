<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 20-Jun-19
 * Time: 13:45
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/jsgrid.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/jsgrid-theme.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Tables.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">jsgrid Table</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div id="jsgrid_1" class="jsgrid">
                                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                    <table class="jsgrid-table">
                                        <tbody>
                                        <tr class="jsgrid-header-row">
                                            <th class="jsgrid-header-cell jsgrid-header-sortable">Name</th>
                                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable">Age</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable">Address</th>
                                            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable">Country</th>
                                            <th class="jsgrid-header-cell jsgrid-align-center">Is Married</th>
                                            <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center">
                                                <input class="jsgrid-button jsgrid-mode-button jsgrid-search-mode-button jsgrid-mode-on-button" type="button" title=""></th>
                                        </tr>
                                        <tr class="jsgrid-filter-row">
                                            <td class="jsgrid-cell">
                                                <input type="text">
                                            </td>
                                            <td class="jsgrid-cell jsgrid-align-right">
                                                <input type="number">
                                            </td>
                                            <td class="jsgrid-cell">
                                                <input type="text">
                                            </td>
                                            <td class="jsgrid-cell jsgrid-align-center">
                                                <select>
                                                    <option value="0"></option>
                                                    <option value="1">United States</option>
                                                    <option value="2">Canada</option>
                                                    <option value="3">United Kingdom</option>
                                                    <option value="4">France</option>
                                                    <option value="5">Brazil</option>
                                                    <option value="6">China</option>
                                                    <option value="7">Russia</option>
                                                </select>
                                            </td>
                                            <td class="jsgrid-cell jsgrid-align-center">
                                                <input type="checkbox" readonly="">
                                            </td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
                                                <input class="jsgrid-button jsgrid-search-button" type="button" title="Search">
                                                <input class="jsgrid-button jsgrid-clear-filter-button" type="button" title="Clear filter">
                                            </td>
                                        </tr>
                                        <tr class="jsgrid-insert-row">
                                            <td class="jsgrid-cell">
                                                <input type="text">
                                            </td>
                                            <td class="jsgrid-cell jsgrid-align-right">
                                                <input type="number">
                                            </td>
                                            <td class="jsgrid-cell">
                                                <input type="text">
                                            </td>
                                            <td class="jsgrid-cell jsgrid-align-center">
                                                <select>
                                                    <option value="0"></option>
                                                    <option value="1">United States</option>
                                                    <option value="2">Canada</option>
                                                    <option value="3">United Kingdom</option>
                                                    <option value="4">France</option>
                                                    <option value="5">Brazil</option>
                                                    <option value="6">China</option>
                                                    <option value="7">Russia</option>
                                                </select>
                                            </td>
                                            <td class="jsgrid-cell jsgrid-align-center">
                                                <input type="checkbox"></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
                                                <input class="jsgrid-button jsgrid-insert-button" type="button" title="Insert">
                                            </td>
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
    </div>

    @push('js')
        <script src="{{ url('js/db.js') }}"></script>
        <script src="{{ url('js/jsgrid.min.js') }}"></script>
        <script>
            /*Jsgrid Init*/
            $(function() {
                "use strict";

                $("#jsgrid_1").jsGrid({
                    height: "450px",
                    width: "100%",

                    filtering: true,
                    editing: true,
                    sorting: true,
                    paging: true,
                    autoload: true,

                    pageSize: 15,
                    pageButtonCount: 5,

                    deleteConfirm: "Do you really want to delete the client?",

                    controller: db,

                    fields: [
                        { name: "Name", type: "text", width: 150 },
                        { name: "Age", type: "number", width: 50 },
                        { name: "Address", type: "text", width: 200 },
                        { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                        { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
                        { type: "control" }
                    ]
                });

            });
        </script>
    @endpush

@endsection
