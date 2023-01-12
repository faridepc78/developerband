<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->

@if (!empty($settings['linkedin']))
    <li><a href="{{$settings['linkedin']}}"><i class="fa fa-linkedin"></i></a></li>
@endif

@if (!empty($settings['instagram']))
    <li><a href="{{$settings['instagram']}}"><i class="fa fa-instagram"></i></a></li>
@endif

@if (!empty($settings['whatsapp']))
    <li><a href="{{$settings['whatsapp']}}"><i class="fa fa-whatsapp"></i></a></li>
@endif

@if (!empty($settings['telegram']))
    <li><a href="{{$settings['telegram']}}"><i class="fa fa-telegram"></i></a></li>
@endif

<!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
