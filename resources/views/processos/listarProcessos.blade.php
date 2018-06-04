@extends('templates.menuPrincipal')
@section('principal')
 	
<img id="fundo" src="../../imgs/fundoPrincipal.jpg"/>
    
    <div style="padding: 6%;">
    <h1 style="text-align: center; font-size:20px;">Processos</h1>
		<table class="table table-striped" style="background-color: white;">
  			<thead>
    				<tr>
						<th scope="col">ID</th>
      					<th scope="col">Título</th>
      					<th scope="col">Número</th>
      					<th scope="col">Cliente</th>
						<th scope="col">Advogado</th>
						<th scope="col">Editar</th>
    				</tr>
  			</thead>
  			<tbody>
				@foreach ($processos as $processo)
					<tr>
					<th scope="row">{{$processo->id}}</th>
					<td>{{$processo->titulo}}</td>
					<td>{{$processo->numero}}</td>
					<td>{{$processo->cliente}}</td>
					<td>{{$processo->advogado}}</td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#editar-processo" data-whatever="@mdo">Open modal for @mdo
					data-whateverTitulo={{$processo->titulo]}} data-whateverNumero={{$processo->numero}} data-whateverValor={{$processo->valor}} data-whateverFase={{$processo->faseProcessual}} 
					data-whateverCliente={{$processo->cliente}} data-whateverReu={{$processo->reu}} data-whateverAdvogado={{$processo->advogado}} data-whateverJuiz={{$processo->juiz}} data-whateverTestemunha1={{$processo->testemunha1}} 
					data-whateverTestemunha2={{$processo->testemunha2}} data-whateverTestemunha3={{$processo->testemunha3}} data-whateverDataInicio={{$processo->dataInicio}}>Editar</button></td>
					</tr>
			    @endforeach
				
  			</tbody>
		</table>
	</div>	


	//MODAL


	<div class="modal fade bd-example-modal-lg" id="editar-processo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="width: 100%;">
  			<div class="modal-dialog modal-lg">
    			<div class="modal-content" style="padding: 10px; background-color: #E3E3E3;">
				<h1 style="text-align: center; font-size: 20px;">Editar Processo</h1>
      				<form enctype="multipart/form-data" method="post" action="#">
							{{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-2 mb-3">
                        <label>Título</label>
                        <input type="text" class="form-control" name="titulo"placeholder="Digite o titulo" id="id-titulo">
                    	</div>

                      <div class="col-md-2 mb-3">
                        <label>Número</label>
                        <input type="text" class="form-control" name="numero" placeholder="Digite o numero" id="id-numero">
                      </div>
                        <input type="hidden" name="assunto"  value="trabalhista">

											<div class="col-md-2 mb-3">
                        <label>Valor da causa</label>
                        <input type="text" class="form-control" name="valorCausa"  placeholder="Digite o valor da causa" id="id-valorCausa">
                      </div>

											<div class="col-md-2 mb-3">
												<label>Fase processual</label>
												<div class="form-group">
													<select class="custom-select" name="faseProcessual" id="id-faseProcessual">
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
														<select class="custom-select" name="cliente" id="id-cliente">
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
														<select class="custom-select" name="reu" id="id-reu">
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
														<select class="custom-select" name="advogado" id="id-advogado">
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
														<select class="custom-select" name="juiz" id="id-juiz">
															<option value=""></option>
															<option value="1">Juíz 1</option>
															<option value="2">Juíz 2</option>
															<option value="3">Juíz 3</option>
														</select>
													</div>
													</div>

                        <div class="col-md-2 mb-3">
													<label>1ª Testemunha</label>
													<div class="form-group">
														<select class="custom-select" name="testemunha1" id="id-testemunha1">
															<option value=""></option>
															<option value="1">Testemunha 1</option>
															<option value="2">Testemunha 2</option>
															<option value="3">Testemunha 3</option>
														</select>
													</div>
													</div>

                        <div class="col-md-2 mb-3">
													<label>2ª Testemunha</label>
													<div class="form-group">
														<select class="custom-select" name="testemunha2" id="id-testemunha2">
															<option value=""></option>
															<option value="1">Testemunha 1</option>
															<option value="2">Testemunha 2</option>
															<option value="3">Testemunha 3</option>
														</select>
													</div>
													</div>									
                        <div class="col-md-2 mb-3">
													<label>3ª Testemunha</label>
													<div class="form-group">
													<select class="custom-select" name="testemunha3" id="id-testemunha3">
													<option value=""></option>
													<option value="1">Testemunha 1</option>
													<option value="2">Testemunha 2</option>
													<option value="3">Testemunha 3</option>
												</select>
										</div>
									</div>
								<div class="col-md-1,5 mb-3">
                        <label >Data de inicio do processo</label>
                          <input type="date" name="dataInicio" class="form-control"  aria-describedby="inputGroupPrepend" placeholder="Digite a data" id="id-dataInicio">		
                      </div>                      
								</div>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" namespace="arquivo" style="width: 350px;">
								<button class="btn btn-primary" type="submit" >Salvar</button>
                  </form>	
				</div>
			</div>
		</div>	

<script type="text/javascript">$('#editar-processo').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var  = button.data('whateverTitulo')
  var rNumero = button.data('whateverNumero')
  var rValor = button.data('whateverValor')
  var rFase = button.data('whateverFase')
  var rCliente = button.data('whateverCliente')
  var rReu = button.data('whateverReu')
  var rAdvogado = button.data('whateverAdvogado')
  var rJuiz = button.data('whateverJuiz')
  var rTestemunha1 = button.data('whateverTestemunha1')
  var rTestemunha2 = button.data('whateverTestemunha2')
  var rTestemunha3 = button.data('whateverTestemunha3')
  var rDataInicio = button.data('whateverDataInicio') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)rTitulo
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('#id-titulo').val(rTitulo)
  modal.find('#id-numero').val(rNumero)
  modal.find('#id-valor').val(rValor)
  modal.find('#id-faseProcessual').val(rFase)
  modal.find('#id-cliente').val(rCliente)
  modal.find('#id-reu').val(rReu)
  modal.find('#id-advogado').val(rAdvogado)
  modal.find('#id-juiz').val(rJuiz)
  modal.find('#id-testemunha1').val(rTestemunha1)
  modal.find('#id-testemunha2').val(rTestemunha2)
  modal.find('#id-testemunha3').val(rTestemunha3)
  modal.find('#id-dataInicio').val(rDataInicio)
}) </script>		
@endsection	
