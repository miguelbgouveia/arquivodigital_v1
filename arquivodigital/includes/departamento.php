<?php
$ativo=1;
$id=0;
$user_name=$_GET['user_nome'];

   
echo"<div class='box'>
            <div class='box-header'>
              <h3 class='box-title'>Tabela Departamento</h3>
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

					<th>Aber</th>
					<th>Departamento</th>
					<th>Opções</th>
                </tr>
                </thead>
                <tbody>
               ";
                 
				 if($stmt = $mysqli->prepare('Select codepartamento ,aber,	departamento from departamento')) {

		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
					$id=$codepartamento;
				echo"
				  
		 <tr>
			
			<td>$aber</td>
			<td>$departamento</td>
			<td><label> 
			<a href='index.php?page=form_depar&id=$id&user_nome=$user' class='btn btn-warning btn-xs'><span><span><i class='fa fa-pencil-square-o fa-1x' aria-hidden='true'></i></span></span></a>
			
			<a href='index.php?page=confirmar_depar&user_nome=$user&id=$id' class='btn btn-danger btn-xs'><span><i class='fa fa-trash fa-1x' aria-hidden='true'></i><a></label></span></td>
		 </tr>
				";
				
			}
			
	
			$stmt->close();		
			
		}else{
			$id=0;
		}		
	}
				 $id++;
			 echo"
			 </tbody>
               
              </table>
			     <div class=''>
			  	<label><a href='index.php?page=inser_depar&id=$id&user_nome=$user_name'><span><button type='button' class='btn btn-success btn-block'><i class='fa fa-plus  fa-1x' aria-hidden='true'></i> Adicionar</button></span></a></label>
				</div>
				
            </div>
			  
            <!-- /.box-body -->
          </div>
		  

  

</div>

		  ";
		?>