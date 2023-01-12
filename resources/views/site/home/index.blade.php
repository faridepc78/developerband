@include('site.layouts.header')

<!-- Banner Area -->
<section class="banner_area">
    <div class="shap_style wow zoomIn"><span></span></div>
    <div class="container">
        <h2 class="wow fadeInUp">دولوپربند (developerband)</h2>
        <p class="wow fadeInUp" data-wow-delay="0.3s">تیم توسعه حرفه ای</p>
        <ul class="nav strategy_tab wow fadeInUp" data-wow-delay="0.6s">
            <li><a class="active" data-toggle="tab" href="javascript:void(0)"> طراحی و توسعه اختصاصی وبسایت</a></li>
            <li><a data-toggle="tab" href="javascript:void(0)">طراحی و توسعه اپلیکیشن موبایل</a></li>
            <li><a data-toggle="tab" href="javascript:void(0)">طراحی و توسعه سرویس های مبتنی بر وب</a></li>
            <li><a data-toggle="tab" href="javascript:void(0)">طراحی و توسعه وبسایت وردپرسی</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="marketing" role="tabpanel">
                <img src="{{asset('assets/frontend/images/lamp.png')}}" alt="" class="images_1 wow slideInUp">
                <img src="{{asset('assets/frontend/images/strategy.png')}}" alt="" class="wow zoomIn">
                <figure class="wow slideInleft"><img src="{{asset('assets/frontend/images/man.png')}}" alt=""
                                                     class="images_2"></figure>
            </div>
            <div class="tab-pane fade" id="design" role="tabpanel">
                <img src="{{asset('assets/frontend/images/lamp.png')}}" alt="" class="images_1">
                <img src="{{asset('assets/frontend/images/strategy.png')}}" alt="">
                <figure><img src="{{asset('assets/frontend/images/man.png')}}" alt="" class="images_2"></figure>
            </div>
            <div class="tab-pane fade" id="development" role="tabpanel">
                <img src="{{asset('assets/frontend/images/lamp.png')}}" alt="" class="images_1">
                <img src="{{asset('assets/frontend/images/strategy.png')}}" alt="">
                <figure><img src="{{asset('assets/frontend/images/man.png')}}" alt="" class="images_2"></figure>
            </div>
        </div>
    </div>
    <div class="shap_style style_2"><span></span></div>
</section>
<!-- Banner Area -->

<!-- Services Area -->
<section class="services_area">
    <div class="shap_style ss_2 wow zoomIn"><span></span></div>
    <div class="container">
        <div class="tittle">
            <h4>ویژگی های</h4>
            <h2>تیم توسعه دولوپربند (developerband)</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="services_items">
                    <div class="icons">
                        <img src="{{asset('assets/frontend/images/icons/services-icons-1.png')}}" alt="">
                        <span></span>
                    </div>
                    <a href="javascript:void(0)">سرعت توسعه بالا</a>
                    <p>تیم ما متشکل از توسعه دهنده های حرفه ای با سابقه چندین ساله در سریع ترین زمان ممکن کار توسعه
                        را انجام می دهند.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="services_items">
                    <div class="icons">
                        <img src="{{asset('assets/frontend/images/icons/services-icons-2.png')}}" alt="" class="icon_2">
                        <span></span>
                    </div>
                    <a href="javascript:void(0)">تکنولوژی های به روز</a>
                    <p>
                        ما معتقدیم استفاده از تکنولوژی های به روز لازمه هر کسب و کار به خصوص حوزه برنامه نویسی و
                        توسعه می باشد.

                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="services_items">
                    <div class="icons">
                        <img src="{{asset('assets/frontend/images/icons/services-icons-3.png')}}" alt="" class="icon_3">
                        <span></span>
                    </div>
                    <a href="javascript:void(0)">کیفیت بالا</a>
                    <p>
                        تیم دولوپربند ارائه کار با کیفیت را به عنوان یک اصل در کار خود می داند. ما با داشتن تیم حرفه
                        ای کیفیت را تضمین می دهیم</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Area -->

