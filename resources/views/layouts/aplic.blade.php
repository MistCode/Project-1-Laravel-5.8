<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lavel - @yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<body>
		<nav class="navbar navbar-ligth bg-dark">
		<ul data-type="navbar" class="sf-menu">
					<a class="navbar-brand" href="{{ url('/') }}">
	    				<img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">Lavel
	    			</a>
	    			<a href="{{ url('/grupos') }}"><img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">Mis Grupos</a>
	    			<a href="{{ url('/grupos/create') }}"><img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">Añadir</a>
	    			<a href="{{ url('https://www.patria.org.ve/login') }}"><img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">A la Pagina de la Patria</a>
			</ul>
		</nav>
		<div class="container">
			@yield('content')	
		</div>
	</body>
</html>