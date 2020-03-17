<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 29-Aug-19
 * Time: 12:08
 */?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>500</title>
    <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
    <link rel="stylesheet" href="{{ url('css/style_Errors.css') }}" />
    <link rel="stylesheet" href="{{ url('css/media.css') }}" />
    <link rel="icon" href="{{ url('images/H.jpg') }}" />
</head>
<body>

<nav>
    <div class="left-side">
        <h2 class="logo">
            <img src="{{ url('images/logo.png') }}" alt="logo" >
            Magilla
        </h2>
    </div>

    <div class="right-side">
        <a href="#">
            <button class="btn  btn-info btn-outline btn-rounded">Back to Home</button>
        </a>
    </div>
</nav>

<section class="error">
    <h2 class="error-type text-info text-center">500</h2>
    <h2 class="error-heading text-center">Oops! Internal Server Error</h2>
    <h6 class="error-msg text-center">There was an Error. Please try again later. That's all we know.</h6>
</section>

<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/popper.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
</body>
</html>
