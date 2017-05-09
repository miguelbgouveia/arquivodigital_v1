
<?php
$id=$_GET['id'];
$user=$_GET['user_nome'];
  if($stmt = $mysqli->prepare('Select * from utilizador,departamento where utilizador.departamento=departamento.codepartamento ')) {

		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_utilizador,$departament,$nome_utilizador,$password,$email,$codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				if($id_utilizador==$id)
				echo"
				<div'>
					<h3>  Confirmar...</h3>
					<p > Tem à Certeza que quer Apagar esta Coluna da Tabela Utilizador: </p>
					<ul>
						<li><b>Nome:</b>$nome_utilizador</li>
						<li><b>Email:</b>$email</li>
						<li><b>Departamento:</b>$departamento</li>
					</ul>
					
					<button type='button' class='btn btn-default'><a href='index.php?page=utilizador&user_nome=$user'>Voltar</a></button>
					<a href='includes/apagar_util.php?id=$id&user_nome=$user'><button type='button' class='btn btn-warning'><i class='fa fa-trash' aria-hidden='true'> Apagar</i></button></a>
					
				</div>";
			}
	$stmt->close();		
			
			
	}
 }
?>