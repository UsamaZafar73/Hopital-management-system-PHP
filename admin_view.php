<?php
	session_start();
	// Redirect the user to login page if he is not logged in.
 
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
//   	require_once('generateAlert.php');

?>

  <body>
 
      
 <?php
	require 'inc/navigation.php';
?>
          
          <div class="single-slider-item set-bg" data-setbg="inc/main.jpg" style="background-image: url('inc/main.jpg') ;background-attachment: fixed;  ">
              <br>
                        <br>
               <?php if(isset($_GET['Message'])){
    echo $_GET['Message'];
} ?>
              
   
              
              
                    
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h1> </h1> <br /><h2 style="color:aqua"></h2>
                                                                <h1> </h1> <br /><h2 style="color:aqua"></h2>
                                <h1> </h1> <br /><h2 style="color:aqua"></h2>
                                <h1> </h1> <br /><h2 style="color:aqua"></h2>
                                <h1> </h1> <br /><h2 style="color:aqua"></h2>
                           

                            </div>
                        </div>
                         
                          <div class="hero-text" style="margin-top: 0px">
            
                                                    <h1> </h1> <br /><h2 style="color:aqua"></h2>

                    </div>
                </div>
            </div>
               
    <!-- Page Content -->
    <div class="container-fluid bg-info text-dark">
	  <div class="row">
		 
		 <div class="col-lg-12 ">
			<div class="tab-content " id="v-pills-tabContent">
			  <div class="tab-pane fade show active" id="v-pills-item" role="tabpanel" aria-labelledby="v-pills-item-tab">
				<div class="card card-outline-secondary my-4"><h3>
				  <div class="card-header btn-primary" style="padding-left:25%;margin:30px">Admin Panel for Managing Users of System</div></h3>
				   
				  </div> 
				</div>
			  </div>
		 
			 
		  
			  
			  <div class="tab-pane" style="padding:5%" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Patient registered in the system<button id="reportsTablesRefresh" name="reportsTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></div>
				  <div class="card-body bg-success text-dark">										
				 
  
					<!-- Tab panes for reports sections -->
					<div class="tab-content">
						<div id="itemReportsTab" class="container-fluid tab-pane active" style="background-color:darkcyan">
							<br>
 							<div class="table-responsive" id="itemReportsTableDi1v"></div>
                                                        <?php require_once('admin_patients.php');?>

						</div>
					</div>
				  </div> 
				</div>
			  </div>
			</div>
		 </div>
	  </div>
    </div>
      
       <!-- Page Content -->
    <div class="container-fluid bg-info text-dark">
	  <div class="row">
		 
		 <div class="col-lg-12 ">
			 
		 
			 
		  
			  
			  <div class="tab-pane" style="padding:5%" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Doctors registered in our system<button id="reportsTablesRefresh" name="reportsTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></div>
				  <div class="card-body bg-success text-dark">										
				 
  
					<!-- Tab panes for reports sections -->
					<div class="tab-content">
						<div id="itemReportsTab" class="container-fluid tab-pane active" style="background-color:darkcyan">
							<br>
 							<div class="table-responsive" id="itemReportsTableDiva"></div>
                                                        <?php require_once('admin_doctors.php');?>

						</div>
					</div>
				  </div> 
				</div>
			  </div>
			</div>
		 </div>
	  </div>

 <!-- Page Content -->
    <div class="container-fluid bg-info text-dark">
	  <div class="row">
		 
		 <div class="col-lg-12 ">
			 
		 
			 
		  
			  
			  <div class="tab-pane" style="padding:5%" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Staff  members registered in our system<button id="reportsTablesRefresh" name="reportsTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></div>
				  <div class="card-body bg-success text-dark">										
				 
  
					<!-- Tab panes for reports sections -->
					<div class="tab-content">
						<div id="itemReportsTab" class="container-fluid tab-pane active" style="background-color:darkcyan">
							<br>
 							<div class="table-responsive" id="itemReportsTableDivs"></div>
                            <?php require_once('admin_staff.php');?>
						</div>
					</div>
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
