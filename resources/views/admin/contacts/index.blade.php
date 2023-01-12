@section('admin_title')
    <title>پنل مدیریت دولوپربند | تماس ها</title>
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
                        <li class="breadcrumb-item"><a class="my-active" href="{{route('contacts.index')}}">مدیریت
                                تماس ها</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mb-3">مدیریت تماس ها</h3>

                            <div class="card-tools">
                                <form id="filterForm" method="get"
                                      action="{{route('contacts.index')}}">
                                    <div class="input-group input-group-sm" style="width: 300px;">
                                        <input readonly id="date" value="{{request()->input('date')}}" type="text"
                                               name="date"
                                               class="form-control float-right"
                                               placeholder="جستجو بر اساس تاریخ">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <a href="{{route('contacts.index','status='.\App\Models\Contact::READ)}}"
                               class="btn btn-success">خوانده شده</a>

                            <a href="{{route('contacts.index','status='.\App\Models\Contact::UNREAD)}}"
                               class="btn btn-danger">خوانده نشده</a>

                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered text-center">

                                <tr>
                                    <th>ردیف</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th>ایمیل</th>
                                    <th>تلفن همراه</th>
                                    <th>موضوع</th>
                                    <th>وضعیت</th>
                                    <th>تاریخ و زمان ارسال</th>
                                    <th>مشاهده پیام</th>
                                </tr>

                                @if(count($contacts))

                                    @foreach($contacts as $key=>$value)

                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->fullName}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->mobile}}</td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#contactSubject{{$value['id']}}">
                                                    <i class="fa fa-eye text-success"></i>
                                                </a>
                                            </td>
                                            {!! $value->status() !!}
                                            <td>{{convertToJalaliDateTime($value['created_at'])}}</td>
                                            <td>
                                                <a target="_blank" href="{{route('contacts.single',$value->id)}}">
                                                    <i class="fa fa-eye text-success"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade mt-lg-5"
                                             id="contactSubject{{$value['id']}}" tabindex="-1"
                                             role="dialog"
                                             aria-hidden="true">

                                            <div class="modal-dialog modal-lg" role="document">

                                                <div class="modal-content">

                                                    <div class="modal-header">

                                                        <h6 class="modal-title">
                                                            موضوع پیام
                                                            ({{$value->fullName}})
                                                        </h6>

                                                        <a style="color: red;cursor: pointer"
                                                           data-dismiss="modal" aria-label="Close">
                                                            <i style="color: red" class="fa fa-close"></i>
                                                        </a>

                                                    </div>

                                                    <div class="modal-body">

                                                        <input value="{{$value['subject']}}" type="text" class="form-control" readonly>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    @endforeach

                                @else

                                    <div class="alert alert-danger text-center">
                                        <p>اطلاعات این بخش ثبت نشده است</p>
                                    </div>

                                @endif

                            </table>

                        </div>

                        <div class="pagination mt-3">
                            {!! $contacts->withQueryString()->links() !!}
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

@section('admin_js')
    <script type="text/javascript"
            src="{{asset('assets/backend/plugins/persianDatepicker/js/persianDatepicker.min.js')}}"></script>
@endsection

@include('admin.layout.footer')

<script type="text/javascript">

    $("#date").persianDatepicker({formatDate: "YYYY-0M-0D"});

    $('#filterForm').on('submit', function (e) {
        e.preventDefault();
        var base_url = window.location.href;
        var route = "{{route('contacts.index')}}";
        var date = $('#date').val();

        if (date.length !== 0) {
            if (base_url.indexOf('?' + 'date' + '=') != -1 || base_url.indexOf('&' + 'date' + '=') != -1) {
                var new_url = replaceUrlParam(base_url, 'date', date);
                window.location.href = removeURLParameter(new_url, 'page');
            } else {
                if (base_url === route) {
                    this.submit();
                } else {
                    var new_url = base_url + '&date=' + date;
                    window.location.href = removeURLParameter(new_url, 'page');
                }
            }
        }

    })

</script>
