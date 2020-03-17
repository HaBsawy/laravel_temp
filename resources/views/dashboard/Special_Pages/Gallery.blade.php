<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 08-Oct-19
 * Time: 10:29
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/lightgallery.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">With Filter</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">

                        <div class="button-group filters-button-group text-center mb-4">
                            <button class="btn btn-success btn-rounded is-checked" data-filter="*">all</button>
                            <button class="btn btn-success btn-rounded" data-filter=".branding">branding</button>
                            <button class="btn btn-success btn-rounded" data-filter=".design">design</button>
                            <button class="btn btn-success btn-rounded" data-filter=".photography">photo</button>
                            <button class="btn btn-success btn-rounded" data-filter=".web">web</button>
                        </div>

                        <div class="grid row">
                            <div class="col-md-4 element-item branding" data-category="transition">
                                <img src="{{ url('images/img1.jpg') }}">
                            </div>
                            <div class="col-md-4 element-item photography" data-category="metalloid">
                                <img src="{{ url('images/img2.jpg') }}">
                            </div>
                            <div class="col-md-4 element-item design" data-category="post-transition">
                                <img src="{{ url('images/img3.jpg') }}">
                            </div>
                            <div class="col-md-4 element-item web" data-category="post-transition">
                                <img src="{{ url('images/img4.jpg') }}">
                            </div>
                            <div class="col-md-4 element-item design" data-category="transition">
                                <img src="{{ url('images/img5.jpg') }}">
                            </div>
                            <div class="col-md-4 element-item branding" data-category="alkali">
                                <img src="{{ url('images/img6.jpg') }}">
                            </div>
                        </div>

                        {{--<div class="gallery-wrap">--}}

                            {{--<div class="portfolio-wrap project-gallery" style="width: 1238px;">--}}
                                {{--<ul id="portfolio" class="portf auto-construct  project-gallery" data-col="3" style="position: relative; height: 446.075px;">--}}
                                    {{--<li class="item tall branding" data-src="../img/gallery/mock1.jpg" data-sub-html="<h6>Bagwati</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 392px; height: auto; margin: 10px; position: absolute; left: 0px; top: 0px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="{{ url('images/img1.jpg') }}" alt="Image description">--}}
                                            {{--<span class="hover-cap">Bagwati</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="item small photography" data-src="http://www.youtube.com/watch?v=Pq9yPrLWMyU" data-poster="../img/gallery/mock2.jpg" data-sub-html="<h6>Not a Keyboard</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 392px; height: auto; margin: 10px; position: absolute; left: 412px; top: 0px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="{{ url('images/img2.jpg') }}" alt="Image description">--}}
                                            {{--<span class="hover-cap">Not a Keyboard</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="item tall design" data-src="../img/gallery/mock4.jpg" data-sub-html="<h6>Into the Woods</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 392px; height: auto; margin: 10px; position: absolute; left: 824px; top: 0px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="{{ url('images/img3.jpg') }}" alt="Image description">--}}
                                            {{--<span class="hover-cap">Into the Woods</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="item small web" data-src="http://vimeo.com/1084537" data-poster="../img/gallery/mock3.jpg" data-sub-html="<h6>Ultra Saffire</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 392px; height: auto; margin: 10px; position: absolute; left: 412px; top: 37px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="{{ url('images/img4.jpg') }}" alt="Image description">--}}
                                            {{--<span class="hover-cap"> Ultra Saffire</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}

                                    {{--<li class="item design" data-src="../img/gallery/mock5.jpg" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 392px; height: auto; margin: 10px; position: absolute; left: 0px; top: 40px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="{{ url('images/img5.jpg') }}" alt="Image description">--}}
                                            {{--<span class="hover-cap">Happy Puppy</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="item branding" data-html="#video1" data-poster="../img/gallery/mock6.jpg" data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 392px; height: auto; margin: 10px; position: absolute; left: 0px; top: 81px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="{{ url('images/img6.jpg') }}" alt="Image description">--}}
                                            {{--<span class="hover-cap">Wooden Closet</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}

                                {{--</ul>--}}
                                {{--<!-- Hidden video div -->--}}
                                {{--<div style="display:none;" id="video1">--}}
                                    {{--<video class="lg-video-object lg-html5 video-js vjs-default-skin" controls="" preload="none">--}}
                                        {{--<source src="../videos/video1.mp4" type="video/webm">--}}
                                        {{--<source src="../videos/video1.webm" type="video/webm">--}}
                                        {{--Your browser does not support HTML5 video.--}}
                                    {{--</video>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
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
                        <h6 class="panel-title">Without Filter</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">

                        <div id="aniimated-thumbnials">
                            <a href="{{ url('images/img1.jpg') }}">
                                <img src="{{ url('images/img1.jpg') }}" />
                            </a>
                            <a href="{{ url('images/img2.jpg') }}">
                                <img src="{{ url('images/img2.jpg') }}" />
                            </a>
                        </div>


                        {{--<div class="gallery-wrap">--}}
                            {{--<div class="portfolio-wrap project-gallery" style="width: 1238px;">--}}
                                {{--<ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4" style="position: relative; height: 334.125px;">--}}
                                    {{--<li class="item tall" data-src="../img/gallery/mock1.jpg" data-sub-html="<h6>Bagwati</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 289px; height: auto; margin: 10px; position: absolute; left: 0px; top: 0px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="../img/gallery/mock1.jpg" alt="Image description">--}}
                                            {{--<span class="hover-cap">Bagwati</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="item small" data-src="http://www.youtube.com/watch?v=Pq9yPrLWMyU" data-poster="../img/gallery/mock2.jpg" data-sub-html="<h6>Not a Keyboard</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 289px; height: auto; margin: 10px; position: absolute; left: 309px; top: 0px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="../img/gallery/mock2.jpg" alt="Image description">--}}
                                            {{--<span class="hover-cap">Not a Keyboard</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="item tall" data-src="../img/gallery/mock4.jpg" data-sub-html="<h6>Into the Woods</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 289px; height: auto; margin: 10px; position: absolute; left: 618px; top: 0px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="../img/gallery/mock4.jpg" alt="Image description">--}}
                                            {{--<span class="hover-cap">Into the Woods</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="item small" data-src="http://vimeo.com/1084537" data-poster="../img/gallery/mock3.jpg" data-sub-html="<h6>Ultra Saffire</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 289px; height: auto; margin: 10px; position: absolute; left: 927px; top: 0px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="../img/gallery/mock3.jpg" alt="Image description">--}}
                                            {{--<span class="hover-cap"> Ultra Saffire</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}

                                    {{--<li class="item" data-src="../img/gallery/mock5.jpg" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 289px; height: auto; margin: 10px; position: absolute; left: 309px; top: 37px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="../img/gallery/mock5.jpg" alt="Image description">--}}
                                            {{--<span class="hover-cap">Happy Puppy</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="item" data-html="#video2" data-poster="../img/gallery/mock6.jpg" data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" style="width: 289px; height: auto; margin: 10px; position: absolute; left: 0px; top: 40px;">--}}
                                        {{--<a href="">--}}
                                            {{--<img class="img-responsive" src="../img/gallery/mock6.jpg" alt="Image description">--}}
                                            {{--<span class="hover-cap">Wooden Closet</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}

                                {{--</ul>--}}
                                {{--<!-- Hidden video div -->--}}
                                {{--<div style="display:none;" id="video2">--}}
                                    {{--<video class="lg-video-object lg-html5 video-js vjs-default-skin" controls="" preload="none">--}}
                                        {{--<source src="../videos/video1.mp4" type="video/webm">--}}
                                        {{--<source src="../videos/video1.webm" type="video/webm">--}}
                                        {{--Your browser does not support HTML5 video.--}}
                                    {{--</video>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/isotope-docs.min.js') }}"></script>
        <script src="{{ url('js/lightgallery.min.js') }}"></script>
        <script src="{{ url('js/lg-fullscreen.min.js') }}"></script>
        <script src="{{ url('js/lg-thumbnail.min.js') }}"></script>
        <script>
            // external js: isotope.pkgd.js

            // init Isotope
            var $grid = $('.grid').isotope({
                itemSelector: '.element-item',
                layoutMode: 'fitRows'
            });
            // filter functions
            var filterFns = {
                // show if number is greater than 50
                numberGreaterThan50: function() {
                    var number = $(this).find('.number').text();
                    return parseInt( number, 10 ) > 50;
                },
                // show if name ends with -ium
                ium: function() {
                    var name = $(this).find('.name').text();
                    return name.match( /ium$/ );
                }
            };
            // bind filter button click
            $('.filters-button-group').on( 'click', 'button', function() {
                var filterValue = $( this ).attr('data-filter');
                // use filterFn if matches value
                filterValue = filterFns[ filterValue ] || filterValue;
                $grid.isotope({ filter: filterValue });
            });
            // change is-checked class on buttons
            $('.button-group').each( function( i, buttonGroup ) {
                var $buttonGroup = $( buttonGroup );
                $buttonGroup.on( 'click', 'button', function() {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $( this ).addClass('is-checked');
                });
            });

            lightGallery(document.getElementById('aniimated-thumbnials'), {
                thumbnail:true
            });



        </script>
    @endpush

@endsection
