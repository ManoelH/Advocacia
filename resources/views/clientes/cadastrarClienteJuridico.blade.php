@extends('templates.menuPrincipal')
@section('principal')

		<title>Cadastrar cliente juridico</title>
		<img id="fundo" src="../../../imgs/fundoPrincipal.jpg"/>
    	<div style="padding: 3%;">
				<h1 style="text-align: center; margin-top: 2%;">Cadastrar cliente jurídico</h1><br/><br/><br/>
              <form class="needs-validation" enctype="multipart/form-data" method="post" action="{{route('cadastroClienteJuridico')}}" novalidate>
							{{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label>Nome fantasia</label>
                        <input type="text" name="nomeFantasia" class="form-control" placeholder="Digite o nome fantasia"  >
                      </div>

                      <div class="col-md-1,5 mb-3">
                        <label>CEP</label>
                        <input type="text" name="cep" class="form-control" placeholder="Digite o CEP"  >
                      </div>

	 										<div class="col-md-2 mb-3">
													<label>Área de atuação</label>
													<div class="form-group">
														<select name="areaAtuacao" class="custom-select" name="areaAtuacao" style="align: bottom;">
															<option value=""></option>
															<option value="Administração">Administração</option>
															<option value="Agrícola">Agrícola</option>
															<option value="Atacadista">Atacadista</option>
															<option value="Comércio de roupas">Comércio de roupas</option>
															<option value="Comércio de sapatos">Comércio de sapatos</option>
															<option value="Comécio peças auto.">Comécio peças auto.</option>
															<option value="Contabilidade">Contabilidade</option>
															<option value="Educação">Educação</option>
															<option value="Educação superior">Educação superior</option>
															<option value="Engenharia civil">Engenharia civil</option>
															<option value="E-commerceMG">E-commerceMG</option>
															<option value="Farmacêutico">Farmacêutico</option>
															<option value="Industrial">Industrial</option>
															<option value="Móveis e eletro">Móveis e eletro</option>
															<option value="Perfumaria">Perfumaria</option>
															<option value="Serviços alimenticios">Serviços alimenticios</option>
															<option value="Serviços gerais">Serviços gerais</option>
															<option value="Transporte público">Transporte público</option>
															<option value="Varejo">Varejo</option>
														</select>
													</div>
													</div>

											<div class="col-md-2 mb-3">
                        <label>Telefone</label>
                        <input type="text" class="form-control" name="telefone" placeholder="Digite o telefone"  >
                      </div>

											<div class="col-md-2 mb-3">
                        <label>CNPJ</label>
                          <input type="text" class="form-control" name="cnpj"  placeholder="digite o CNPJ" aria-describedby="inputGroupPrepend">
												</div>
												
												<div class="col-md-2 mb-3">
													<label>Razão social</label>
														<input type="text" class="form-control" name="razaoSocial" id="validation-razao" aria-describedby="inputGroupPrepend">
													</div>

													<div class="col-md-2 mb-3">
														<label>Cidade</label>
														<input type="text" class="form-control" name="cidade" placeholder="Digite a cidade"  >
													</div>

	                    <div class="col-md-2 mb-3">
                        <label>Rua</label>
                        <input type="text" class="form-control" name="rua" placeholder="Digite a rua"  >
                        
                      </div>

											<div class="col-md-1,5 mb-3">
                        <label>Nº</label>
                          <input type="text" class="form-control" name="n" aria-describedby="inputGroupPrepend" placeholder="Digite a número"  >
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