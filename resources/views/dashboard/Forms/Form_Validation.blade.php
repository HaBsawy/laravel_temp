<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 14-Jun-19
 * Time: 07:53
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Form Validation</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <form data-toggle="validator" role="form" novalidate="true">
                                        <div class="form-group">
                                            <label for="inputName" class="control-label mb-10">Name</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required="">
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="inputTwitter" class="control-label mb-10">Twitter</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required="">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>

                                            <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="control-label mb-10">Email</label>
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="control-label mb-10">Password</label>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required="">
                                                    <div class="help-block">Minimum of 6 characters</div>
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <input type="radio" name="underwear" id="box" required="">
                                                <div class="radio-container"></div>
                                                <label for="box"> Boxers </label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="underwear" id="bri" required="">
                                                <div class="radio-container"></div>
                                                <label for="bri"> Briefs </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <input type="checkbox" id="terms" data-error="Before you check yourself" required="">
                                                <div class="checkbox-container"></div>
                                                <label for="terms">Check yourself</label>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-success btn-anim disabled"><i class="fas fa-rocket"></i><span class="btn-text">submit</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/validator.min.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
    @endpush

@endsection
