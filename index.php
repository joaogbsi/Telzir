<?php
require __DIR__.'/vendor/autoload.php';
use Application\Calculo;

$calculo = new Calculo();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
		<link href="css/estilo.css" rel="stylesheet" type="text/css" />	
</head>

<body>
	<header class="container">
		
		<h1 class="text-center">TELZIR</h1>
					
	</header>
	
	<div class="container">
		<p>
			Para você que faz ligações para outros códigos, a Telzir possui planos diferentes para suas ligações.
		</p>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			

			<table class="table table-striped">
				<thead>
					<tr>
						<th>Origem</th>
						<th>Destino</th>
						<th>$/min</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>011</td>
						<td>016</td>
						<td>1,90</td>
					</tr>
					<tr>
						<td>016</td>
						<td>011</td>
						<td>2,90</td>
					</tr>
					<tr>
						<td>011</td>
						<td>017</td>
						<td>1,70</td>
					</tr>
					<tr>
						<td>017</td>
						<td>011</td>
						<td>2,70</td>
					</tr>
					<tr>
						<td>011</td>
						<td>018</td>
						<td>0,90</td>
					</tr>
					<tr>
						<td>018</td>
						<td>011</td>
						<td>1,90</td>
					</tr>

				</tbody>
			
			</table>
		</div>

		<div class="col-md-2"></div>
		</div>
		<div class="container">

		<p>
			Agora se você fala muito, A Teliz criou o Fale Mais, um plano de pacotes que te oferece muitos gratuitos* para ligações de outros códigos.
Simule abaixo os beneficios dos Planos Fale Mais:
		</p>

		<form method="post" action=""
		enctype="multipart/form-data" accept-charset="UTF-8">
			<div class="col-md-2">
				<h2>Origem</h2>
				<select name="origem">
					<option value="011">011</option>
					<option value="016">016</option>
					<option value="017">017</option>
					<option value="018">018</option>				
				</select>
				
			</div>
			<div class="col-md-2">
				<h2>Destino</h2>
				<select name="destino">
					<option value="011">011</option>
					<option value="016">016</option>
					<option value="017">017</option>
					<option value="018">018</option>				
				</select>
				
			</div>

			<div class="col-md-3">
			<h2>Plano</h2>
				<select name="plano">
					<option value="30">Fale Mais 30</option>
					<option value="60">Fale Mais 60</option>
					<option value="120">Fale Mais 120</option>
				</select>
			</div>
			<div class="col-md-3">
				<h2>Tempo de ligação</h2>
				<input type="text" name="tempo" placeholder="Tempo de ligação">
			</div>
			
				<br />
				<br />
				
				<input class="btn btn-success" type="submit" value="Enviar" />	
				
		
			 
			<?php
			if ($_POST){?>
					
				<table class="table table-striped table-borderd">
					<thead>
						<tr>
							<th>Origem</th>
							<th>Destino</th>
							<th>Tempo</th>
							<th>Plano</th>
							<th>Com Fale Mais</th>
							<th>Sem Fale Mais</th>
						</tr>
					</thead>
					<tr>
				 		<td><?php echo $_POST['origem']?></td>
				 		<td><?php echo $_POST['destino']?></td>
				 		<td><?php echo $_POST['tempo']?></td>
				 		<td><?php 
				 			if ($_POST['plano'] == 30)
				 				echo 'Fale Mais 30';
				 			else if ($_POST['plano'] == 60)
				 				echo 'Fale Mais 60';
				 			else if ($_POST['plano'] == 120)
				 				echo 'Fale Mais 120';
				 		?></td>
				 		<td><?php
				 			if(!is_null($calculo->faleMais($_POST['origem'], $_POST['destino'], $_POST['tempo'],  $_POST['plano']))) 
				 				echo 'R$' . number_format($calculo->faleMais($_POST['origem'], $_POST['destino'], $_POST['tempo'],  $_POST['plano']), 2, ',', '.');
				 			else
				 				echo '-';
				 		//echo $calculo->faleMais($_POST['origem'], $_POST['destino'], $_POST['tempo'],  $_POST['plano'])
				 		?>			 			
				 		</td>
				 		<td><?php 
					 		if($calculo->semFaleMais($_POST['origem'], $_POST['destino'], $_POST['tempo']) != null)
					 			echo 'R$' . number_format($calculo->semFaleMais($_POST['origem'], $_POST['destino'], $_POST['tempo']), 2, ',', '.');
					 		else 
					 			echo '-';
				 		//echo $calculo->semFaleMais($_POST['origem'], $_POST['destino'], $_POST['tempo'])
				 		?>
				 			
				 		</td>
				 	</tr>
				</table>

			<?php }?>
			 
			
		</form>
	</div>
	
</body>
</html>
<?php 
	/*$calculo = new Calculo();
	
	echo $_POST['origem'].', ';
	echo $_POST['destino'].', ';
	echo $_POST['tempo'].', ';
	echo $_POST['plano'].', ';
	echo $calculo->faleMais($_POST['origem'], $_POST['destino'], $_POST['tempo'],  $_POST['plano']).', ';
	echo $calculo->semFaleMais($_POST['origem'], $_POST['destino'], $_POST['tempo']);*/
?>

