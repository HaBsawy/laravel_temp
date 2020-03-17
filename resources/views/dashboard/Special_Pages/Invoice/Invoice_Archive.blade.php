<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 08-Oct-19
 * Time: 00:01
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/jquery.dataTables.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Tables.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Invoice.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable_1" class="table table-hover display  pb-30">
                                    <thead>
                                    <tr role="row">
                                        <th>#INVOICE</th>
                                        <th>DESCRIPTION</th>
                                        <th>AMOUNT</th>
                                        <th>STATUS</th>
                                        <th>ISSUE DATE</th>
                                        <th>DUE DATE</th>
                                        <th>VIEW</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        <td>#5010</td>
                                        <td>Integration Specialist</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        <td>2010/10/14</td>
                                        <td>2014/09/15</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>#5011</td>
                                        <td>Javascript Developer</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        <td>2009/09/15</td>
                                        <td>2013/09/15</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>#5012</td>
                                        <td>System Architect</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-danger">Unpaid</span></td>
                                        <td>2011/04/25</td>
                                        <td>2012/12/02</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td>#5013</td>
                                        <td>Accountant</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        <td>2011/07/25</td>
                                        <td>2012/12/02</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>#5014</td>
                                        <td>Junior Technical Author</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                        <td>2009/01/12</td>
                                        <td>2012/12/02</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td>#5015</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        <td>2012/03/29</td>
                                        <td>2012/12/02</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>#5016</td>
                                        <td>Accountant</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        <td>2008/11/28</td>
                                        <td>2012/12/02</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td>#5017</td>
                                        <td>Integration Specialist</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        <td>2012/12/02</td>
                                        <td>2016/12/02</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>#5018</td>
                                        <td>Sales Assistant</td>
                                        <td>$205,500</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        <td>2012/08/06</td>
                                        <td>2013/09/15</td>
                                        <td>
                                            <a href="#"><i class="far fa-file-archive"></i></a>
                                        </td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('js/plugin_Tables.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#datable_1').DataTable();
            } );
        </script>
    @endpush

@endsection
