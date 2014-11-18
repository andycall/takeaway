<!Doctype html>
	<html>
		<head>
			<title>菜单</title>
			@yield("css")
		</head>
		<body>
			<div id="header">
				@yield("header")
			</div>
			<div id="content">
               <div class="shop_left">
                    {{-- 商家顶部信息栏 --}}
                    @yield("shop_details")
                    {{-- 美食分类 --}}
                    @yield("cate_category")
                    {{-- 美食列表--}}
                    @yield("cate_list")
               </div>
               <div class="content_right">
                    {{-- 餐厅公告 --}}
                    @yield("restaurant_announcement")
                    {{-- 我的收藏 --}}
                    @yield("goods_collection")
                    {{-- 本周热卖 --}}
                    @yield("hot_sails")
                    {{-- 商店地图 --}}
                    @yield("shop_map")
               </div>
			</div>
			<div id="footer">
				@yield("footer")
			</div>
			@yield("script")
		</body>
	</html>

