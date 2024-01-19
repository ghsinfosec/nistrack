<?php

// basic html template for page structure
return "
<!DOCTYPE html>
<html>
	<head>
		<title>$pageData->title</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		$pageData->css
		$pageData->scriptElements
	</head>
	<body>
		$pageData->content
	</body>
</html>
";
