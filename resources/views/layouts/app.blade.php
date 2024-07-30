<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Aero Bootstrap4 Admin :: Product list</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}">
    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets/images/loader.svg')}}" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
{{--<div id="search">--}}
{{--    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>--}}
{{--    <form>--}}
{{--        <input type="search" value="" placeholder="Search..." />--}}
{{--        <button type="submit" class="btn btn-primary">Search</button>--}}
{{--    </form>--}}
{{--</div>--}}


<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="/"><img src="{{asset('assets/images/logo1.png')}}" width="35" alt="Lunodar"><span class="m-l-10">Lunodar</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="/"><img src="{{asset('assets/images/moon.png')}}" alt="User"></a>
                    <div class="detail">
                        <h4>Админикус</h4>
                        <small>Admin</small>
                    </div>
                </div>
            </li>
            <li><a href="/lunar-day/list"><i class="zmdi zmdi-calendar-check"></i><span>Лунные дни</span></a></li>
            <li><a href="/lunar-phase/list"><i class="zmdi zmdi-brightness-3"></i><span>Фазы Луны</span></a></li>
            <li><a href="/lunar-zodiac/list"><i style="font-size: 20px !important;" class="zmdi zmdi-star"></i><span>Знаки зодиака</span></a></li>
            <li><a href="/lunar-activity-field/list"><i class="zmdi zmdi-thumb-up-down"></i><span>Сферы деятельности</span></a></li>
            <li><a href="/lunar-day-interpretation/list" class="menu-toggle"><i class="zmdi zmdi-receipt"></i><span>Интерпретации</span></a>
            <li><a href="/author/list" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>Астрологи</span></a></li>
{{--            <li><a href="{{ route('logout') }}" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>Выход</span></a></li>--}}
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="zmdi zmdi-sign-in"></i><span>Выход</span>
                </a>
            </li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</aside>

@yield('content')

<!-- Jquery Core Js -->
{{--<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->--}}
{{--<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->--}}

{{--<script src="assets/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->--}}

{{--<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->--}}
{{--<script src="assets/js/pages/tables/footable.js"></script><!-- Custom Js -->--}}



<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->



<script src="{{asset('assets/bundles/footable.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->
<script src="{{asset('assets/js/pages/tables/footable.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/summernote/dist/summernote.js')}}"></script>

{{--<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>--}}
<script src="{{asset('assets/js/pages/index.js')}}"></script>

</body>


</html>
