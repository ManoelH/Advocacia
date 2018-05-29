@extends('templates.menuPrincipal')
@section('principal')
 	
<img id="fundo" src="../../../imgs/fundoPrincipal.jpg"/>

	

						<div style="padding: 3%;">
						<h1 style="text-align: center; margin-top: 2%;">Cadastrar cliente fisico</h1><br/><br/><br/>
              <form class="needs-validation" novalidate>
                    <div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label>Cliente</label>
                        <input type="text" name="cliente" class="form-control" placeholder="Digite o nome do cliente">
                      </div>

                      <div class="col-md-1,5 mb-3">
                        <label>CEP</label>
                        <input type="text" name="cep" class="form-control" placeholder="Digite o CEP">
                      </div>

											<div class="col-md-2 mb-3">
                        <label>Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Digite o telefone">
                      </div>

											<div class="col-md-2 mb-3">
                        <label>Cpf</label>
                          <input type="text" name="cpf" class="form-control" placeholder="digite o CPF" aria-describedby="inputGroupPrepend">
												</div>
												
												<div class="col-md-1,5 mb-3">
													<label>CTPS</label>
														<input type="text" name="ctps" class="form-control" id="validation-CTPS" placeholder="digite a CTPS" aria-describedby="inputGroupPrepend"  >
														<div class="invalid-feedback">
															Por favor digite a CTPS
														</div>
													</div>

													<div class="col-md-2 mb-3">
                        <label for="validation-PISPASEP">PIS/PASEP</label>
                          <input type="text" name="pisPasep" class="form-control" id="validation-PISPASEP" placeholder="digite o PIS/PASEP" aria-describedby="inputGroupPrepend"  >
                          <div class="invalid-feedback">
                            Por favor digite o PIS/PASEP
                          </div>
												</div>												

												<div class="col-md-1 mb-3">
                        <label for="validation-s-CTPS">Série</label>
                          <input type="text" name="serie" class="form-control" id="validation-s-CTPS" aria-describedby="inputGroupPrepend" placeholder="Digite a série"  >
                          <div class="invalid-feedback">
                            Por favor digite a Série da CTPS
                          </div>
												</div>

													<div class="col-md-2 mb-3">
														<label for="validation-cidade">Cidade</label>
														<input type="text" name="cidade" class="form-control" id="validation-cidade" placeholder="Digite a cidade"  >
														<div class="invalid-feedback">
															Por favor preencha o campo cidade
														</div>
													</div>

	                    <div class="col-md-2 mb-3">
                        <label for="validation-rua">Rua</label>
                        <input type="text" name="rua" class="form-control" id="validation-rua" placeholder="Digite a rua"  >
                        <div class="invalid-feedback">
                          Por favor digite a rua
                        </div>
                      </div>

											<div class="col-md-1 mb-3">
                        <label for="validation-n">Nº</label>
                          <input type="text" name="numero" class="form-control" id="validation-n" aria-describedby="inputGroupPrepend" placeholder="Digite a número"  >
                          <div class="invalid-feedback">
                            Por favor digite o número
                          </div>
												</div>

													<div class="col-md-3 mb-3">
														<label for="validation-dt-nascimento">Data de nascimento</label>
														<input type="text" name="dataNascimento" class="form-control" id="validation-dt-nascimento" placeholder="Digite a data de nascimento"  >
														<div class="invalid-feedback">
															Por favor digite a data de nascimento
														</div>
													</div>

													<div class="col-md-3 mb-3">
														<label>RG</label>
														<input type="text" name="rg" class="form-control" placeholder="Digite o RG"  >
														<div class="invalid-feedback">
														Por favor digite o RG
														</div>
													</div>

													<div class="col-md-2 mb-3">
													<label>Estado civil</label>
													<div class="form-group">
														<select class="custom-select" name="estadoCivil"  >
															<option value=""></option>
															<option value="1">Solteiro</option>
															<option value="2">Casado</option>
															<option value="3">Divorciado</option>
														</select>
													</div>
													</div>


                      <div class="col-md-2 mb-3">
                        <label>Conjugue</label>
                        <input type="text" name="conjugue" class="form-control" placeholder="Digite o nome do cliente">
                      </div>

											<div class="col-md-3 mb-3">
														<label>Certidão de casamento</label>
														<input type="text" name="certidaoNascimento" class="form-control" id="validation-casamento" placeholder="Digite a certidão de casamento"  >
														<div class="invalid-feedback">
															Por favor digite a certidão de casamento
														</div>
											</div>

											<div class="col-md-1 mb-3">
													<label>UF</label>
													<div class="form-group">
														<select name="uf" class="custom-select" style="align: bottom;"  >
															<option value=""></option>
															<option value="1">AC</option>
															<option value="2">AL</option>
															<option value="3">AP</option>
															<option value="4">AM</option>
															<option value="5">BA</option>
															<option value="6">CE</option>
															<option value="7">DF</option>
															<option value="8">ES</option>
															<option value="9">GO</option>
															<option value="10">MA</option>
															<option value="11">MG</option>
															<option value="12">MS</option>
															<option value="13">MT</option>
															<option value="14">PA</option>
															<option value="15">PB</option>
															<option value="16">PE</option>
															<option value="17">PI</option>
															<option value="18">PR</option>
															<option value="19">RJ</option>
															<option value="20">RN</option>
															<option value="21">RO</option>
															<option value="22">RR</option>
															<option value="23">RS</option>
															<option value="24">SC</option>
															<option value="25">SE</option>
															<option value="26">SP</option>
															<option value="27">TO</option>
														</select>
													</div>
													</div>
													
													<div class="col-md-1 mb-3">
													<label>UF da CTPS</label>
													<div class="form-group">
														<select name="ufCtps" class="custom-select"  >
															<option value=""></option>
															<option value="1">AC</option>
															<option value="2">AL</option>
															<option value="3">AP</option>
															<option value="4">AM</option>
															<option value="5">BA</option>
															<option value="6">CE</option>
															<option value="7">DF</option>
															<option value="8">ES</option>
															<option value="9">GO</option>
															<option value="10">MA</option>
															<option value="11">MG</option>
															<option value="12">MS</option>
															<option value="13">MT</option>
															<option value="14">PA</option>
															<option value="15">PB</option>
															<option value="16">PE</option>
															<option value="17">PI</option>
															<option value="18">PR</option>
															<option value="19">RJ</option>
															<option value="20">RN</option>
															<option value="21">RO</option>
															<option value="22">RR</option>
															<option value="23">RS</option>
															<option value="24">SC</option>
															<option value="25">SE</option>
															<option value="26">SP</option>
															<option value="27">TO</option>
														</select>
													</div>
													</div>

													<div class="col-md-2 mb-3">
													<label>Imagem</label>
													<img src="../../../imgs/uploads/cliente fisico.jpg" alt="titulo" class="img-thumbnail" style="width:200px; height:150px;">
													</div>															

											    	<input type="file" class="form-control-file" id="exampleFormControlFile1" style="width: 350px;">




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


				