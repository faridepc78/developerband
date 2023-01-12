@section('site_title')
    <title>404 | DeveloperBand | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند</title>
@endsection

@include('site.layouts.header')

<!-- Error Area -->
<section class="error_area bg_s">
    <div class="container">
        <img src="{{asset('assets/frontend/images/shap/error.png')}}" alt="" class="up_animat">
        <h4>صفحه مورد نظر شما پیدا نشد</h4>
        <a href="{{route('home')}}" class="theme_btn">بازگشت به صفحه اصلی</a>
        <br><br><br><br><br><br>
    </div>
</section>
<!-- Error Area -->


@include('site.layouts.footer')
