

<!DOCTYPE html>
<html>
<head>
	<title>Restaurant System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	@include('layouts.csslinks')
	@yield('css_link')
</head>
<body>
	@include('headpage.header')
	
		 @yield('page_content')


	@include('headpage.footer')

	
	 	
</body>
</html>


@include('layouts.scripts')

