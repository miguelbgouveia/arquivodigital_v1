<?php
include ("../config/config.php");
$user_name=$_GET['user_nome'];
$ativo=1;
$problema=null;
$id=$_GET['id'];
$target_dir = "docs/";

//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file = "";

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
}
// Check if file already exists
if ($_FILES["fileToUpload"]["size"] > 0 && file_exists($target_file)) {
    echo "Sorry, file already exists.";
	$problema="Desculpe o ficheiro ja existe";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
	$problema="Desculpe o ficheiro e demasiado grande";
}
// Allow certain file formats
if($_FILES["fileToUpload"]["size"] > 0 && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "txt") {
    echo "Sorry, only dox, pdf files are allowed.";
    $uploadOk = 0;
	$problema="Desculpe o ficheiro não faz parte do tipo de documento que e permitido sendo os quais <b>docx</b> e <b>pdf</b>";
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if($stmt = $mysqli->prepare('SELECT * FROM documentos,tipo_doc,utilizador,departamento where documentos.numutilizador=utilizador.id_utilizador and documentos.id_tipo_doc=tipo_doc.id_tipo_doc and documentos.codepartamento2=.departamento.codepartamento')) {
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($numero,$ano,$numero_utilizador,$assunto,$data,$destinatario,$id_tipo_doc2,$codepartamento2,$ficheiro,$id_tipo_doc,$tipo_doc,$id_utilizador,$departamento2,$nome_utilizador,$password,$email,$codepartamento,$aber,$departamento);
		$num_rows = $stmt->num_rows;
		
		
		
		if($num_rows>0) {
			while ($stmt->fetch()) {	
			}
			$stmt->close();		
		}
	}		
		
		
	 if($numero>$id){
		header("Location: ../index.php?page=documento&id=$id&user_nome=$user_name&M=0");
		echo"flag1";
	}else if(!isset($_POST['departamento'])){
		header("Location: ../index.php?page=inser_doc&id=$id&user_nome=$user_name&M=falha");	
		echo"flag2";
	}else if(!isset($_POST['num_utilizador'])){
		echo"flag3";
		header("Location: ../index.php?page=inser_doc&id=$id&user_nome=$user_name&M=falha");	
	}else if(!isset($_POST['documento'])){
		echo"flag4";
		header("Location: ../index.php?page=inser_doc&id=$id&user_nome=$user_name&M=falha");
	}else if ($uploadOk ==0) {
		header("Location: ../index.php?page=inser_doc&id=$id&user_nome=$user_name&M=doc&problema=$problema");
	}else{
		echo"flag5";
		header("Location: enviar_doc.php?id=$id&user_nome=$user_name");	
	
	$stmt = $mysqli->prepare("INSERT INTO documentos VALUES (?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param('iiisssiis',$id, date("Y"),$_POST['num_utilizador'],$_POST['assunto'],$_POST['data'],$_POST['destinatario'],$_POST['documento'],$_POST['departamento'],$target_file);
	$stmt->execute();
	echo "$stmt->affected_rows resgistos inseridos";
	$stmt->close();


	sleep(5);


		header("Location: ../index.php?page=documento&user_nome=$user_name&M=1");
}
	
?>