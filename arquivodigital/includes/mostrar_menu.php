<?php 
				if(isset($_POST['tabela']))
				$tabela=$_POST['tabela'];
				else $tabela="Utilizador";

			
			echo"
		<div >
		<div class='box'>
            <div class='box-body'>";
	
		
		header("Location: index.php?page=$tabela");
		echo" 
            </div>
            <!-- /.box-body --> 
          </div>
          <!-- /.box -->
		  </div>
        <!-- /.col -->";
		?>
		
	
