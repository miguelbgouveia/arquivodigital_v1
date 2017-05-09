<?php
$id=$_GET['id'];
$var=null;
include ("../config/config.php");
$user_name=$_GET['user_nome'];
if($stmt = $mysqli->prepare('SELECT * FROM documentos,tipo_doc,utilizador,departamento where documentos.numutilizador=utilizador.id_utilizador and documentos.id_tipo_doc=tipo_doc.id_tipo_doc and documentos.codepartamento2=.departamento.codepartamento')) {
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($numero,$ano,$numero_utilizador,$assunto,$data,$destinatario,$id_tipo_doc2,$codepartamento2,$ficheiro,$id_tipo_doc,$tipo_doc,$id_utilizador,$departamento2,$nome_utilizador,$password,$email,$codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {	
				if($id=$numero){
					$var=$ficheiro;
				}
			}
			$stmt->close();		
		}
		}		
		if($numero<$id){
		header("Location: ../index.php?page=departamento&user_nome=$user&M=0");
		
	}else{
	unlink("$var");
	echo"img/$var";
	$stmt = $mysqli->prepare("DELETE from documentos where numero=?");
	$stmt->bind_param("i", $_GET['id']);
	$stmt->execute();
	echo "$stmt->affected_rows resgistos apagados";
	$stmt->close();
	header("Location: ../index.php?page=documento&user_nome=$user_name&M=3");
	
	echo "<br>***************************************************************<br>";
	}
?>
