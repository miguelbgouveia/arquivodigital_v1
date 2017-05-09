
<?php
$id=$_GET['id'];
$user=$_GET['user_nome'];
  if($stmt = $mysqli->prepare('SELECT * FROM documentos,tipo_doc,utilizador,departamento where documentos.numutilizador=utilizador.id_utilizador and documentos.id_tipo_doc=tipo_doc.id_tipo_doc and documentos.codepartamento2=.departamento.codepartamento')) {

		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($numero,$ano,$numero_utilizador,$assunto,$data,$destinatario,$id_tipo_doc2,$codepartamento2,$ficheiro,$id_tipo_doc,$tipo_doc,$id_utilizador,$departamento2,$nome_utilizador,$password,$email,$codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				if($numero==$id)
				echo"
				<div'>
					<div class='box-header'>
							<h2 class='box-title'><i class='fa fa-book'></i><b> Eliminar Documento </b></h2>
						</div>
					<br>
					<p > Tem a certeza que pretende eliminar definitivamente este documento? </p>
					<ul>
						<li><b>Data:</b> $data</li>
						<li><b>Nome:</b> $nome_utilizador</li>
						<li><b>Departamento:</b> $departamento</li>
						<li><b>Tipo Doc.:</b> $tipo_doc</li>
						<li><b>Assunto:</b> $assunto</li>
						<li><b>Destinatario:</b> $destinatario</li>	
					</ul>
					<br>
					
					<a href='includes/apagar_doc.php?id=$id&user_nome=$user'><button type='button' class='btn btn-danger'><i class='fa fa-check' aria-hidden='true'></i> Sim</button></a>
					<a href='index.php?page=documento&user_nome=$user' class='btn btn-default'><i class='fa fa-ban' aria-hidden='true'></i> Não</a>
					
				</div>";
			}
	$stmt->close();		
			
			
	}
 }
?>