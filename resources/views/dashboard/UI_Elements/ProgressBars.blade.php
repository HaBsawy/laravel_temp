<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 31-May-19
 * Time: 16:04
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default progress bar</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default progress bar</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">75%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">striped</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-info progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default colored progress bar</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can give bootstrap colors to progress bars, please add class <code>progress-bar-info</code>.</p>
                        <div class="progress mt-40">
                            <div class="progress-bar progress-bar-info" style="width: 20%;" role="progressbar"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 30%;" role="progressbar"> <span class="sr-only">30% Complete</span> </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 40%;" role="progressbar"> <span class="sr-only">40% Complete</span> </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" style="width: 60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-inverse" style="width: 80%;" role="progressbar"> <span class="sr-only">80% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">All size Bars</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Size whatever you want just add class <code>progress-xs, sm, md, lg</code>.</p>
                        <div class="progress mt-40">
                            <div class="progress-bar progress-bar-info" style="width: 20%;" role="progressbar"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-info" style="width: 30%;" role="progressbar"> <span class="sr-only">30% Complete</span> </div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-info" style="width: 60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-info" style="width: 80%;" role="progressbar"> <span class="sr-only">80% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Animated Bars</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">You can also use animated bar by just putting <code>active</code> class.</p>
                        <div class="progress mt-40">
                            <div class="progress-bar progress-bar-info active progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-success active progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-warning active progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-info active progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">vertical progress bar</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">add <code>progress-vertical</code> class.</p>
                        <div class="progress progress-vertical mt-40">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:10%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:20%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:30%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:40%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height: 50%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical">
                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:70%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">vertical progress bar from bottom</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted"> just add class <code>progress-vertical-bottom</code>.</p>
                        <div class="progress progress-vertical-bottom mt-40">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:10%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical-bottom">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:20%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical-bottom">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:30%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical-bottom">
                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:40%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical-bottom">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height: 50%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-vertical-bottom">
                            <div class="progress-bar progress-bar-inverse progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:70%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">vertical striped Bars</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="progress progress-vertical-bottom">
                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:10%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-sm progress-vertical-bottom">
                            <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:20%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-md progress-vertical-bottom">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:30%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                        <div class="progress progress-lg progress-vertical-bottom">
                            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:40%;"> <span class="sr-only">88% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">animated progress bar</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">wrap with <code>progress-anim</code> class.</p>
                        <div class="progress-anim mt-40">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning wow animated progress-animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger wow animated progress-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"> <span class="sr-only">70% Complete</span> </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> <span class="sr-only">80% Complete</span> </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success wow animated progress-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-inverse wow animated progress-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> <span class="sr-only">90% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">staked progress bar</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="progress">
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-success"></div>
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-info progress-bar-striped active"></div>
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar progress-bar-warning progress-bar-striped active"></div>
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active"></div>
                        </div>
                        <div class="progress">
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-info progress-bar-striped active"></div>
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-striped active"></div>
                        </div>
                        <div class="progress">
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-inverse progress-bar-striped active"></div>
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-info progress-bar-striped active"></div>
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar progress-bar-warning progress-bar-striped active"></div>
                        </div>
                        <div class="progress progress-lg">
                            <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-success progress-bar-striped active"></div>
                            <div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-info progress-bar-striped active"></div>
                            <div role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar progress-bar-warning progress-bar-striped active"></div>
                            <div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">skills bars</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <span class="font-12 head-font txt-dark">Photoshop<span class="float-right">85%</span></span>
                        <div class="progress mt-10">
                            <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                        <span class="font-12 head-font txt-dark">Dreamweaver<span class="float-right">80%</span></span>
                        <div class="progress mt-10">
                            <div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                        <span class="font-12 head-font txt-dark">Illustrator<span class="float-right">70%</span></span>
                        <div class="progress mt-10">
                            <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 70%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                        <span class="font-12 head-font txt-dark">Corel Draw<span class="float-right">45%</span></span>
                        <div class="progress mt-10">
                            <div class="progress-bar progress-bar-inverse" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
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
