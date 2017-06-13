<html>
<head>
	@include('head')
</head>
	<body>
		<div class="containers">
			<header class="row">
				@include('header')
			</header>
			<div id="main" class="row" style="margin-left: 60px;margin-right: 60px">
				@yield('content')
			</div>
			
			<footer>
				@include('footer')
			</footer>
		</div>
	</body>
</html>