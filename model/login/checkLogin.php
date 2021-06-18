<?php
	session_start();
//	require_once('../../inc/config/constants.php');
//	require_once('../../inc/config/db.php');
//	

  $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "hospital1";
			
			$conn = mysqli_connect($servername, $username, $password);
			mysqli_select_db($conn, $dbname);    


	$loginUsername = '';
	$loginPassword = '';
	$hashedPassword = '';

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
	
	if(isset($_POST['loginUsername'])){
		$loginUsername = $_POST['loginUsername'];
		$loginPassword = $_POST['loginPassword'];
        $selected_radio = $_POST['Admin'];

		
		if(!empty($loginUsername) && !empty($loginUsername)){
			
			// Sanitize username
			$loginUsername = filter_var($loginUsername, FILTER_SANITIZE_STRING);
			
			// Check if username is empty
			if($loginUsername == ''){
				 
                
                  $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username</div>');
                                header("Location:..\..\login.php?Message=".$Message);
				exit();
			}
			
			// Check if password is empty
			if($loginPassword == ''){
			 
                  $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Password</div>');
                                header("Location:..\..\login.php?Message=".$Message);
				exit();
			}
			
			// Encrypt the password
			$hashedPassword = md5($loginPassword);
			 if ($selected_radio == 'patient'){
                                       
	$checkUserSql="SELECT * FROM `patient` WHERE `PatientName` LIKE '$loginUsername'";
			$result =mysqli_query($conn,$checkUserSql);
			$num = mysqli_num_rows($result);
            
            echo $num;
			// Check if user exists or not
			if($num > 0){
				// Valid credentials. Hence, start the session
				$row =mysqli_fetch_assoc($result);
                $password1=$row['Password'];
                if($password1==$hashedPassword)
                {  
                    //   echo $password;
                $_SESSION['loggedIn'] = '1';
				$_SESSION['fullName'] = $row['PatientName'];
                $_SESSION['PatientID'] = $row['PatientID'];
                
                header('Location:..\..\index.php');
 				exit();              
//                    
//                                
                      
             }}
                   $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>');
                                header("Location:..\..\login.php?Message=".$Message);
				exit();
                 
                        
             }
                        else if ($selected_radio == 'doctor') {
                                       
	$checkUserSql="SELECT * FROM `doctor` WHERE `DoctorName` LIKE '$loginUsername'";
			$result =mysqli_query($conn,$checkUserSql);
			$num = mysqli_num_rows($result);
            
            echo $num;
			// Check if user exists or not
			if($num > 0){
				// Valid credentials. Hence, start the session
				$row =mysqli_fetch_assoc($result);
                $password1=$row['Password'];
                if($password1==$hashedPassword)
                {  
                    //   echo $password;
                $_SESSION['loggedIn'] = '1';
				$_SESSION['fullName'] = $row['DoctorName'];
                header('Location:..\..\Doctor_view.php');
 				exit();              
                     
                      
            }}
                   $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>');
                                header("Location:..\..\login.php?Message=".$Message);
				exit();
                 
                        
                        }
                        else if ($selected_radio == 'staff') {
                                       
	$checkUserSql="SELECT * FROM `staff` WHERE `StaffName` LIKE '$loginUsername'";
			$result =mysqli_query($conn,$checkUserSql);
			$num = mysqli_num_rows($result);
            
            echo $num;
			// Check if user exists or not
			if($num > 0){
				// Valid credentials. Hence, start the session
				$row =mysqli_fetch_assoc($result);
                $password1=$row['Password'];
                if($password1==$hashedPassword)
                {  
                    //   echo $password;
                $_SESSION['loggedIn'] = '1';
				$_SESSION['fullName'] = $row['StaffName'];
                header('Location:..\..\staff_view.php');
 				exit();              
                
                      
 }}
                            $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>');
                                header("Location:..\..\login.php?Message=".$Message);
				exit();
                 
                        
                        }
             else if ($selected_radio == 'admin') {
                                       
	$checkUserSql="SELECT * FROM `admin` WHERE `AdminName` LIKE '$loginUsername'";
			$result =mysqli_query($conn,$checkUserSql);
			$num = mysqli_num_rows($result);
            
            echo $num;
			// Check if user exists or not
			if($num > 0){
				// Valid credentials. Hence, start the session
				$row =mysqli_fetch_assoc($result);
                $password1=$row['Password'];
                if($password1==$loginPassword)
                {  
                    //   echo $password;
                $_SESSION['loggedIn'] = '1';
				$_SESSION['fullName'] = $row['AdminName'];
                header('Location:..\..\admin_view.php');
 				exit();              
//                    
                        
                      
             }}
                   $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>');
                                header("Location:..\..\login.php?Message=".$Message);
				exit();
                 
                        
             }
            else {
				 
                $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Type of User Not selected</div>');
                                header("Location:..\..\login.php?Message=".$Message);
				exit();
			}
			
			
		} 
	}
        
        else {
			 
            $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username and Password</div>');
                                header("Location:..\..\login.php?Message=".$Message);
			exit();
		}
                        
         
    

?>