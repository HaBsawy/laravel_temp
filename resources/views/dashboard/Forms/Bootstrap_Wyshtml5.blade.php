<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 15-Jun-19
 * Time: 12:22
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/bootstrap3-wysihtml5.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Bootstrap wysihtml5 editor</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <form method="post">
                            <div class="form-group">
                                <textarea class="form-control textarea_editor"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/bootstrap3-wysihtml5.min.js') }}"></script>
        <script src="{{ url('js/bootstrap3-wysihtml5.all.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
        <script>
            $('.textarea_editor').wysihtml5({
                toolbar: {
                    fa: true,
                    "link": true,
                }
            });
        </script>
    @endpush

@endsection
