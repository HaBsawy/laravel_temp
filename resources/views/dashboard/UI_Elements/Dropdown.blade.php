<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 31-May-19
 * Time: 19:58
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Rollover dropdown</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Use <code>show-on-hover</code> class with dropdown class.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown show-on-hover">
                                <button class="btn btn-success dropdown-toggle">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
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
                        <h6 class="panel-title">Regular dropdown</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Use <code>dropdown</code> class  for default dropdown.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown">
                                <!-- Single button -->
                                <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
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
                        <h6 class="panel-title">Dropdown with icon</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Just put icon class with i tag.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown">
                                <button data-toggle="dropdown" class="btn btn-default btn-outline dropdown-toggle "> <i class="far fa-heart"></i> <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-id-card"></i><span>my balance</span></a>
                                    </li>
                                    <li>
                                        <a href="inbox.html"><i class="fas fa-envelope"></i><span>Inbox</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-cog"></i><span>Settings</span></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#"><i class="fas fa-power-off"></i><span>Log Out</span></a>
                                    </li>
                                </ul>
                            </div>
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
                        <h6 class="panel-title">Fancy dropdown 1</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Use Animate.css classes with <code>data-dropdown-in="fadeIn" data-dropdown-out="fadeOut"</code>.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
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
                        <h6 class="panel-title">fancy dropdown 2</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Use Animate.css classes with <code>data-dropdown-in="flipInX" data-dropdown-out="flipOutX"</code>.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown">
                                <!-- Single button -->
                                <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
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
                        <h6 class="panel-title">Dropdown with icon</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Use Animate.css classes with <code>data-dropdown-in="flipInY" data-dropdown-out="flipOutY"</code>.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown">
                                <button data-toggle="dropdown" class="btn btn-success btn-outline dropdown-toggle"> dropdown <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-id-card"></i><span>my balance</span></a>
                                    </li>
                                    <li>
                                        <a href="inbox.html"><i class="fas fa-envelope"></i><span>Inbox</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-cog"></i><span>Settings</span></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#"><i class="fas fa-power-off"></i><span>Log Out</span></a>
                                    </li>
                                </ul>
                            </div>
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
                        <h6 class="panel-title">Fancy dropdown 3</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Use Animate.css classes with <code>data-dropdown-in="slideInRight" data-dropdown-out="flipOutX"</code>.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
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
                        <h6 class="panel-title">fancy dropdown 4</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Use Animate.css classes with <code>data-dropdown-in="bounceIn" data-dropdown-out="bounceOut"</code>.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown">
                                <!-- Single button -->
                                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
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
                        <h6 class="panel-title">Fancy Dropdown 5</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Use Animate.css classes with <code>data-dropdown-in="rollIn" data-dropdown-out="rollOut"</code>.</p>
                        <div class="btn-group mt-40">
                            <div class="dropdown">
                                <button data-toggle="dropdown" class="btn btn-info btn-outline dropdown-toggle"> dropdown <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-id-card"></i><span>my balance</span></a>
                                    </li>
                                    <li>
                                        <a href="inbox.html"><i class="fas fa-envelope"></i><span>Inbox</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-cog"></i><span>Settings</span></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#"><i class="fas fa-power-off"></i><span>Log Out</span></a>
                                    </li>
                                </ul>
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
