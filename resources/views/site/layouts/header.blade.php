<!DOCTYPE html>
<html lang="fa">
<head>

    {!! SEO::generate() !!}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description"
          content="developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند">
    <meta name="keywords"
          content="developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند">
    <meta name="author" content="info@developerband.ir">
    <meta http-equiv="content-language" content="Fa">
    <meta name="robots" content="index,follow"/>
    <meta property="og:site_name" content="developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند">
    <meta property="og:title" content="developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند">
    <meta property="og:description"
          content="developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/common/images/logo/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/common/images/logo/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/common/images/logo/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/common/images/logo/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/common/images/logo/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/common/images/logo/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/common/images/logo/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/common/images/logo/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/common/images/logo/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{asset('assets/common/images/logo/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/common/images/logo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/common/images/logo/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/common/images/logo/favicon-16x16.png')}}">
    <link rel="icon" href="{{asset('assets/common/images/logo/favicon.ico')}}" type="image/x-icon">
    <link rel="manifest" href="{{asset('assets/common/images/logo/manifest.json')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/common/plugins/validation/css/validate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/common/plugins/toast/css/toast.min.css')}}">

    @yield('site_css')
</head>

<body>

<!-- Header Area -->
<header class="main_header_area">
    <nav class="navbar navbar-expand-lg">
        <div class="navbar-brand">
            <a class="logo" href="{{route('home')}}"><img width="200"
                                                          src="{{asset('assets/frontend/images/DEVELOPERBAND.png')}}"
                                                          alt=""></a>
        </div>
        <!-- Small Divice Menu-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"
                aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <!-- right Nav bar -->
        <div class="collapse navbar-collapse navbar_supported">
            <ul class="header_social">

                @include('common.social media')

            </ul>
            <ul class="navbar-nav">

                <li>
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}"
                       role="button">صفحه اصلی</a>
                </li>

                <li>
                    <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}"
                       href="{{route('projects')}}" role="button">نمونه کارها</a>
                </li>

                <li><a class="nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}"
                       href="{{route('contact-us')}}">تماس باما</a></li>

                <li>
                    <a class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}"
                       href="{{route('about-us')}}">درباره ما</a>
                </li>

                <!-- <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">گالری</a>
                    <ul class="dropdown-menu text-right">
                        <li><a href="portfolio.html">گالری 1</a></li>
                        <li><a href="portfolio-2.html">گالری 2</a></li>
                        <li><a href="portfolio-3.html">گالری 3</a></li>
                        <li><a href="portfolio-4.html">گالری 4</a></li>
                        <li><a href="portfolio-single.html">گالری 5</a></li>
                        <li><a href="portfolio-single-2.html">گالری 6</a></li>
                    </ul>
                </li>         -->
                <!-- <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">صفحات</a>
                    <ul class="dropdown-menu text-right">
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">درباره ما</a>
                            <ul class="dropdown-menu text-right">
                                <li><a href="about.html">درباره ما 1</a></li>
                                <li><a href="about-2.html">درباره ما 2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">فروشگاه</a>
                            <ul class="dropdown-menu text-right">
                                <li><a href="shop.html">فروشگاه</a></li>
                                <li><a href="shop-single.html">جزئیات محصول</a></li>
                            </ul>
                        </li>
                        <li><a href="team.html">تیم ما</a></li>
                        <li><a href="review.html">رویداد</a></li>
                        <li><a href="error.html">صفحه 404</a></li>
                        <li><a href="coming-soon.html">صفحه به زودی</a></li>
                    </ul>
                </li>      -->
                <!-- <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">وبلاگ</a>
                    <ul class="dropdown-menu text-right">
                        <li><a href="blog.html">وبلاگ</a></li>
                        <li><a href="blog-single.html">صفحه ادامه مطالب</a></li>
                    </ul>
                </li>  -->

            </ul>
        </div>
        <!-- left Nav bar -->
        <ul class="left_nav">
            <!-- <li class="dropdown cart_d">
                <a class="nav-link dropdown-toggle cart" href="#" role="button" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i></a>
                <ul class="dropdown-menu cart_dopdown">
                    <li>سبد خرید خالی است.</li>
                </ul>
            </li>
            <li class="dropdown search_dropbown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-search"></i></a>
                <ul class="dropdown-menu">
                    <li>
                        <input type="text" placeholder="جستجو..">
                        <span><i class="fa fa-search"></i></span>
                    </li>
                </ul>
            </li> -->

            @auth()
                @if (auth()->user()->role==\App\Models\User::ADMIN)
                    <li><a href="{{route('dashboard')}}" class="theme_btn" target="_blank">پنل مدیریت</a></li>
                @endif
            @endauth

        </ul>
    </nav>
</header>
<!-- Header Area -->
