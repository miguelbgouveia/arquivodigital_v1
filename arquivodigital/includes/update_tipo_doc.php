<?php
include ("../config/config.php");
$ativo=1;
$id=$_GET['id'];
if($stmt = $mysqli->prepare('Select id_tipo_doc ,tipo_doc from tipo_doc')) {
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id_tipo_doc,$tipo_doc);
		$num_rows = $stmt->num_rows;
		
		if($num_rows>0) {
		
			while ($stmt->fetch()) {	
			}
			$stmt->close();		
		}		
	}
	if($id_tipo_doc<$id){
		header("Location: ../index.php?page=tipo_documento&user_nome=$user&M=5");
		
	}else{
$stmt = $mysqli->prepare("Update tipo_doc set id_tipo_doc=?,tipo_doc=? where id_tipo_doc=".$id);
$stmt->bind_param('is',$id, $_POST['nome']);
$stmt->execute();
echo "$stmt->affected_rows resgistos inseridos";
$stmt->close();
$user_name=$_GET['user_nome'];


sleep(5);


header("Location: ../index.php?page=tipo_documento&user_nome=$user_name&M=6");
}
?>