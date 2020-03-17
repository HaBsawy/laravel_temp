<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 27-May-19
 * Time: 04:29
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Large model</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mb-15">Overflowing text to show scroll behavior</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <!-- Button trigger modal -->
                        <img src="{{ url('images/model2.png') }}" alt="default" data-toggle="modal" data-target=".bs-example-modal-lg" class="model_img img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">medium model</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <!-- sample modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mb-15">Overflowing text to show scroll behavior</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <!-- Button trigger modal -->
                        <img src="{{ url('images/model.png') }}" alt="default" data-toggle="modal" data-target="#myModal" class="model_img img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">small model</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
                                    </div>
                                    <div class="modal-body"> ... </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <!-- Button trigger modal -->
                        <img src="{{ url('images/model3.png') }}" alt="default" data-toggle="modal" data-target=".bs-example-modal-sm" class="model_img img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Responsive model</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <!-- sample modal content -->
                        <!-- /.modal -->
                        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title">Modal Content is Responsive</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label mb-10">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label mb-10">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ url('images/model.png') }}" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive">
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title txt-dark">varying modal content based on trigger button</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted"> Use <code>event.relatedTarget</code> and HTML <code>data-*</code> attributes to vary the contents of the modal depending on which button was clicked. </p>
                        <div class="button-list mt-25">
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h5 class="modal-title" id="exampleModalLabel1">New message to <span></span></h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label mb-10">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name1">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label mb-10">Message:</label>
                                                <textarea class="form-control" id="message-text1"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('js')
        <script src="{{ url('js/plugin_UI_Elements.js') }}"></script>
    @endpush

@endsection
