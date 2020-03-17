<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 15-Jun-19
 * Time: 11:06
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/dropify.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-6 ol-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">File Upload (Default)</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add <code>dropify</code> class in input tag.</p>
                        <div class="mt-40">
                            <input type="file" class="dropify"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ol-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">File Upload (default value)</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can set a default value by adding <code>data-default-file</code> in input tag.</p>
                        <div class="mt-40">
                            <input type="file" class="dropify" data-default-file="{{ url('images/test-image-1.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 ol-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">File Upload (Height)</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can set the height by adding <code>data-height</code> in input tag.</p>
                        <div class="mt-40">
                            <input type="file" class="dropify" data-height="500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ol-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">File Upload (custom)</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can combine different option.</p>
                        <div class="mt-40">
                            <input type="file" class="dropify" data-height="500" data-default-file="{{ url('images/test-image-1.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 ol-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">File Upload (max file size)</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can add a max file size by <code>data-max-file-size</code>.</p>
                        <div class="mt-40">
                            <input type="file" class="dropify" data-max-file-size="2M">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ol-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">File Upload (disabled remove option)</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can disable remove button by <code>data-show-remove="false"</code>.</p>
                        <div class="mt-40">
                            <input type="file" class="dropify" data-show-remove="false">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/dropify.min.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
        <script>
            $('.dropify').dropify();
        </script>
    @endpush

@endsection
