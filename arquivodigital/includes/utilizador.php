
<?php
$id=1;
$ativo=1;
$user_name=$_GET['user_nome'];
echo"<div class='box'>
            <div class='box-header'>
              <h3 class='box-title'>Tabela Utilizadores</h3>
            </div>
            <!-- /.box-header -->
			
            <div class='box-body'>
		 ";
				if(isset($_GET['M'])){
					$error=$_GET['M'];
					include("includes/mensagens/erro$error.php");
				}
				
				echo"
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
				
					<th>nome utilizador</th>
					<th>Departamento</th>
					<th>Opções</th>
                </tr>
                </thead>
                <tbody>
               ";
                 
				 if($stmt = $mysqli->prepare('Select * from utilizador,departamento where utilizador.departamento=departamento.codepartamento ORDER BY id_utilizador ASC ')) {

		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_utilizador,$departament,$nome_utilizador,$password,$email,$codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		$i = 0;
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				$i++;
			$id=$id_utilizador;
				echo"
				  
						 <tr>
				
							<td>$nome_utilizador </td>
							<td>$departamento</td>
							<td><label><a href='index.php?page=form_util&id=$id&user_nome=$user_name'><span><button type='button'class='btn btn-warning btn-xs'><i class='fa fa-pencil-square-o fa-1x' aria-hidden='true'></i></button></span></span></a></label>
							<label><a href='index.php?page=confirmar_util&id=$id&user_nome=$user_name'><span><button type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash fa-1x' aria-hidden='true'></i></button><a></label></span></td>
						 </tr>
				";
					
				
			}
			
	
			$stmt->close();		

		
		}else{
			$id=0;
		 
		}		
	}
				$id+=1;
			 echo"
			 </tbody>
               
              </table>
			
             <div class='col-xs-2'>
			  	<a href='index.php?page=inser_util&id=$id&user_nome=$user_name'><span><button type='button' class='btn btn-success btn-block btn-flat'><i class='fa fa-plus  fa-1x' aria-hidden='true'> Adicionar</i> </button></span></a>
				</div>
			</div>
            <!-- /.box-body -->
			 
          </div>
          <!-- /.box -->
		  
		  ";
		?>