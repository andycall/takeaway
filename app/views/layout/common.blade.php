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
				<div id="left_content">
					@yield("left_content")
				</div>
				<div id="right_content">
					@yield("right_content")
				</div>
			</div>
			<div id="footer">
				@yield("footer")
			</div>

			@yield("script")
		</body>
	</html>

