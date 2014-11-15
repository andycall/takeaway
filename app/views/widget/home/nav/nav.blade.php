
<nav class="breadcrumb">
    <p>
        <span>{{$userbar['url']['my_place']}}</span>
        <a href="{{$userbar['url']['switch_palce']}}">[切换地址]</a>
    </p>
</nav>


@section("css")
    @parent
    {{HTML::style("/css/widget/home/nav/nav.css")}}
@stop

