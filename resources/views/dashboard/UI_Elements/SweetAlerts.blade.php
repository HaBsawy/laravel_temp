<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 27-May-19
 * Time: 17:04
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">A basic message</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <img src="{{ url('images/alert.png') }}" alt="alert" class="img-responsive model_img sa" data-sa="#sa-basic">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">title with a text under</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <img src="{{ url('images/alert2.png') }}" alt="alert" class="img-responsive model_img sa" data-sa="#sa-title">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">success message</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <img src="{{ url('images/alert3.png') }}" alt="alert" class="img-responsive model_img sa" data-sa="#sa-success">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">warning message</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <img src="{{ url('images/alert4.png') }}" alt="alert" class="img-responsive model_img sa" data-sa="#sa-warning">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">a basic message with option</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <img src="{{ url('images/alert5.png') }}" alt="alert" class="img-responsive model_img sa" data-sa="#sa-params">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Alert with Image</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <img src="{{ url('images/alert7.png') }}" alt="alert" class="img-responsive model_img sa" data-sa="#sa-image">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Alert with time</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <img src="{{ url('images/alert6.png') }}" alt="alert" class="img-responsive model_imgv sa" data-sa="#sa-close">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sweet-alert" id="sa-basic">
        <div class="body">
            <h3>Here's a message!</h3>
            <button class="btn btn-primary closing">OK</button>
        </div>
    </div>

    <div class="sweet-alert" id="sa-title">
        <div class="body">
            <h3>Here's a message!</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <button class="btn btn-primary closing">OK</button>
        </div>
    </div>

    <div class="sweet-alert" id="sa-success">
        <div class="body">
            <div class="circle border-success">
                <i class="fas fa-check text-success"></i>
            </div>
            <h3>Here's a message!</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <button class="btn btn-success closing">OK</button>
        </div>
    </div>

    <div class="sweet-alert" id="sa-warning">
        <div class="body">
            <div class="circle border-warning">
                <i class="fas fa-exclamation text-warning"></i>
            </div>
            <h3>Are you sure?</h3>
            <p>You will not be able to recover this imaginary file!</p>
            <button class="btn btn-secondary closing">Cancel</button>
            <button class="btn btn-warning closing sa" data-sa="#sa-delete">Yes, Delete It!</button>
        </div>
    </div>

    <div class="sweet-alert" id="sa-delete">
        <div class="body">
            <div class="circle border-success">
                <i class="fas fa-check text-success"></i>
            </div>
            <h3>Deleted!</h3>
            <p>Your imaginary file has been deleted.</p>
            <button class="btn btn-success closing">OK</button>
        </div>
    </div>

    <div class="sweet-alert" id="sa-cancel">
        <div class="body">
            <div class="circle border-danger">
                <i class="fas fa-times text-danger"></i>
            </div>
            <h3>Cancelled</h3>
            <p>Your imaginary file is safe :)</p>
            <button class="btn btn-success closing">OK</button>
        </div>
    </div>

    <div class="sweet-alert" id="sa-params">
        <div class="body">
            <div class="circle border-warning">
                <i class="fas fa-exclamation text-warning"></i>
            </div>
            <h3>Are you sure?</h3>
            <p>You will not be able to recover this imaginary file!</p>
            <button class="btn btn-secondary closing sa" data-sa="#sa-cancel">No, Cancel Plx!</button>
            <button class="btn btn-warning closing sa" data-sa="#sa-delete">Yes, Delete It!</button>
        </div>
    </div>

    <div class="sweet-alert" id="sa-image">
        <div class="body">
            <div class="circle border-danger">
                <img src="{{ url('images/user1.png') }}">
            </div>
            <h3>John!</h3>
            <p>Recently joined twitter</p>
            <button class="btn btn-success closing">OK</button>
        </div>
    </div>

    <div class="sweet-alert auto-closing" id="sa-close">
        <div class="body">
            <h3>Auto close alert!</h3>
            <p>I will close in 2 seconds.</p>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/plugin_UI_Elements.js') }}"></script>
    @endpush

@endsection
