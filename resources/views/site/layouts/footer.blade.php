<!-- Footer Area -->
<footer class="footer_area">
    <div class="container">
        <div class="footer_inner row">
            <div class="col-xl-7 col-lg-6 col-md-6 footer_address wow fadeIn">
                <address>

                    @if (!empty($settings['phone']))
                        <a href="tel:{{$settings['phone']}}" class="number">{{$settings['phone']}}</a>
                    @endif

                    @if (!empty($settings['mobile1']))
                        <a href="tel:{{$settings['mobile1']}}" class="number">{{$settings['mobile1']}}</a>
                    @endif

                    @if (!empty($settings['mobile2']))
                        <a href="tel:{{$settings['mobile2']}}" class="number">{{$settings['mobile2']}}</a>
                    @endif

                    @if (!empty($settings['email']))
                        <a href="mailto:{{$settings['email']}}">{{$settings['email']}}</a>
                    @endif

                    <br>

                    @if (!empty($settings['address']))
                        <p style="font-weight: bold;">{{$settings['address']}}</p>
                    @endif

                </address>
                <ul class="footer_social">

                    @include('common.social media')

                </ul>
            </div>
            <div class="footer_widget col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <h4>DEVELOPERBAND</h4>
                <ul class="footer_nav">
                    <li><a href="{{route('home')}}">صفحه اصلی</a></li>
                    <li><a href="{{route('projects')}}">نمونه کارها</a></li>
                    <li><a href="{{route('contact-us')}}">تماس با ما</a></li>
                    <li><a href="{{route('about-us')}}">درباره ما</a></li>
                </ul>
            </div>

        </div>
        <div class="row copy_right">
            <!-- <div class="col-xl-4 col-md-6 wow zoomIn">
                <ul class="mobile_icon">
                    <li>اپلیکیشن های موبایل :</li>
                    <li><a href="#"><i class="fab fa-apple"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-play"></i></a></li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 wow slideInleft">
                <ul class="footer_nav">
                    <li><a href="#">حریم خصوصی و امنیت</a></li>
                    <li><a href="#">پشتیبانی مشتری</a></li>
                    <li><a href="#">شغل </a></li>
                </ul>
            </div> -->
            <div class="col-xl-4 order-xl-first  wow slideInright">
                <p><img width="70" src="{{asset('assets/common/images/ICON DEVELOPERBAND.png')}}" alt="">developerBand
                    | دولوپربند</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Scroll Top Button -->
<button class="scroll-top">
    <i class="fa fa-angle-double-up"></i>
</button>

<!-- Preloader -->
<div class="preloader"></div>

<script type="text/javascript" src="{{asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/vendors/animate-css/wow.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('assets/frontend/vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/theme.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/common/plugins/validation/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/common/plugins/validation/js/methods.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/common/plugins/toast/js/toast.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/common/plugins/toast/js/toast-options.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/common/js/public.js')}}"></script>
<script type="text/javascript">@include('common.feedbacks')</script>

@yield('site_js')

</body>

</html>
