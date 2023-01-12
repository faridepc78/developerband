@section('admin_title')
    <title>پنل دولوپربند | پروفایل</title>
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
                                                       href="{{route('profile')}}">ویرایش
                                پروفایل ({{$user->fullName}})</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-success">

                        <div class="card-header">
                            <h3 class="card-title">ویرایش پروفایل ({{$user->fullName}})</h3>
                        </div>

                        <form id="update_profile_form" action="{{route('update_profile')}}"
                              method="post" enctype="multipart/form-data">

                            @csrf
                            @method('patch')

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="first_name">نام *</label>
                                    <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           value="{{ old('first_name',$user->first_name) }}" id="first_name" name="first_name"
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
                                           value="{{ old('last_name',$user->last_name) }}" id="last_name" name="last_name"
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
                                           value="{{ old('email',$user->email) }}" id="email" name="email"
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
                                           value="{{ old('mobile',$user->mobile) }}" id="mobile" name="mobile"
                                           placeholder="لطفا تلفن همراه را وارد کنید" autocomplete="mobile"
                                           autofocus>

                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="avatar">تصویر پروفایل</label>
                                    <img width="50" src="{{$user->profile}}"
                                         alt="{{$user->profile}}">
                                    <input accept=".jpg,.jpeg,.png" type="file"
                                           class="form-control @error('avatar') is-invalid @enderror"
                                           autofocus id="avatar" name="avatar">

                                    @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">رمز عبور</label>
                                    <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('password') is-invalid @enderror"
                                           value="{{ old('password') }}" id="password" name="password"
                                           placeholder="رمز عبور را وارد کنید"
                                           autocomplete="password" autofocus>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">تایید رمز عبور</label>
                                    <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control"
                                           id="password_confirmation" name="password_confirmation"
                                           placeholder="تایید رمز عبور را وارد کنید" autofocus>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">بروزرسانی</button>
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

        $('#update_profile_form').validate({

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

                password: {
                    minlength: 8
                },

                password_confirmation: {
                    equalTo: "#password"
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

                password: {
                    minlength: "لطفا رمز عبور را حداقل 8 کاراکتر وارد کنید"
                },

                password_confirmation: {
                    equalTo: "لطفا تایید رمز عبور را صحیح وارد کنید"
                }
            }

        });

    });

</script>
