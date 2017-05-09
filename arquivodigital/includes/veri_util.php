<?php
include ("../config/config.php");
	$user_name=$_GET['user_nome'];
	$ativo=1;
$id=0;
$var=0;
$pass1=null;
$pass2=null;
$pass1=$_POST['pass'];
$pass2=$_POST['repassword'];
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
	if($id_utilizador>$id){
		header("Location: ../index.php?page=form_util&id=$id&user_nome=$user_name&M=1");
		
	}else if(!isset($_POST['departamento'])){
		header("Location: ../index.php?page=inser_util&id=$id&user_nome=$user_name&M=falha");	
	
	}else if($pass1!=$pass2){
			echo"Pass:$pass1=Pass2$pass2 ID:$id";	
		header("Location: ../index.php?page=inser_util&id=$id&user_nome=$user_name&M=pass");	
	}else{
		header("Location: enviar_util.php?id=$id&user_nome=$user_name");	
	}
?>