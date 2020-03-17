<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 31-May-19
 * Time: 18:20
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default pb-0">
                <div class="panel-wrapper">
                    <div class="panel-body pb-0">
                        <div class="row">
                            <!-- item -->
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-30">
                                <div class="panel panel-pricing mb-0">
                                    <div class="panel-heading">
                                        <i class="fas fa-bookmark"></i>
                                        <h6>basic</h6>
                                        <span class="panel-price">free</span>
                                    </div>
                                    <div class="panel-body text-center pl-0 pr-0">
                                        <hr class="mb-30">
                                        <ul class="list-group mb-0 text-center">
                                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                                            <li><hr class="mt-5 mb-5"></li>
                                            <li class="list-group-item"><i class="fa fa-check"></i> 5 projects/month</li>
                                            <li><hr class="mt-5 mb-5"></li>
                                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                                        </ul>
                                    </div>
                                    <div class="panel-footer pb-35">
                                        <a class="btn btn-success btn-rounded btn-lg" href="#">download now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /item -->
                            <!-- item -->
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-30">
                                <div class="panel panel-pricing mb-0">
                                    <div class="panel-heading">
                                        <i class="fas fa-wallet"></i>
                                        <h6>standard</h6>
                                        <span class="panel-price"><span class="pricing-dolor">$</span>25</span>
                                    </div>
                                    <div class="panel-body text-center pl-0 pr-0">
                                        <hr class="mb-30">
                                        <ul class="list-group mb-0 text-center">
                                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                                            <li><hr class="mt-5 mb-5"></li>
                                            <li class="list-group-item"><i class="fa fa-check"></i> 10 projects/month</li>
                                            <li><hr class="mt-5 mb-5"></li>
                                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                                        </ul>
                                    </div>
                                    <div class="panel-footer pb-35">
                                        <a class="btn btn-success btn-rounded btn-lg" href="#">subscribe now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /item -->
                            <!-- item -->
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-30">
                                <div class="panel panel-pricing mb-0">
                                    <div class="panel-heading">
                                        <i class="fas fa-crown"></i>
                                        <h6>business</h6>
                                        <span class="panel-price"><span class="pricing-dolor">$</span>55</span>
                                    </div>
                                    <div class="panel-body text-center pl-0 pr-0">
                                        <hr class="mb-30">
                                        <ul class="list-group mb-0 text-center">
                                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                                            <li><hr class="mt-5 mb-5"></li>
                                            <li class="list-group-item"><i class="fa fa-check"></i> 135 projects/year</li>
                                            <li><hr class="mt-5 mb-5"></li>
                                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                                        </ul>
                                    </div>
                                    <div class="panel-footer pb-35">
                                        <a class="btn btn-success btn-rounded btn-lg" href="#">subscribe now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /item -->
                            <!-- item -->
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-30">
                                <div class="panel panel-pricing mb-0">
                                    <div class="panel-heading">
                                        <i class="fas fa-shield-alt"></i>
                                        <h6>corporate</h6>
                                        <span class="panel-price"><span class="pricing-dolor">$</span>89</span>
                                    </div>
                                    <div class="panel-body text-center pl-0 pr-0">
                                        <hr class="mb-30">
                                        <ul class="list-group mb-0 text-center">
                                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                                            <li><hr class="mt-5 mb-5"></li>
                                            <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                                            <li><hr class="mt-5 mb-5"></li>
                                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                                        </ul>
                                    </div>
                                    <div class="panel-footer pb-35">
                                        <a class="btn btn-success btn-rounded btn-lg" href="#">subscribe now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /item -->

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
