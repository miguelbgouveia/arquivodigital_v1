<?php
include ("../config/config.php");
$id=$_GET['id'];
$var=0;
$v;
$user_name=$_GET['user_nome'];
$pass1=null;
$pass2=null;
$pass1=$_POST['pass'];
$pass2=$_POST['repassword'];

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
	if($id_utilizador<$id){
		header("Location: ../index.php?page=tipo_documento&user_nome=$user&M=2");
		
	}else{
	$stmt = $mysqli->prepare("DELETE from utilizador where id_utilizador=?");
	$stmt->bind_param("i", $_GET['id']);
	$stmt->execute();
	echo "$stmt->affected_rows resgistos apagados";
	$v= mysql_query($stmt);
	

	
	$stmt->close();
		
	header("Location:../index.php?page=utilizador&user_nome=$user_name&M=3");
							
	echo "<br>***************************************************************<br>";
	}			
?>
