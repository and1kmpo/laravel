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
	<h1>Agregar producto</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">Products</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a href="/products">Todos</a></li>
        			<li class="active"><a href="/products/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Nuevo producto</h4>
  		</div>

  		<div class="panel-body">
  			<form method="post" action="store">
				<p>
            <input type="text" name="articulo" placeholder="Articulo" class="form-control" required>
          </p>
          <p>
            <input type="text" name="categoria" placeholder="Categoria" class="form-control" required>
          </p>
          <p>
            <input type="text" name="id" placeholder="Codigo" class="form-control" required>
          </p>
          <p>
            <input type="text" name="precio" placeholder="Precio" class="form-control" required>
          </p>
          <p>
            <input type="text" name="Impuesto" placeholder="Impuesto" class="form-control" required>
          </p>
          <p>
            <input type="text" name="cantidad" placeholder="Cantidad" class="form-control" required>
          </p>
				<p>
					<input type="submit" value="Guardar" class="btn btn-success">
				</p>
			</form>
		</div>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif
</body>
</html>