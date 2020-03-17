<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 28-Aug-19
 * Time: 14:08
 */?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Lock Screen</title>
        <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Authentication.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
        <link rel="stylesheet" href="{{ url('css/media.css') }}" />
        <link rel="icon" href="{{ url('images/H.jpg') }}" />
    </head>
    <body>

    <form>
        <h2 class="logo text-center">
            <img src="{{ url('images/logo.png') }}" alt="logo" >
            Magilla
        </h2>
        <div class="text-center">
            <img class="rounded-circle user" src="{{ url('images/user1.png') }}">
        </div>
        <h3 class="text-center">Valerie Doe</h3>
        <div class="form-group">
            <input type="password" class="form-control" id="email_de" placeholder="Password">
        </div>
        <div class="form-group text-center mb-0">
            <button type="button" class="btn btn-info btn-anim btn-rounded"><i class="icon-rocket"></i><span class="btn-text">Enter</span></button>
        </div>
    </form>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/plugin_Forms.js') }}"></script>
    </body>
</html>
