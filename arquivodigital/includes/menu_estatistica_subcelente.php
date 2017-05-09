<?php 


			//<Primeiro estatistica>.................................................
			echo"
			<h1>Estatistica:</h1>
			<div class='box'>	
            <div class='box-body'>";
			include("includes/estatistica.php");
						echo"</div>
            <!-- /.box-body -->
          </div>
		  <!-- /.box -->
        ";
		//</Primeira estatistica>.................................................
		
		//<Segunda estatistica>...................................................
		echo"
			<div class='box'>
						
				
            <div class='box-body'>";
				include("includes/estatistica2.php");
				echo"</div>
            <!-- /.box-body -->
          </div>
		  <!-- /.box -->
        ";
		//</Segunda estatistica>..................................................
		echo"
		<div class='box'>
						<div class='box-header'>
						 
						</div>
				
            <div class='box-body'>";
				include("includes/estatistica1.php");
				
				echo"
				</div>
            <!-- /.box-body -->
          </div>
		  <!-- /.box -->
        </div>
        <!-- /.col -->
		</div>";
?>
		
	
