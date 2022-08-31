@props(['title', 'mainTitle'])
    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <title>{{ $title }} | {{ $mainTitle }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
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
    <header id="header" class="app-header navbar" role="menu">
        <!-- navbar header -->
        <div class="navbar-header bg-dark">
            <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
                <i class="glyphicon glyphicon-cog"></i>
            </button>
            <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
                <i class="glyphicon glyphicon-align-justify"></i>
            </button>
            <!-- brand -->
            <a href="javascript:void(0);" class="navbar-brand text-lt">
                <i class="fa fa-btc"></i>
                <span class="hidden-folded m-l-xs">{{ $mainTitle }}</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- / navbar header -->

        <!-- navbar collapse -->
        <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
            <!-- buttons -->
            <div class="nav navbar-nav hidden-xs">
                <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
                    <i class="fa fa-dedent fa-fw text"></i>
                    <i class="fa fa-indent fa-fw text-active"></i>
                </a>

            </div>
            <!-- / buttons -->

            {{ $dropdwon }}
        </div>
        <!-- / navbar collapse -->
    </header>
    <!-- / header -->


    <!-- aside -->
    {{ $aside }}
    <!-- / aside -->


    <!-- content -->
    {{ $slot }}
    <!-- /content -->

    <!-- footer -->
    {{ $footer }}
    <!-- / footer -->


</div>

<script src="{{ asset('vendor/angular/js/jquery.js') }}"></script>
<script src="{{ asset('vendor/angular/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-load.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-jp.config.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-jp.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-nav.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-toggle.js') }}"></script>
<script src="{{ asset('vendor/angular/js/ui-client.js') }}"></script>
{{ $scripts }}
</body>
</html>
