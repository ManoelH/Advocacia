@extends('templates.menuPrincipal')
@section('principal')
 	
				<img id="fundo" src="../../../imgs/fundoPrincipal.jpg"/>
        <div style="padding: 3%;">
				<h1 style="text-align: center; margin-top: 2%;">Cadastrar usuário</h1><br/><br/><br/>
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
														<select class="custom-select" required>
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