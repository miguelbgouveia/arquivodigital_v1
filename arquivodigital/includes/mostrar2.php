<?php
			$contador=0;
			
			$tipo=null;
		
		if(isset($_POST['id']))
				$id=$_POST['id'];
				else $id=1;

			
		if($stmt = $mysqli->prepare('Select * from documentos,tipo_doc where documentos.id_tipo_doc=tipo_doc.id_tipo_doc')) {

		
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($numero,$ano,$numutilizador,$assunto,$data,$destinatario,$id_tipo_doc2,$codepartamento2,$ficheiros,$id_tipo_doc,$nome);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {			
					if($id_tipo_doc==$id){
					$contador++;	
					$tipo=$nome;
					
					}
			}
			
			
			$stmt->close();	
			echo"<h3>Tipo de Documento:<b>$tipo</b></h3>";
			echo"<ul><p><li>$tipo enviados: <b>$contador</b></p></ul>";
			
		}		
	}

		
	
		
?>