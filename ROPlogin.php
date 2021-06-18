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
  <body background="inc/13.jpg">
 
      
	<!-- Default Page Content (login form) -->
    <div class="container">
      <div class="row justify-content-center">
	  <div class="col-sm-12 col-md-5 col-lg-5">
		<div class="card">
		  <div class="card-header">
			ROP Login
		  </div>
		  <div class="card-body bg-secondary text-dark">
			<form action="checkLoginROP.php" method="post">
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
                   		   <input type="submit" class="btn btn-primary" style="margin-left:40%">    
<br>
                        
                        
                  <div class="row" style="padding:10px">     
				<a href="login.php" class="btn btn-success col-6">Admin login</a>
                    <a href="Municipalitylogin.php" class="btn btn-success col-6"  >Municipality Login</a>
			     </div> 
                            
                        <div class="row" style="padding:10px">
                            <a href="ROPlogin.php" class="btn btn-success col-6">ROP login</a>
                    <a href="Register.php" class="btn btn-warning col-6" id="Register">Register User</a>
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
  </body>
</html>
