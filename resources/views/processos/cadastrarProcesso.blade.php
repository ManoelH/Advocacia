@extends('templates.menuPrincipal')
@section('principal')

		<title>Cadastrar processo</title>
		<img id="fundo" src="../../../imgs/fundoPrincipal.jpg"/>

					<div style="padding: 3%;">
						<h1  style="text-align: center; margin-top: 2%;">Cadastrar processo: Cliente fisico</h1><br/><br/><br/>
              <form enctype="multipart/form-data" method="post" action="{{route('processoCadastrado')}}">
							{{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label>Título</label>
                        <input type="text" class="form-control" name="titulo"placeholder="Digite o titulo">
                    	</div>

                      <div class="col-md-2 mb-3">
                        <label>Número</label>
                        <input type="number" class="form-control" name="numero" placeholder="Digite o numero">
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
														<option value="Aguardando distribuição">Aguardando distribuição</option>
														<option value="Andamento">Andamento</option>
														<option value="Conhecimento">Conhecimento</option>
														<option value="Entrevista">Entrevista</option>
														<option value="Execução">Execução</option>
														<option value="Execução definitiva">Execução definitiva</option>
														<option value="Execução provisória">Execução provisória</option>
														<option value="Instrução">Instrução</option>
														<option value="Liquidação">Liquidação</option>
														<option value="Liquidado">Liquidado</option>
														<option value="Recursal">Recursal</option>
													</select>
												</div>
												</div>

	                    <div class="col-md-2 mb-3">
													<label>Cliente</label>
													<div class="form-group">
														<select class="custom-select" name="cliente">
															<option value=""></option>
															<option value="João">João</option>
															<option value="Alberto">Alberto</option>
															<option value="Gilherme">Gilherme</option>
														</select>
													</div>
													</div>

                      <div class="col-md-2 mb-3">
													<label>Réu</label>
													<div class="form-group">
														<select class="custom-select" name="reu" >
															<option value=""></option>
															<option value="JS laticineos">JS laticineos</option>
															<option value="AM Softwares">AM Softwares</option>
															<option value="B.A EAD">B.A EAD</option>
														</select>
													</div>
													</div>    

                        <div class="col-md-2 mb-3">
													<label>Advogado</label>
													<div class="form-group">
														<select class="custom-select" name="advogado" >
															<option value=""></option>
															<option value="Manoel">Manoel</option>
															<option value="Henrique">Henrique</option>
															<option value="Letícia">Letícia</option>
														</select>
													</div>
													</div>

                      <div class="col-md-2 mb-3">
													<label>Juíz</label>
													<div class="form-group">
														<select class="custom-select" name="juiz" >
															<option value=""></option>
															<option value="Elizangela">Elizangela</option>
															<option value="Gabriel">Gabriel</option>
															<option value="Raphael">Raphael</option>
														</select>
													</div>
													</div>

                        <div class="col-md-2 mb-3">
													<label>1ª Testemunha</label>
													<div class="form-group">
														<select class="custom-select" name="testemunha1" >
															<option value=""></option>
															<option value="Maria">Maria</option>
															<option value="José">José</option>
															<option value="Antônia">Antônia</option>
															<option value="Julia">Julia</option>
															<option value="Ulisses">Ulisses</option>
														</select>
													</div>
													</div>

                        <div class="col-md-2 mb-3">
													<label>2ª Testemunha</label>
													<div class="form-group">
														<select class="custom-select" name="testemunha2" >
															<option value=""></option>
															<option value="Maria">Maria</option>
															<option value="José">José</option>
															<option value="Antônia">Antônia</option>
															<option value="Julia">Julia</option>
															<option value="Ulisses">Ulisses</option>
														</select>
													</div>
													</div>

													
                        <div class="col-md-2 mb-3">
													<label>3ª Testemunha</label>
													<div class="form-group">
														<select class="custom-select" name="testemunha3" >
															<option value=""></option>
															<option value="Maria">Maria</option>
															<option value="José">José</option>
															<option value="Antônia">Antônia</option>
															<option value="Julia">Julia</option>
															<option value="Ulisses">Ulisses</option>
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