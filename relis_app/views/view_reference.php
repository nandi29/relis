	<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <?php top_msg(); ?>
          <div class="page-title">
              
              <?php 
                   if(isset($search_view)){
                   		$this->load->view($search_view);
                   	}
                ?>
              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" >
                  <div class="x_title">
                    <h2><?php echo isset($page_title) ? $page_title :"" ; ?></h2>
                    <?php 
                    if(isset($top_buttons)){
                    	old_version();
                    	echo "<ul class='nav navbar-right panel_toolbox'>$top_buttons</ul>";
                    
                    }                    
                    ?>
                    
                    
                    
                    <div class="clearfix"></div>
                  </div>
                  
                  
                  
                  <div class="x_content" style="min-height:400px ">
                  
                 
                  <?php
                            	
                  /*
                  
                  echo "<table class='table table-striped'>";
                  foreach($item_data as $k=>$v){
                  	echo "<tr>";
                  	echo "<th style='width:20%'>".$v['title']."</th><td>".$v['val']."</td>";
                  	echo "<tr>";
                  		
                  }
                  echo "</table>"."<br/><br/>";
					*/
                  
                 // print_test($item_data);
                  echo "<table class='table table-striped'>";
                  foreach($item_data as $k=>$v){
                  	
	                  	echo "<tr>";
	                  	echo "<th style='width:20%'>".lng($v['title'])."</th>";
	                    if(empty($v['val2']) OR count($v['val2'])==0){
	                    	  echo "<td></td>";
	                    }elseif(count($v['val2'])==1){
	                    	 echo "<td>".$v['val2'][0]."</td>";
	                    }else{
		                    echo "<td> <table class='table table-hover'>";
		                    foreach ($v['val2'] as $key => $value) {
		                    	echo "<tr><td style='border-top:0px'> - $value</tr></td>";
		                    }
		                    
		                    echo "</table></td>";
		                  	echo "<tr>";
	                    }
	                    
	                    
                  }
                  echo "</table>"."<br/><br/>";
                  	
                  
                  
					?>
                   
                  </div>
                  
                  
                  
                  
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->