<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 23-May-19
 * Time: 13:08
 */

    if(!isset($active)) {
        $active = 'dashboard';
    }

    if(!isset($pageTitle)) {
        $pageTitle = 'Dashboard';
    }
?>

@include('dashboard.layout.header')

@include('dashboard.layout.sideBar')

<!-- Start Content -->

<section class="content">

@include('dashboard.layout.navBar')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h5>{{ $pageTitle }}</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a> > </li>
                        <li><a href="#"><span>{{ $active }}</span></a> > </li>
                        <li class="active"><span>{{ $pageTitle }}</span></li>
                    </ol>
                </div>
            </div>
        </div>

        @yield('content')

        <footer>
            <span>2019 © Magilla. Pampered by Hencework</span>
        </footer>
    </div>

</section>

<!-- End Content -->

@include('dashboard.layout.footer')
