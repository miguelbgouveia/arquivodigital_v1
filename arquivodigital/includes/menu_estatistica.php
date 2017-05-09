<?php 


			//<Primeiro estatistica>.................................................
	echo"
        
          <div class='box box-default collapsed-box box-solid'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Utilizador</h3>

              <div class='box-tools pull-right'>
                <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class='box-body'>
         ";
			 include('includes/estatistica.php');
		 echo"
        </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      
			";
			
		//</Primeira estatistica>.................................................
		
		//<Segunda estatistica>...................................................
	
		
		 echo"<div class='box box-default collapsed-box box-solid'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Documentos</h3>

              <div class='box-tools pull-right'>
                <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class='box-body'>
         ";
				include("includes/estatistica2.php");
				 echo"
				</div>
				<!-- /.box-body -->
				<div class='box-footer'>
				 
				</div>
				<!-- /.box-footer-->
			  </div>
			";
		//</Segunda estatistica>..................................................
		//<Terceira estatistica>...................................................
		echo"<div class='box box-default collapsed-box box-solid'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Departamentos</h3>

              <div class='box-tools pull-right'>
                <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class='box-body'>
         ";
				include("includes/estatistica1.php");
			echo"	
			</div>
				<!-- /.box-body -->
				<div class='box-footer'>
			
				</div>
				<!-- /.box-footer-->
			  </div>
			";
		//<Terceira estatistica>...................................................
?>
		
	
