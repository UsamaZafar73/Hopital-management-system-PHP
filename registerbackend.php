<?php
//	require_once('inc/config/constants.php');
//	require_once('inc/config/db.php');
	
        $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "hospital1";
			
			$conn = mysqli_connect($servername, $username, $password);
			mysqli_select_db($conn, $dbname);    

	$registerFullName = '';
	$registerUsername = '';
	$registerPassword1 = '';
	$registerPassword2 = '';
	$hashedPassword = '';
	
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}




	if(isset($_POST['registerUsername'])){
		$registerUsername = htmlentities($_POST['registerUsername']);
		$registerPassword1 = htmlentities($_POST['registerPassword1']);
		$registerPassword2 = htmlentities($_POST['registerPassword2']);
        $registerFullName = htmlentities($_POST['registerFullName']); //email
        $selected_radio = $_POST['Admin'];

		
		if(!empty($registerFullName) && !empty($registerUsername) && !empty($registerPassword1) && !empty($registerPassword2)&&!empty($selected_radio)){
			
			// Sanitize name
			$registerFullName = filter_var($registerFullName, FILTER_SANITIZE_STRING);
			
			// Check if name is empty
			if($registerFullName == ''){
				 
                  $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your name.</div>');
                    header("Location:Register.php?Message=".$Message);
				exit();
			}
			
			// Check if username is empty
			if($registerUsername == ''){
				 
                      $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your username.</div>');
                    header("Location:Register.php?Message=".$Message);
				exit();
			}
			
			// Check if both passwords are empty
			if($registerPassword1 == '' || $registerPassword2 == ''){
				 
                
                      $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter both passwords.</div>');
                    header("Location:Register.php?Message=".$Message);
				exit();
			}
			
		 
 			 
				// Check if passwords are equal
				if($registerPassword1 !== $registerPassword2){
					 
                      $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Passwords do not match.</div>');
                    header("Location:Register.php?Message=".$Message);
					exit();
				} else {
					// Start inserting user to DB
					// Encrypt the password
					$hashedPassword = md5($registerPassword1);
//				  

                        if ($selected_radio == 'Patient') {

                          $insertItemSql = "INSERT INTO `patient` (`PatientID`,`PatientName`, `PatientEmail`, `Password`) VALUES (NULL, '$registerUsername', '$registerFullName','$hashedPassword')";

                        }
                        else if ($selected_radio == 'Doctor') {

                        $insertItemSql = "INSERT INTO `doctor` (`DoctorID`,`DoctorName`, `DoctorEmail`, `Password`) VALUES (NULL, '$registerUsername', '$registerFullName','$hashedPassword')";

                        }

                        else if ($selected_radio == 'Staff') {

                          $insertItemSql = "INSERT INTO `staff` (`StaffID`,`StaffName`, `StaffEmail`, `Password`) VALUES (NULL, '$registerUsername', '$registerFullName','$hashedPassword')";

                        }
                    
                    
                     
				$insertItemStatement =mysqli_query($conn,$insertItemSql);
//                 
//if($insertItemStatement){
//    echo "The record has been inserted successfully successfully!<br>";
//}
//else{
//    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//}
                    	 
                  
                    // $stmt =$insertItemStatement->execute();
                     
                    //header('Location:login.php');
//                    $insertUserStatement->execute(['E-mail' => $registerFullName, 'Admin-Name' => $registerUsername, 'password' => $hashedPassword]);
//                    
//                    $stmt = $conn->prepare("insert into admin-user(Admin-Name, password, E-mail) values(?, ?, ?)");
//		$stmt->bind_param("sss",$registerUsername, $hashedPassword, $registerFullName);
//		$execval = $stmt->execute();
					
				 
                    
                      $Message = urlencode('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Registration complete.</div>');
                    header("Location:Register.php?Message=".$Message);
					exit();
				}
			
		} else {
			// One or more mandatory fields are empty. Therefore, display a the error message
			 
            
              $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>');
                    header("Location:Register.php?Message=".$Message);
            
                    die;
			exit();
		}
	}
?>