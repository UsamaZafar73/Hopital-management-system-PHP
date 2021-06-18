<?php
	session_start();
	// Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: login.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
  <body>
<?php
	require 'inc/navigation.php';
?>
      
 
       <div class="container-fluid" >
         <a href="#" ><img class="col-lg-2" src="inc/l22.png" alt="KPHR" width="304" height="166"></a>
        <a href="#" ><img  class="col-lg-7" src="inc/a1.jpg" alt="KPHR" width="304" height="166"></a>
                  <a href="#" ><img class="col-lg-2" src="inc/l22.png" alt="KPHR" width="304" height="166"></a>
      
            </div>
          
          <div class="single-slider-item set-bg" data-setbg="inc/main_pic.jpg" style="background-image: url('inc/main_pic.jpg') ;background-attachment: fixed;  ">
              
              
              
   <br> <br>
<br> <br><br> <br>
              
                    
                
            </div>
               
    <!-- Page Content -->
      
      
      
			  <div class="tab-pane" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Reports </div>
				  <div class="card-body bg-success text-dark">										
				 
  
					<!-- Tab panes for reports sections -->
					<div class="tab-content">
						<div class="tab-content">
						<div id="itemReportsTab" class="container-fluid tab-pane active">
							<br>
							<h4>ROP needs to take action for all these Suspicious activities on the road</h4>
                           <br> 
							  <?php require_once('ROP_alerts.php');?>
						</div>
					</div>
					</div>
				  </div> 
				</div>
			  </div>
    	
      
      
      
      
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
