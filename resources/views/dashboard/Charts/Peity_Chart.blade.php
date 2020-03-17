<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 16-Jun-19
 * Time: 20:06
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Pie Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add code in span <code> class="pie"</code> plus for colors <code>data-peity='{ "fill": ["#e69a2a", "#dc4666"]}'.</code></p>
                        <div class="row mt-40">
                            <div class="col-sm-2 col-xs-6">
                                <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#e69a2a&quot;, &quot;#dc4666&quot;]}" style="display: none;">1/5</span>
                                <div>Data : 1/5</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#e69a2a&quot;, &quot;#dc4666&quot;]}" style="display: none;">226/360</span>
                                <div>Data : 226/360</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#e69a2a&quot;, &quot;#dc4666&quot;]}" style="display: none;">0.52/1.561</span>
                                <div>Data : 0.52/1.561</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#e69a2a&quot;, &quot;#dc4666&quot;]}" style="display: none;">1,4</span>
                                <div>Data : 1,4</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#e69a2a&quot;, &quot;#dc4666&quot;]}" style="display: none;">226,134</span>
                                <div>Data : 226,134</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#e69a2a&quot;, &quot;#dc4666&quot;]}" style="display: none;">0.52,1.041</span>
                                <div>Data : 0.52, 1.041</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Donut Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add in span<code> class="donut"</code>.</p>
                        <div class="row mt-40">
                            <div class="col-sm-2 col-xs-6">
                                <span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;]}" style="display: none;">1/5</span>
                                <div>Data : 1/5</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;]}" style="display: none;">226/360</span>
                                <div>Data : 226/360</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;], &quot;innerRadius&quot;: 16, &quot;radius&quot;: 32 }" style="display: none;">0.52/1.561</span>
                                <div>Data : 0.52/1.561</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;], &quot;innerRadius&quot;: 20, &quot;radius&quot;: 32 }" style="display: none;">1,4</span>
                                <div>Data : 1,4</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;], &quot;innerRadius&quot;: 23, &quot;radius&quot;: 32 }" style="display: none;">226,134</span>
                                <div>Data : 226,134</div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <span class="donut" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;], &quot;innerRadius&quot;: 8, &quot;radius&quot;: 32 }" style="display: none;">0.52,1.041</span>
                                <div>Data : 0.52, 1.041</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Bar Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add class in span<code> peity-bar</code>.</p>
                        <div class="row mt-40">
                            <div class="col-sm-4 col-xs-6">
                                <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;]}" data-width="100%" data-height="60" style="display: none;">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;]}" data-width="100%" data-height="60" style="display: none;">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;, &quot;#e69a2a&quot;]}" data-width="100%" data-height="60" style="display: none;">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">line Chart</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add class in span<code> peity-line</code></p>
                        <div class="row mt-40">
                            <div class="col-sm-4 col-xs-6">
                                <span class="peity-line" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;],&quot;stroke&quot;:[&quot;#469408&quot;]}" data-width="100%" data-height="60" style="display: none;">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <span class="peity-line" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;],&quot;stroke&quot;:[&quot;#469408&quot;]}" data-width="100%" data-height="60" style="display: none;">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <span class="peity-line" data-peity="{ &quot;fill&quot;: [&quot;#469408&quot;], &quot;stroke&quot;:[&quot;#469408&quot;]}" data-width="100%" data-height="60" style="display: none;">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/jquery.peity.min.js') }}"></script>
        <script>
            /*Piety Init*/

            $(document).ready(function() {
                "use strict";

                if( $('.pie').length > 0 ){
                    /*pie*/
                    $("span.pie").peity("pie",{
                        width: 50,
                        height: 50
                    });
                }

                if( $('.donut').length > 0 ){
                    /*donut*/
                    $("span.donut").peity("donut",{
                        width: 50,
                        height: 50
                    });
                }

                if( $('.peity-line').length > 0 ){
                    /*line*/
                    $('.peity-line').each(function() {
                        $(this).peity("line", $(this).data());
                    });
                }

                if( $('.peity-bar').length > 0 ){
                    /*bar*/
                    $('.peity-bar').each(function() {
                        $(this).peity("bar", $(this).data());
                    });
                }
            });
        </script>
    @endpush

@endsection
