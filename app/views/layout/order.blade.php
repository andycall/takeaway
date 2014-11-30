<!Doctype html>
	<html>
		<head>
			<title>确认订单</title>
			@yield("css")
		</head>
		<body>

	<div id="content">
                <div class="header">
                  {{-- 头部 --}}
                    @yield("header")
                </div>

                <div class="wrapper">
                    {{-- 订单顶部  --}}
                    @yield("content_header")

                    {{-- 美食篮子 --}}
                    @yield("good_basket")

                    {{-- 功能 --}}
                    @yield("function_module")
                </div>
            </div>

			{{-- footer --}}
			<div id="footer">
				@yield("footer")
			</div>
			@yield("script")
		</body>
	</html>

