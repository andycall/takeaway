<div class="recent_month">

    <div class="header">
        <h2>
            {{$title}}的订单 - 共{{$form['deal_count']}}张
        </h2>
    </div>

    <div class="inner">
@foreach($form['deal'] as $value)
        <div class="order_form">
            <div class="order_header">
                <div class="order_wrapper">
@if($value['deal_statue'])
                    <div class="order_title finish">交易已完成</div>
@else
                    <div class="order_title unfinish">交易失败</div>
@endif
@if($value['deal_is_retrun'])
                    <div class="retrun">
                        <a href="{{$value['deal_return']}}">我要退单</a>
                    </div>
@endif
                    <div class="same_again">
                        <a href="{{$value['same_again']}}">
                            <i></i>
                            <span>再来一份</span>
                        </a>
                    </div>
                </div>
@if($value['deal_is_pre'])
                <div class="order_pre">
                    <p>此订单为预订单，送餐时间：{{$value['deal_pre_time']}}</p>
                </div>
@endif
            </div>

        </div>
@endforeach
    </div>

</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/order_form/order_form.css")}}
@stop