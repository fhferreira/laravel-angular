<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{ HTML::style('css/bootstrap.min.css')}}
	@yield('header')
</head>
<body>
	<div class="container">
		@yield('main')
	</div>
</body>
</html>