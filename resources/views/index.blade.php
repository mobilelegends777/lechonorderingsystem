<!DOCTYPE html>
<html>
<head>
	<title>Restaurant System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	@include('layouts.csslinks')

</head>
<body>
<div class="loader"></div>

<div class="container">
	@include('headpage.header')
	
		 @yield('page_content')

	@include('headpage.footer')
</div>
</body>
</html>

@include('layouts.scripts')

