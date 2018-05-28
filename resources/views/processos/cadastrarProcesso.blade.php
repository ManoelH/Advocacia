@extends('templates.menuPrincipal')
@section('principal')

		<title>Cadastrar processo</title>
		<img id="fundo" src="../../../imgs/fundoPrincipal.jpg"/>

					<div style="padding: 3%;">
						<h1  style="text-align: center; margin-top: 2%;">Cadastrar processo</h1><br/><br/><br/>
              <form enctype="multipart/form-data" method="post" action="{{route('processoCadastradoCaio')}}">
							{{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label>Título</label>
                        <input type="text" class="form-control" name="titulo"placeholder="Digite o numero">
                    	</div>

                      <div class="col-md-2 mb-3">
                        <label>Número</label>
                        <input type="text" class="form-control" name="numero" placeholder="Digite o numero">
                      </div>
                        <input type="hidden" name="assunto"  value="trabalhista">

											<div class="col-md-2 mb-3">
                        <label>Valor da causa</label>
                        <input type="text" class="form-control" name="valorCausa"  placeholder="Digite o valor da causa" >
                      </div>

											<div class="col-md-2 mb-3">
												<label>Fase processual</label>
												<div class="form-group">
													<select class="custom-select" name="faseProcessual" >
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
														<select class="custom-select" name="cliente" >
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
														<select class="custom-select" name="reu" >
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
														<select class="custom-select" name="advogado" >
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
														<select class="custom-select" name="juiz" >
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
														<select class="custom-select" name="testemunha" >
															<option value=""></option>
															<option value="1">Testemunha 1</option>
															<option value="2">Testemunha 2</option>
															<option value="3">Testemunha 3</option>
														</select>
													</div>
													</div>

											<div class="col-md-1,5 mb-3">
                        <label >Data de inicio do processo</label>
                          <input type="date" name="dataInicio" class="form-control"  aria-describedby="inputGroupPrepend" placeholder="Digite a data" >		
                      </div>
										
                      
										</div>
										<input type="file" class="form-control-file" id="exampleFormControlFile1" namespace="arquivo" style="width: 350px;">
										<button class="btn btn-primary" type="submit" >Cadastrar</button>
                  </form>
								</div>
@endsection