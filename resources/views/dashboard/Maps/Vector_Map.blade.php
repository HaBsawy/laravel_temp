<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 20-Jun-19
 * Time: 17:27
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/jquery-jvectormap-2.0.3.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">world map</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div id="world_map_marker_1" style="height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">australia</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div id="australia" style="height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">usa</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div id="usa" style="height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">uk</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div id="uk" style="height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">india</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div id="india" style="height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/jquery-jvectormap-2.0.3.min.js') }}"></script>
        <script src="{{ url('js/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ url('js/jquery-jvectormap-in-mill.js') }}"></script>
        <script src="{{ url('js/jquery-jvectormap-uk-mill-en.js') }}"></script>
        <script src="{{ url('js/jquery-jvectormap-au-mill.js') }}"></script>
        <script src="{{ url('js/jquery-jvectormap-us-aea.js') }}"></script>
        <script>
            /*VectorMap Init*/

            $(function() {
                "use strict";
                var mapData = {
                    "US": 298,
                    "SA": 200,
                    "AU": 760,
                    "IN": 2000000,
                    "GB": 120,
                };

                if( $('#world_map_marker_1').length > 0 ){
                    $('#world_map_marker_1').vectorMap(
                        {
                            map: 'world_mill_en',
                            backgroundColor: 'transparent',
                            borderColor: '#fff',
                            borderOpacity: 0.25,
                            borderWidth: 0,
                            color: '#e6e6e6',
                            regionStyle : {
                                initial : {
                                    fill : 'rgba(86,111,201,.4)'
                                }
                            },

                            markerStyle: {
                                initial: {
                                    r: 10,
                                    'fill': '#fff',
                                    'fill-opacity':1,
                                    'stroke': '#000',
                                    'stroke-width' : 1,
                                    'stroke-opacity': 0.4
                                },
                            },

                            markers : [{
                                latLng : [21.00, 78.00],
                                name : 'INDIA : 350'

                            },
                                {
                                    latLng : [-33.00, 151.00],
                                    name : 'Australia : 250'

                                },
                                {
                                    latLng : [36.77, -119.41],
                                    name : 'USA : 250'

                                },
                                {
                                    latLng : [55.37, -3.41],
                                    name : 'UK   : 250'

                                },
                                {
                                    latLng : [25.20, 55.27],
                                    name : 'UAE : 250'

                                }],

                            series: {
                                regions: [{
                                    values: {
                                        "US": '#09a275',
                                        "SA": '#f2b701',
                                        "AU": '#0f4fa8',
                                        "IN": '#b10058',
                                        "GB": '#dc0030',
                                    },
                                    attribute: 'fill'
                                }]
                            },
                            hoverOpacity: null,
                            normalizeFunction: 'linear',
                            zoomOnScroll: false,
                            scaleColors: ['#000000', '#000000'],
                            selectedColor: '#000000',
                            selectedRegions: [],
                            enableZoom: false,
                            hoverColor: '#fff',
                        });
                }

                if( $('#india').length > 0 ){
                    $('#india').vectorMap({
                        map : 'in_mill',
                        backgroundColor : 'transparent',
                        regionStyle : {
                            initial : {
                                fill : 'rgba(86,111,201,.4)'
                            }
                        }
                    });
                }

                if( $('#usa').length > 0 ){
                    $('#usa').vectorMap({
                        map : 'us_aea',
                        backgroundColor : 'transparent',
                        regionStyle : {
                            initial : {
                                fill : 'rgba(86,111,201,.4)'
                            }
                        }
                    });
                }

                if( $('#australia').length > 0 ){
                    $('#australia').vectorMap({
                        map : 'au_mill',
                        backgroundColor : 'transparent',
                        regionStyle : {
                            initial : {
                                fill : 'rgba(86,111,201,.4)'
                            }
                        }
                    });
                }

                if( $('#uk').length > 0 ){
                    $('#uk').vectorMap({
                        map : 'uk_mill_en',
                        backgroundColor : 'transparent',
                        regionStyle : {
                            initial : {
                                fill : 'rgba(86,111,201,.4)'
                            }
                        }
                    });
                }
            });

        </script>
    @endpush

@endsection
