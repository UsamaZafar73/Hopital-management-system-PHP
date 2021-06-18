<?php
//	require_once('inc/config/constants.php');
//	require_once('inc/config/db.php');
	
$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "hospital1";
			
			$conn = mysqli_connect($servername, $username, $password);
			mysqli_select_db($conn, $dbname);    
 
//session_start();
//
//$id= $_SESSION['fullName'];
//$date='';
		//$registerUsername = htmlentities($_POST['road']);

	$id=htmlentities($_POST['road']);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 
     
            $checkUserSql="SELECT * FROM `appointment` WHERE `AppointmentID` LIKE '$id'";
			$result =mysqli_query($conn,$checkUserSql);
			$num = mysqli_num_rows($result);
            
            echo $num;
			// Check if user exists or not
			if($num > 0){ 
            
                       $insertItemSql="DELETE FROM appointment WHERE AppointmentID='$id'";
//            
//             
  
      
                    				$insertItemStatement =mysqli_query($conn,$insertItemSql);
   
            
              $Message = urlencode('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Deleted that appointment successfully.</div>');
                    header("Location:doctor_view.php?Message=".$Message);
					exit();
            }
            else{
                $Message = urlencode('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>No such Appointmnent Id exists</div>');
                    header("Location:doctor_view.php?Message=".$Message);
            }

                   
        
//        $selected_radio = $_POST['Admin'];

 
	}
?>