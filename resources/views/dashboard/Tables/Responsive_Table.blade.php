<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 18-Jun-19
 * Time: 15:33
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/tablesaw.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Tables.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Mode Switch Table</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <p class="text-muted">Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch.</p>
                            <div class="mt-40">
                                <table class="table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" data-tablesaw-minimap="" data-tablesaw-mode-switch="" id="table-9239" style="">
                                    <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="tablesaw-cell-persist tablesaw-sortable-head" data-sortable-numeric="false"><button class="tablesaw-sortable-btn">Movie Title</button></th>
                                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" class="tablesaw-sortable-head tablesaw-sortable-ascending" data-sortable-numeric=""><button class="tablesaw-sortable-btn">Rank</button></th>
                                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="tablesaw-sortable-head" data-sortable-numeric=""><button class="tablesaw-sortable-btn">Year</button></th>
                                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="tablesaw-sortable-head" data-sortable-numeric=""><button class="tablesaw-sortable-btn"><abbr title="Rotten Tomato Rating">Rating</abbr></button></th>
                                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="4" class="tablesaw-sortable-head" data-sortable-numeric="false"><button class="tablesaw-sortable-btn">Gross</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">Avatar</a></td>
                                        <td class="">1</td>
                                        <td class="">2009</td>
                                        <td class="">83%</td>
                                        <td class="">$2.7B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">Titanic</a></td>
                                        <td class="">2</td>
                                        <td class="">1997</td>
                                        <td class="">88%</td>
                                        <td class="">$2.1B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">The Avengers</a></td>
                                        <td class="">3</td>
                                        <td class="">2012</td>
                                        <td class="">92%</td>
                                        <td class="">$1.5B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">Harry Potter and the Deathly Hallows—Part 2</a></td>
                                        <td class="">4</td>
                                        <td class="">2011</td>
                                        <td class="">96%</td>
                                        <td class="">$1.3B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">Frozen</a></td>
                                        <td class="">5</td>
                                        <td class="">2013</td>
                                        <td class="">89%</td>
                                        <td class="">$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">Iron Man 3</a></td>
                                        <td class="">6</td>
                                        <td class="">2013</td>
                                        <td class="">78%</td>
                                        <td class="">$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">Transformers: Dark of the Moon</a></td>
                                        <td class="">7</td>
                                        <td class="">2011</td>
                                        <td class="">36%</td>
                                        <td class="">$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">The Lord of the Rings: The Return of the King</a></td>
                                        <td class="">8</td>
                                        <td class="">2003</td>
                                        <td class="">95%</td>
                                        <td class="">$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">Skyfall</a></td>
                                        <td class="">9</td>
                                        <td class="">2012</td>
                                        <td class="">92%</td>
                                        <td class="">$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td class="title tablesaw-cell-persist"><a href="javascript:void(0)">Transformers: Age of Extinction</a></td>
                                        <td class="">10</td>
                                        <td class="">2014</td>
                                        <td class="">18%</td>
                                        <td class="">$1.0B</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/tablesaw.js') }}"></script>
        <script>
            /*! Tablesaw - v2.0.3 - 2016-05-02
            * https://github.com/filamentgroup/tablesaw
            * Copyright (c) 2016 Filament Group; Licensed MIT */
            ;(function( $ ) {
                "use strict";
                // DOM-ready auto-init of plugins.
                // Many plugins bind to an "enhance" event to init themselves on dom ready, or when new markup is inserted into the DOM
                $( function(){
                    $( document ).trigger( "enhance.tablesaw" );
                });

            })( jQuery );
        </script>
    @endpush

@endsection
