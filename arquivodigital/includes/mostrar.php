<?php
			$fax=0;
			$declaracoes=0;
			$informacao_interna=0;
			$nota_interna=0;
			$oficios_circulares=0;
			$total=0;
			$press_release=0;
				if(isset($_POST['id']))
				$id=$_POST['id'];
				else $id=1;
			
			$utilizador=null;
		
		if($stmt = $mysqli->prepare('Select * from documentos,utilizador where documentos.numutilizador=utilizador.id_utilizador')) {

		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($numero,$ano,$numutilizador,$assunto,$data,$destinatario,$id_tipo_doc,$codepartamento,$ficheiro,$id_utilizador,$departament,$nome_utilizador,$password,$email);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
			
					if($numutilizador==$id){
						
						
						switch($id_tipo_doc){
							case 1:
								$fax++;
								
							break;
							case 2:
								$declaracoes++;
							
							break;
							case 3:
								$informacao_interna++;	
														
							break;
							case 4:
								$nota_interna++;
					
							break;
							case 5:
								$oficios_circulares++;
								
							break;
							case 6:
								$press_release++;
								
							break;
							}
						$utilizador=$nome_utilizador;	
						$total=$press_release+$oficios_circulares+$nota_interna+$informacao_interna+$fax;
					}
			}
			
			
			$stmt->close();	
			echo"<h3>Utilizador: <b>$utilizador</b></h3>";
			echo"<p><ul><li>Fax enviados: <b>$fax
			</b></li><li>Declarações enviados: <b>$declaracoes</b>
			</li><li>Informações Interna enviadas: <b>$informacao_interna</b>
			</li><li>Oficios Circulares enviadas: <b>$oficios_circulares</b>
			</li><li>Press Release enviados: <b>$press_release</b>
			</li><li>Nota Interna: <b>$nota_interna</b></
			li><li>Total de Documentos Enviados: <b>$total</b></
			li></ul></p>";
			
		}		
	}

		
	
		
?>