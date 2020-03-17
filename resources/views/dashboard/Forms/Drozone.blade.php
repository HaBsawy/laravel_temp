<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 15-Jun-19
 * Time: 11:37
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/dropzone.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Basic</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted"> For multiple file upload add <code>dropzone</code> in form tag and add <code>multiple</code> in input tag.</p>
                        <div class="mt-40">
                            <form action="#" class="dropzone">
                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
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
                        <h6 class="panel-title">With remove link</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="">
                            <form action="#" class="dropzone dz-clickable" id="my-awesome-dropzone">
                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/dropzone.min.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
        <script>
            $(".dropzone").dropzone({
                addRemoveLinks: true,
                dictResponseError: 'Server not Configured',
                acceptedFiles: ".png,.jpg,.jpeg,.gif,.bmp,.zip",
            });
        </script>
    @endpush

@endsection
