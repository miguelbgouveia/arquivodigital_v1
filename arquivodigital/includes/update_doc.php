<?php
include ("../config/config.php");
$user_name=$_GET['user_nome'];
$target_dir = "docs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
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
	$problema="Desculpe o ficheiro e demasiado grande";
    $uploadOk = 0;
}
// Allow certain file formats
if($_FILES["fileToUpload"]["size"] > 0 && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "txt") {
    echo "Sorry, only dox, pdf files are allowed.";
	$problema="Desculpe o ficheiro não faz parte do tipo de documento que e permitido sendo os quais <b>docx</b> e <b>pdf</b>";
    $uploadOk = 0;
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

$t=$_POST['departamento'];
echo"$t<br>";
$ativo=1;
$id=$_GET['id'];
echo"ID:$id<br>";
if($stmt = $mysqli->prepare('Select * from documentos  ')) {

		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($numero,$ano,$numero_utilizador,$assunto,$data,$destinatario,$id_tipo_doc2,$codepartamento2,$ficheiro);
		$num_rows = $stmt->num_rows;
		
		$i = 0;
		if($num_rows>0) {
		
			while ($stmt->fetch()) {
					
				}
			$stmt->close();		
		}		
	}

	 if($numero<$id){
		header("Location: ../index.php?page=documento&id=$id&user_nome=$user_name&M=5");
		echo"flag1";
	}else if(!isset($_POST['departamento'])){
		header("Location: ../index.php?page=form_doc&id=$id&user_nome=$user_name&M=falha");	
		echo"flag2";
	}else if(!isset($_POST['num_utilizador'])){
		echo"flag3";
		header("Location: ../index.php?page=form_doc&id=$id&user_nome=$user_name&M=falha");	
	}else if ($uploadOk ==0) {
		echo "Sorry, file already exists.";
		header("Location: ../index.php?page=form_doc&id=$id&user_nome=$user_name&M=doc&problema=$problema");
	}else if(!isset($_POST['documento'])){
		echo"flag4";
		header("Location: ../index.php?page=form_doc&id=$id&user_nome=$user_name&M=falha");
	}else{
		echo"flag5";
		$stmt = $mysqli->prepare("Update documentos set numero=?,ano=?,numutilizador=?,assunto=?,data=?,destinatarios=?,id_tipo_doc=?,	codepartamento2=?,ficheiro=? where numero = ".$id);

		$stmt->bind_param('isisssiis',$id, date("Y"),$_POST['num_utilizador'],$_POST['assunto'],$_POST['data'],$_POST['destinatarios'],$_POST['documento'],$_POST['departamento'],$target_file);
		$stmt->execute();
		echo "$stmt->affected_rows resgistos inseridos";
		$stmt->close();

		header("Location: ../index.php?page=documento&user_nome=$user_name&M=6");
	}
?>