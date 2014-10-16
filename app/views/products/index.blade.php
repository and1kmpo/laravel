<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<style>
		body {
			width: 450px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<h1>Lista productos</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">Productos</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="/products">Todos</a></li>
        			<li><a href="/products/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Lista de productos</h4>
  		</div>

  		<div class="panel-body">
    		<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Articulo</th>
						<th>Categoria</th>
						<th>Precio</th>
						<th>Impuesto</th>
						<th>Cantidad</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->articulo }}</td>
							<td>{{ $user->categoria }}</td>
							<td>{{ $user->precio }}</td>
							<td>{{ $user->impuesto }}</td>
							<td>{{ $user->cantidad }}</td>
							<td>
								<a href="/products/show/{{ $user->id }}"><span class="label label-info">Ver</span></a>
								<a href="/products/edit/{{ $user->id }}"><span class="label label-success">Editar</span></a>
								<a href="{{ url('/products/destroy',$user->id) }}"><span class="label label-danger">Eliminar</span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  	</div>

  	@if(Session::has('message'))
	    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif
</body>
</html>