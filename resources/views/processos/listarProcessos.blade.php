@extends('templates.menuPrincipal')
@section('principal')
 	
<img id="fundo" src="../../imgs/fundoPrincipal.jpg"/>
    
    <div style="padding: 6%;">
    <h1 style="text-align: center; font-size:20px;">Processos: Cliente fisico</h1>
		<table class="table table-striped" style="background-color: white;">
  			<thead>
    				<tr>
      				<th scope="col">Título</th>
      				<th scope="col">Número</th>
      				<th scope="col">Cliente</th>
							<th scope="col">Advogado</th>
							<th scope="col">Editar</th>
							<th scope="col">Excluir</th>
							<th scope="col">Arquivar</th>
							<th scope="col">Imprimir</th>
    				</tr>
  			</thead>
  			<tbody>
			
				@foreach ($processos as $processo)
					<tr>
					<td>{{$processo->titulo}}</td>
					<td>{{$processo->numero}}</td>
					<td>{{$processo->cliente}}</td>
					<td>{{$processo->advogado}}</td>
                    
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
					data-titulo="{{$processo->titulo}}" data-numero="{{$processo->numero}}" data-valorCausa={{$processo->valorCausa}}
					data-faseProcessual={{$processo->faseProcessual}} data-cliente="{{$processo->cliente}}" data-reu="{{$processo->reu}}"
					data-advogado="{{$processo->advogado}}" data-juiz="{{$processo->juiz}}" data-testemunha1="{{$processo->testemunha1}}"
					data-testemunha2="{{$processo->testemunha2}}" data-testemunha3="{{$processo->testemunha3}}"
					data-dataInicio="{{$processo->dataInicio}}">Editar</button></td>

					<td><a type="button" class="btn btn-danger" href="{{ URL::route('excluirProcesso', ['id' => $processo->id])}}"
					style="border-radius: 6px !important; border-color: transparent;">X</a></td>

					<td><a type="button" class="btn btn-success" href="{{ URL::route('arquivaProcesso', ['processo' => $processo])}}"
					style="border-radius: 6px !important; border-color: transparent;">Arquivar</a></td>
					
					<td><a type="button" class="btn btn-success" href="#" style="border-radius: 6px !important; border-color: transparent;">Imprimir</a></td>
					</tr>
			    @endforeach
				
  			</tbody>
		</table>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 id="modal-title">Editar processo: </h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
        <form  method="get" action="{{route('editarProcesso', ['processo' => $processo])}}">
<div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label>Título</label>
                        <input type="text" id="id-titulo" class="form-control" name="titulo" placeholder="Digite o titulo">
                    	</div>

                      <div class="col-md-2 mb-3">
                        <label>Número</label>
                        <input type="number" id="id-numero" class="form-control" name="numero" placeholder="Digite o numero">
                      </div>
                        <input type="hidden" id="id-assunto" name="assunto"  value="trabalhista">

											<div class="col-md-2 mb-3">
                        <label>Valor da causa</label>
                        <input type="text" id="id-valorCausa" class="form-control" name="valorCausa"  placeholder="Digite o valor da causa" >
                      </div>

											<div class="col-md-2 mb-3">
												<label>Fase processual</label>
												<div class="form-group">
													<select class="custom-select" id="id-faseProcessual" name="faseProcessual" >
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
														<select class="custom-select" id="id-cliente" name="cliente">
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
														<select class="custom-select" id="id-reu" name="reu" >
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
														<select class="custom-select" id="id-advogado" name="advogado" >
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
														<select class="custom-select" id="id-juiz" name="juiz" >
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
														<select class="custom-select" id="id-testemunha1" name="testemunha1" >
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
														<select class="custom-select" id="id-testemunha2" name="testemunha2" >
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
														<select class="custom-select" id="id-testemunha3" name="testemunha3" >
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
                          <input type="date" id="id-dataInicio" name="dataInicio" class="form-control"  aria-describedby="inputGroupPrepend" placeholder="Digite a data" >		
                      </div>
										
                      
										</div>

			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-primary">Salvar alterações</button>			  			  
			</div>
			</form>
		  </div>
		</div>
	  </div>

		@push('javascript','<script src="' .asset('js/jquery-3.2.1.min.js'). '"> </script>')
		@push('js','<script type="text/javascript" src="' .asset('js/listaProcesso.js'). '"> </script>')
		@push('javascrupt','<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>')
		@push('javascript','<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>')  
  

@endsection	