<!-- About agency -->
<section class="about_agency">
    <div class="shap_bg">
        <img src="{{asset('assets/frontend/images/shap/skye-shap-1.png')}}" alt="">
    </div>
    <div class="container">
        <div class="tittle">
            <h4>درباره دولوپربند (developerband)</h4>
            <h2>چرا سرویس ها و خدمات ما را انتخاب کنید؟</h2>
            <!-- <h5>استدیو آژانس <i>خبری</i></h5> -->
        </div>
        <div class="row">
            <div class="col-lg-4 wow zoomIn">
                <img src="{{asset('assets/frontend/images/studio.png')}}" alt="" class="up_animat">
            </div>
            <div class="col-lg-5 studios_text">
                <h6 class="wow fadeInUp">
                    تیم جوان و پویای ما با سابقه چندین ساله در حوزه پیاده سازی و توسعه برنامه نویسی توانایی پیاده
                    سازی همه نیازهای کسب و کار و استارت آپ شما را دارد.
                </h6>

                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    تیم اصلی ما با سابقه چندین ساله در حوزه برنامه نویسی نیروهای جوان را به کار میگیرد و آن ها را
                    رهبری می کند...
                </p>
                <a href="{{route('about-us')}}" class="theme_btn wow fadeInUp" data-wow-delay="0.4s">دریافت اطلاعات
                    بیشتر <i
                        class="fa fa-caret-left"></i></a>
            </div>
        </div>
    </div>
    <img src="{{asset('assets/frontend/images/about_bg.png')}}" alt="" class="about_bg wow zoomIn up_animat">
</section>
<!-- About agency -->

<!-- Introducing Area -->
<section class="introducing_area">
    <div class="container">
        <div class="tittle">
            <h4>آثار منتخب ما </h4>
            <h2>معرفی کار ما</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 wow zoomIn introducing_img">
                <img src="{{asset('assets/frontend/images/Introducing-3.png')}}" alt="" class="up_animat">
            </div>
            <div class="col-lg-6 introducing">
                <h2>نمونه کارهای <br>داخلی و بین المللی<br> تیم ما </h2>
                <p class="bold_p">
                    در ادامه نمونه هایی از سایت ها و اپلیکیشن های طراحی شده ما را مشاهده می کنید. </p>
                <p>
                    برای ما افتخار بزرگی است که بتوانیم با برطرف نمودن تمام نیازهای آنلاین شما به بهترین نحو ممکن،
                    در خدمت شما باشیم.


                </p>
                <a href="{{route('projects')}}" class="theme_btn">مشاهده همه کارها</a>
            </div>
        </div>
    </div>
    <figure class="wow zoomIn"><img src="{{asset('assets/frontend/images/shap/skye-shap-2.png')}}" alt=""></figure>
    <div class="shap_style ss_2 wow zoomIn"><span></span></div>
</section>
<!-- Introducing Area -->
<!-- Images Area -->
<section class="row images_area">

    @foreach($projects as $project)

        <div class="col-lg-4 col-md-6 wow fadeIn">
            <div class="images_por">
                <div class="img">
                    <img src="{{$project->image->original}}" alt="{{$project->name}}">
                </div>
                <a target="_blank" href="{{$project->path()}}"><i class="fa fa-arrow-left"></i></a>
            </div>
        </div>

    @endforeach

