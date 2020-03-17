<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 15-Jun-19
 * Time: 15:12
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/summernote-bs4.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Summernote wysihtml5</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <form method="post">
                            <textarea id="summernote" name="editordata"></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/summernote-bs4.min.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
        <script>
            $('#summernote').summernote({
                placeholder: 'Hello bootstrap 4',
                tabsize: 2,
                height: 400
            });
        </script>
    @endpush

@endsection
