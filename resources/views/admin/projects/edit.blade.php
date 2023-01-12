@section('admin_title')
    <title>پنل مدیریت دولوپربند | پروژه ها</title>
@endsection

@section('admin_css')
    <link type="text/css" rel="stylesheet"
          href="{{asset('assets/backend/plugins/persianDatepicker/css/persianDatepicker-default.css')}}">
@endsection

@include('admin.layout.header')

@include('admin.layout.sidebar')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('projects.index')}}">مدیریت پروژه ها</a></li>
                        <li class="breadcrumb-item"><a class="my-active"
                                                       href="{{route('projects.edit',$project->id)}}">ویرایش
                                پروژه ({{$project->name}})</a></li>
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
                            <h3 class="card-title">ویرایش پروژه ({{$project->name}})</h3>
                        </div>

                        <form id="update_project_form" action="{{route('projects.update',$project->id)}}"
                              method="post" enctype="multipart/form-data">

                            @csrf
                            @method('patch')

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">نام پروژه *</label>
                                    <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name',$project->name) }}" id="name" name="name"
                                           placeholder="لطفا نام پروژه را وارد کنید"
                                           autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">اسلاگ پروژه *</label>
                                    <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('slug') is-invalid @enderror"
                                           value="{{ old('slug',$project->slug) }}" id="slug" name="slug"
                                           placeholder="لطفا اسلاگ پروژه را وارد کنید"
                                           autocomplete="slug" autofocus>

                                    @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="customer">مشتری پروژه</label>
                                    <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('customer') is-invalid @enderror"
                                           value="{{ old('customer',$project->customer) }}" id="customer"
                                           name="customer"
                                           placeholder="لطفا مشتری پروژه را وارد کنید"
                                           autocomplete="customer" autofocus>

                                    @error('customer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="delivery_date">تاریخ تحویل پروژه</label>
                                    <input readonly onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('delivery_date') is-invalid @enderror"
                                           value="{{ old('delivery_date',convertToJalaliDate($project->delivery_date)) }}"
                                           id="delivery_date"
                                           name="delivery_date"
                                           placeholder="تاریخ تحویل پروژه را انتخاب کنید"
                                           autocomplete="delivery_date" autofocus>

                                    @error('delivery_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="link">لینک پروژه</label>
                                    <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('link') is-invalid @enderror"
                                           value="{{ old('link',$project->link) }}" id="link" name="link"
                                           placeholder="در صورت تمایل لینک پروژه را وارد کنید"
                                           autocomplete="link" autofocus>

                                    @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">تصویر پروژه</label>

                                    <img class="img-bordered" style="width: 500px;height: 500px"
                                         src="{{$project->image->original}}"
                                         alt="{{$project->image->original}}">

                                    <input accept=".jpg,.jpeg,.png" type="file"
                                           class="form-control @error('image') is-invalid @enderror"
                                           autofocus id="image" name="image">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_id">دسته بندی پروژه *</label>
                                    <select class="form-control  @error('category_id') is-invalid @enderror"
                                            id="category_id"
                                            name="category_id">
                                        <option selected disabled value="">لطفا دسته بندی پروژه را انتخاب کنید</option>

                                        @if (count($categories))

                                            @foreach($categories as $value)

                                                <option @if ($value->id==old('category_id',$project->category_id))
                                                        selected="selected"
                                                        @endif
                                                        value="{{$value->id}}">{{$value->name}}</option>

                                            @endforeach

                                        @endif

                                    </select>

                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="text">توضیحات پروژه</label>
                                    <textarea class="form-control ckeditor @error('text') is-invalid @enderror"
                                              id="text"
                                              name="text" autocomplete="text"
                                              autofocus>{{ old('text',$project->text) }}</textarea>

                                    @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="priority">ردیف پروژه</label>
                                    <input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                           class="form-control @error('priority') is-invalid @enderror"
                                           value="{{ old('priority',$project->priority) }}" id="priority" name="priority"
                                           placeholder="در صورت تمایل ردیف پروژه را وارد کنید"
                                           autocomplete="priority" autofocus>

                                    @error('priority')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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

@section('admin_js')
    <script type="text/javascript"
            src="{{asset('assets/backend/plugins/persianDatepicker/js/persianDatepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/plugins/ckeditor/ckeditor.js')}}"></script>
@endsection

@include('admin.layout.footer')

<script type="text/javascript">

    $(document).ready(function () {

        $("#delivery_date").persianDatepicker({formatDate: "YYYY/0M/0D"});

        $('#update_project_form').validate({

            rules: {
                name: {
                    required: true
                },

                slug: {
                    required: true
                },

                link: {
                    required: true,
                    checkUrl: true
                },

                category_id: {
                    required: true
                },

                priority: {
                    number: true
                }
            },

            messages: {
                name: {
                    required: "لطفا نام پروژه را وارد کنید"
                },

                slug: {
                    required: "لطفا اسلاگ پروژه را وارد کنید"
                },

                link: {
                    required: "لطفا لینک پروژه را وارد کنید",
                    checkUrl: "لطفا لینک پروژه را صحیح وارد کنید"
                },

                category_id: {
                    required: "لطفا دسته بندی پروژه را انتخاب کنید"
                },

                priority: {
                    number: "لطفا ردیف پروژه را عدد وارد کنید"
                }
            }

        });

    });

</script>
