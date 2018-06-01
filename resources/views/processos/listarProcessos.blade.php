@extends('templates.menuPrincipal')
@section('principal')
 	
<img id="fundo" src="../../imgs/fundoPrincipal.jpg"/>
    
    <div style="padding: 6%;">
    <h1 style="text-align: center; font-size:20px;">Processos</h1>
		<table class="table table-striped" style="background-color: white;">
  			<thead>
    				<tr>
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
					<td>{{$processo->titulo}}</td>
					<td>{{$processo->numero}}</td>
					<td>{{$processo->cliente}}</td>
					<td>{{$processo->advogado}}</td>
                    <td><button class="btn btn-primary">Editar</button></td>
					</tr>
			    @endforeach
				
  			</tbody>
		</table>
    </div>
@endsection	