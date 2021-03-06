<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 27-Aug-19
 * Time: 15:35
 */?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Sign Up</title>
        <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Authentication.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
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
            <p>
                Already have an account?
                <a href="{{ route('Login') }}">
                    <button class="btn  btn-info btn-outline btn-rounded">Sign In</button>
                </a>
            </p>
        </div>
    </nav>

    <form>
        <h3 class="text-center">Sign up to Magilla</h3>
        <h6 class="text-center">Enter your details below</h6>
        <div class="form-group">
            <label class="control-label mb-10" for="email_de">Username</label>
            <input type="email" class="form-control" id="email_de" placeholder="Username">
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="email_de">Email Address</label>
            <input type="email" class="form-control" id="email_de" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="pwd_de">Password</label>
            <input type="password" class="form-control" id="pwd_de" placeholder="Enter Pwd">
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="pwd_de">Confirm Password</label>
            <input type="password" class="form-control" id="pwd_de" placeholder="Enter Pwd">
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-primary">
                <input id="checkbox_de" type="checkbox">
                <div class="checkbox-container primary"></div>
                <label for="checkbox_de">
                    I agree to all <span class="text-primary">Terms</span>
                </label>
            </div>
        </div>
        <div class="form-group text-center mb-0">
            <button type="button" class="btn btn-info btn-anim btn-rounded"><i class="icon-rocket"></i><span class="btn-text">Sign Up</span></button>
        </div>
    </form>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/plugin_Forms.js') }}"></script>
    <script>
    $(document).ready(function () {
    "use strict";

    $("form").each(function () {
    $(this).css("marginTop", ($(window).innerHeight() - $("nav").innerHeight() - $(this).innerHeight())/2 )
    });

    });
    </script>
    </body>
</html>
