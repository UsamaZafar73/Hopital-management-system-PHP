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
              
   
              <br><br>
              <br><br>
              <br><br>
              <br><br>
                    
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
		<div class="col-lg-2">
		<h1 class="my-4"></h1>
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" >
			  <a class="nav-link active" id="v-pills-item-tab" data-toggle="pill" href="#v-pills-item" role="tab" aria-controls="v-pills-item" aria-selected="true">Get an appointment</a>
			 
			  <a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">Existing appointments </a>
			</div>
		</div>
		 <div class="col-lg-10 ">
			<div class="tab-content " id="v-pills-tabContent">
			  <div class="tab-pane fade show active" id="v-pills-item" role="tabpanel" aria-labelledby="v-pills-item-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Appointment details</div>
				   <div class="card-body bg-success text-dark">
<!--
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#itemDetailsTab">Item</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#itemImageTab">Upload Image</a>
						</li>
					</ul>
-->
					
					<!-- Tab panes for item details and image sections -->
					<div class="tab-content ">
						<div id="itemDetailsTab" class="container-fluid tab-pane active  text-dark" style="background-color:darkcyan">
							<br>
							<!-- Div to show the ajax message from validations/db submission -->
							<div id="itemDetailsMessage"></div>
                            
                           
                            
							<form action="generateAlert.php" method="post">
                                
                                  <div class="form-row">
<!--
							 
-->
                                       <div class="form-group col-md-6">
									<label for="camera">Patient name<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="camera" id="camera" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
                                      
                                       <div class="form-group col-md-6">
									<label for="road">Age<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="road" id="road" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
							  </div>
                                  <div class="form-row">
								  <div class="form-group col-md-6">
									<label for="location">Symptoms<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="location" id="location" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
								  <div class="form-group col-md-6">
									<label for="type">Doctor</label>
									<select id="type" name="type" class="form-control chosenSelect">
										<?php include('inc/statusList.html'); ?>
									</select>
								  </div>
							  </div>
                                
                                
							  <div class="form-row col-md-6">
								<label for="date">Date</label>
                    <input type="date" onload="getDate()" class="form-control" id="date" 
                      name="date">
							  </div>
                                  
<script>

                                function getDate(){
    var today = new Date();

document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


}
    
    
                                </script>
                                
                                
                                
                                
<!--
                                 <div class="form-row">
								<div class="form-group col-md-3" style="display:inline-block">
								  <label for="itemImageItemNumber">Camera name<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemImageItemNumber" id="itemImageItemNumber" autocomplete="off">
								  <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div>
								</div>
								<div class="form-group col-md-4">
									<label for="itemImageItemName">Road name</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" readonly>
								</div>
							  </div>
-->
                                
                                
                                
                               
							  <br>
							 
                               
                                <div class="row" style="padding-left:5%; padding-bottom:5%">
                                    
                                    
							  <input type="submit" id="addItem" class="btn btn-success col-4"  >
							 
							  <button type="reset" class="btn btn-danger" id="itemClear col-2" style="margin-left:5%">Clear</button>
							
                                    </div>
                                    </form>
                                    
						</div>
<!--
						<div id="itemImageTab" class="container-fluid tab-pane fade">
							<br>
							<div id="itemImagessage"></div>
							<p>You can upload an image for a particular item using this section.</p> 
							<p>Please make sure the item is already added to database before uploading the image.</p>
							<br>							
							<form name="imageForm" id="imageForm" method="post">
							  <div class="form-row">
								<div class="form-group col-md-3" style="display:inline-block">
								  <label for="itemImageItemNumber">Item Number<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemImageItemNumber" id="itemImageItemNumber" autocomplete="off">
								  <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div>
								</div>
								<div class="form-group col-md-4">
									<label for="itemImageItemName">Item Name</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" readonly>
								</div>
							  </div>
							  <br>
							  <div class="form-row">
								  <div class="form-group col-md-7">
									<label for="itemImageFile">Select Image ( <span class="blueText">jpg</span>, <span class="blueText">jpeg</span>, <span class="blueText">gif</span>, <span class="blueText">png</span> only )</label>
									<input type="file" class="form-control-file btn btn-dark" id="itemImageFile" name="itemImageFile">
								  </div>
							  </div>
							  <br>
							  <button type="button" id="updateImageButton" class="btn btn-primary">Upload Image</button>
							  <button type="button" id="deleteImageButton" class="btn btn-danger">Delete Image</button>
							  <button type="reset" class="btn">Clear</button>
							</form>
						</div>
-->
					</div>
				  </div> 
				</div>
			  </div>
		 
			 
		  
			  
			  <div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Reports<button id="reportsTablesRefresh" name="reportsTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></div>
				  <div class="card-body bg-success text-dark">										
				 
  
					<!-- Tab panes for reports sections -->
					<div class="tab-content">
						<div id="itemReportsTab" class="container-fluid tab-pane active" style="background-color:darkcyan">
							<br>
							<h3>You can view all the appointmetns for all the doctors here</h3>
							<div class="table-responsive" id="itemReportsTableDiv"></div>
						</div>
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
