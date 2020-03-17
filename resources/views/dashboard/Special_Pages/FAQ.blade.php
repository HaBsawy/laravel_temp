<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 08-Oct-19
 * Time: 23:17
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">FAQ</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="panel-group accordion-struct multiple-open" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_5">
                                    <a role="button" data-toggle="collapse" href="#collapse_5" aria-expanded="true">how to install this template ?</a>
                                </div>
                                <div id="collapse_5" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_6">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6" aria-expanded="false">how to change the CSS ?</a>
                                </div>
                                <div id="collapse_6" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_7">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_7" aria-expanded="false">How to import CSS ?</a>
                                </div>
                                <div id="collapse_7" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_8">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_8" aria-expanded="false"> How to include JS file ?</a>
                                </div>
                                <div id="collapse_8" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
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
