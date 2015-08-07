<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Sistema Gastos </a>
		</div>	
		<div class="collapse navbar-collapse" >
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
		          	aria-haspopup="true" aria-expanded="false">Gasto <span class="caret"></span></a>
		          	<ul class="dropdown-menu">
		            	<li><a href="{!! route('gasto') !!}" >Ver</a></li>
		            	<li><a href="{!! route('tipo_gasto') !!}" >Pagas</a></li>
		            	<li><a href="#">A Pagar</a></li>
		         	</ul>
		        </li>
		      <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
		          	aria-haspopup="true" aria-expanded="false">Tipo Gasto <span class="caret"></span></a>
		          	<ul class="dropdown-menu">
		            	<li><a href="{!! route('tipo_gasto') !!}" >Ver</a></li>
		            	<li><a href="{!! route('tipo_gasto_crear') !!}">Agregar</a></li>
		         	</ul>
		        </li>
	      	</ul>
		</div>
	</div>
</nav>