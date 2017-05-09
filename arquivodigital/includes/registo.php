<!DOCTYPE html>
<?php
$id=0;
include ("../config/config.php");
?>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.6 -->
  <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
  <!-- Font Awesome -->
  <link rel='stylesheet' href='aviso.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  <!-- Ionicons -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
  <!-- Theme style -->
  <link rel='stylesheet' href='../dist/css/AdminLTE.min.css'>
  <!-- iCheck -->
  <link rel='stylesheet' href='../plugins/iCheck/square/blue.css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
  <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
  <![endif]-->
</head>
<body class='hold-transition register-page'>
<div class='register-box'>
  <div class='register-logo'>
    <p><b>DSEAM</b></p>
  </div>
	
  <div class='register-box-body'>
    <p class='login-box-msg'>Registar Novo Membro</p>
	
	<?php

		if($stmt = $mysqli->prepare('Select * from utilizador')) {
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id_utilizador,$departamento,$utilizador,$password,$email);
			$num_rows = $stmt->num_rows;
			
			if($num_rows>0) {
			
				while ($stmt->fetch()) {
					$id=$id_utilizador;
				}
				
				$id++;
				$stmt->close();		
				
			}		
		}
	
	
	echo"
    <form action='confirmar.php?id=$id' method='post'>
	";
	
	if(isset($_GET['M'])){
					$error=$_GET['M'];
					include("mensagens/erro$error.php");
	}

	echo"
	<br>
      <div class='form-group has-feedback'>
        <input type='text' required='required' class='form-control' name='nome' placeholder='Full name'required='required'>
        <span class='glyphicon glyphicon-user form-control-feedback' ></span>
      </div>
      <div class='form-group has-feedback'>
        <input type='email' class='form-control' required='required'name='email' placeholder='Email'required='required'>
        <span class='glyphicon glyphicon-envelope form-control-feedback' ></span>
      </div>
	   <div class='form-group has-feedback'>
        <input type='password' class='form-control' name='pass' placeholder='Retype password' required='required'>
        <span class='glyphicon glyphicon-log-in form-control-feedback'></span>
      </div>
	  
	  
      <div class='form-group has-feedback'>
        <input type='password' class='form-control' name='repassword' placeholder='Retype password' required='required'>
        <span class='glyphicon glyphicon-log-in form-control-feedback'></span>
      </div>
	  <div class='form-group has-feedback'>
	
		<label><select name='departamento'  class='btn btn-default dropdown-toggle' required='required'>
		<option selected disabled>Escolhe o Departamento</option>
 ";
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
        <div class='col-xs-8'>
          <div class='checkbox icheck'>
            <label>
              <input type='checkbox' name='check' required='required'> Concorda com os <a href='#'>Termos</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class='col-xs-4'>
          <button type='submit' class='btn btn-primary btn-block btn-flat'>Registar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

    <a href='login.php' class='text-center'>Já estou em Inscrito</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.0 -->
<script src='../plugins/jQuery/jQuery-2.2.0.min.js'></script>
<!-- Bootstrap 3.3.6 -->
<script src='../bootstrap/js/bootstrap.min.js'></script>
<!-- iCheck -->
<script src='../plugins/iCheck/icheck.min.js'></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>";
?>
