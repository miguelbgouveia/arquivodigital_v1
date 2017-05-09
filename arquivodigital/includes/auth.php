<?php
	include ("../config/config.php");
	$i=0;
	$p=$_POST['password'];
	$e=$_POST['email'];
	 if($stmt = $mysqli->prepare('Select * from utilizador')) {

		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_utilizador,$departament,$nome_utilizador,$password,$email);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			
			while ($stmt->fetch()) {
			
				
				if(($p==$password)&&($e==$email)){
					header("Location: ../index.php?page=documento&user_nome=$nome_utilizador");
					$i=1;
				}else{
					echo"($p==$password)&&($e==$email)<br>";
				}
				
				
			}
			
			
			$stmt->close();		
			
		}		
	}

	if($i==0){
		header("Location: login.php?M=check");
	}
?>