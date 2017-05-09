<?php
include ("../config/config.php");
$user_name=$_GET['user_nome'];
$ativo=1;
$id=$_GET['id'];
$id++;
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
if($id_tipo_doc>=$id){
		header("Location: ../index.php?page=tipo_documento&user_nome=$user&M=0");	 
	}else{
	
$stmt = $mysqli->prepare("INSERT INTO tipo_doc VALUES (?,?)");
$stmt->bind_param('is',$id,$_POST['nome']);
$stmt->execute();
echo "$stmt->affected_rows resgistos inseridos";
$stmt->close();


sleep(5);


		header("Location: ../index.php?page=tipo_documento&user_nome=$user_name&M=1");
}
?>