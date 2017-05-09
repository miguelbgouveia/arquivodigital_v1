<?php
			$fax=0;
			$declaracoes=0;
			$informacao_interna=0;
			$nota_interna=0;
			$oficios_circulares=0;
			$press_release=0;
		
			$utilizador=null;
			$total=0;
			if(isset($_POST['id']))
				$id=$_POST['id'];
				else $id=1;
				
		
		if($stmt = $mysqli->prepare('Select * from departamento,documentos where departamento.codepartamento=documentos.codepartamento2')) {
		
		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($codepartamento,$aber,$departamento,$numero,$ano,$numutilizador,$data,$assunto,$destinatarios,$id_tipo_doc,$codepartamento2,$ficheiros);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
			
					if($codepartamento2==$id){
		
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
						$total++;
						$utilizador=$aber;	
						
					}
			}
			
			
			$stmt->close();	
			echo"<h3>Departamento:<b> $utilizador</b></h3>";
			echo"<ul><p><li>Fax dá $utilizador: <b>$fax
			</b></li><li>Declarações dá $utilizador: <b>$declaracoes</b>
			</li><li>Informações Interna dá $utilizador: <b>$informacao_interna</b>
			</li><li>Oficios Circulares dá $utilizador: <b>$oficios_circulares</b>
			</li><li>Press Release dá $utilizador: <b>$press_release</b>
			</li><li>Nota Interna  dá $utilizador: <b>$nota_interna</b></li> 
			<li>Total de Documentos dá $utilizador: <b>$total</b></
			li></p></ul>";
			
		}		
	}


						
	
		
?>