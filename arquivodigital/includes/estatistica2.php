<?php 
$user_name=$_GET['user_nome'];
		
echo"
		<h2><ins>Escolha o Tipo de Documento:</ins></h2>
		<form action='index.php?page=menu_estatistica&tabela=Documentos&user_nome=$user_name' method='POST'>
		<select class='btn btn-default dropdown-toggle' name='id'>
		<option selected disabled>Escolhe o Documento</option>";
		
		if($stmt = $mysqli->prepare('Select * from tipo_doc')) {

		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_tipo_doc,$tipo_doc);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				echo"
					 <option value='$id_tipo_doc'>$tipo_doc</option>
				";
				
			}
			
	
			$stmt->close();		
		}
		}
		echo"
		</select>
		
		<label><button type='submit' class='btn btn-primary btn-block btn-flat'>Registar</button></label>
		</form>
		";
		
					include("includes/mostrar2.php");
				
				?>
		
	
