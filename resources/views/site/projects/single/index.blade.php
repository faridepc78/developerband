@include('site.layouts.header')

<!-- Pages Banner Area -->
<section class="pages_banner pb_p pb_p_2">
    <div class="container">
        <h2>توسعه و طراحی پروژه های خلاقانه</h2>
    </div>
    <div class="banner_ai wow zoomIn">
                <img src="{{asset('assets/frontend/images/banner-lamp.png')}}" alt="" class="banner-lamp">
    </div>
    <div class="shap_style style_2"><span></span></div>
</section>
<!-- Pages Banner Area -->

<!-- Digital business Area -->
<section class="digital_business">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <h2><span>کسب و کار دیجیتال خلاق</span>، ایجاد تجارب دیجیتالی جذاب</h2>
                <p style="font-weight: bold;font-size: 30px;color: black" class="title_p text-center">{{$project->name}}</p>
            </div>

            <!-- <ul class="col-lg-4 socail">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul> -->

            <div class="col-lg-7 experiences_img">
                @foreach($project->gallery as $value)
                    <img src="{{$value->image->original}}" alt="{{$value->image->original}}">
                @endforeach
            </div>

            <div class="col-lg-5 experiences_text">
                <h3>توضیحات</h3>

                <p>{!! $project->text !!}</p>

                <ul class="experiences">
                    <li><b>مشتری</b>{{$project->customer}}</li>
                    <li><b>تاریخ</b>{{convertToJalaliDate($project->delivery_date)}}</li>
                    <li><b>دسته بندی</b>{{$project->category->name}}</li>
                    <li><b>لینک</b><a target="_blank" href="{{$project->link}}">{{$project->link}}</a></li>
                </ul>
            </div>
            <!-- <div class="col-12 pn_post">
                <a href="portfolio-single.html">پروژه بعدی</a>
                <a href="portfolio-single.html">پروژه قبلی</a>
            </div> -->
        </div>
    </div>
</section>
<!-- Digital business Area -->

@include('site.layouts.footer')
