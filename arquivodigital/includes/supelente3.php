<?php 
		
		
		echo"
		<h1>Escolha á Tabela:</h1>
		<form action='index.php?page=menu_estatistica' method='POST'>
		<select name='tabela'>
			 <option value='estatistica'>Utilizador</option>
			 <option value='estatistica2'>Documento</option>
			 <option value='estatistica1'>Departamento</option>
		</select>
		
		<input type='Submit'>
		</form>
		<br>
		
		";
		
		if(isset($_POST['tabela'])){
		$tabela=$_POST['tabela'];
		include("$tabela.php");
	
		
		}
		
		?>
		
	
