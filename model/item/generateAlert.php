<?php
//	require_once('inc/config/constants.php');
//	require_once('inc/config/db.php');
	
        $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "detection_system";
			
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




	if(isset($_POST['camera'])){
		$registerUsername = htmlentities($_POST['camera']);
		$registerPassword1 = htmlentities($_POST['road']);
		$registerPassword2 = htmlentities($_POST['location']);
        $registerFullName = htmlentities($_POST['type']);
//        $selected_radio = $_POST['Admin'];

		
		if(!empty($registerFullName) && !empty($registerUsername) && !empty($registerPassword1) && !empty($registerPassword2) ){
			
			// Sanitize name
			$registerFullName = filter_var($registerFullName, FILTER_SANITIZE_STRING);
			
			// Check if name is empty
			if($registerFullName == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your name.</div>';
				exit();
			}
			
			// Check if username is empty
			if($registerUsername == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your username.</div>';
				exit();
			}
			 
			
		 
 			  
					// Start inserting user to DB
					// Encrypt the password
//					$hashedPassword = md5($registerPassword1);
//					$insertUserSql = 'INSERT INTO admin-user(E-mail,password,Admin-Name) VALUES(:E-mail,:password,:Admin-Name)';
//					$insertUserStatement = $conn->prepare($insertUserSql);
//					$insertUserStatement->execute(['E-mail' => $registerFullName,'password' => $hashedPassword,'Admin-Name' => $registerUsername]);
                     $insertItemSql="INSERT INTO `alert_table` (`image_id`, `Location`, `Description`, `time`, `Type`, `image_url`) VALUES (NULL, '$registerUsername', '$registerFullName', NULL )";
            

                         

//                          $insertItemSql = "INSERT INTO `admin-user` (`User_id`, `username`, `E-mail`, `Contact-No`, `password`) VALUES (NULL, '$registerUsername', '$registerFullName', NULL, )";
      
                    				$insertItemStatement =mysqli_query($conn,$insertItemSql);
                 
if($insertItemStatement){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
                    	 
                  
//                     $stmt =$insertItemStatement->execute();
                     
                    //header('Location:login.php');
//                    $insertUserStatement->execute(['E-mail' => $registerFullName, 'Admin-Name' => $registerUsername, 'password' => $hashedPassword]);
//                    
//                    $stmt = $conn->prepare("insert into admin-user(Admin-Name, password, E-mail) values(?, ?, ?)");
//		$stmt->bind_param("sss",$registerUsername, $hashedPassword, $registerFullName);
//		$execval = $stmt->execute();
					
					echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Registration complete.</div>';
					exit();
				
			
		} else {
			// One or more mandatory fields are empty. Therefore, display a the error message
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
			exit();
		}
	}
?>