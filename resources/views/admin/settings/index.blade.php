@section('admin_title')
    <title>پنل مدیریت دولوپربند | تنظیمات</title>
@endsection

@include('admin.layout.header')

@include('admin.layout.sidebar')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a class="my-active"
                                                       href="{{route('settings.index')}}">مدیریت تنظیمات</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card @if ($setting['status']=='store')
                        card-primary
                    @else card-success @endif">

                        <div class="card-header">
                            <h3 class="card-title">مدیریت تنظیمات</h3>
                        </div>

                        <form id="createOrUpdate_settings_form"
                              @if ($setting['status']=='store')
                              action="{{route('settings.store')}}"
                              @else
                              action="{{route('settings.update')}}"
                              @endif
                              method="post">

                            @csrf

                            @if($setting['status']!='store')
                                @method('patch')
                            @endif

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="projects_count">تعداد پروژه ها</label>
                                    <input placeholder="در صورت تمایل تعداد پروژه ها را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('projects_count') is-invalid @enderror"
                                           value="{{ old('projects_count',$setting['projects_count']) }}"
                                           id="projects_count"
                                           name="projects_count"
                                           autocomplete="projects_count" autofocus>

                                    @error('projects_count')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="customers_count">تعداد مشتریان</label>
                                    <input placeholder="در صورت تمایل تعداد مشتریان را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('customers_count') is-invalid @enderror"
                                           value="{{ old('customers_count',$setting['customers_count']) }}"
                                           id="customers_count"
                                           name="customers_count"
                                           autocomplete="customers_count" autofocus>

                                    @error('customers_count')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="team_count">تعداد اعضای تیم</label>
                                    <input placeholder="در صورت تمایل تعداد اعضای تیم را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('team_count') is-invalid @enderror"
                                           value="{{ old('team_count',$setting['team_count']) }}" id="team_count"
                                           name="team_count"
                                           autocomplete="team_count" autofocus>

                                    @error('team_count')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="experience_count">تعداد سال های تجربه</label>
                                    <input placeholder="در صورت تمایل تعداد سال های تجربه را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('experience_count') is-invalid @enderror"
                                           value="{{ old('experience_count',$setting['experience_count']) }}"
                                           id="experience_count"
                                           name="experience_count"
                                           autocomplete="experience_count" autofocus>

                                    @error('experience_count')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">لینکدین</label>
                                    <input placeholder="در صورت تمایل لینکدین را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('linkedin') is-invalid @enderror"
                                           value="{{ old('linkedin',$setting['linkedin']) }}" id="linkedin"
                                           name="linkedin"
                                           autocomplete="linkedin" autofocus>

                                    @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="instagram">اینستاگرام</label>
                                    <input placeholder="در صورت تمایل اینستاگرام را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('instagram') is-invalid @enderror"
                                           value="{{ old('instagram',$setting['instagram']) }}" id="instagram"
                                           name="instagram"
                                           autocomplete="instagram" autofocus>

                                    @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="telegram">تلگرام</label>
                                    <input placeholder="در صورت تمایل تلگرام را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('telegram') is-invalid @enderror"
                                           value="{{ old('telegram',$setting['telegram']) }}" id="telegram"
                                           name="telegram"
                                           autocomplete="telegram" autofocus>

                                    @error('telegram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="whatsapp">واتس اپ</label>
                                    <input placeholder="در صورت تمایل واتس اپ را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('whatsapp') is-invalid @enderror"
                                           value="{{ old('whatsapp',$setting['whatsapp']) }}" id="whatsapp"
                                           name="whatsapp"
                                           autocomplete="whatsapp" autofocus>

                                    @error('whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input placeholder="در صورت تمایل ایمیل را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email',$setting['email']) }}" id="email"
                                           name="email"
                                           autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="address">آدرس</label>
                                    <input placeholder="در صورت تمایل آدرس را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('address') is-invalid @enderror"
                                           value="{{ old('address',$setting['address']) }}" id="address"
                                           name="address"
                                           autocomplete="email" autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone">تلفن ثابت</label>
                                    <input placeholder="در صورت تمایل تلفن ثابت را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           value="{{ old('phone',$setting['phone']) }}" id="phone"
                                           name="phone"
                                           autocomplete="phone" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="mobile1">تلفن همراه اول</label>
                                    <input placeholder="در صورت تمایل تلفن همراه اول را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('mobile1') is-invalid @enderror"
                                           value="{{ old('mobile1',$setting['mobile1']) }}" id="mobile1"
                                           name="mobile1"
                                           autocomplete="mobile1" autofocus>

                                    @error('mobile1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="mobile2">تلفن همراه دوم</label>
                                    <input placeholder="در صورت تمایل تلفن همراه دوم را وارد کنید"
                                           onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('mobile2') is-invalid @enderror"
                                           value="{{ old('mobile2',$setting['mobile2']) }}" id="mobile2"
                                           name="mobile2"
                                           autocomplete="mobile2" autofocus>

                                    @error('mobile2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="card-footer">
                                @if ($setting['status']=='store')
                                    <button type="submit" class="btn btn-primary">ثبت</button>
                                @else
                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                @endif
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

@include('admin.layout.footer')

<script type="text/javascript">

    $(document).ready(function () {

        $('#createOrUpdate_settings_form').validate({

            rules: {
                projects_count: {
                    number: true
                },

                customers_count: {
                    number: true
                },

                team_count: {
                    number: true
                },

                experience_count: {
                    number: true
                },

                linkedin: {
                    checkUrl: true
                },

                instagram: {
                    checkUrl: true
                },

                telegram: {
                    checkUrl: true
                },

                whatsapp: {
                    checkUrl: true
                },

                email: {
                    email: true
                }
            },

            messages: {
                projects_count: {
                    number: "لطفا تعداد پروژه ها را صحیح وارد کنید",
                },

                customers_count: {
                    number: "لطفا تعداد مشتریان را صحیح وارد کنید",
                },

                team_count: {
                    number: "لطفا تعداد اعضای تیم را صحیح وارد کنید",
                },

                experience_count: {
                    number: "لطفا تعداد سال های تجربه را صحیح وارد کنید",
                },

                linkedin: {
                    checkUrl: "لطفا لینکدین را صحیح وارد کنید"
                },

                instagram: {
                    checkUrl: "لطفا اینستاگرام را صحیح وارد کنید"
                },

                telegram: {
                    checkUrl: "لطفا تلگرام را صحیح وارد کنید"
                },

                whatsapp: {
                    checkUrl: "لطفا واتس اپ را صحیح وارد کنید"
                },

                email: {
                    email: "لطفا ایمیل را صحیح وارد کنید"
                }
            }

        });

    });

</script>
