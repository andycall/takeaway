<div class="tb-container">
    <a class="logo" href="/" title="饿了么" alt="饿了么" role="logo">
        <i class="default-logo"></i>
    </a>
    <a class="m-apps" href="##"><i class="icon-mobile"></i>手机客户端</a>
    <div class="tb-search" role="search">
        <form class="tb-search-form">
            <i class="icon-search"></i>
            <input class="tb-search-input" type="text" name="keyword" autocomplete="off" placeholder="搜索餐厅，美食…">
            <i class="icon-loading hide"></i>
            <a class="icon-clear hide"></a>
        </form>
        <div class="search-result">
            <div class="search-no-result">没有找到相关美食和餐厅，请换个关键字。</div>
        </div>
    </div>
    <nav class="tb-nav">
        <ul class="tb-site-nav" role="navigation">
            <li><a class="tb-site-nav-link" href="##">我的饿单</a></li>
            <li><a class="tb-site-nav-link" href="##">礼品中心</a></li>
            <li><a class="tb-site-nav-link" href="##">反馈留言</a></li>
            <li class="tb-hr"><a class="tb-site-nav-link" href="##">附近团购</a></li>
        </ul>
        <div class="tb-cart">
            <a class="">
                <i class="icon-cart"></i>
            </a>
            <div class="">
                <div class="f-loading"></div>
                <div></div>
            </div>
        </div>
        <div class="tb-msg">
            <a class="">
                <i class="icon-msg"></i>
            </a>
            <div class="tb-msg-dropdown">
                <div class="f-loading"></div>
                <div></div>
            </div>
        </div>
        <div class="topbar-user-nav">
            <a class="tb-username">这是用户名<i class="caret"></i></a>
            <ul class="tb-dropdown">
                <li><a rel="nofollow" href="##"><i class="icon-profile"></i>个人中心</a></li>
                <li><a rel="nofollow" href="##"><i class="icon-fav"></i>我的收藏</a></li>
                <li><a rel="nofollow" href="##"><i class="icon-address"></i>我的地址</a></li>
                <li><a rel="nofollow" href="##"><i class="icon-config"></i>安全设置</a></li>
                <li class="divider"></li>
                <li><a rel="nofollow" href="/logout"><i class="icon-logout"></i>退出登录</a></li>
            </ul>
        </div>
    </nav>
</div>
<script type="text/template" id="tpl-tb-search">
    <div class="tb-search-autocomplete">
        <% data.forEach(function(val){ %>
        <div class="clearfix">
            <span class="search-cate"><%= val.goods_category %></span>
            <ul class="search-list">
                <% val.shop_result.forEach(function(_val){ %>
                <li class="search-item">
                    <img class="sr-logo" src="<%= _val.img_url %>" alt="<%= _val.goods_name %>">
                    <a class="sr-name" href="<%= _val.goods_url %>" target="_blank"><%= _val.goods_name %></a>

                    <span class="sr-price"><span class="symbol-rmb">¥</span> <%= _val.goods_value %></span>
                </li>
                <% }) %>
            </ul>
        </div>
        <% }) %>
    </div>
</script>
@section("css")
    @parent
    {{HTML::style("/css/widget/userBar/userBar.css")}}
@stop

@section("script")
    @parent
    {{--{{HTML::script("/js/widget/userBar/userBar.js")}}--}}
@stop