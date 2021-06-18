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
				  <div class="card-header btn-primary" style="padding-left:30%;margin:30px">Doctor Panel to view the appointments</div></h3>
				   <div class="card-body bg-success text-dark">
 
 
					</div>
				  </div> 
				</div>
			  </div>
		 
			 
		  
			  
			  <div class="tab-pane" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">All the appointments<button id="reportsTablesRefresh" name="reportsTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></div>
				  <div class="card-body bg-success text-dark">										
				 
  
					<!-- Tab panes for reports sections -->
                      
                      
					<div class="tab-content">
						<div id="itemReportsTab" class="container-fluid tab-pane active" style="background-color:darkcyan">
							<br>
 							<div class="table-responsive" id="itemReportsTableDivs">
                            
                            <?php

 $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "hospital1";
			
			$conn = mysqli_connect($servername, $username, $password);
			mysqli_select_db($conn, $dbname);   
 
 
	 $alerts = "SELECT * FROM appointment";
	$result =mysqli_query($conn,$alerts);

	$output = '<table id="itemReportsTable" class="table table-sm table-striped table-bordered table-hover" style="width:100%">
				<thead>
					<tr>
                                             						 <th>User Name</th>

						<th>Appointment ID</th>
						<th>PatientName</th>					 
						<th>Age</th>
                        <th>Symptoms</th>
                           <th>Doctor</th>
						 <th>Date</th><th>Diagnosed Disease</th>
						 <th>Medication</th>

                        
					</tr>
				</thead>
				<tbody>';
	
	// Create table rows from the selected data 
	while($row =mysqli_fetch_assoc($result)){
 $desl=$row['AppointmentID'];
        
		$output .= '<tr>' .       
                        '<td>' . $row['PatientID'] . '</td>' .

						'<td>' . $row['AppointmentID'] . '</td>' .
						'<td>' . $row['PatientName'] . '</td>' .
						//'<td>' . $row['itemName'] . '</td>' .
//						'<td><a href="#" class="itemDetailsHover" data-toggle="popover" id="' . $row['productID'] . '">' . $row['itemName'] . '</a></td>' .
						'<td>' . $row['Age'] . '</td>' .
						'<td>' . $row['Disease'] . '</td>' .
						'<td>' . $row['Doctor'] . '</td>' . 
						'<td>' . $row['Date'] . '</td>' . 
                        
  '<td>' . $row['defect'] . '</td>' .
            '<td>' . $row['Medication'] . '</td>' 
            
 					.'</tr>';
        
        
	}
                                
                                
	
//	$itemDetailsSearchStatement->closeCursor();
	
	$output .= '</tbody>
					<tfoot>
							<tr>
                                                     						 <th>User Name</th>

						<th>Appointment ID</th>
						<th>PatientName</th>					 
						<th>Age</th>
                        <th>Symptoms</th>
                        <th>Doctor</th>
						 <th>Date</th><th>Diagnosed Disease</th>
						 <th>Medication</th>
                        
					</tr>
					</tfoot>
				</table>';
	echo $output;
?>
  
                            
                            
                            
                            </div>
						</div>
					</div>
				  </div> 
				</div>
                  	<div class="tab-content " id="v-pills-tabContent">
			  <div class="tab-pane fade show active" id="v-pills-item" role="tabpanel" aria-labelledby="v-pills-item-tab">
				<div class="card card-outline-secondary my-4"><h3>
				  <div class="card-header btn-primary" style="padding-left:30%;margin:30px">Diagnose Disease and Prescibe medication</div></h3>
				   <div class="card-body bg-success text-dark">
 
 
					</div>
				  </div> 
				</div>
			  </div>
                      <?php
	require 'dose.php';
?>
                  
                  <br>
			  </div>
             	<div class="tab-content " id="v-pills-tabContent">
			  <div class="tab-pane fade show active" id="v-pills-item" role="tabpanel" aria-labelledby="v-pills-item-tab">
				<div class="card card-outline-secondary my-4"><h3>
				  <div class="card-header btn-primary" style="padding-left:30%;margin:30px">Delete the appointment that has been passed away</div></h3>
				   <div class="card-body bg-success text-dark">
 
 
					</div>
				  </div> 
				</div>
			  </div>
                      <?php
	require 'delete_appointment.php';
?>
			</div>
		 </div>
	  </div>
    </div>
      
      
      
     
 
      
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
