<?php

include ("../config/config.php");
$ativo=1;
$id=0;
$pass1=null;
$pass2=null;
$pass1=$_POST['pass'];
$pass2=$_POST['repassword'];
echo"$pass1=$pass2 $id";
	echo"Pass:$pass1=Pass2$pass2 ID:$id";
$id+=$_GET['id'];
echo"$pass1=$pass2 $id";
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
		header("Location: registo.php?id=$id&M=0");
		
	}else if(!isset($_POST['departamento'])){
		header("Location: registo.php?id=$id&M=falha");	
	
	}else if($pass1!=$pass2){
			echo"Pass:$pass1=Pass2$pass2 ID:$id";	
		header("Location: registo.php?id=$id&M=pass");	
	}else{
		


$stmt = $mysqli->prepare("INSERT INTO utilizador VALUES (?,?,?,?,?)");
$stmt->bind_param('issss',$id,$_POST['departamento'],$_POST['nome'],$_POST['pass'],$_POST['email']);
$stmt->execute();
echo "$stmt->affected_rows resgistos inseridos";
$stmt->close();


sleep(5);


header('Location: login.php');
}
?>