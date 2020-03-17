<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 28-May-19
 * Time: 20:33
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">General Button</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Use a classes <code>btn btn-default</code> to quickly create a general btn.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default">Default</button>
                            <button class="btn  btn-info">Info</button>
                            <button class="btn  btn-primary">Primary</button>
                            <button class="btn  btn-success">Success</button>
                            <button class="btn btn-danger">Danger</button>
                            <button class="btn btn-warning">Warning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Rounded Button</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Use a classes <code>btn btn-rounded</code> to quickly create a rounded btn.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default btn-rounded">Default</button>
                            <button class="btn  btn-info btn-rounded">Info</button>
                            <button class="btn  btn-primary btn-rounded">Primary</button>
                            <button class="btn  btn-success btn-rounded">Success</button>
                            <button class="btn btn-danger btn-rounded">Danger</button>
                            <button class="btn btn-warning btn-rounded">Warning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">outline Button</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Use a class <code> btn btn-outline</code> to quickly create a outline btn.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default btn-outline">Default</button>
                            <button class="btn  btn-info btn-outline">Info</button>
                            <button class="btn  btn-primary btn-outline">Primary</button>
                            <button class="btn  btn-success btn-outline">Success</button>
                            <button class="btn btn-danger btn-outline">Danger</button>
                            <button class="btn btn-warning btn-outline">Warning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">outline rounded Button</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Use a classes <code>btn btn-outline btn-rounded</code> to quickly create a outline rounded btn.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default btn-outline btn-rounded">Default</button>
                            <button class="btn  btn-info btn-outline btn-rounded">Info</button>
                            <button class="btn  btn-primary btn-outline btn-rounded">Primary</button>
                            <button class="btn  btn-success btn-outline btn-rounded">Success</button>
                            <button class="btn btn-danger btn-outline btn-rounded">Danger</button>
                            <button class="btn btn-warning btn-outline btn-rounded">Warning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Button sizes</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Use a class <code> btn-lg</code> for large button, <code> btn-sm</code> for small button, <code> btn-xs</code> for mini button.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default  btn-lg">large</button>
                            <button class="btn  btn-default">Default</button>
                            <button class="btn btn-default  btn-sm">small</button>
                            <button class="btn btn-default  btn-xs">mini</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">disabled buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Use a class <code>disabled</code> to quickly create a disabled btn.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default  disabled">disabled</button>
                            <button class="btn btn-default  btn-rounded disabled">disabled</button>
                            <button class="btn  btn-default btn-outline disabled">disabled</button>
                            <button class="btn btn-default  btn-outline btn-rounded disabled">btn-disabled</button>
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
                        <h6 class="panel-title">Button with icons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add icon in <code>i tag</code> and text in <code>span tag</code>.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default btn-icon left-icon"> <i class="fa fa-bell"></i> <span>Default</span></button>

                            <button class="btn btn-info btn-outline btn-icon right-icon"><span>info</span><i class="fa fa-shopping-bag"></i></button>

                            <button class="btn btn-primary btn-rounded btn-icon left-icon"> <i class="fa fa-heart"></i> <span>primary</span></button>

                            <button class="btn btn-success btn-outline btn-icon right-icon"><span>success</span> <i class="fa fa-check"></i> </button>

                            <button class="btn btn-danger btn-lable-wrap left-label"> <span class="btn-label"><i class="fa fa-exclamation-triangle"></i> </span><span class="btn-text">danger</span></button>

                            <button class="btn btn-warning btn-rounded btn-lable-wrap right-label"><span class="btn-text">warning</span> <span class="btn-label"><i class="fa fa-times"></i> </span></button>
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
                        <h6 class="panel-title">block buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Use a class <code>btn-block</code> to quickly create a block btn.</p>
                        <div class="row mt-25">
                            <div class="col-sm-4 col-xs-12 mt-15">
                                <button class="btn btn-default btn-block">square block btn</button>
                            </div>

                            <div class="col-sm-4 col-xs-12 mt-15">
                                <button class="btn btn-info btn-rounded btn-block btn-anim"><i class="fas fa-pen-fancy"></i><span class="btn-text">rounded block btn</span></button>
                            </div>
                            <div class="col-sm-4 col-xs-12 mt-15">
                                <button class="btn btn-block  btn-primary btn-rounded"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                            <div class="col-sm-4 col-xs-12 mt-15">
                                <button class="btn btn-success btn-block btn-rounded btn-outline  btn-success">rounded outline block btn</button>
                            </div>
                            <div class="col-sm-4 col-xs-12 mt-15">
                                <button class="btn btn-warning btn-block btn-outline btn-anim"><i class="fas fa-pen-fancy"></i><span class="btn-text">square outline block btn</span></button>
                            </div>
                            <div class="col-sm-4 col-xs-12 mt-15">
                                <button class="btn btn-block  btn-danger btn-rounded btn-outline"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">dropdown and dropup buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add icon in <code>i tag</code> and add <code>dropup</code> class for dropup.</p>
                        <div class="button-list mt-25">
                            <div class="btn-group">
                                <div class="dropdown">
                                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle " type="button">Dropdown <span class="caret"></span></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div class="dropup">
                                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-danger dropdown-toggle " type="button">Dropup <span class="caret"></span></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div class="dropdown">
                                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default btn-outline dropdown-toggle " type="button"> <i class="fa fa-heart"></i> <span class="caret"></span></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div class="dropup">
                                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-warning dropdown-toggle " type="button"><i class="fa fa-heart"></i> <span class="caret"></span></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Upload with animation buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add icon in <code>i tag</code> and text in <code>span tag</code>.</p>
                        <div class="button-list mt-25">
                            <div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                <input type="file" class="upload">
                            </div>
                            <div class="fileupload btn btn-danger btn-rounded btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                <input type="file" class="upload">
                            </div>
                            <div class="fileupload btn btn-default btn-outline btn-rounded btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                <input type="file" class="upload">
                            </div>
                            <div class="fileupload btn btn-default btn-outline btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                <input type="file" class="upload">
                            </div>
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
                        <h6 class="panel-title">Buttons with animation</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add icon in <code>i tag</code> and text in <code>span tag</code>.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-warning btn-anim"><i class="fas fa-pen"></i><span class="btn-text">compose</span></button>

                            <button class="btn btn-default btn-anim"><i class="fas fa-shopping-cart"></i><span class="btn-text">add to cart</span></button>

                            <button class="btn btn-default btn-anim"><i class="far fa-heart"></i><span class="btn-text">add to wishlist</span></button>

                            <button class="btn btn-primary btn-anim"><i class="fas fa-sign-out-alt"></i><span class="btn-text">checkout</span></button>

                            <button class="btn btn-success btn-anim"><i class="fas fa-rocket"></i><span class="btn-text">submit</span></button>

                            <button class="btn btn-danger btn-anim"><i class="far fa-trash-alt"></i><span class="btn-text">delete</span></button>

                            <button class="btn btn-info btn-anim"><i class="fas fa-cloud-download-alt"></i><span class="btn-text">download</span></button>

                            <button class="btn btn-warning btn-anim"><i class="fas fa-cog"></i><span class="btn-text">setting</span></button>

                            <button class="btn btn-danger btn-anim"><i class="far fa-edit"></i><span class="btn-text">edit</span></button>

                            <button class="btn btn-primary btn-anim"><i class="far fa-thumbs-up"></i><span class="btn-text">like</span></button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">icons square buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add class <code>btn-square</code> for square button and for sizes add <code>btn-lg</code> and <code>btn-sm</code> classes.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default btn-icon-anim btn-square"><span class="overlay"></span><i class="fas fa-pen"></i></button>

                            <button class="btn btn-primary btn-icon-anim btn-square"><span class="overlay"></span><i class="far fa-thumbs-up"></i></button>

                            <button class="btn btn-danger btn-icon-anim btn-square"><span class="overlay"></span><i class="fas fa-cog"></i></button>

                            <button class="btn btn-success btn-icon-anim btn-square"><span class="overlay"></span><i class="far fa-heart"></i></button>

                            <button class="btn btn-info btn-icon-anim btn-square"><span class="overlay"></span><i class="far fa-trash-alt"></i></button>

                            <button class="btn btn-warning btn-icon-anim btn-square"><span class="overlay"></span><i class="fas fa-rocket"></i></button>
                        </div>

                        <div class="button-list">
                            <button class="btn btn-danger btn-icon-anim btn-square btn-lg"><span class="overlay"></span><i class="far fa-smile"></i></button>

                            <button class="btn btn-default btn-icon-anim btn-square"><span class="overlay"></span><i class="far fa-check-circle"></i></button>

                            <button class="btn btn-primary btn-icon-anim btn-square btn-sm"><span class="overlay"></span><i class="far fa-user"></i></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">icons circle buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add class <code>btn-circle</code> for circle button and for sizes add <code>btn-lg</code> and <code>btn-sm</code> classes.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default btn-icon-anim btn-circle"><span class="overlay"></span><i class="fas fa-pen"></i></button>

                            <button class="btn btn-primary btn-icon-anim btn-circle"><span class="overlay"></span><i class="far fa-thumbs-up"></i></button>

                            <button class="btn btn-danger btn-icon-anim btn-circle"><span class="overlay"></span><i class="fas fa-cog"></i></button>

                            <button class="btn btn-success btn-icon-anim btn-circle"><span class="overlay"></span><i class="far fa-heart"></i></button>

                            <button class="btn btn-info btn-icon-anim btn-circle"><span class="overlay"></span><i class="far fa-trash-alt"></i></button>

                            <button class="btn btn-warning btn-icon-anim btn-circle"><span class="overlay"></span><i class="fas fa-rocket"></i></button>
                        </div>

                        <div class="button-list">
                            <button class="btn btn-danger btn-icon-anim btn-circle btn-lg"><span class="overlay"></span><i class="far fa-smile"></i></button>

                            <button class="btn btn-default btn-icon-anim btn-circle"><span class="overlay"></span><i class="far fa-check-circle"></i></button>

                            <button class="btn btn-primary btn-icon-anim btn-circle btn-sm"><span class="overlay"></span><i class="far fa-user"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">social icons square buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add class <code>btn-square</code> and respective <code>social icon class</code> for square button and for sizes add <code>btn-lg</code> and <code>btn-sm</code> classes.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-facebook btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-facebook"></i></button>

                            <button class="btn btn-twitter btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-twitter"></i></button>

                            <button class="btn btn-googleplus btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-google-plus"></i></button>

                            <button class="btn btn-linkedin btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-linkedin"></i></button>

                            <button class="btn btn-instagram btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-instagram"></i></button>

                            <button class="btn btn-pinterest btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-pinterest"></i></button>

                            <button class="btn btn-dribbble btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-dribbble"></i></button>

                            <button class="btn btn-youtube btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-youtube"></i></button>

                            <button class="btn btn-dropbox btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-dropbox"></i></button>

                            <button class="btn btn-github btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-github"></i></button>

                            <button class="btn btn-skype   btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-skype"></i></button>

                            <button class="btn btn-tumblr   btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-tumblr"></i></button>

                            <button class="btn btn-flickr   btn-icon-anim btn-square"><span class="overlay"></span><i class="fab fa-flickr"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">social icons circle buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add class <code>btn-circle</code> and respective <code>social icon class</code> for circle button and for sizes add <code>btn-lg</code> and <code>btn-sm</code> classes.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-facebook btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-facebook"></i></button>

                            <button class="btn btn-twitter btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-twitter"></i></button>

                            <button class="btn btn-googleplus btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-google-plus"></i></button>

                            <button class="btn btn-linkedin btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-linkedin"></i></button>

                            <button class="btn btn-instagram btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-instagram"></i></button>

                            <button class="btn btn-pinterest btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-pinterest"></i></button>

                            <button class="btn btn-dribbble btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-dribbble"></i></button>

                            <button class="btn btn-youtube btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-youtube"></i></button>

                            <button class="btn btn-dropbox btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-dropbox"></i></button>

                            <button class="btn btn-github btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-github"></i></button>

                            <button class="btn btn-skype   btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-skype"></i></button>

                            <button class="btn btn-tumblr   btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-tumblr"></i></button>

                            <button class="btn btn-flickr   btn-icon-anim btn-circle"><span class="overlay"></span><i class="fab fa-flickr"></i></button>
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
                        <h6 class="panel-title">fancy buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add class <code>fancy-button btn-0</code> for button animation.</p>
                        <div class="button-list mt-25">
                            <button class="btn btn-default btn-outline fancy-button btn-0"><span class="overlay-0"></span>default</button>

                            <button class="btn btn-primary btn-outline fancy-button btn-0"><span class="overlay-0"></span>primary</button>

                            <button class="btn btn-success btn-outline fancy-button btn-0"><span class="overlay-0"></span>success</button>

                            <button class="btn btn-warning btn-outline fancy-button btn-0"><span class="overlay-0"></span>warning</button>

                            <button class="btn btn-danger btn-outline fancy-button btn-0"><span class="overlay-0"></span>danger</button>

                            <button class="btn btn-info btn-outline fancy-button btn-0"><span class="overlay-0"></span>info</button>
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
                        <h6 class="panel-title">group buttons</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Just add class <code>btn-group btn-group-vertical</code> for vertical group button.</p>
                        <div class="row">
                            <div class="col-sm-12 mt-15">
                                <div class="btn-group mt-15 mr-10">
                                    <button type="button" class="btn btn-default btn-outline">Left</button>
                                    <button type="button" class="btn btn-default btn-outline">Middle</button>
                                    <button type="button" class="btn btn-default btn-outline">Right</button>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-15">
                                <div class="btn-group btn-group-vertical">
                                    <button class="btn btn-default btn-outline">Left</button>
                                    <button class="btn btn-default btn-outline">Middle</button>
                                    <button class="btn btn-default btn-outline">Right</button>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-15">
                                <div class="btn-group btn-group-justified">
                                    <a class="btn btn-default btn-outline" role="button">Left</a> <a class="btn btn-default btn-outline" role="button">Middle</a> <a class="btn btn-default btn-outline" role="button">Right</a>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-15">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-outline">1</button>
                                    <button type="button" class="btn btn-info">2</button>
                                    <button type="button" class="btn btn-default btn-outline">3</button>
                                    <button type="button" class="btn btn-default btn-outline">4</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/plugin_UI_Elements.js') }}"></script>
    @endpush

@endsection
