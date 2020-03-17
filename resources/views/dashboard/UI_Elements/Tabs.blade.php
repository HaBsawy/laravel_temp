<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 31-May-19
 * Time: 00:38
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    @endpush

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default square pills</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Default version of tab add only <code>pills-struct</code> class and add <code>nav-pills</code> class with nav class.</p>
                        <div class="pills-struct mt-40">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#" data-tab=".tab1">active</a>
                                </li>
                                <li>
                                    <a href="#" data-tab=".tab2">inactive</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Vertical square pills </h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add <code>vertical-pills</code> class with pills-struct class and add <code>nav-pills ver-nav-pills</code> class with nav class.</p>
                        <div class="pills-struct vertical-pills mt-40">
                            <ul class="nav nav-pills ver-nav-pills">
                                <li class="active">
                                    <a href="#" data-tab=".tab1">active</a>
                                </li>
                                <li>
                                    <a href="#" data-tab=".tab2">inactive</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" data-tab=".tab3">@fat</a></li>
                                        <li><a class="dropdown-item" href="#" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_10">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default icon pills</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Default version of tab add only <code>pills-struct</code> class and add <code>nav-pills</code> class with nav class.</p>
                        <div class="pills-struct mt-40">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#" data-tab=".tab1"><i class="far fa-user"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-tab=".tab2"><i class="far fa-envelope"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fas fa-cog"></i> <span class="caret"></span></a>
                                    <ul id="myTabDrop_9_contents" class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_9">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Vertical icon pills </h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add <code>vertical-pills</code> class with pills-struct class and add <code>nav-pills ver-nav-pills</code> class with nav class.</p>
                        <div class="pills-struct vertical-pills mt-40">
                            <ul role="tablist" class="nav nav-pills ver-nav-pills" id="myTabs_100">
                                <li class="active">
                                    <a href="#" data-tab=".tab1"><i class="far fa-user"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-tab=".tab2"><i class="far fa-envelope"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fas fa-cog"></i> <span class="caret"></span></a>
                                    <ul id="myTabDrop_100_contents" class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">custom Tab</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Default version of tab add <code>tab-struct custom-tab-1</code> class.</p>
                        <div class="tab-struct custom-tab-1 mt-40">
                            <ul class="nav nav-tabs2">
                                <li class="active">
                                    <a href="#" data-tab=".tab1">active</a>
                                </li>
                                <li>
                                    <a href="#" data-tab=".tab2">inactive</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_7">
                                <div class="tab-pane active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Vertical custom Tab</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Default version of tab add <code>tab-struct vertical-tab custom-tab-1</code> class.</p>
                        <div class="tab-struct vertical-tab custom-tab-1 mt-40">
                            <ul role="tablist" class="nav nav-tabs2 ver-nav-tab" id="myTabs_8" style="min-height: 170px;">
                                <li class="active"><a href="#" data-tab=".tab1">active</a></li>
                                <li><a href="#" data-tab=".tab2">inactive</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" data-tab=".tab3" href="#">@fat</a></li>
                                        <li><a class="dropdown-item" data-tab=".tab4" href="#">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default rounded pills</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add only <code>nav-pills-rounded </code> with nav-pills class.</p>
                        <div class="pills-struct mt-40">
                            <ul class="nav nav-pills nav-pills-rounded">
                                <li class="active"><a href="#" data-tab=".tab1">active</a></li>
                                <li><a href="#" data-tab=".tab2">inactive</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_11">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default outline pills</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add only <code>nav-pills-outline </code> with nav-pills class.</p>
                        <div class="pills-struct mt-40">
                            <ul class="nav nav-pills nav-pills-outline">
                                <li class="active"><a href="#" data-tab=".tab1">active</a></li>
                                <li><a href="#" data-tab=".tab2">inactive</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Default rounded outline pills</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add <code>nav-pills-outline nav-pills-rounded</code> with nav-pills class.</p>
                        <div class="pills-struct mt-40">
                            <ul class="nav nav-pills nav-pills-outline nav-pills-rounded">
                                <li class="active"><a href="#" data-tab=".tab1">active</a></li>
                                <li><a href="#" data-tab=".tab2">inactive</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_13">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">icon pills</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Add icon class in i tag.</p>
                        <div class="pills-struct mt-40">
                            <ul class="nav nav-pills nav-pills-outline nav-pills-rounded">
                                <li class="active"><a href="#" data-tab=".tab1"><i class="far fa-user"></i></a></li>
                                <li><a href="#" data-tab=".tab2"><i class="fas fa-th"></i></a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fas fa-bookmark"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_14">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Custom Tab 2</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Default version of tab add <code>tab-struct custom-tab-2</code> class.</p>
                        <div class="tab-struct custom-tab-2 mt-40">
                            <ul class="nav nav-tabs2">
                                <li class="active"><a href="#" data-tab=".tab1">active</a></li>
                                <li><a href="#" data-tab=".tab2">inactive</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_15">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Reverse custom tab 2</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <p class="text-muted">Default version of tab add <code>tab-struct nav-tab-reverse custom-tab-2</code> class.</p>
                        <div class="tab-struct nav-tab-reverse custom-tab-2 mt-40">
                            <ul class="nav nav-tabs2">
                                <li class="active"><a href="#" data-tab=".tab1">active</a></li>
                                <li><a href="#" data-tab=".tab2">inactive</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item" data-tab=".tab3">@fat</a></li>
                                        <li><a href="#" class="dropdown-item" data-tab=".tab4">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_16">
                                <div class="tab-pane fade active in tab1">
                                    <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                </div>
                                <div class="tab-pane fade tab2">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                </div>
                                <div class="tab-pane fade tab3">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div class="tab-pane fade tab4">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
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
