<!Doctype html>
	<html>
		<head>
			<title>主页</title>
			@yield("css")
		</head>
		<body>
			<div id="header">
				@yield("header")
			</div>
			<div id="content">
                {{-- 地点与切换地区 --}}
                @yield("nav")
                {{-- 广告图片轮播 --}}
                @yield("swipe")
                {{-- 我的收藏 --}}
                @yield("collection")
                {{-- 餐厅列表 --}}
                @yield("shops")
                {{-- 5个广告图片 --}}
                @yield("ads")
                {{-- 更多餐厅 --}}
                @yield("more_shops")
			</div>
			<div id="footer">
				@yield("footer")
			</div>
			@yield("script")
		</body>
	</html>

