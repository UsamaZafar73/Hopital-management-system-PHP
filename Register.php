<?php
	session_start();
	
	// Check if user is already logged in
	 

if(isset($_SESSION['loggedInMunicipality'])){
		header('Location: Municipality.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
  <body background="inc/bg2.jpg">
 <div class="container " >
			  <div class="row justify-content-center">
			  <div class="col-sm-12 col-md-5 col-lg-5">
				<div class="card"  >
				  <div class="card-header">
					Register Yourself
				  </div>
				  <div class="card-body bg-secondary text-dark">
					<form action="registerbackend.php" method="post">
					<div id="registerMessage"></div>
					 
                                       <?php if(isset($_GET['Message'])){
    echo $_GET['Message'];
} ?>
                        
					   <div class="form-group">
						<label for="registerUsername">Username<span class="requiredIcon">*</span></label>
						<input type="text" class="form-control" id="registerUsername" name="registerUsername" autocomplete="on">
					  </div>
                        
                        
					  <div class="form-group">
						<label for="registerPassword1">Password<span class="requiredIcon">*</span></label>
						<input type="password" class="form-control" id="registerPassword1" name="registerPassword1">
					  </div>
                        
					  <div class="form-group">
						<label for="registerPassword2">Re-enter password<span class="requiredIcon">*</span></label>
						<input type="password" class="form-control" id="registerPassword2" name="registerPassword2">
					  </div>
                        
                         <div class="form-group">
						<label for="registerFullName">E-mail<span class="requiredIcon">*</span></label>
						<input type="mail" class="form-control" id="registerFullName" name="registerFullName">
						<!-- <small id="emailHelp" class="form-text text-muted"></small> -->
					   <div class="form-group">
                        <label for="userType">User Type<span class="requiredIcon">*</span></label>
                             <br>
                        
                        <Input type = 'Radio' Name ='Admin' value= 'Patient' style="margin:10px"
                             
                            >Patient 

                        <Input type = 'Radio' Name ='Admin' value= 'Doctor' style="margin:10px"
                            
                        >Doctor        
                        
                            
                        <Input type = 'Radio' Name ='Admin' value= 'Staff' style="margin:10px"
                             
                        >Staff   
                               
                        </div>
                        
                         
                        
                                            <input type="submit" value="Register" class="btn btn-success" style="margin-left:40%">    
<br>
                        
                     
                            
                        <div class="row" style="padding:10px">
                            
                    <a href="login.php" class="btn btn-primary col-12" id="Register">Back to Login</a>
                            </div>
                        
 					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
                  </div>

  </body>
                  <?php
	require 'inc/footer.php';
?>
</html>
