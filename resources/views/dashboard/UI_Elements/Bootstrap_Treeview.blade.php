<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 01-Jun-19
 * Time: 17:13
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
                        <h6 class="panel-title">Default</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="treeview" id="treeview1"><ul class="list-group"><li class="list-group-item node-treeview1" data-nodeid="0" style="color:undefined;background-color:undefined;"><span class="icon expand-icon glyphicon glyphicon-plus"></span><span class="icon node-icon"></span>Parent 1</li><li class="list-group-item node-treeview1" data-nodeid="5" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 2</li><li class="list-group-item node-treeview1" data-nodeid="6" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 3</li><li class="list-group-item node-treeview1" data-nodeid="7" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 4</li><li class="list-group-item node-treeview1 node-selected" data-nodeid="8" style="color:#FFFFFF;background-color:#428bca;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 5</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">collapsed</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="treeview" id="treeview2"><ul class="list-group"><li class="list-group-item node-treeview2" data-nodeid="0" style="color:undefined;background-color:undefined;"><span class="icon expand-icon glyphicon glyphicon-plus"></span><span class="icon node-icon"></span>Parent 1</li><li class="list-group-item node-treeview2 node-selected" data-nodeid="5" style="color:#FFFFFF;background-color:#428bca;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 2</li><li class="list-group-item node-treeview2" data-nodeid="6" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 3</li><li class="list-group-item node-treeview2" data-nodeid="7" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 4</li><li class="list-group-item node-treeview2" data-nodeid="8" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 5</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">expanded</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="treeview" id="treeview3"><ul class="list-group"><li class="list-group-item node-treeview3" data-nodeid="0" style="color:undefined;background-color:undefined;"><span class="icon expand-icon glyphicon glyphicon-plus"></span><span class="icon node-icon"></span>Parent 1</li><li class="list-group-item node-treeview3" data-nodeid="5" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 2</li><li class="list-group-item node-treeview3" data-nodeid="6" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 3</li><li class="list-group-item node-treeview3" data-nodeid="7" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 4</li><li class="list-group-item node-treeview3 node-selected" data-nodeid="8" style="color:#FFFFFF;background-color:#428bca;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 5</li></ul></div>
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
                        <h6 class="panel-title">JSON</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="treeview" id="treeview4"><ul class="list-group"><li class="list-group-item node-treeview4 node-selected" data-nodeid="0" style="color:#FFFFFF;background-color:#428bca;"><span class="icon expand-icon glyphicon glyphicon-plus"></span><span class="icon node-icon"></span>Parent 1</li><li class="list-group-item node-treeview4" data-nodeid="5" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 2</li><li class="list-group-item node-treeview4" data-nodeid="6" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 3</li><li class="list-group-item node-treeview4" data-nodeid="7" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 4</li><li class="list-group-item node-treeview4" data-nodeid="8" style="color:undefined;background-color:undefined;"><span class="icon glyphicon"></span><span class="icon node-icon"></span>Parent 5</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/plugin_UI_Elements.js') }}"></script>
    @endpush

@endsection
