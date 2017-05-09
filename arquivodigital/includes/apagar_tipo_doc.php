<?php
include ("../config/config.php");
$id=$_GET['id'];
$user=$_GET['user_nome'];
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
		header("Location: ../index.php?page=tipo_documento&user_nome=$user&M=2");
		
	}else{
	$stmt = $mysqli->prepare("DELETE from tipo_doc where id_tipo_doc=?");
	$stmt->bind_param("i", $_GET['id']);
	$stmt->execute();
	echo "$stmt->affected_rows resgistos apagados";
	$stmt->close();
	header("Location: ../index.php?page=tipo_documento&user_nome=$user&M=3");
	
	echo "<br>***************************************************************<br>";
	}
?>
