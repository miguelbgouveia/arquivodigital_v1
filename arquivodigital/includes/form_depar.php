<?php
$id=$_GET['id'];
$user_name=$_GET['user_nome'];
				
	if($stmt = $mysqli->prepare('Select codepartamento ,aber,	departamento from departamento where codepartamento = '.$id)) {

		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
		while ($stmt->fetch()) {
			
			if($codepartamento=$id){
				echo"

				 <form  action='includes/update_depar.php?id=$id&user_nome=$user_name' method='POST'>
					<div class='box'>
				
						<h2>Alterar Departamento </h2>
						<div>
					  <div class='form-group has-feedback'>
						<input type='text' required='required' class='form-control' name='aber' placeholder='Aber: $aber' value='$aber'>
						<span class='glyphicon glyphicon-briefcase form-control-feedback' ></span>
					  </div>
					  
					  <div class='form-group has-feedback'>
						<input type='text' class='form-control' required='required'name='departamento' placeholder='Departamento: $departamento'value='$departamento'>
						<span class='glyphicon glyphicon-briefcase form-control-feedback' ></span>
					  </div>
					   <div class='col-xs-2'>
						<br>
						  <label><button type='submit' class='btn btn-primary btn-block btn-flat'><i class='fa fa-floppy-o' aria-hidden='true'> Guardar</i></button></label>
						</div>
					  <div class='form-group has-feedback'>
					 </div>    
				</form>";
				}
			}

		}
			
	
	$stmt->close();		
		
	}		

	
?>
