<?php
$id=$_GET['id'];
$user_name=$_GET['user_nome'];

if($stmt = $mysqli->prepare('Select * from tipo_doc')) {

				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($id_tipo_doc,$tipo_doc);
				$num_rows = $stmt->num_rows;
				
				if($num_rows>0) {
				
					while ($stmt->fetch()) {
						if($id_tipo_doc==$id){
							
echo"

<br>
   <form action='includes/update_tipo_doc.php?id=$id&user_nome=$user_name' method='post'>
   <div class='box'>
	<h2>Alterar Tipo Documento</h2>
      <div class='form-group has-feedback'>
        <input type='text' required='required' class='form-control' name='nome' placeholder='Tipo de Documento:' value='$tipo_doc' required='required'>
        <span class='glyphicon glyphicon-user form-control-feedback' ></span>
      
      ";
			
					
						}		
			}
		}
}
	   echo"
        
        <div class='col-xs-2'>
		<br>
          <label><button type='submit' class='btn btn-primary btn-block btn-flat'><i class='fa fa-floppy-o' aria-hidden='true'> Guardar</i></button></label>
        </div>
        <!-- /.col -->
      </div>
    </form>";
			
?>