</section>
<!-- Images Area -->
<!-- Digital Agency -->
<section class="digital_agency">
    <div class="container tittle">
        <div class="ball"><span></span></div>
        <h2>ما یک تیم خلاق و حزفه ای طراحی وب هستیم</h2>
        <p>
            ما ادعا می کنیم خاص ترین شرکت طراحی سایت و اپلیکیشن در ایران هستیم و برای این ادعای خود دلایل بسیاری
            داریم . نیروی انسانی جوان و متخصص ، تجربه کاری در
            تمامی عرصه های وب ، همکاری با سایت های بزرگ ایران ، ثبات در زمینه فعالیت تخصصی طراحی سایت ، طراحی و
            برنامه نویسی کاملا اختصاصی بر حسب نیاز مشتری ، سیستم هایی با ضریب امنیت بسیار بالا و پایدار ، رعایت
            متدهای طراحی گرافیکی و تجربه کاربری ، به
            کارگیری جدیدترین متدهای برنامه نویسی ، از خاص ترین مزایای شرکت ما می باشد .
        </p>
    </div>
    <div class="agency_count">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="watch">
                        <!-- <h4>ویدئو مارا ببینید </h4> -->
                        <!-- <div class="zoomIn wow">
                            <a class="popup-youtube video_area animated"
                                href="https://player.vimeo.com/video/142874198"><i
                                    class="flaticon-play-button-1"></i></a>
                        </div> -->
                    </div>
                </div>

                <div class="col-xl-6 countarup_area">

                    @if (!empty($settings['projects_count']))
                        <div class="counter_item wow zoomIn">
                            <h4>پروژه ها</h4>
                            <h2><span class="counter">{{$settings['projects_count']}}</span></h2>
                        </div>
                    @endif

                    @if (!empty($settings['customers_count']))
                        <div class="counter_item wow zoomIn" data-wow-delay="0.2s">
                            <h4>مشتریان</h4>
                            <h2 class="counter">{{$settings['customers_count']}}</h2>
                        </div>
                    @endif

                    @if (!empty($settings['team_count']))
                        <div class="counter_item wow zoomIn" data-wow-delay="0.4s">
                            <h4>اعضای تیم</h4>
                            <h2><span class="counter">{{$settings['team_count']}}</span></h2>
                        </div>
                    @endif

                    @if (!empty($settings['experience_count']))
                        <div class="counter_item wow zoomIn" data-wow-delay="0.4s">
                            <h4>سال های تجربه</h4>
                            <h2><span class="counter">{{$settings['experience_count']}}</span></h2>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</section>
<!-- Digital Agency -->

<!-- Testimonial Area -->
<section class="testimonial_area">
    <div class="container">
        <div class="tittle">
            <h4>مشتریان ما</h4>
            <h2>نظرات مشتریان</h2>
        </div>
        <div class="carousel slide ts_slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p>
                        دولوپربند کار طراحی سایت، پرتال خدمات پس از فروش و پشتیبانی این سیستم ها را برعهده دارد. این مجموعه متعهد، به روز و همگام با مشتری است و در کوتاهترین زمان نیازهای ما را درک و اجرا کردند. ما از این مجموعه رضایت کامل داریم و به همکاری مان ادامه خواهیم داد.
                    </p>
                    <p>علی غنی زاده</p>
                    <h6>مدیر عامل زرین تکنال</h6>
                </div>
                <div class="carousel-item">
                    <p>با احترام به پاس ارائه شایسته خدمات طراحی وب سایت این شرکت راه و ساختمان مراتب رضایت و تقدیر خود را از عملکرد تیم دولوپربند اعلام داشته و آرزو می کنیم با بهره گیری از توان فنی و ایده های خلاقانه مجموعه دولوپربند کماکان در مسیر پیشرفت خود و میهن عزیزمان گام بردارید.</p>
                    <p>اکرم حسینی</p>
                    <h6>مدیر فروش دیجی یزد</h6>
                </div>
                <div class="carousel-item">
                    <p>از زمان شروع کار شرکت مان، کلیه زحمات مربوط به طراحی و پشتیبانی سایت را دولوپربند به طور منظم پیگیری می کند و همیشه پاسخگوی سوالات ما جهت ارتقا وب سایتمان هستند. به همین دلیل کمال تشکر را داریم و امیدواریم تا در ارتقا امور خود قدم به قدم، ما در خدمتتان باشیم و همیشه از تجربیات دولوپربند استفاده نماییم.</p>
                    <p>علیرضا جاوید</p>
                    <h6>مدیر بازرگانی ابریشم کاران</h6>
                </div>
            </div>
            <ol class="indicators">
                <li data-target=".ts_slide" data-slide-to="0" class="active">1</li>
                <li data-target=".ts_slide" data-slide-to="1">2</li>
                <li data-target=".ts_slide" data-slide-to="2">3</li>
            </ol>
        </div>
    </div>
    <ul class="indicators_img row">
        <li class="col wow zoomIn">
            <figure><img src="{{asset('assets/frontend/images/testimonial-1.jpg')}}"></figure>
        </li>
        <li class="col wow zoomIn" data-wow-delay="0.2s">
            <figure><img src="{{asset('assets/frontend/images/testimonial-2.jpg')}}"></figure>
        </li>
        <li class="col wow zoomIn" data-wow-delay="0.4s">
            <figure><img src="{{asset('assets/frontend/images/testimonial-3.jpg')}}"></figure>
        </li>
        <li class="col wow zoomIn" data-wow-delay="0.6s">
            <figure><img src="{{asset('assets/frontend/images/testimonial-4.jpg')}}"></figure>
        </li>
        <li class="col wow zoomIn" data-wow-delay="0.8s">
            <figure><img src="{{asset('assets/frontend/images/testimonial-5.jpg')}}"></figure>
        </li>
    </ul>
