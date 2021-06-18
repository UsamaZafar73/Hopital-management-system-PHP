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
 




	if(isset($_POST['location'])){
		$registerUsername = htmlentities($_POST['road']);
		$registerPassword1 = htmlentities($_POST['location']);
		$registerPassword2 = htmlentities($_POST['medication']);
        
         echo $registerUsername;
        echo $registerPassword1;
        echo $registerPassword2;
        
//        $selected_radio = $_POST['Admin'];

		
		if( !empty($registerUsername) && !empty($registerPassword1) && !empty($registerPassword2) ){
			
			// Sanitize name
 			
			// Check if name is empty
			if($registerPassword1 == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your name.</div>';
				exit();
			}
            if($registerPassword2 == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your name.</div>';
				exit();
			}
			
			// Check if username is empty
			if($registerUsername == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your username.</div>';
				exit();
			} 
//  UPDATE tutorials_tbl 
//   → SET tutorial_title = 'Learning JAVA' 
//   → WHERE tutorial_id = 3;
            
            $checkUserSql="SELECT * FROM `appointment` WHERE `AppointmentID` LIKE '$registerUsername'";
			$result =mysqli_query($conn,$checkUserSql);
			$num = mysqli_num_rows($result);
            
            echo $num;
			// Check if user exists or not
			if($num > 0){ 
            
                     $insertItemSql="UPDATE appointment SET Medication='$registerPassword2',defect='$registerPassword1'  WHERE AppointmentID='$registerUsername'";
//            
//             
  
      
                    				$insertItemStatement =mysqli_query($conn,$insertItemSql);
   
            
              $Message = urlencode('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Updation complete.</div>');
                    header("Location:doctor_view.php?Message=".$Message);
					exit();
            }
            else{
                $Message = urlencode('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>No Appointmnent Id exists</div>');
                    header("Location:doctor_view.php?Message=".$Message);
            }
			
		} else {
			 
                    $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>');
                    header("Location:index.php?Message=".$Message);
            
                    die;
			exit();
            
            
		}
	}}
?>