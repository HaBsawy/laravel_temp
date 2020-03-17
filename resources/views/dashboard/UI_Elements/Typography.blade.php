<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 28-May-19
 * Time: 18:20
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
                        <h6 class="panel-title">Headings</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted mb-40">Use tags <code>h1 to h6</code> for get desire heading.</p>
                        <h1 class="mb-10">Heading 1</h1>
                        <h2 class="mb-10">Heading 2</h2>
                        <h3 class="mb-10">Heading 3</h3>
                        <h4 class="mb-10">Heading 4</h4>
                        <h5 class="mb-10">Heading 5</h5>
                        <h6>Heading 6</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Headings with sub heading</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted mb-40">Use tags <code>h1 to h6</code> for get desire heading.</p>
                        <h1 class="mb-10">Heading 1 <small>Sub-heading</small></h1>
                        <h2 class="mb-10">Heading 2 <small>Sub-heading</small></h2>
                        <h3 class="mb-10">Heading 3 <small>Sub-heading</small></h3>
                        <h4 class="mb-10">Heading 4 <small>Sub-heading</small></h4>
                        <h5 class="mb-10">Heading 5 <small>Sub-heading</small></h5>
                        <h6>Heading 6 <small>Sub-heading</small></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">body</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">This template has default body <code>font</code>size is <code>14px</code> and <code>line-height</code> <b>1.57142857</b>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">highlighted text</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">This template has default highlighted text tag
                            <mark>highlight</mark>
                            so you can use <code> mark </code> tag to display highlighted text.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Alignment</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-left">Left aligned text.</p>
                        <p class="text-center">Center aligned text.</p>
                        <p class="text-right">Right aligned text.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">text colors</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted mb-10">This is an example of muted text. Add class <code>text-muted</code></p>
                        <p class="text-primary mb-10">This is an example of primary text. Add class <code>text-primary</code></p>
                        <p class="text-success mb-10">This is an example of success text. Add class <code>text-success</code></p>
                        <p class="text-info mb-10">This is an example of info text. Add class <code>text-info</code></p>
                        <p class="text-warning mb-10">This is an example of warning text. Add class <code>text-warning</code></p>
                        <p class="text-danger mb-10">This is an example of danger text. Add class <code>text-danger</code></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">address</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <address class="mb-15">
                            <span class="address-head mb-5">Fasbook, Inc.</span>
                            795 Folsom Ave, Suite 600 <br>
                            San Francisco, CA 94107 <br>
                            <abbr title="Phone">P:</abbr>(123) 456-7890
                        </address>
                        <address>
                            <span class="address-head mb-5">George Belly</span>
                            <a href="mailto:#">first.last@example.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">blockquote</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</blockquote>
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">ordered list</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pl-15">
                        <ol>
                            <li class="mb-10">Lorem ipsum dolor sit amet</li>
                            <li class="mb-10">Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">unordered list</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body pl-15">
                        <ul class="uo-list">
                            <li class="mb-10">Lorem ipsum dolor sit amet</li>
                            <li class="mb-10">Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Description Text</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <dl>
                            <dt class="mb-10">Standard Description List</dt>
                            <dd class="mb-10">Description Text</dd>
                            <dt class="mb-10">Description List Title</dt>
                            <dd>Description List Text</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">fancy listing 1</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <ul class="list-icons">
                            <li class="mb-10"><i class="fa fa-certificate mr-5"></i> Lorem ipsum dolor sit amet</li>
                            <li class="mb-10"><i class="fa fa-certificate mr-5"></i> Consectetur adipiscing elit</li>
                            <li><i class="fa fa-certificate mr-5"></i> Integer molestie lorem at massa </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">fancy lsting 2</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <ul class="list-icons">
                            <li class="mb-10"><i class="fa fa-genderless text-success mr-5"></i> Lorem ipsum dolor sit amet</li>
                            <li class="mb-10"><i class="fa fa-genderless text-success mr-5"></i> Consectetur adipiscing elit</li>
                            <li><i class="fa fa-genderless	 text-success mr-5"></i> Integer molestie lorem at massa </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">fancy listing 3</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <ul class="list-icons">
                            <li class="mb-10"><i class="fa fa-angle-double-right text-info mr-5"></i> Lorem ipsum dolor sit amet</li>
                            <li class="mb-10"><i class="fa fa-angle-double-right text-info mr-5"></i> Consectetur adipiscing elit</li>
                            <li><i class="fa fa-angle-double-right text-info mr-5"></i> Integer molestie lorem at massa </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">fancy listing 4</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <ul class="list-icons">
                            <li class="mb-10"><i class="fa fa-check text-danger mr-5"></i> Lorem ipsum dolor sit amet</li>
                            <li class="mb-10"><i class="fa fa-check text-danger mr-5"></i> Consectetur adipiscing elit</li>
                            <li><i class="fa fa-check text-danger mr-5"></i> Integer molestie lorem at massa </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/plugin_UI_Elements.js') }}"></script>
    @endpush

@endsection
