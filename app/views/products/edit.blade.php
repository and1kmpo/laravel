<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
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
	<h1>Editar cliente</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">CodeJobs</a>
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
  			<h4>Editar usuario</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($user))
    			<form method="post" action="/users/update/{{ $user->id }}">
          <p>
            <input value="{{ $user->nombre }}" type="text" name="nombre" placeholder="Nombre" class="form-control" required>
          </p>
          <p>
            <input value="{{ $user->apellido }}" type="text" name="apellido" placeholder="Apellido" class="form-control" required>
          </p>
          <p>
            <input value="{{ $user->id }}" type="text" name="id" placeholder="Identificacion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $user->email }}" type="text" name="email" placeholder="E-mail" class="form-control" required>
          </p>
          <p>
            <input value="{{ $user->telefono }}" type="text" name="telefono" placeholder="Teléfono" class="form-control" required>
          </p>
          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información para éste usuario.
          </p>
          @endif
        <a href="/users" class="btn btn-default">Regresar</a>
      </form>
		</div>
	</div>

  @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</body>
</html>