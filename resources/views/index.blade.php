<!DOCTYPE html>
<html>
<head>
	<title>Restaurant System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initia-scale=1">
	@include('layouts.csslinks')

</head>
<body>

	@include('headpage.header')
	
		 @yield('page_content')

	@include('headpage.footer')

</body>
</html>

@include('layouts.scripts')

