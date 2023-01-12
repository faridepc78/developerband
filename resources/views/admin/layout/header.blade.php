<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    @yield('admin_title')

    <link type="text/css" rel="stylesheet" href="{{asset('assets/backend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/backend/css/adminlte.min.css')}}">
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/backend/css/bootstrap-rtl.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/backend/css/custom-style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/common/plugins/toast/css/toast.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/common/plugins/validation/css/validate.css')}}">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/common/images/logo/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/common/images/logo/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/common/images/logo/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/common/images/logo/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/common/images/logo/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/common/images/logo/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/common/images/logo/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/common/images/logo/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/common/images/logo/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/common/images/logo/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/common/images/logo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/common/images/logo/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/common/images/logo/favicon-16x16.png')}}">
    <link rel="icon" href="{{asset('assets/common/images/logo/favicon.ico')}}" type="image/x-icon">
    <link rel="manifest" href="{{asset('assets/common/images/logo/manifest.json')}}">

    @yield('admin_css')

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge badge-warning navbar-badge">{{$unread_contacts}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">

                    <span class="dropdown-item dropdown-header">{{$unread_contacts}} نوتیفیکیشن</span>

                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope ml-2"></i> {{$unread_contacts}} تماس خوانده نشده
                    </a>

{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fa fa-users ml-2"></i> ۸ درخواست دوستی--}}
{{--                        <span class="float-left text-muted text-sm">۱۲ ساعت</span>--}}
{{--                    </a>--}}

{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fa fa-file ml-2"></i> ۳ گزارش جدید--}}
{{--                        <span class="float-left text-muted text-sm">۲ روز</span>--}}
{{--                    </a>--}}

                </div>
            </li>

            <li class="nav-item">
                <a title="خروج" class="nav-link text-danger" href="{{route('logout')}}"><i
                        class="fa fa-sign-out"></i></a>
            </li>
        </ul>
    </nav>
