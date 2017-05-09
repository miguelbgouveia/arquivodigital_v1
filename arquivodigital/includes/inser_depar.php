<?php
$id=$_GET['id'];
$user_name=$_GET['user_nome'];
				
echo"
<form  action='includes/enviar_depar.php?id=$id&user_nome=$user' method='POST'>
<div class='box'>

	<h2>Inserir Departamento </h2>
      <div class='form-group has-feedback'>
        <input type='text' required='required' class='form-control' name='aber' placeholder='Aber'required='required'>
        <span class='glyphicon glyphicon-briefcase form-control-feedback' ></span>
      </div>
      <div class='form-group has-feedback'>
        <input type='text' class='form-control' required='required'name='departamento' placeholder='Departamento'required='required'>
        <span class='glyphicon glyphicon-briefcase form-control-feedback' ></span>
      </div>
	   <div class='col-xs-2'>
		<br>
          <label><button type='submit' class='btn btn-primary btn-block btn-flat'><i class='fa fa-floppy-o' aria-hidden='true'></i> Guardar</button></label>
        </div>
	  <div class='form-group has-feedback'>
      </div>
			
	</div>

          
		
        
</form>";
?>
