<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 02-Jun-19
 * Time: 00:38
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Bootstrap carousel with caption</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="muted">Add class <code class="">.carousel-caption</code>.</p>

                        <div class="slick slick1">
                            <div class="item">
                                <img src="{{ url('images/img1.jpg') }}">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img2.jpg') }}">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img3.jpg') }}">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Bootstrap carousel with caption</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">

                        <div class="slick slick2">
                            <div class="item">
                                <img src="{{ url('images/img4.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img5.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img6.jpg') }}">
                            </div>
                        </div>

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
                        <h6 class="panel-title">Slick full width</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="slick slick-fullWidth">
                            <div class="item">
                                <img src="{{ url('images/img1.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img2.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img3.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img4.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img5.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img6.jpg') }}">
                            </div>
                        </div>
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
                        <h6 class="panel-title">Slick four image</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="slick slick-four">
                            <div class="item">
                                <img src="{{ url('images/img1.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img2.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img3.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img4.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img5.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img6.jpg') }}">
                            </div>
                        </div>
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
                        <h6 class="panel-title">Slick three image</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="slick slick-three">
                            <div class="item">
                                <img src="{{ url('images/img1.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img2.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img3.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img4.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img5.jpg') }}">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/img6.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $('.slick1').slick({
                infinite: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
            });

            $('.slick2').slick({
                infinite: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
            });

            $('.slick-fullWidth').slick({
                infinite: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
            });

            $('.slick-four').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
            });

            $('.slick-three').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                // autoplay: true,
                // autoplaySpeed: 2000,
                arrows: true,
                prevArrow: "<button type=\"button\" class=\"btn btn-default prev\">Previous</button>",
                nextArrow: "<button type=\"button\" class=\"btn btn-default next\">Next</button>"
            });

            $(".item p").each(function () {
                $(this).css("marginLeft", ($(this).parent(".item").innerWidth() - $(this).innerWidth())/2);
            })
        </script>
    @endpush

@endsection
