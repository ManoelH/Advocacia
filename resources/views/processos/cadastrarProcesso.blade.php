@extends('templates.menuPrincipal')
@section('principal')

		<title>Cadastrar processo</title>
		<img id="fundo" src="../../../imgs/fundoPrincipal.jpg"/>
				<h1 style="text-align: center;">Cadastrar processo</h1><br/><br/><br/>

              <form class="needs-validation" enctype="multipart/form-data" method="post" action="{{route('cad')}}" novalidate>
							{{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label for="validation-numero">Número</label>
                        <input type="text" class="form-control" name="numero" id="validation-numero" placeholder="Digite o numero" required>
                        <div class="invalid-feedback">
                          Por favor digite o numero
                        </div>
                      </div>

                      <div class="col-md-1,5 mb-3">
                        <label for="validation-cep">Assunto</label>
                        <input type="text" name="cep" class="form-control" name="cep" id="validation-cep" placeholder="Digite o CEP" required>
                        <div class="invalid-feedback">
												Por favor digite o cep
                        </div>
                      </div>

	 										<div class="col-md-2 mb-3">
													<label>Área de atuação</label>
													<div class="form-group">
														<select name="areaAtuacao" class="custom-select" name="areaAtuacao" style="align: bottom;" required>
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
                        <input type="text" name="telefone" class="form-control" name="telefone" id="validation-telefone" placeholder="Digite o telefone" required>
                        <div class="invalid-feedback">
												Por favor digite o telefone
                        </div>
                      </div>

											<div class="col-md-2 mb-3">
                        <label for="validation-cnpj">CNPJ</label>
                          <input type="text" name="cnpj" class="form-control" name="cnpj" id="validation-cnpj" placeholder="digite o CNPJ" aria-describedby="inputGroupPrepend" required>
                          <div class="invalid-feedback">
                            Por favor digite o CNPJ
                          </div>
												</div>
												
												<div class="col-md-2 mb-3">
													<label for="validation-razao">Razão social</label>
														<input type="text" name="razaoSocial" class="form-control" name="razaoSocial" id="validation-razao" placeholder="digite a razão social" aria-describedby="inputGroupPrepend" required>
														<div class="invalid-feedback">
															Por favor digite a razão social
														</div>
													</div>

													<div class="col-md-2 mb-3">
														<label for="validation-cidade">Cidade</label>
														<input type="text" name="cidade" class="form-control" name="cidade" id="validation-cidade" placeholder="Digite a cidade" required>
														<div class="invalid-feedback">
															Por favor preencha o campo cidade
														</div>
													</div>

	                    <div class="col-md-2 mb-3">
                        <label for="validation-rua">Rua</label>
                        <input type="text" name="rua" class="form-control" name="rua" id="validation-rua" placeholder="Digite a rua" required>
                        <div class="invalid-feedback">
                          Por favor digite a rua
                        </div>
                      </div>

											<div class="col-md-1,5 mb-3">
                        <label for="validation-n">Nº</label>
                          <input type="text" name="numero" class="form-control" name="n" id="validation-n" aria-describedby="inputGroupPrepend" placeholder="Digite a número" required>
                          <div class="invalid-feedback">
                            Por favor digite o número
                          </div>
													
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
@endsection