<?php
include ("../config/config.php");
	$user_name=$_GET['user_nome'];
	$ativo=1;
$id=0;
$var=0;
$v;
$id+=$_GET['id'];
 if($stmt = $mysqli->prepare('Select * from utilizador,departamento where utilizador.departamento=departamento.codepartamento ORDER BY id_utilizador ASC ')) {

		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_utilizador,$departament,$nome_utilizador,$password,$email,$codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		$i = 0;
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				}
			$stmt->close();		
		}		
	}
	 if($numero<$id){
		header("Location: ../index.php?page=documento&id=$id&user_nome=$user_name&M=5");
		echo"flag1";
	}else if(!isset($_POST['departamento'])){
		header("Location: ../index.php?page=form_doc&id=$id&user_nome=$user_name&M=falha");	
		echo"flag2";
	}else if(!isset($_POST['num_utilizador'])){
					echo"flag3";
		header("Location: ../index.php?page=form_doc&id=$id&user_nome=$user_name&M=falha");	
	}else if(!isset($_POST['documento'])){
	echo"flag4";
		header("Location: ../index.php?page=form_doc&id=$id&user_nome=$user_name&M=falha");
	}else{
			echo"flag5";
		header("Location: update_doc.php?id=$id&user_nome=$user_name");	
	}
?>