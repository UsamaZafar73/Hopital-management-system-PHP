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

   
      
	<!-- Default Page Content (login form) -->
      <form action="model\login\checkLogin.php" method="post">
    <div class="container">
      <div class="row justify-content-center">
	  <div class="col-sm-12 col-md-5 col-lg-5">
		<div class="card">
		  <div class="card-header">
			Intelligent Health Record Management System Login
		  </div>
		  <div class="card-body bg-secondary text-dark">
			<form action="">
			<div id="loginMessage"></div>
                         <?php if(isset($_GET['Message'])){
            echo $_GET['Message'];
        } ?>
			  <div class="form-group">
				<label for="loginUsername">Username</label>
				<input type="text" class="form-control" id="loginUsername" name="loginUsername">
			  </div>
			  <div class="form-group">
				<label for="loginPassword">Password</label>
				<input type="password" class="form-control" id="loginPassword" name="loginPassword">
			  </div>
                
                 <div class="form-group">
                        <label for="userType">User Type<span class="requiredIcon">*</span></label>
                             <br>
                        
                        <Input type = 'Radio' Name ='Admin' value= 'patient' style="margin:10px"
                             
                            >Patient 

                        <Input type = 'Radio' Name ='Admin' value= 'doctor' style="margin:10px"
                            
                        >Doctor        
                        
                            
                        <Input type = 'Radio' Name ='Admin' value= 'staff' style="margin:10px"
                             
                        >Staff   
                             <Input type = 'Radio' Name ='Admin' value= 'admin' style="margin:10px"
                             
                        >Admin    
                        </div>
                           <input type="submit" value="Login" class="btn btn-success" style="margin-left:40%">    
<br>
                        
                        
                   
                            
                        <div class="row" style="padding:10px">
                     <a href="Register.php" class="btn btn-primary col-12" id="Register">Register Yourself</a>
                            </div>
			  
 			</form>
		  </div>
		</div>
		</div>
      </div>
    </div>
<?php
	require 'inc/footer.php';
?>
          </form>
  </body>
</html>
