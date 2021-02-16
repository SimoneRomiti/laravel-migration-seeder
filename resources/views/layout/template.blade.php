<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@yield('css')
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<header>
		<h1 class="text-center">Articoli</h1>
	</header>

	@yield('main')

	<footer class="text-center"><i>Articoli.com</i></footer>
	
</body>
</html>