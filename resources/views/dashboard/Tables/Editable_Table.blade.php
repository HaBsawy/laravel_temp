<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 20-Jun-19
 * Time: 11:47
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/jquery.dataTables.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Tables.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">simple editable table</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="edit_datable_1" class="table  table-bordered table-striped m-b-0" style="cursor: pointer;">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Cost</th>
                                        <th>Profit</th>
                                        <th>Fun</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td tabindex="1">hello</td>
                                        <td tabindex="1">100</td>
                                        <td tabindex="1">200</td>
                                        <td tabindex="1">0</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="1">123</td>
                                        <td tabindex="1">330</td>
                                        <td tabindex="1">240</td>
                                        <td tabindex="1">1</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="1">yoyo</td>
                                        <td tabindex="1">430</td>
                                        <td tabindex="1">540</td>
                                        <td tabindex="1">3</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="1">Yacht</td>
                                        <td tabindex="1">100</td>
                                        <td tabindex="1">200</td>
                                        <td tabindex="1">0</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="1">Segway</td>
                                        <td tabindex="1">330</td>
                                        <td tabindex="1">240</td>
                                        <td tabindex="1">1</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th><strong>TOTAL</strong></th>
                                        <th>1290</th>
                                        <th>1420</th>
                                        <th>5</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                <input style="position: absolute; top: 278.812px; left: 674.013px; padding: 16px; text-align: start; font: 400 14px/20px Roboto, sans-serif; border: 1px solid rgba(33, 33, 33, 0.1); width: 334px; height: 53px; display: none;">
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
                        <h6 class="panel-title">editable table with datatable</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Editable table with fixed constraint.</p>
                        <div class="table-wrap mt-40">
                            <div class="table-responsive">
                                <div id="edit_datable_2_wrapper" class="dataTables_wrapper no-footer">
                                    <table id="edit_datable_2" class="table table-hover display  pb-30">
                                        <thead>
                                        <tr role="row">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Salary</th>
                                            <th>Office</th>
                                            <th>Extn.</th>
                                            <th>E-mail</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td tabindex="1" class="sorting_1">Ashton Cox</td>
                                            <td tabindex="1">Junior Technical Author</td>
                                            <td tabindex="1">$86,000</td>
                                            <td tabindex="1">San Francisco</td>
                                            <td tabindex="1">1562</td>
                                            <td tabindex="1">a.cox@datatables.net</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td tabindex="1" class="sorting_1">Cedric Kelly</td>
                                            <td tabindex="1">Senior Javascript Developer</td>
                                            <td tabindex="1">$433,060</td>
                                            <td tabindex="1">Edinburgh</td>
                                            <td tabindex="1">6224</td>
                                            <td tabindex="1">c.kelly@datatables.net</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td tabindex="1" class="sorting_1">Garrett Winters</td>
                                            <td tabindex="1">Accountant</td>
                                            <td tabindex="1">$170,750</td>
                                            <td tabindex="1">Tokyo</td>
                                            <td tabindex="1">8422</td>
                                            <td tabindex="1">g.winters@datatables.net</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td tabindex="1" class="sorting_1">Tiger Nixon</td>
                                            <td tabindex="1">System Architect</td>
                                            <td tabindex="1">$320,800</td>
                                            <td tabindex="1">Edinburgh</td>
                                            <td tabindex="1">5421</td>
                                            <td tabindex="1">t.nixon@datatables.net</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                <input style="position: absolute; top: 245px; left: 534.3px; padding: 16px; text-align: start; font: 400 14px/20px Roboto, sans-serif; border-width: 0px; border-style: none; border-color: rgb(135, 135, 135) rgba(33, 33, 33, 0.1) rgb(135, 135, 135) rgb(135, 135, 135); width: 140px; height: 52px; display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('js/mindmup-editabletable.js') }}"></script>
        <script src="{{ url('js/numeric-input-example.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('#edit_datable_2').DataTable();
            });

            $('#edit_datable_1').editableTableWidget().numericInputExample().find('td:first').focus();
            $('#edit_datable_2').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>
    @endpush

@endsection
