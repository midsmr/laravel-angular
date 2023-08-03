@props(['title', 'mainTitle', 'description', 'keywords'])
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title>{{ $title }} | {{ $mainTitle }}</title>
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="description" content="{{ $description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset('vendor/angular/css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('vendor/angular/css/font-awesome.min.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('vendor/angular/css/simple-line-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('vendor/angular/css/bootstrap.min.css') }}" type="text/css"/>

    <link rel="stylesheet" href="{{ asset('vendor/angular/css/font.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('vendor/angular/css/app.min.css') }}" type="text/css"/>

    {{ $style }}
</head>
<body>
<div class="app app-header-fixed ">
    <div class="container w-xxl w-auto-xs">
        <a href class="navbar-brand block m-t">{{ $mainTitle }}</a>
        <div class="m-b-lg">
            <div class="wrapper text-center">
                <strong>{{ $title }}</strong>
            </div>
            <form name="form" class="form-validation">
                <div class="text-danger wrapper text-center"></div>
                {{ $slot }}
            </form>
        </div>
        {{ $footer }}
    </div>
</div>

<script src="{{ asset('vendor/angular/js/jquery.js') }}"></script>
<script src="{{ asset('vendor/angular/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-load.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-jp.config.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-jp.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-nav.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-toggle.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-client.js') }}"></script>
{{ $scripts }}
</body>
</html>
