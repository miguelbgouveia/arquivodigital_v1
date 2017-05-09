<?php
$id=$_GET['id'];
$user=$_GET['user_nome'];


echo"
<form  action='includes/enviar_tipo_doc.php?id=$id&user_nome=$user'  enctype='multipart/form-data' method='POST'>
<div class='box'>

	<h2>Inserir Tipo Documento </h2>
      

		 <div class='form-group has-feedback'>
        <input type='text' required='required' class='form-control' name='nome' placeholder='Tipo de Documento'required='required'>
        <span class='glyphicon glyphicon-briefcase form-control-feedback' ></span>
		<div class='col-xs-2'>
		<br>
          <label><button type='submit' class='btn btn-primary btn-block btn-flat'><i class='fa fa-floppy-o' aria-hidden='true'></i> Guardar</button></label>
        </div>
	  <div class='form-group has-feedback'>
      </div>	
   <!-- /.box-body -->
    </div>
  <!-- /.box -->
      
</form>";



?>
		
