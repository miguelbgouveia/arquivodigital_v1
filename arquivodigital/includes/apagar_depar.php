<?php
$user_name=$_GET['user_nome'];
	include ("../config/config.php");
$id=$_GET['id'];
$var=0;
 if($stmt = $mysqli->prepare('Select codepartamento ,aber,	departamento from departamento')) {

		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
			}
			$stmt->close();		
			
		}	
	}
	if($codepartamento<$id){
		header("Location: ../index.php?page=departamento&user_nome=$user&M=0");
		
	}else{

	$stmt = $mysqli->prepare("DELETE from departamento where codepartamento=?");
	$stmt->bind_param("i", $_GET['id']);
	$stmt->execute();
	echo "$stmt->affected_rows resgistos apagados";
	$var=3;
	$stmt->close();
	
	header("Location: ../index.php?page=departamento&user_nome=$user_name&&M=3");
	
	echo "<br>***************************************************************<br>";
	}

?>
