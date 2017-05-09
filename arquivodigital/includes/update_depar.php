<?php
include ("../config/config.php");
$var=0;
$ativo=1;
$id=$_GET['id'];
$user=$_GET['user_nome'];

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
		header("Location: ../index.php?page=departamento&user_nome=$user&M=5");
		
	}else{
$stmt = $mysqli->prepare("Update departamento set codepartamento=?,aber=?,departamento=? where codepartamento=".$id);
$stmt->bind_param('iss',$id, $_POST['aber'],$_POST['departamento']);
$stmt->execute();
echo "$stmt->affected_rows resgistos inseridos";
$stmt->close();

echo"$id";
if($stmt==1){
	$var=1;
}
sleep(5);


header("Location: ../index.php?page=departamento&user_nome=$user&M=6");
	}
?>