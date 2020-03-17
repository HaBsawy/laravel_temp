<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 14-Jun-19
 * Time: 00:51
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
                        <h6 class="panel-title">Form mask</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted"> Use <code>data-mask</code> to the input element.</p>
                        <div class="row mt-40">
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <form action="#">
                                        <div class="form-group">
                                            <label class="control-label mb-10">Phone</label>
                                            <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control" data-mask-selectonfocus="true">
                                            <span class="text-muted">(999) 999-9999</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">Date</label>
                                            <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                            <span class="text-muted">dd/mm/yyyy</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">SSN field 1</label>
                                            <input type="text" placeholder="" data-mask="999-99-9999" class="form-control">
                                            <span class="text-muted">e.g "999-99-9999"</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">Phone field + ext.</label>
                                            <input type="text" placeholder="" data-mask="+40 999 999 999" class="form-control">
                                            <span class="text-muted">+40 999 999 999</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">Product Key</label>
                                            <input type="text" placeholder="" data-mask="a*-999-a999" class="form-control">
                                            <span class="text-muted">e.g a*-999-a999</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">Currency</label>
                                            <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
                                            <span class="text-muted">$ 999,999,999.99</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">Date 2</label>
                                            <input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                                            <span class="text-muted">dd-mm-yyyy</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">Eye Script</label>
                                            <input type="text" placeholder="" data-mask="~9.99 ~9.99 999" class="form-control">
                                            <span class="text-muted">~9.99 ~9.99 999</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">Percent</label>
                                            <input type="text" placeholder="" data-mask="99%" class="form-control">
                                            <span class="text-muted">e.g "99%"</span>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label class="control-label mb-10">Pc Ip</label>
                                            <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                            <span class="text-muted">e.g "999.999.999.9999"</span>
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
        <script src="{{ url('js/jquery.mask.min.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
    @endpush

@endsection
