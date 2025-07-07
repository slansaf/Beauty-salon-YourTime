<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{-- <link rel="stylesheet" href="./style/reset_style.css" />
	<link rel="stylesheet" href="./style/style.css" /> --}}
	<title> @yield('title-main')</title>
	@vite(['resources/js/app.js', 'resources/sass/reset_style.sass','resources/sass/app.sass'])
</head>
<body>
	@include('inc.header')
    @yield('content')

	@unless(Request::is('contacts*'))
		@include('inc.contact')
	@endunless

	@include('inc.footer')
</body>
</html>