<!DOCTYPE>
<html>
<head>
	<meta charset='UTF-8'>
	
	<style>

	#menu{
	position: relative;	
	float: left;
	}
	
	#logout{
	float: right;
	margin-right:50px;
	}

	#fundo{
		 position: fixed;
		 height: 100%;
		 width: 100%;
		 z-index: -999;  
	 };
	
	@import url('https://fonts.googleapis.com/css?family=Do+Hyeon');

	
	</style>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>

<body>
	
	
		

		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark"style="position:fixed; width: 100%;">
				<a class="navbar-brand" href="{{URL::route('home')}}">Home</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			  
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Clientes
					  </a>
					  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ URL::route('cadClienteFisico') }}">Cadastrar cliente fisico</a>
						<a class="dropdown-item" href="{{ URL::route('cadClienteJuridico') }}">Cadastrar cliente juridico</a>
						<a class="dropdown-item" href="#">Editar cliente</a>
						<a class="dropdown-item" href="#">Listar clientes</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Excluir cliente</a>
					  </div>
					</li>


					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Processos
					  </a>
					  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ URL::route('cadProcesso') }}">Cadastrar processo cliente fisico</a>
						<a class="dropdown-item" href="{{ URL::route('listaProcessos') }}">Listar processos cliente fisico</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ URL::route('processosArquivados') }}">Listar processos arquivados cliente fisico</a>
					  </div>
					</li>

					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Agendamentos
					  </a>
					  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Cadastrar agendamento</a>
						<a class="dropdown-item" href="#">Editar agendamento</a>
						<a class="dropdown-item" href="#">Listar agendamentos</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Excluir agendamento</a>
					  </div>
					</li>

					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pessoas envolvidas
					  </a>
					  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Cadastrar pessoa envolvida</a>
						<a class="dropdown-item" href="#">Editar pessoa envolvida</a>
						<a class="dropdown-item" href="#">Listar pessoas envolvidas</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Excluir pessoas envolvida</a>
					  </div>
					</li>

					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Usuários
					  </a>
					  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ URL::route('cadUsuario') }}">Cadastrar usuário</a>
						<a class="dropdown-item" href="#">Editar usuário</a>
						<a class="dropdown-item" href="#">Listar usuários</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Excluir usuário</a>
					  </div>
					</li>
				  </ul>
				  <form action="{{route('sair')}}" method="post" class="form-inline my-2 my-lg-0">
							{{csrf_field()}}
					<button class="btn btn-dark" type="submit">Sair</button>
				  </form>
				</div>
			  </nav>

						@yield('principal')
						
						@stack('js')

              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
             </body>
             
             
             </html>
             