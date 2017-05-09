<?php
include ("../config/config.php");
	$user_name=$_GET['user_nome'];
	$ativo=1;
$id=0;
$id+=$_GET['id'];
 if($stmt = $mysqli->prepare('SELECT * FROM documentos,tipo_doc,utilizador,departamento where documentos.numutilizador=utilizador.id_utilizador and documentos.id_tipo_doc=tipo_doc.id_tipo_doc and documentos.codepartamento2=.departamento.codepartamento')) {
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($numero,$ano,$numero_utilizador,$assunto,$data,$destinatario,$id_tipo_doc2,$codepartamento2,$ficheiro,$id_tipo_doc,$tipo_doc,$id_utilizador,$departamento2,$nome_utilizador,$password,$email,$codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
			while ($stmt->fetch()) {	
			}
			$stmt->close();		
		}
	}		
		
		
	 if($numero>=$id){
		header("Location: ../index.php?page=documento&id=$id&user_nome=$user_name");
		echo"flag1";
	}else if(!isset($_POST['departamento'])){
		header("Location: ../index.php?page=inser_doc&id=$id&user_nome=$user_name&M=falha");	
		echo"flag2";
	}else if(!isset($_POST['num_utilizador'])){
					echo"flag3";
		header("Location: ../index.php?page=inser_doc&id=$id&user_nome=$user_name&M=falha");	
	}else if(!isset($_POST['documento'])){
	echo"flag4";
		header("Location: ../index.php?page=inser_doc&id=$id&user_nome=$user_name&M=falha");
	}else{
			echo"flag5";
		header("Location: enviar_doc.php?id=$id&user_nome=$user_name");	
	}
?>