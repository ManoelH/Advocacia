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

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-xx="asdjasd">Open modal for @mdo</button>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">New message</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <form>
				<div class="form-group">
				  <label for="recipient-name" class="col-form-label">Recipient:</label>
				  <input type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
				  <label for="message-text" class="col-form-label">Message:</label>
				  <textarea class="form-control" id="message-text"></textarea>
				</div>
			  </form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Send message</button>
			</div>
		  </div>
		</div>
	  </div>

	  <script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var recipient = button.data('xx') // Extract info from data-* attributes
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		var modal = $(this)
		modal.find('.modal-title').text('New message to ' + recipient)
		modal.find('.modal-body input').val(recipient)
		})</script>

		@push('javascript','<script src="' .asset('js/jquery-3.2.1.min.js'). '"> </script>')
		@push('js','<script type="text/javascript" src="' .asset('js/listaProcesso.js'). '"> </script>')
		@push('javascrupt','<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>')
		@push('javascript','<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>')  
  

@endsection	