<div class="ads">
    @for($i = 0, $i < 5, $i++)
        <a href="{{$add_image[$i]['jump_url']}}">
            <img src="{{$add_image[$i]['image_url']}}"/>
        </a>
    @endfor
</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/home/ads/ads.css")}}
@stop
