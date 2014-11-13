<!Doctype html>
	<html>
		<head>
			<title>Vector前端模范实例</title>
			@yield("css")
		</head>
		<body>
			<div id="header">
				@yield("header")
			</div>
			<div id="content">
                @yied
			</div>
			<div id="footer">
				@yield("footer")
			</div>

			@yield("script")
		</body>
	</html>

