
<?php
$id=$_GET['id'];
$user=$_GET['user_nome'];
  if($stmt = $mysqli->prepare('Select id_tipo_doc ,tipo_doc from tipo_doc')) {


		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_tipo_doc,$tipo_doc);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
		
			while ($stmt->fetch()) {
				if($id_tipo_doc==$id)
				echo"
				<div'>
					<h3>  Confirmar...</h3>
					<p > Tem à Certeza que quer Apagar esta Coluna da Tabela Utilizador: </p>
					<ul>
						<li><b>Tipo de Documento:</b>$tipo_doc</li>
						
					</ul>
					
					<button type='button' class='btn btn-default'><a href='index.php?page=tipo_documento&user_nome=$user'>Voltar</a></button>
					<a href='includes/apagar_tipo_doc.php?id=$id&user_nome=$user'><button type='button' class='btn btn-warning'><i class='fa fa-trash' aria-hidden='true'> Apagar</i></button></a>
					
				</div>";
			}
	$stmt->close();		
			
			
	}
 }
?>