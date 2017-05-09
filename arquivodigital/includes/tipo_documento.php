<?php
$ativo=1;
$id=0;
if(isset($_GET['M'])){
		$error=$_GET['M'];
		include("includes/mensagens/erro$error.php");
	}
echo"<div class=''>
            <div class='box-header'>
              <h3 class='box-title'>Tabela Tipo Documentos</h3>
            </div>
            <!-- /.box-header -->
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
					<th>Tipo Documento</th>
					<th>Opções</th>
                </tr>
                </thead>
                <tbody>
               ";
                 
	 if($stmt = $mysqli->prepare('Select id_tipo_doc ,tipo_doc from tipo_doc')) {
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_tipo_doc,$tipo_doc);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
				$id=$id_tipo_doc;
				echo"
						 <tr>	
							<td>$tipo_doc</td>
							<td><label><a href='index.php?page=form_tipo_doc&id=$id&user_nome=$user'><span><button type='button'class='btn btn-warning btn-xs'><i class='fa fa-pencil-square-o fa-1x' aria-hidden='true'></i></button></span></span></a></label>
							<label><a href='index.php?page=cinformar_tipo_doc&id=$id&user_nome=$user'><span><button type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash fa-1x' aria-hidden='true'></i></button><a></label></span></td>
						 </tr>
				";
				
			}
			$stmt->close();		
		}		
	}
			 echo"
			 </tbody>
              </table>
			  <div class=''>
			  <label><a href='index.php?page=inser_tipo_doc&id=$id&user_nome=$user'><span><button type='button' class='btn btn-success btn-block '><i class='fa fa-plus ' aria-hidden='true'></i> Adicionar</button></span></a></label>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->";
		
		
		?>