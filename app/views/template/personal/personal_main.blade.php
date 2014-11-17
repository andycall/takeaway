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
                <div class="sidebar">
                    {{-- 侧边栏--}}
                    @yield("person_siderbar")
                </div>
                <div class="right_content">

                </div>
			</div>
			<div id="footer">
				@yield("footer")
			</div>
			@yield("script")
		</body>
	</html>

