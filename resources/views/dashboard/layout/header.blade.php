<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 23-May-19
 * Time: 13:11
 */?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ $pageTitle }}</title>
        <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/slick.css') }}" />
        <link rel="stylesheet" href="{{ url('css/slick-theme.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
        @stack('css')
        <link rel="stylesheet" href="{{ url('css/media.css') }}" />
        <link rel="icon" href="{{ url('images/H.jpg') }}" />
    </head>
    <body>
