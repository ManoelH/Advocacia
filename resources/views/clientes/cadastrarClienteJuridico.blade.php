<!DOCTYPE>
<html>
<head>
	<meta charset='UTF-8'>
	
	<style>
	
	#fundo{
		 position: fixed;
		 height: 100%;
		 width: 100%;
		 z-index: -999;  
	 };
	
	</style>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>

<body>
		<title>Cadastrar cliente juridico</title>
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
						<a class="dropdown-item" href="#">Cadastrar cliente
						<div class="btn-group dropright show">
    <class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      Dropright
    </button>
    <div class="dropdown-menu show" x-placement="right-start" style="position: absolute; transform: translate3d(108px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
						</a>
						

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
				<h1 style="text-align: center;">Cadastrar cliente jurídico</h1><br/><br/><br/>

              <form class="needs-validation" enctype="multipart/form-data" method="post" action="{{route('cad')}}" novalidate>
							{{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label for="validation-nome-fatasia">Nome fantasia</label>
                        <input type="text" class="form-control" name="nomeFantasia" id="validation-nome-fatasia" placeholder="Digite o nome fantasia" required>
                        <div class="invalid-feedback">
                          Por favor digite o nome fantasia
                        </div>
                      </div>

                      <div class="col-md-1,5 mb-3">
                        <label for="validation-cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="validation-cep" placeholder="Digite o CEP" required>
                        <div class="invalid-feedback">
												Por favor digite o cep
                        </div>
                      </div>

	 										<div class="col-md-2 mb-3">
													<label>Área de atuação</label>
													<div class="form-group">
														<select class="custom-select" name="areaAtuacao" style="align: bottom;" required>
															<option value=""></option>
															<option value="1">Administração</option>
															<option value="2">Agrícola</option>
															<option value="3">Atacadista</option>
															<option value="4">Comércio de roupas</option>
															<option value="5">Comércio de sapatos</option>
															<option value="6">Comécio peças auto.</option>
															<option value="7">Contabilidade</option>
															<option value="8">Educação</option>
															<option value="9">Educação superior</option>
															<option value="10">Engenharia civil</option>
															<option value="11">E-commerceMG</option>
															<option value="12">Farmacêutico</option>
															<option value="13">Industrial</option>
															<option value="14">Móveis e eletro</option>
															<option value="15">Perfumaria</option>
															<option value="16">Serviços alimenticios</option>
															<option value="17">Serviços gerais</option>
															<option value="18">Transporte público</option>
															<option value="19">Varejo</option>
														</select>
													</div>
													</div>

											<div class="col-md-2 mb-3">
                        <label for="validation-telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="validation-telefone" placeholder="Digite o telefone" required>
                        <div class="invalid-feedback">
												Por favor digite o telefone
                        </div>
                      </div>

											<div class="col-md-2 mb-3">
                        <label for="validation-cnpj">CNPJ</label>
                          <input type="text" class="form-control" name="cnpj" id="validation-cnpj" placeholder="digite o CNPJ" aria-describedby="inputGroupPrepend" required>
                          <div class="invalid-feedback">
                            Por favor digite o CNPJ
                          </div>
												</div>
												
												<div class="col-md-2 mb-3">
													<label for="validation-razao">Razão social</label>
														<input type="text" class="form-control" name="razaoSocial" id="validation-razao" placeholder="digite a razão social" aria-describedby="inputGroupPrepend" required>
														<div class="invalid-feedback">
															Por favor digite a razão social
														</div>
													</div>

													<div class="col-md-2 mb-3">
														<label for="validation-cidade">Cidade</label>
														<input type="text" class="form-control" name="cidade" id="validation-cidade" placeholder="Digite a cidade" required>
														<div class="invalid-feedback">
															Por favor preencha o campo cidade
														</div>
													</div>

	                    <div class="col-md-2 mb-3">
                        <label for="validation-rua">Rua</label>
                        <input type="text" class="form-control" name="rua" id="validation-rua" placeholder="Digite a rua" required>
                        <div class="invalid-feedback">
                          Por favor digite a rua
                        </div>
                      </div>

											<div class="col-md-1,5 mb-3">
                        <label for="validation-n">Nº</label>
                          <input type="text" class="form-control" name="n" id="validation-n" aria-describedby="inputGroupPrepend" placeholder="Digite a número" required>
                          <div class="invalid-feedback">
                            Por favor digite o número
                          </div>
												</div>

													<div class="col-md-2 mb-3">
													<label>Imagem</label>
													<img src="../../../imgs/uploads/cliente fisico.jpg" alt="titulo" class="img-thumbnail" style="width:200px; height:150px;">
													</div>
											</div>
											<input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1" style="width: 350px;">
													
                    </div>
										
                      
										</div>
										


                    <div class="form-group">
                      <div class="form-check">
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
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