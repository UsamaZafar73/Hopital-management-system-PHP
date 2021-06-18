<?php
	session_start();
//	require_once('../../inc/config/constants.php');
//	require_once('../../inc/config/db.php');
//	

  $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "detection_system";
			
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
		
		if(!empty($loginUsername) && !empty($loginUsername)){
			
			// Sanitize username
			$loginUsername = filter_var($loginUsername, FILTER_SANITIZE_STRING);
			
			// Check if username is empty
			if($loginUsername == ''){
				 
                
                 $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username</div>');
                                header("Location:Municipalitylogin.php?Message=".$Message);
				exit();
			}
			
			// Check if password is empty
			if($loginPassword == ''){
				 
                 $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Password</div>');
                                header("Location:Municipalitylogin.php?Message=".$Message);
				exit();
			}
			
			// Encrypt the password
			$hashedPassword = md5($loginPassword);
			
			// Check the given credentials
			$checkUserSql="SELECT * FROM `Municipality` WHERE `Mun-Name` LIKE '$loginUsername'";
			$result =mysqli_query($conn,$checkUserSql);
			$num = mysqli_num_rows($result);
            
            echo $num;
			// Check if user exists or not
			if($num > 0){
				// Valid credentials. Hence, start the session
				$row =mysqli_fetch_assoc($result);
                $password1=$row['password'];
                if($password1!=$hashedPassword)
                {
                     
                    
                   $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Password / Password</div>');
                                header("Location:Municipalitylogin.php?Message=".$Message);
				exit();
                }
                    echo $password;
                
                
                
				$_SESSION['fullName'] = $row['Mun-Name'];
				
              
                
             header('Location:Municipality.php');
				exit();
			} else {
				 
                   $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>');
                                header("Location:Municipalitylogin.php?Message=".$Message);
				exit();
			}
			
			
		} else {
			 
            $Message = urlencode('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username and Password</div>');
                                header("Location:Municipalitylogin.php?Message=".$Message);
			exit();
		}
	}
?>