</section>
<!-- Testimonial Area -->

<!-- Team Area -->
<!--  <section class="team_area">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 wow fadeIn">
                <div class="team_item">
                    <a href="javascript:void(0)" class="team_img"><img src="{{asset('assets/frontend/images/team-6.jpg')}}"></a>
                    <a href="javascript:void(0)">فرید شیشه بری</a>
                    <h6>برنامه نویس بک اند</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="team_item">
                    <a href="javascript:void(0)" class="team_img"><img src="{{asset('assets/frontend/images/team-3.jpg')}}"></a>
                    <a href="javascript:void(0)">احمد علیزاده</a>
                    <h6>برنامه نویس فرانت اند</h6>
                </div>
            </div>

{{--            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.4s">--}}
{{--                <div class="team_item">--}}
{{--                    <a href="#" class="team_img"><img src="images/team-3.jpg" alt=""></a>--}}
{{--                    <a href="#">حسین عزیزی</a>--}}
{{--                    <h6>طراح وب</h6>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>
</section> -->
<!-- Team Area -->

<!-- Our Pricing Area -->
<!-- <section class="pricing_area">
    <div class="shap_style ss_2 wow zoomIn"><span></span></div>
    <div class="container">
        <div class="tittle">
            <h4>قیمت پلن ها</h4>
            <h2>طرح قیمت گذاری ما را بررسی کنید </h2>
            <h6>طرح ادغام کامل در داخل</h6>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
        </div>
        <ul class="nav nav-tabs">
            <li><a class="active" data-toggle="tab" href="#monthly"></a></li>
            <li><a class="ma" data-toggle="tab" href="#yearly"></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="monthly" role="tabpanel">
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeIn">
                        <div class="plan">
                            <img src="images/icons/price-1.png" alt="">
                            <h4>هسته کسب و کار </h4>
                            <h2>تومان 99</h2>
                            <ul>
                                <li>یک وب سایت رایگان با تبلیغات ایجاد کنید</li>
                                <li>دامنه اتصال</li>
                                <li>ایده آل برای وب سایت های حرفه ای کوچکتر</li>
                                <li>کسب و کار و تجارت الکترونیک</li>
                                <li>تعداد زیادی از فضای وب</li>
                            </ul>
                            <a href="#" class="theme_btn">انتخاب پلن</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="plan">
                            <img src="images/icons/price-2.png" alt="">
                            <h4>حرفه ای</h4>
                            <h2>تومان 49</h2>
                            <ul>
                                <li>یک وب سایت رایگان با تبلیغات ایجاد کنید</li>
                                <li>دامنه اتصال</li>
                                <li>ایده آل برای وب سایت های حرفه ای کوچکتر</li>
                                <li>کسب و کار و تجارت الکترونیک</li>
                                <li>تعداد زیادی از فضای وب</li>
                            </ul>
                            <a href="#" class="theme_btn">انتخاب پلن</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="plan">
                            <img src="images/icons/price-3.png" alt="">
                            <h4>پایه</h4>
                            <h2>تومان 19</h2>
                            <ul>
                                <li>یک وب سایت رایگان با تبلیغات ایجاد کنید</li>
                                <li>دامنه اتصال</li>
                                <li>ایده آل برای وب سایت های حرفه ای کوچکتر</li>
                                <li>کسب و کار و تجارت الکترونیک</li>
                                <li>تعداد زیادی از فضای وب</li>
                            </ul>
                            <a href="#" class="theme_btn">انتخاب پلن</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="yearly" role="tabpanel">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="plan">
                            <img src="images/icons/price-1.png" alt="">
                            <h4>توسعه وب</h4>
                            <h2>تومان 49</h2>
                            <ul>
                                <li>یک وب سایت رایگان با تبلیغات ایجاد کنید</li>
                                <li>دامنه اتصال</li>
                                <li>ایده آل برای وب سایت های حرفه ای کوچکتر</li>
                                <li>کسب و کار و تجارت الکترونیک</li>
                                <li>تعداد زیادی از فضای وب</li>
                            </ul>
                            <a href="#" class="theme_btn">انتخاب پلن</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="plan">
                            <img src="images/icons/price-2.png" alt="">
                            <h4>حرفه ای</h4>
                            <h2>$39</h2>
                            <ul>
                                <li>یک وب سایت رایگان با تبلیغات ایجاد کنید</li>
                                <li>دامنه اتصال</li>
                                <li>ایده آل برای وب سایت های حرفه ای کوچکتر</li>
                                <li>کسب و کار و تجارت الکترونیک</li>
                                <li>تعداد زیادی از فضای وب</li>
                            </ul>
                            <a href="#" class="theme_btn">انتخاب پلن</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="plan">
                            <img src="images/icons/price-3.png" alt="">
                            <h4>پایه</h4>
                            <h2>دلار 99</h2>
                            <ul>
                                <li>یک وب سایت رایگان با تبلیغات ایجاد کنید</li>
                                <li>دامنه اتصال</li>
                                <li>ایده آل برای وب سایت های حرفه ای کوچکتر</li>
                                <li>کسب و کار و تجارت الکترونیک</li>
                                <li>تعداد زیادی از فضای وب</li>
                            </ul>
                            <a href="#" class="theme_btn">انتخاب پلن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Our Pricing Area -->

<!-- Tidings Blog Area -->
<!-- <section class="tidings_blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 tittle">
                <h4>اخبار</h4>
                <h2>از لیست وبلاگ ما</h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                <a href="#">مشاهده بیشتر</a>
            </div>
            <div class="col-lg-6 subscribe">
                <h4>عضویت در خبرنامه <span>( فقط یکبار در هفته )</span></h4>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ایمیل شما">
                    <div class="input-group-append">
                        <span class="input-group-text theme_btn">ثبت نام</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                <div class="tidings_item">
                    <a href="blog-details.html" class="heding">6 روند طراحی سایت را به خوبی جستجو کنید </a>
                    <h6>توسط <a href="#">مهران خانی</a>، در 14/اردیبهشت/98</h6>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                    <a href="#" class="read_more">بیشتر بخوانید</a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                <div class="tidings_item">
                    <a href="blog-details.html" class="heding">6 روند طراحی سایت را به خوبی جستجو کنید </a>
                    <h6>توسط <a href="#">مهران خانی</a>، در 14/اردیبهشت/98</h6>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                    <a href="#" class="read_more">بیشتر بخوانید</a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn">
                <div class="tidings_item">
                    <a href="blog-details.html" class="heding">6 روند طراحی سایت را به خوبی جستجو کنید </a>
                    <h6>توسط <a href="#">مهران خانی</a>، در 14/اردیبهشت/98</h6>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                    <a href="#" class="read_more">بیشتر بخوانید</a>
                </div>
            </div>
        </div>
    </div>
    <div class="shap_style ss_2 wow zoomIn"><span></span></div>
</section> -->
<!-- Tidings Blog Area -->

@include('site.layouts.footer')
