<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 29-May-19
 * Time: 15:55
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
                        <h6 class="panel-title">one open</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="panel-group accordion-struct one-open">
                            <div class="panel panel-default">
                                <div class="panel-heading activestate">
                                    <a role="button" data-toggle="#collapse_1">collapse one</a>
                                </div>
                                <div id="collapse_1" class="panel-collapse">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="#collapse_2" >collapse two </a>
                                </div>
                                <div id="collapse_2" class="panel-collapse collapse">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="#collapse_3" >collapse three</a>
                                </div>
                                <div id="collapse_3" class="panel-collapse collapse" >
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" role="button" data-toggle="#collapse_4" > collapse four</a>
                                </div>
                                <div id="collapse_4" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                </div>
                            </div>
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
                        <h6 class="panel-title">multiple open</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="panel-group accordion-struct multiple-open" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_5">
                                    <a role="button" data-toggle="collapse" href="#collapse_5" aria-expanded="true">collapse one</a>
                                </div>
                                <div id="collapse_5" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_6">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6" aria-expanded="false">collapse two </a>
                                </div>
                                <div id="collapse_6" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_7">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_7" aria-expanded="false">collapse three</a>
                                </div>
                                <div id="collapse_7" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_8">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_8" aria-expanded="false"> collapse four</a>
                                </div>
                                <div id="collapse_8" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                </div>
                            </div>
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
                        <h6 class="panel-title">one open</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="panel-group accordion-struct accordion-style-1 one-open" id="accordion_2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading activestate" role="tab" id="heading_10">
                                    <a role="button" data-toggle="#collapse_10"><div class="icon-ac-wrap pr-20"><i class="fas fa-minus"></i></div>collapse one</a>
                                </div>
                                <div id="collapse_10" class="panel-collapse">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_11">
                                    <a role="button" data-toggle="#collapse_11"><div class="icon-ac-wrap pr-20"><i class="fas fa-plus"></i></div>collapse two </a>
                                </div>
                                <div id="collapse_11" class="panel-collapse collapse">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_12">
                                    <a role="button" data-toggle="#collapse_12"><div class="icon-ac-wrap pr-20"><i class="fas fa-plus"></i></div>collapse three</a>
                                </div>
                                <div id="collapse_12" class="panel-collapse collapse">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_13">
                                    <a role="button" data-toggle="#collapse_13"><div class="icon-ac-wrap pr-20"><i class="fas fa-plus"></i></div>collapse four</a>
                                </div>
                                <div id="collapse_13" class="panel-collapse collapse">
                                    <div class="panel-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
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
