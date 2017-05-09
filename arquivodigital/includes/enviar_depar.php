<?php
include ("../config/config.php");
$ativo=1;
$user=$_GET['user_nome'];
$var=0;
$id=$_GET['id'];
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
	if($codepartamento>=$id){
		header("Location: ../index.php?page=departamento&user_nome=$user&M=0");
		
	}else{
$stmt = $mysqli->prepare("INSERT INTO departamento  VALUES (?,?,?)");
$stmt->bind_param('iss',$id, $_POST['aber'],$_POST['departamento']);
$stmt->execute();
echo "$stmt->affected_rows resgistos inseridos";
$var=1;
$stmt->close();
$user_name=$_GET['user_nome'];


sleep(5);


		header("Location: ../index.php?page=departamento&user_nome=$user&M=1");
	}
?>