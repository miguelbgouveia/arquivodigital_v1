<?php
$id=$_GET['id'];
$user_name=$_GET['user_nome'];


				
echo"
<form  action='includes/enviar_doc.php?id=$id&user_nome=$user'  enctype='multipart/form-data' method='POST'>
<div class=''>
		<div class='box-header'>
            <h2 class='box-title'><i class='fa fa-book'></i><b> Novo Documento </b></h2>
        </div>
	<br>
      <div class='form-group has-feedback'>
	   ";
				if(isset($_GET['M'])){
					$error=$_GET['M'];
					include("includes/mensagens/erro$error.php");
				}
				
				echo"
        
		<select name='num_utilizador' required  class='btn btn-default dropdown-toggle' required='required' style='text-align:left!important;'>
			<option selected value=''>- Selecione o Utilizador -</option>";
	
			 if($stmt = $mysqli->prepare('Select * from utilizador where id_utilizador <> 1 order by nome_utilizador')) {

				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($id_utilizador,$coddepartame,$nome_utilizador,$password,$email);
				$num_rows = $stmt->num_rows;
				
				if($num_rows>0) {
					while ($stmt->fetch()) {  
						echo"
						<option value=$id_utilizador>$nome_utilizador</option>
						";
					}		
					$stmt->close();			
				}		
			}
				
			echo"		  
			
			</select><br>
      </div>
	  <div class='form-group has-feedback'>
			<select name='departamento'  class='btn btn-default dropdown-toggle' required='required' style='text-align:left!important;'>
			<option selected value=''>- Selecione o Departamento -</option>";
			if($stmt = $mysqli->prepare('Select * from departamento order by departamento')) {
					$stmt->execute();
					$stmt->store_result();
					$stmt->bind_result($codepartamento,$aber,$departamento);
					$num_rows = $stmt->num_rows;
					
					if($num_rows>0) {	
						while ($stmt->fetch()) {
							echo"
							  <option value=$codepartamento>$departamento</option>	 
							";					
						}
						$stmt->close();		
					}		
			}
			echo"	 
			</select><br>
		</div>
			<div class='form-group has-feedback'>
			<select name='documento' required='required'  class='btn btn-default dropdown-toggle' required='required' style='text-align:left!important; width:270px!important;'>
			<option selected value=''>- Selecione o Tipo de Documento -</option>";
				if($stmt = $mysqli->prepare('Select id_tipo_doc ,tipo_doc from tipo_doc order by tipo_doc')) {
						$stmt->execute();
						$stmt->store_result();
						$stmt->bind_result($id_tipo_doc,$tipo_doc);
						$num_rows = $stmt->num_rows;
						
						if($num_rows>0) {		
							while ($stmt->fetch()) {
								echo"
								
								  <option value=$id_tipo_doc>$tipo_doc</option>	 
								";		
							}	
				$stmt->close();			
				}		
		}
	
	
	
	echo"</select><br>

      </div>
	  
	  <div class='form-group has-feedback' style='width:270px!important;'>
        <input type='date' class='form-control' id='DATE' required='required'name='data' placeholder='Data:  AAAA-MM-DD' required='required' >
        <span class='glyphicon glyphicon-calendar form-control-feedback' ></span>
      </div>
	  
      <div class='form-group has-feedback'>
        <input type='text' class='form-control' required='required'name='assunto' placeholder='Assunto:' required='required'>
        <span class='glyphicon glyphicon-comment form-control-feedback' >
      </div>
	   
	  <div class='form-group has-feedback'>
        <input type='text' class='form-control' required='required'name='destinatario' placeholder='Destinatario:' required='required'>
        <span class='glyphicon glyphicon-user form-control-feedback' ></span>
      </div>
	   
	  
	   <div>
	   <!--
		<label>
		 <input type='file'  name='fileToUpload' id='fileToUpload'>
		 </label>-->
		</div>
	   <div class=''>
		<br>
          <label><button type='submit' class='btn btn-primary'><i class='fa fa-floppy-o' aria-hidden='true'></i> Guardar</button></label>
		  <a class='btn btn-default' href='index.php?page=documento&user_nome=$user'><i class='fa fa-undo'></i><span> Voltar</span></a>
        </div>
	  <div class='form-group has-feedback'>
      </div>
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      
</form>";



?>

