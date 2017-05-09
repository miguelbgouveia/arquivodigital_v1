<?php
$id=$_GET['id'];
$user_name=$_GET['user_nome'];
if(isset($_GET['M'])){
	$error=$_GET['M'];
	include("includes/mensagens/erro$error.php");
}
if($stmt = $mysqli->prepare('Select * from utilizador')) {

				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($id_utilizador,$coddepartame,$nome_utilizador,$password,$email);
				$num_rows = $stmt->num_rows;
				
				if($num_rows>0) {
				
					while ($stmt->fetch()) {
						if($id_utilizador==$id){				
echo"
<br>
   <form action='includes/update_util.php?id=$id&user_nome=$user_name' method='post'>
	<h2>Alterar Utilizador</h2>
      <div class='form-group has-feedback'>
        <input type='text' required='required' class='form-control' name='nome' placeholder='Full name:' value='$nome_utilizador'required='required'>
        <span class='glyphicon glyphicon-user form-control-feedback' ></span>
      </div>
      <div class='form-group has-feedback'>
        <input type='email' class='form-control' required='required'name='email' placeholder='Email:' value='$email'required='required'>
        <span class='glyphicon glyphicon-envelope form-control-feedback' ></span>
      </div>
	   <div class='form-group has-feedback'>
        <input type='password' class='form-control' name='pass' placeholder='Password:' value='$password' required='required'>
        <span class='glyphicon glyphicon-log-in form-control-feedback'></span>
      </div>
	  
	  
      <div class='form-group has-feedback'>
        <input type='password' class='form-control' name='repassword' placeholder='Rescrever password' value='$password' required='required'>
        <span class='glyphicon glyphicon-log-in form-control-feedback'></span>
      </div>";
			
					
						}		
			}
		}
}
	  echo"
	  
	  <div class='form-group has-feedback'>
		<label> <select name='departamento'required='required' class='btn btn-default dropdown-toggle'>
 <option selected disabled>Escolhe o Departamento</option>";
	   if($stmt = $mysqli->prepare('Select codepartamento ,aber,departamento from departamento')) {

		
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($codepartamento,$aber,$departamento);
			$num_rows = $stmt->num_rows;
			
			if($num_rows>0) {
		
			while ($stmt->fetch()) {
				
				echo"
				  <option value=$codepartamento>$aber</option>
				";
				
				
							}
			$stmt->close();		
			
		}		
	}
	   echo"
	   	</select></label>
         </div>
     
	  
      <div class='row'>
        <div class='col-xs-6'>
          <div class='checkbox icheck'>
            <label style='margin-left: 20px;'>
              <input  type='checkbox' name='check' required='required'> Concorda com os <a href='#'>Termos</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class='col-xs-2'>
		<br>
          <label><button type='submit' class='btn btn-primary btn-block btn-flat'> <i class='fa fa-floppy-o' aria-hidden='true'> Guardar</i></button></label>
        </div>
        <!-- /.col -->
      </div>
    </form>";
			
?>