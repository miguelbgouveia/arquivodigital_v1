
<?php
$id=$_GET['id'];
$user=$_GET['user_nome'];
 if($stmt = $mysqli->prepare('Select codepartamento ,aber,	departamento from departamento')) {

		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				if($codepartamento==$id)
				echo"
				<div'>
					<h3>  Confirmar...</h3>
					<p > Tem à Certeza que quer Apagar esta Coluna da Tabela Departamento: </p>
					<ul>
						<li><b>Departamento:</b>$departamento</li>
						<li><b>Aber:</b>$aber</li>
					</ul>
					<button type='button' class='btn btn-default'><a href='index.php?page=departamento&user_nome=$user'>Voltar</a></button>
					<a href='includes/apagar_depar.php?id=$id&user_nome=$user'><button type='button' class='btn btn-warning'><i class='fa fa-trash' aria-hidden='true'> Apagar</i></button></a>
					
				</div>";
			}
	$stmt->close();		
			
			
	}
 }
?>