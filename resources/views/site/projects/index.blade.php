@include('site.layouts.header')

<!-- Pages Banner Area -->
<section class="pages_banner pb_p">
    <div class="container">
        <h3>نمونه کارهای تیم دولوپربند</h3>
    </div>
    <div class="banner_ai wow zoomIn">
        <img src="{{asset('assets/frontend/images/banner-lamp.png')}}" alt="" class="banner-lamp">
    </div>
    <figure class="wow zoomIn"><img src="{{asset('assets/frontend/images/banner-ai-2.png')}}" alt=""></figure>
    <div class="shap_style style_2"><span></span></div>
</section>
<!-- Pages Banner Area -->

<!-- Portfolio grid Area -->
<section class="portfolio_grid">
    <div class="container">

        <ul class="protfoli_filter">
            <li class="active" data-filter="*"><a href="#">همه نمونه کارها</a></li>

            @foreach($categories as $item)
                <li data-filter=".{{$item['slug']}}"><a href="#">{{$item['name']}}</a></li>
            @endforeach

        </ul>

        <div class="row portfoli_inner">

            @foreach($projects as $value)

                <div class="col-md-4 {{$value->category->slug}}">
                    <div class="portfolio_item">
                        <a target="_blank" href="{{$value->path()}}" class="p_img"><img
                                src="{{$value->image->original}}"
                                alt="{{$value->name}}"></a>
                        <h4>{{$value->category->name}}</h4>
                        <a target="_blank" href="{{$value->path()}}" class="heding text-center">{{$value->name}}</a>
                        <br>
                        <a target="_blank" href="{{$value->path()}}" class="theme_btn">مشاهده بیشتر</a>
                    </div>
                </div>

            @endforeach

        </div>

        <div class="pagination mt-3">
            {!! $projects->links() !!}
        </div>
    </div>
</section>

@include('site.layouts.footer')
