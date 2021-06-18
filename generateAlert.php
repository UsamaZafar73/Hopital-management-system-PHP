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
session_start();

$id= $_SESSION['fullName'];
$date='';
	
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful baby but wait<br>";
}




	if(isset($_POST['camera'])){
		$registerUsername = htmlentities($_POST['camera']);
		$registerPassword1 = htmlentities($_POST['road']);
		$registerPassword2 = htmlentities($_POST['location']);
        $registerFullName = htmlentities($_POST['type']);
                 $date = htmlentities($_POST['date']);
         echo $registerUsername;
        echo $registerPassword1;
        echo $registerPassword2;
        echo $registerFullName;
//        $selected_radio = $_POST['Admin'];

		
		if(!empty($registerFullName) && !empty($registerUsername) && !empty($registerPassword1) && !empty($registerPassword2)&&!empty($date) ){
			
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
 
//            session_start();
// if(isset($_SESSION['fullName']))
// {
//          header("Location:login.php");
// }
//else
//{
//          header("Location:login.php");
//
//}
            
                      $insertItemSql="INSERT INTO `appointment` (`AppointmentID`, `AppointmentTime`, `PatientName`, `Age`, `Disease`, `Doctor`, `Date`,`PatientID`) VALUES (NULL, current_timestamp(), '$registerUsername', '$registerPassword1', '$registerPassword2', '$registerFullName', '$date', '$id')";
            
             
 
//                          $insertItemSql = "INSERT INTO `admin-user` (`User_id`, `username`, `E-mail`, `Contact-No`, `password`) VALUES (NULL, '$registerUsername', '$registerFullName', NULL, )";
      
                    				$insertItemStatement =mysqli_query($conn,$insertItemSql);
                                   
//if($insertItemStatement){
//    echo "The record has been inserted successfully successfully!<br>";
//}
//else{
//    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//}
//                    	 
                  
//                     $stmt =$insertItemStatement->execute();
                     
                    //header('Location:login.php');
//                    $insertUserStatement->execute(['E-mail' => $registerFullName, 'Admin-Name' => $registerUsername, 'password' => $hashedPassword]);
//                    
//                    $stmt = $conn->prepare("insert into admin-user(Admin-Name, password, E-mail) values(?, ?, ?)");
//		$stmt->bind_param("sss",$registerUsername, $hashedPassword, $registerFullName);
//		$execval = $stmt->execute();
					
//					echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Registration complete.</div>';
            
              $Message = urlencode('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Alert Registration complete.</div>');
                    header("Location:index.php?Message=".$Message);
					exit();
				
			
		} else {
			// One or more mandatory fields are empty. Therefore, display a the error message
//			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
            
//                        header("location:index.php?itemDetailsMessage=dscddddddddddddddhello");
                    $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>');
                    header("Location:index.php?Message=".$Message);
            
                    die;
			exit();
            
            
		}
	}
?>