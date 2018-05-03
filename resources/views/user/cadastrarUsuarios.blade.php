<!DOCTYPE>
<html>
<head>
	<meta charset='UTF-8'>
	
	<style>

	.centro{
		position: absolute;
		right: 50%;
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
		<title>Cadastrar usuário</title>
		<img id="fundo" src="../../../imgs/fundoPrincipal.jpg"/>
		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
				<a class="navbar-brand" href="#">Home</a>
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
						<a class="dropdown-item" href="#">Cadastrar processo</a>
						<a class="dropdown-item" href="#">Editar processo</a>
						<a class="dropdown-item" href="#">Listar processos</a>
						<a class="dropdown-item" href="#">Arquivar processo</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Excluir processo</a>
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
					<li class="nav-item">
					  <a class="nav-link disabled" href="#">Disabled</a>
					</li>
				  </ul>
				  <form action="{{route('redireciona')}}" method="post" class="form-inline my-2 my-lg-0">
							{{csrf_field()}}
					<button class="btn btn-dark" type="submit">Sair</button>
				  </form>
				</div>
			  </nav>
				<h1 style="text-align: center;">Cadastrar usuário</h1><br/><br/><br/>

				<form class="needs-validation" novalidate>
                    <div class="form-row" style="position: absolute !important; right: 45% !important;">
                      <div>
                        <label for="validation-usuario">Usuário</label>
                        <input type="text" class="form-control" id="validation-usuario" placeholder="Digite o usuário" required>
                        <div class="invalid-feedback">
                          Por favor digite o usuário
                        </div>

												<label for="validation-senha">Senha</label>
                        <input type="password" class="form-control" id="validation-senha" placeholder="Digite a senha" required>
                        <div class="invalid-feedback">
												Por favor digite a senha
                        </div>

												<label>Tipo de usuário</label>
													<div class="form-group">
														<select class="custom-select" style="align: bottom; width: 155px;" required>
															<option value=""></option>
															<option value="1">Advogado</option>
															<option value="2">Usuário comum</option>
														</select>
													</div>
													<button class="btn btn-primary" type="submit" style="position: absolute !important; right: 52% !important;">Cadastrar</button>
                      </div>

											</div>		

                    <div class="form-group">
                      <div class="form-check">
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    
                  </form>

									                  <script>
                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                  (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      var forms = document.getElementsByClassName('needs-validation');
                      // Loop over them and prevent submission
                      var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                          if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                          }
                          form.classList.add('was-validated');
                        }, false);
                      });
                    }, false);
                  })();
									</script>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>


</html>