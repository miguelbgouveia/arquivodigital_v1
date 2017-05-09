<?php 
$user_name=$_GET['user_nome'];

echo"
		<h2><ins>Escolha o Departamento:</ins></h2>
		<form action='index.php?page=menu_estatistica&user_nome=$user_name' method='POST'>
		<select name='id' class='btn btn-default dropdown-toggle'>
		<option selected disabled>Escolhe o Departamento</option>";
		
		if($stmt = $mysqli->prepare('Select * from departamento')) {

		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				echo"
					 <option value='$codepartamento'>$aber</option>
				";	
			}
			$stmt->close();		
		}
		}
		echo"
		</select>
	 <label><button type='submit' class='btn btn-primary btn-block btn-flat'>Procurar</button></label>
		</form>
		";
		include("includes/mostrar1.php");
?>
		
	
