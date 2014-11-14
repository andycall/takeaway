<div class="collection">
    <div class="collection-header">
        <span class="title">我的收藏</span>
        <a class="set" href="{{{$my_store['url']}}}">设置</a>
    </div>
    <div class="collection-row">
        <div class="collection-row-book">
            <div class="collection-row-book-close">
                <a href="##"></a>
            </div>
            <div class="collection-row-book-left">
                <div class="logo">
                    <a href="##"><img src="##"/></a>
                </div>
                <span>22分钟</span>
            </div>
            <div class="collection-row-book-right">
                <div class="title">
                    <a href="##">外卖外卖</a>
                </div>
                <div class="reserve">
                    <span>接受预定</span>
                </div>
                <div class="remark">
                    <span>送餐时间17：00开始</span>
                </div>
            </div>
        </div>
        <div class="collection-row-book collection-row-border">
            <div class="collection-row-book-close">
                <a href="##"></a>
            </div>
            <div class="collection-row-book-left">
                <div class="logo">
                    <a href="##"><img src="##"/></a>
                </div>
                <span class="long_time">45+分钟</span>
            </div>
            <div class="collection-row-book-right">
                <div class="title">
                    <a href="##">外卖外卖</a>
                </div>
                <div class="style">
                    <span>中式，西式</span>
                </div>
                <div class="remark">
                    <img class="star" src="##" alt=""/>
                    <span>1234订单</span>
                </div>
            </div>
        </div>
        <div class="collection-row-book collection-row-border collection-row-colse">
            <div class="collection-row-book-close">
                <a href="##"></a>
            </div>
            <div class="collection-row-book-left">
                <div class="logo">
                    <a href="##"><img src="##"/></a>
                </div>
                <span>45分钟</span>
            </div>
            <div class="collection-row-book-right">
                <div class="title">
                    <a href="##">外卖外卖</a>
                </div>
                <div class="busy">
                    <span>休息中</span>
                </div>
                <div class="remark">
                    <span>太忙暂不接受订单</span>
                </div>
            </div>
        </div>
        <div class="collection-row-none collection-row-border">


        </div>
        <div class="collection-row-none collection-row-border"></div>
    </div>
</div>

@section("css")
	@parent
	{{HTML::style("/css/widget/home/collection/collection.css")}}
@stop
