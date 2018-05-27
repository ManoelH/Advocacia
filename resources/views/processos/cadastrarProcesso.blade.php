@extends('templates.menuPrincipal')
@section('principal')

		<title>Cadastrar processo</title>
		<img id="fundo" src="../../../imgs/fundoPrincipal.jpg"/>

					<div style="padding: 3%;">
						<h1  style="text-align: center; margin-top: 2%;">Cadastrar processo</h1><br/><br/><br/>
              <form class="needs-validation" enctype="multipart/form-data" method="post" action="{{route('processoCadastrado')}}" novalidate>
							{{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label for="validation-numero">Título</label>
                        <input type="text" class="form-control" name="titulo" id="validation-titulo" placeholder="Digite o numero" required>
                        <div class="invalid-feedback">
                          Por favor digite o título
                        </div>
                    	</div>

                      <div class="col-md-2 mb-3">
                        <label for="validation-numero">Número</label>
                        <input type="text" class="form-control" name="numero" id="validation-numero" placeholder="Digite o numero" required>
                        <div class="invalid-feedback">
                          Por favor digite o numero
                        </div>
                      </div>

                      <div class="col-md-1,5 mb-3">
                        <label for="validation-cep">Assunto</label>
                        <input type="text" name="cep" class="form-control" name="assunto" id="validation-assunto" value="Trabalhista" disabled="disabled" required>
                        <div class="invalid-feedback">
												Por favor digite o assunto
                        </div>
                      </div>

											<div class="col-md-2 mb-3">
                        <label for="validation-telefone">Valor da causa</label>
                        <input type="text" name="telefone" class="form-control" name="valorCausa" id="validation-telefone" placeholder="Digite o valor da causa" required>
                        <div class="invalid-feedback">
												Por favor digite o valor
                        </div>
                      </div>

											<div class="col-md-2 mb-3">
												<label>Fase processual</label>
												<div class="form-group">
													<select class="custom-select" name="faseProcessual" required>
														<option value=""></option>
														<option value="1">Aguardando distribuição</option>
														<option value="2">Andamento</option>
														<option value="3">Conhecimento</option>
														<option value="4">Entrevista</option>
														<option value="5">Execução</option>
														<option value="6">Execução definitiva</option>
														<option value="7">Execução provisória</option>
														<option value="8">Instrução</option>
														<option value="9">Liquidação</option>
														<option value="10">Liquidado</option>
														<option value="11">Recursal</option>
													</select>
												</div>
												</div>

	                    <div class="col-md-2 mb-3">
													<label>Cliente</label>
													<div class="form-group">
														<select class="custom-select" name="cliente" required>
															<option value=""></option>
															<option value="1">Cliente 1</option>
															<option value="2">Cliente 2</option>
															<option value="3">Cliente 3</option>
														</select>
													</div>
													</div>

                      <div class="col-md-2 mb-3">
													<label>Réu</label>
													<div class="form-group">
														<select class="custom-select" name="reu" required>
															<option value=""></option>
															<option value="1">Réu 1</option>
															<option value="2">Réu 2</option>
															<option value="3">Réu 3</option>
														</select>
													</div>
													</div>    

                        <div class="col-md-2 mb-3">
													<label>Advogado</label>
													<div class="form-group">
														<select class="custom-select" name="advogado" required>
															<option value=""></option>
															<option value="1">Advogado 1</option>
															<option value="2">Advogado 2</option>
															<option value="3">Advogado 3</option>
														</select>
													</div>
													</div>

                      <div class="col-md-2 mb-3">
													<label>Juíz</label>
													<div class="form-group">
														<select class="custom-select" name="juiz" required>
															<option value=""></option>
															<option value="1">Juíz 1</option>
															<option value="2">Juíz 2</option>
															<option value="3">Juíz 3</option>
														</select>
													</div>
													</div>

                        <div class="col-md-2 mb-3">
													<label>Testemunhas</label>
													<div class="form-group">
														<select class="custom-select" name="testemunha" required>
															<option value=""></option>
															<option value="1">Testemunha 1</option>
															<option value="2">Testemunha 2</option>
															<option value="3">Testemunha 3</option>
														</select>
													</div>
													</div>

											<div class="col-md-1,5 mb-3">
                        <label for="validation-n">Data de inicio do processo</label>
                          <input type="text" name="dataInicio" class="form-control" name="n" id="validation-n" aria-describedby="inputGroupPrepend" placeholder="Digite a data" required>
                          <div class="invalid-feedback">
                            Por favor digite a data do inicio
                          </div>			
                      </div>
										
                      
										</div>
										<input type="file" class="form-control-file" id="exampleFormControlFile1" namespace="arquivo" style="width: 350px;">


                    <div class="form-group">
                      <div class="form-check">
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit" >Cadastrar</button>
                  </form>
								</div>
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
@endsection