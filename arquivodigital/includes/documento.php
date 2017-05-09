<?php
$ativo=1;

echo"<div class=''>
            <div class='box-header'>
              <h2 class='box-title'><i class='fa fa-book'></i><b> Lista de Documentos </b></h2>
            </div>
			
            <!-- /.box-header -->
            <div class='box-body'>
			 ";
				if(isset($_GET['M'])){
					$error=$_GET['M'];
					include("includes/mensagens/erro$error.php");
				}
				
		if($stmt = $mysqli->prepare('SELECT * FROM documentos,tipo_doc,utilizador,departamento where documentos.numutilizador=utilizador.id_utilizador and documentos.id_tipo_doc=tipo_doc.id_tipo_doc and documentos.codepartamento2=.departamento.codepartamento')) {
		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($numero,$ano,$numero_utilizador,$assunto,$data,$destinatario,$id_tipo_doc2,$codepartamento2,$ficheiro,$id_tipo_doc,$tipo_doc,$id_utilizador,$departamento2,$nome_utilizador,$password,$email,$codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
				
				echo"
				<div class='row-fluid'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>	
					<th><i class='fa fa-sort' aria-hidden='true' style='color:#3c8dbc;'></i> N.º</th>				
					<th><i class='fa fa-sort' aria-hidden='true' style='color:#3c8dbc;'></i> DATA</th>
					<th><i class='fa fa-sort' aria-hidden='true' style='color:#3c8dbc;'></i> TIPO DOC.</th>
					<th><i class='fa fa-sort' aria-hidden='true' style='color:#3c8dbc;'></i> ASSUNTO</th>
					<th><i class='fa fa-sort' aria-hidden='true' style='color:#3c8dbc;'></i> DESTINATÁRIO</th>
					<th><i class='fa fa-sort' aria-hidden='true' style='color:#3c8dbc;'></i> DEP.</th>
					<th><i class='fa fa-sort' aria-hidden='true' style='color:#3c8dbc;'></i> UTILIZADOR</th>
					<th>OPÇÕES</th>
                </tr>
                </thead>
                <tbody>
               ";
                 	
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
						$id=$numero;
				echo"
				 <tr>
				    <td style='min-width: 50px; text-align: center;'>$numero</td>
					<td style='width: 80px;'>$data</td>
					<td>$tipo_doc</td>
					<td>$assunto</td>
					<td>$destinatario</td>
					<td style='min-width: 55px;'>$aber</td>
					<td>$nome_utilizador</td>
					<td>
					<a href='index.php?page=view_doc&id=$id&user_nome=$user'><span><button type='button'class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i></button></span></a>
					<a href='index.php?page=form_doc&id=$id&user_nome=$user'><span><button type='button'class='btn btn-warning btn-xs'><i class='fa fa-pencil' aria-hidden='true'></i></button></span></a>
					<a href='index.php?page=confirmar_doc&id=$id&user_nome=$user'><span><button type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash' aria-hidden='true'></i></button></span></a></td>
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
			</div>			  
				 <div class=''>
			  	<a href='index.php?page=inser_doc&id=$id&user_nome=$user' class='btn btn-success '>
				<i class='fa fa-plus'></i> Novo Documento </a>
				</div>
            </div
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  ";
		

     
		
		?>