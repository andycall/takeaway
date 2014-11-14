<nav class="breadcrumb">
    <p>
        <span>这里是地址</span>
        <a href="##">[切换地址]</a>
    </p>
</nav>

@section("css")
    @parent
    {{HTML::style("/css/widget/home/nav/nav.css")}}
@stop

@section("js")
    @parent
    {{HTML::script("/js/widget/home/nav/nav.js")}}
@stop

