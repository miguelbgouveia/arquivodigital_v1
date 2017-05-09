<!DOCTYPE html>
<?php
	
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DSEAM | Arquivo Digital</title>
  
  <link rel="icon" type="img/ico" href="../img/favicon.ico">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="aviso.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <style>
  
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">

  <div class="login-logo">
	<img src="../img/logo_sre.png" style="margin-top:15px; margin-bottom: 6px;"><br>
    <h5>DIREÇÃO DE SERVIÇOS DE EDUCAÇÃO ARTÍSTICA E MULTIMÉDIA</h5>
	<h1><b>Arquivo Digital de Documentação</b></h1>
  </div>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
  <?php
	
				if(isset($_GET['M'])){
					$error=$_GET['M'];
					include("mensagens/erro$error.php");
				}
	?>
    <p class="login-box-msg">Por Favor insira os dados para Iniciar a Sessão</p>
	
	<?php
	echo"
    <form action='auth.php' method='post'>
      <div class='form-group has-feedback'>
        <input type='email' class='form-control' name='email' placeholder='Email'>
        <span class='glyphicon glyphicon-envelope form-control-feedback'></span>
      </div>
      <div class='form-group has-feedback'>
        <input type='password' class='form-control' name='password' placeholder='Palavra-passe'>
        <span class='glyphicon glyphicon-lock form-control-feedback'></span>
      </div>
      <div class='row'>
        <div class='col-xs-8'>
          <div class='checkbox icheck'>
            <label>
              <input type='checkbox'> Lembrar-me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class='col-xs-4'>
          <button type='submit' class='btn btn-primary btn-block btn-flat'>Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>";
?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<p style="text-align:center;">&copy <?php echo date("Y"); ?> | DSEAM. Todos os diretos reservados.</p>

<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
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
</html>