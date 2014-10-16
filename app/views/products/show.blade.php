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
	<h1>Info producto</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">Product</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a href="#">Todos</a></li>
        			<li><a href="#">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Información del producto</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($product))
  			<p>
  				Articulo: <strong>{{ $product->articulo}}</strong>
  			</p>
  			<p>
  				id: <strong>{{ $product->id }}</strong>
  			</p>
        <p>
          Categoria: <strong>{{ $product->categoria }}</strong>
        </p>
        <p>
          Precio: <strong>{{ $product->precio }}</strong>
        </p>
        <p>
          Impuesto: <strong>{{ $product->impuesto }}</strong>
        </p>
        <p>
          Cantidad: <strong>{{ $product->cantidad }}</strong>
        </p>
        @else
        <p>
          No existe información para éste usuario.
        </p>
        @endif
        <a href="/products" class="btn btn-default">Regresar</a>
		</div>
	</div>
</body>
</html>