<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">

	 <style>
	 img{
		 position: fixed;
		 height: 100%;
		 width: 100%;
		 z-index: -999;  
	 };


	 
	 </style>
	<title>Tela de login</title>
</head>
<body>
	<title>MH Advocacia - Home</title>
	<div>
		<img src="../../../imgs/fundo.jpg"/>
		<p style=" font-size: 70px; color: white; font-family: 'Gugi', cursive; text-align:center;">MH Advocacia</p></br></br></br></br> 
	 	
		@if(session('Erro'))
			<!-- LOGIN ou SENHA INCORRETA -->
				<div class="alert alert-danger">
					{{session('Erro')}}
				</div>
				<!-- FIM [LOGIN OU SENHA INCORRETA] -->
				@endif
	<div style="padding: 35%; margin-top: -35%;">
		<form action="{{route('logar')}}" method="post">
						{{csrf_field()}}
					<div class="form-group">
					  <label for="inputUsuario" style="color: white; font-size: 20px;">Usuário</label>
					  <input type="text" class="form-control" id="inputUsuario" name="Usuario" aria-describedby="emailHelp" placeholder="Digite seu nome">
					</div>
					<div class="form-group">
					  <label for="inputPassword" style="color: white; font-size: 20px;">Senha</label>
					  <input type="password" class="form-control" id="inputPassword" name="Senha" placeholder="Digite sua senha">
					</div>
					<button type="submit" class="btn btn-info">Entrar</button>
		</form>
	</div>	
		
	</div>	
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>