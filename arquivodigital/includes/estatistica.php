<?php 
$user_name=$_GET['user_nome'];
	
echo"
		<h2><ins>Escolha o Utilizador:</ins></h2>
		<form action='index.php?page=menu_estatistica&user_nome=$user_name' method='POST'>
		<select name='id' class='btn btn-default dropdown-toggle'>
		<option selected disabled>Escolhe o Utilizador</option>";
		
		if($stmt = $mysqli->prepare('Select * from utilizador')) {

		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_utilizador,$departament,$nome_utilizador,$password,$email);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				echo"
					 <option value='$id_utilizador'>$nome_utilizador</option>
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
		
					include("includes/mostrar.php");
				
				?>
		
	
