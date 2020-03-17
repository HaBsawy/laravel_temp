<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 28-May-19
 * Time: 03:37
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default Toastr Alerts</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can use four different alert <code>info, warning, success, and error</code> message.</p>
                        <div class="button-list">
                            <button class="tst btn btn-info" data-note=".icon-info">Info Message</button>
                            <button class="tst btn btn-warning" data-note=".icon-warning">Warning Message</button>
                            <button class="tst btn btn-success" data-note=".icon-success">Success Message</button>
                            <button class="tst btn btn-danger" data-note=".icon-danger">Error Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Toastr Alerts positions</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can set position option <code>like <span class="inline-block">(position: 'top-right')</span></code> in toast-data.js file.</p>
                        <div class="button-list mt-25">
                            <button class="tst btn btn-default" data-note=".note-top-left">Top left</button>
                            <button class="tst btn btn-default" data-note=".note-top-right">Top right</button>
                            <button class="tst btn btn-default" data-note=".note-bottom-left">Bottom left</button>
                            <button class="tst btn btn-default" data-note=".note-bottom-right">Bottom right</button>
                            <button class="tst btn btn-default" data-note=".note-top-center">Top center full width</button>
                            <button class="tst btn btn-default" data-note=".note-bottom-center">Bottom center full width</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Dismissable Alerts</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Yay! Your message has been sent successfully.
                        </div>
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Welcome to Magilla Dashboard.
                        </div>
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Hi! Lasttwo days left form the trial.
                        </div>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Opps! Somthing went wrong.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Dismissable Alerts</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fas fa-check pr-15 float-left"></i><p class="float-left">Yay! Your message has been sent successfully.</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fas fa-info-circle pr-15 float-left"></i><p class="float-left">Welcome to Magilla Dashboard.</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fas fa-exclamation-circle pr-15 float-left"></i><p class="float-left">Hi! Lasttwo days left form the trial.</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fas fa-ban pr-15 float-left"></i><p class="float-left">Opps! Somthing went wrong.</p>
                            <div class="clearfix"></div>
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
                        <h6 class="panel-title">Dismissable Alerts with icon</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="alert alert-success alert-dismissable alert-style-1">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fas fa-check"></i>Yay! Your message has been sent successfully.
                        </div>
                        <div class="alert alert-info alert-dismissable alert-style-1">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fas fa-info-circle"></i>Welcome to Magilla Dashboard.
                        </div>
                        <div class="alert alert-warning alert-dismissable alert-style-1">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fas fa-exclamation-circle"></i>Hi! Lasttwo days left form the trial.
                        </div>
                        <div class="alert alert-danger alert-dismissable alert-style-1">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fas fa-ban"></i>Opps! Somthing went wrong.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toast-wrap top-right">
        <div class="toast-single has-icon icon-info">
            <span class="toast-loader toast-loaded"></span>
            <i class="fas fa-info-circle"></i>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">2 new messages</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>

        <div class="toast-single has-icon icon-warning">
            <span class="toast-loader toast-loaded"></span>
            <i class="fas fa-exclamation-triangle"></i>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Server not responding</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>

        <div class="toast-single has-icon icon-success">
            <span class="toast-loader toast-loaded"></span>
            <i class="fas fa-check"></i>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Welcome to Magilla</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>

        <div class="toast-single has-icon icon-danger">
            <span class="toast-loader toast-loaded"></span>
            <i class="fas fa-ban"></i>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Opps! somthing wents wrong</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>

        <div class="toast-single note-top-right">
            <span class="toast-loader toast-loaded"></span>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Top Right</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>
    </div>

    <div class="toast-wrap top-left">
        <div class="toast-single note-top-left">
            <span class="toast-loader toast-loaded"></span>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Top Left</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>
    </div>

    <div class="toast-wrap bottom-right">
        <div class="toast-single note-bottom-right">
            <span class="toast-loader toast-loaded"></span>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Bottom Right</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>
    </div>

    <div class="toast-wrap bottom-left">
        <div class="toast-single note-bottom-left">
            <span class="toast-loader toast-loaded"></span>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Bottom Left</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>
    </div>

    <div class="toast-wrap top-center">
        <div class="toast-single note-top-center">
            <span class="toast-loader toast-loaded"></span>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Top Center</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>
    </div>

    <div class="toast-wrap bottom-center">
        <div class="toast-single note-bottom-center">
            <span class="toast-loader toast-loaded"></span>
            <span class="close-toast-single">×</span>
            <h2 class="toast-heading">Bottom Center</h2>
            <p>Use the predefined ones, or specify a custom position object.</p>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/plugin_UI_Elements.js') }}"></script>
    @endpush

@endsection
