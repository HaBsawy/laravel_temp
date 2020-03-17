<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 10-Jun-19
 * Time: 23:58
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Basic Form</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Default Text <span class="help"> e.g. "john doe"</span></label>
                                    <input type="text" class="form-control" value="john doe...">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Password</label>
                                    <input type="password" class="form-control" value="password">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Placeholder</label>
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Text area</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group mt-30 mb-30">
                                    <label class="control-label mb-10 text-left">select</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10 text-left">Radio</label>
                                    <div class="radio radio-info">
                                        <input type="radio" name="radio" id="radio1" value="option1" checked="">
                                        <div class="radio-container info">

                                        </div>
                                        <label for="radio1">
                                            M
                                        </label>
                                    </div>
                                    <div class="radio radio-info">
                                        <input type="radio" name="radio" id="radio2" value="option2" checked="">
                                        <div class="radio-container info">

                                        </div>
                                        <label for="radio2">
                                            F
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10 text-left">Checkbox</label>
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <div class="checkbox-container">

                                        </div>
                                        <label for="checkbox1">
                                            Default
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox" checked="">
                                        <div class="checkbox-container primary">

                                        </div>
                                        <label for="checkbox2">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" type="checkbox">
                                        <div class="checkbox-container success">

                                        </div>
                                        <label for="checkbox3">
                                            Success
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10 text-left">File upload</label>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <div style="display: inline-block;"><i class="fas fa-file fileinput-exists"></i></div>
                                            <span class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon fileupload btn btn-info btn-anim">
                                            <i class="fa fa-upload"></i>
                                            <span class="fileinput-new btn-text">Select file</span>
                                            <span class="fileinput-exists btn-text" style="display: none">Change</span>
                                            <input type="file" class="upload">
                                        </span>
                                        <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput" style="display: none;"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="control-label mb-10 text-left">Helping text</label>
                                    <input type="text" class="form-control" placeholder="Helping text">
                                    <span class="help-block mt-10 mb-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                </div>
                            </form>
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
                        <h6 class="panel-title">Input types</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form class="form-horizontal">
                                <div class="form-group mb-0">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label mb-10">Default Input</label>
                                                <input type="text" class="form-control" value="john doe...">
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="control-label mb-10">Filled Input</label>
                                                <input type="text" class="form-control filled-input" value="john doe...">
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="control-label mb-10">Rounded Outline Input</label>
                                                <input type="text" class="form-control rounded-outline-input" value="john doe...">
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="control-label mb-10">Rounded filled input</label>
                                                <input type="text" class="form-control filled-input rounded-input" value="john doe...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                        <h6 class="panel-title">input groups</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form>
                                <!-- form-group -->
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10">Static</label>
                                    <div class="input-group mb-15">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" placeholder="Username" class="form-control">
                                    </div>
                                    <div class="input-group mb-15">
                                        <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                        <span class="input-group-addon"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                                <!-- /form-group -->

                                <!-- form-group -->
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10 m-t-20" for="example-input1-group3">Dropdowns</label>
                                    <div class="input-group mb-15">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" id="example-input1-group3" name="example-input1-group3" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group mb-15">
                                        <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="Email">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn  btn-info dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /form-group -->

                                <!-- form-group -->
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10 m-t-40" for="example-input1-group3">Segment Buttons</label>
                                    <div class="input-group mb-15">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn  btn-info">Action</button>
                                            <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" id="example-input3-group3" name="example-input3-group3" class="form-control" placeholder="..">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn  btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="input-group ">
                                        <input type="text" id="example-input3-group4" name="example-input3-group3" class="form-control" placeholder="..">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                            <button type="button" class="btn  btn-info">Action</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /form-group -->

                                <!-- form-group -->
                                <div class="form-group mb-0">
                                    <label class="control-label mb-10 " for="example-input1-group2">Buttons</label>
                                    <div class="input-group mb-15"> <span class="input-group-btn">
														<button type="button" class="btn  btn-danger"><i class="fa fa-search"></i></button>
														</span>
                                        <input type="text" id="example-input1-group4" name="example-input1-group4" class="form-control" placeholder="Search">
                                    </div>
                                    <div class="input-group mb-15">
                                        <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                        <span class="input-group-btn">
														<button type="button" class="btn btn-success btn-anim"><i class="fas fa-rocket"></i><span class="btn-text">submit</span></button>
														</span>
                                    </div>
                                    <div class="input-group "> <span class="input-group-btn">
														<button type="button" class="btn btn-icon-anim btn-facebook btn-square"><i class="fab fa-facebook-f"></i></button>
														</span>
                                        <input type="text" id="example-input3-group2" name="example-input3-group2" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
														<button type="button" class="btn btn-icon-anim btn-twitter btn-square"><i class="fab fa-twitter"></i></button>
														</span>
                                    </div>
                                </div>
                                <!-- form-group -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Input States</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form class="form-horizontal" role="form">
                                <div class="form-group has-success">
                                    <label class="col-md-3 control-label " for="state-success">Success</label>
                                    <div class="col-md-6">
                                        <input type="text" id="state-success" name="state-success" class="form-control" placeholder="...">
                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-md-3 control-label " for="state-warning">Warning</label>
                                    <div class="col-md-6">
                                        <input type="text" id="state-warning" name="state-warning" class="form-control" placeholder="...">
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-md-3 control-label " for="state-danger">Danger</label>
                                    <div class="col-md-6">
                                        <input type="text" id="state-danger" name="state-danger" class="form-control" placeholder="...">
                                    </div>
                                </div>
                                <div class="form-group has-success has-feedback">
                                    <label class="col-sm-3 control-label ">Input with success </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                        <i class="fas fa-check form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-warning has-feedback">
                                    <label class="col-sm-3 control-label ">Input with warning </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control inputmask">
                                        <i class="fas fa-exclamation-triangle form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-error has-feedback mb-0">
                                    <label class="col-sm-3 control-label ">Input with error </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control inputmask">
                                        <i class="fas fa-times form-control-feedback"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Input Sizes</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label " for="example-input-small">Small</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label " for="example-input-normal">Normal</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="col-sm-3 control-label " for="example-input-large">Large</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg">
                                    </div>
                                </div>
                            </form>
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
                        <h6 class="panel-title">inline form</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form class="form-inline">
                                <div class="form-group mr-15">
                                    <label class="control-label mr-10" for="email_inline">email:</label>
                                    <input type="email" class="form-control" id="email_inline">
                                </div>
                                <div class="form-group mr-15">
                                    <label class="control-label mr-10" for="pwd_inline">Password:</label>
                                    <input type="password" class="form-control" id="pwd_inline">
                                </div>
                                <div class="form-group mr-15">
                                    <div class="checkbox mr-15">
                                        <input id="checkbox_inline" type="checkbox">
                                        <div class="checkbox-container">

                                        </div>
                                        <label for="checkbox_inline">
                                            remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-anim"><i class="fas fa-rocket"></i><span class="btn-text">submit</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">default form</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="email_de">email:</label>
                                    <input type="email" class="form-control" id="email_de">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="pwd_de">Password:</label>
                                    <input type="password" class="form-control" id="pwd_de">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox_de" type="checkbox">
                                        <div class="checkbox-container success">

                                        </div>
                                        <label for="checkbox_de">
                                            remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="button" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">horizontal form</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label mb-10 col-sm-2" for="email_hr">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email_hr" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 col-sm-2" for="pwd_hr">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="pwd_hr" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="offset-sm-2 col-sm-10">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox_hr" type="checkbox">
                                            <div class="checkbox-container success">

                                            </div>
                                            <label for="checkbox_hr">
                                                remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="button" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
                                    </div>
                                </div>
                            </form>
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
                        <h6 class="panel-title">Grid Styles</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-12" class="form-control">
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-6" class="form-control">
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-6" class="form-control">
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-4" class="form-control">
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-4" class="form-control">
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-4" class="form-control">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-3" class="form-control">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-3" class="form-control">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-3" class="form-control">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-3" class="form-control">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
                                    <input type="text" placeholder=".col-sm-1" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
    @endpush

@endsection
