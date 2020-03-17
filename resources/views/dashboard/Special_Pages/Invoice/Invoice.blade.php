<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 07-Oct-19
 * Time: 17:13
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
                                <table class="table invoice pb-30">
                                    <thead>
                                    <tr role="row">
                                        <th>Invoice</th>
                                        <th class="text-right">Order # 12345</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            Billed To:
                                            <h6>Fasbook, Inc.</h6>
                                            <p>795 Folsom Ave, Suite 600</p>
                                            <p>San Francisco, CA 94107</p>
                                            <p>P:(133) 456-7890</p>
                                            <h6>Payment Method:</h6>
                                            <p>Visa ending **** 4242</p>
                                            <p>jsmith@email.com</p>
                                        </td>
                                        <td class="text-right">
                                            Shiped To:
                                            <h6>Xyz, Inc.</h6>
                                            <p>795 Folsom Ave, Suite 600</p>
                                            <p>San Francisco, CA 94107</p>
                                            <p>P:(133) 456-7890</p>
                                            <h6>Order Date:</h6>
                                            <p>March 7, 2017</p>
                                        </td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable_1" class="table table-hover display  pb-30">
                                    <thead>
                                    <tr role="row">
                                        <th>ITEM</th>
                                        <th>PRICE</th>
                                        <th>QUANTITY</th>
                                        <th>TOTALS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">BS-200</td>
                                        <td>$10.99</td>
                                        <td>1</td>
                                        <td>$10.99</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">BS-400</td>
                                        <td>$20.00</td>
                                        <td>3</td>
                                        <td>$60.00</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">BS-1000</td>
                                        <td>$600.00</td>
                                        <td>1</td>
                                        <td>$600.00</td>
                                    </tr></tbody>
                                    <tfoot>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"></td>
                                            <th></th>
                                            <th>Subtotal</th>
                                            <td>$670.99</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1"></td>
                                            <td></td>
                                            <th>Shipping</th>
                                            <td>$15</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1"></td>
                                            <td></td>
                                            <th>Total</th>
                                            <td>$685.99</td>
                                        </tr>
                                    </tfoot>
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
        <script src="{{ url('js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('js/buttons.print.min.js') }}"></script>
        <script src="{{ url('js/plugin_Tables.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#datable_1').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'print'
                    ]
                } );

                $(".dt-button").addClass("btn btn-success");
            } );
        </script>
    @endpush

@endsection
