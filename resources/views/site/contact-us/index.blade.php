@include('site.layouts.header')

<!-- Pages Banner Area -->
<section class="pages_banner pb_2 pb_b">
    <div class="container">
        <div class="tittle tittle_2 ti_2">
            <h1>تماس</h1>
            <h4>تماس با ما</h4>
            <h2>برای دریافت مشاوره از راه های ارتباطی زیر اقدام کنید یا فرم را پر کنید.</h2>
        </div>
    </div>
    <figure class="wow zoomIn s_shap_1"><img src="{{asset('assets/frontend/images/shap/skye-shap-2.png')}}" alt="">
    </figure>
    <figure class="wow zoomIn s_shap_2"><img src="{{asset('assets/frontend/images/shap/skye-shap-5.png')}}" alt=""
                                             class="shap_img2"></figure>
</section>
<!-- Pages Banner Area -->

<!--Contact info Area -->
<section class="contact_info">
    <div class="shap_style ss_2 wow zoomIn"><span></span></div>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="info">
                    <div class="icons">
                        <i class="flaticon-customer-service cc"></i>
                    </div>
                    <h4>شماره تماس</h4>

                    @if (!empty($settings['phone']))
                        <a href="tel:{{$settings['phone']}}" class="number">{{$settings['phone']}}</a>
                    @endif

                    @if (!empty($settings['mobile1']))
                        <a href="tel:{{$settings['mobile1']}}" class="number">{{$settings['mobile1']}}</a>
                    @endif

                    @if (!empty($settings['mobile2']))
                        <a href="tel:{{$settings['mobile2']}}" class="number">{{$settings['mobile2']}}</a>
                    @endif

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="info">
                    <div class="icons">
                        <i class="flaticon-paper-plane"></i>
                    </div>
                    <h4>آدرس ایمیل</h4>

                    @if (!empty($settings['email']))
                        <a href="mailto:{{$settings['email']}}">{{$settings['email']}}</a>
                    @endif

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="info">
                    <div class="icons">
                        <i class="flaticon-route"></i>
                    </div>
                    <h4>آدرس شرکت</h4>

                    @if (!empty($settings['address']))
                        <p>{{$settings['address']}}</p>
                    @endif

                </div>
            </div>

        </div>
    </div>
</section>
<!--Contact info Area -->

<!--Map from Area -->
<section class="problem_solve ps_2">
    <figure class="wow zoomIn"><img src="{{asset('assets/frontend/images/splve-2.png')}}" alt=""
                                    class="user-img up_animat"></figure>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-4">
                <div class="tittle">
                    <h2></h2>
                    <p>اگر مشکل یا سوالی دارید یا نیاز به مشاوره دارید، میتوانید با کارشناسان ما تماس بگیرید.</p>
                </div>

                <form id="contact_form" class="solve_from" method="post" action="{{route('send-contact-us')}}">

                    @csrf

                    <div class="form-group">
                        <label for="first_name">نام *</label>
                        <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                               class="form-control @error('first_name') is-invalid @enderror"
                               value="{{ old('first_name') }}" id="first_name" name="first_name"
                               placeholder="لطفا نام را وارد کنید"
                               autocomplete="first_name" autofocus>

                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="last_name">نام خانوادگی *</label>
                        <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                               class="form-control @error('last_name') is-invalid @enderror"
                               value="{{ old('last_name') }}" id="last_name" name="last_name"
                               placeholder="لطفا نام خانوادگی را وارد کنید"
                               autocomplete="last_name" autofocus>

                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">ایمیل *</label>
                        <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                               class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" id="email" name="email"
                               placeholder="لطفا ایمیل را وارد کنید" autocomplete="email"
                               autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mobile">تلفن همراه *</label>
                        <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                               class="form-control @error('mobile') is-invalid @enderror"
                               value="{{ old('mobile') }}" id="mobile" name="mobile"
                               placeholder="لطفا تلفن همراه را وارد کنید" autocomplete="mobile"
                               autofocus>

                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">موضوع پیام *</label>
                        <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                               class="form-control @error('subject') is-invalid @enderror"
                               value="{{ old('subject') }}" id="subject" name="subject"
                               placeholder="لطفا موضوع پیام را وارد کنید" autocomplete="subject"
                               autofocus>

                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">متن پیام *</label>
                        <textarea autocomplete="subject"
                                  autofocus placeholder="لطفا متن پیام را وارد کنید"
                                  onkeyup="this.value=removeSpaces(this.value)" id="message"
                                  class="form-control @error('message') is-invalid @enderror"
                                  name="message">{{ old('message') }}</textarea>

                        @error('message')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="theme_btn" type="submit">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Map from Area -->

@include('site.layouts.footer')

<script type="text/javascript">

    $(document).ready(function () {

        $('#contact_form').validate({

            rules: {
                first_name: {
                    required: true
                },

                last_name: {
                    required: true
                },

                email: {
                    required: true,
                    email: true
                },

                mobile: {
                    required: true,
                    checkMobile: true
                },

                subject: {
                    required: true
                },

                message: {
                    required: true
                }
            },

            messages: {
                first_name: {
                    required: "لطفا نام را وارد کنید"
                },

                last_name: {
                    required: "لطفا نام خانوادگی را وارد کنید"
                },

                email: {
                    required: "لطفا ایمیل را وارد کنید",
                    email: "لطفا ایمیل را صحیح وارد کنید"
                },

                mobile: {
                    required: "لطفا تلفن همراه را وارد کنید",
                    checkMobile: "لطفا تلفن همراه را صحیح وارد کنید"
                },

                subject: {
                    required: "لطفا موضوع پیام را وارد کنید"
                },

                message: {
                    required: "لطفا متن پیام را وارد کنید"
                }
            }

        });

    });

</script>
