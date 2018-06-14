@extends('templates.menuPrincipal')
@section('principal')
 	
<img id="fundo" src="../../imgs/fundoPrincipal.jpg"/>
    
    <div style="padding: 6%;">
    <h1 style="text-align: center; font-size:20px;">Processos arquivados: Cliente fisico</h1>
		<table class="table table-striped" style="background-color: white;">
  			<thead>
    				<tr>
      				<th scope="col">Título</th>
      				<th scope="col">Número</th>
      				<th scope="col">Cliente</th>
							<th scope="col">Advogado</th>
							<th scope="col">Excluir</th>
							<th scope="col">Reabrir</th>
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

					<td><a type="button" class="btn btn-danger" href="{{ URL::route('excluirProcessoArquivado', ['id' => $processo->id])}}"
					style="border-radius: 6px !important; border-color: transparent;">X</a></td>

					<td><a type="button" class="btn btn-warning" href="{{ URL::route('reabrirProcesso', ['processo' => $processo])}}"
					style="border-radius: 6px !important; border-color: transparent;">Reabrir</a></td>

					<td><a type="button" class="btn btn-success" style="border-radius: 6px !important; border-color: transparent;">Imprimir</a></td>
					</tr>
			    @endforeach
				
  			</tbody>
		</table>
	</div>

	
		@push('javascript','<script src="' .asset('js/jquery-3.2.1.min.js'). '"> </script>')
		@push('js','<script type="text/javascript" src="' .asset('js/listaProcesso.js'). '"> </script>')
		@push('javascrupt','<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>')
		@push('javascript','<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>')  
  

@endsection	