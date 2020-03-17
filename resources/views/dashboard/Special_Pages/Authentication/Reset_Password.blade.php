<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 28-Aug-19
 * Time: 14:03
 */?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Reset Password</title>
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
        <h3 class="text-center">Reset Password</h3>
        <div class="form-group">
            <label class="control-label mb-10" for="email_de">Old Password</label>
            <input type="password" class="form-control" id="email_de" placeholder="Enter Pwd">
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="email_de">New Password</label>
            <input type="password" class="form-control" id="email_de" placeholder="Enter New Pwd">
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="email_de">Confirm Password</label>
            <input type="password" class="form-control" id="email_de" placeholder="Re-Enter Pwd">
        </div>
        <div class="form-group text-center mb-0">
            <button type="button" class="btn btn-info btn-anim btn-rounded"><i class="icon-rocket"></i><span class="btn-text">Reset</span></button>
        </div>
    </form>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/plugin_Forms.js') }}"></script>
    </body>
</html>
