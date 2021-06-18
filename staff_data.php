<?php

 $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "hospital1";
			
			$conn = mysqli_connect($servername, $username, $password);
			mysqli_select_db($conn, $dbname);   
 
 
	 $alerts = "SELECT * FROM appointment";
	$result =mysqli_query($conn,$alerts);

	$output = '<table id="itemReportsTable" class="table table-sm table-striped table-bordered table-hover" style="width:100%">
				<thead>
					<tr>
                                             						  

						<th>Appointment ID</th>
						<th>PatientName</th>					 
						<th>Age</th>
                        
                           <th>Doctor</th>
						 <th>Date</th> 

                        
					</tr>
				</thead>
				<tbody>';
	
	// Create table rows from the selected data 
	while($row =mysqli_fetch_assoc($result)){
 
        
		$output .= '<tr>' .       
                         

						'<td>' . $row['AppointmentID'] . '</td>' .
						'<td>' . $row['PatientName'] . '</td>' .
						//'<td>' . $row['itemName'] . '</td>' .
//						'<td><a href="#" class="itemDetailsHover" data-toggle="popover" id="' . $row['productID'] . '">' . $row['itemName'] . '</a></td>' .
						'<td>' . $row['Age'] . '</td>' .
 						'<td>' . $row['Doctor'] . '</td>' . 
						'<td>' . $row['Date'] . '</td>' . 
    
 
					'</tr>';
        
        
	}
	
//	$itemDetailsSearchStatement->closeCursor();
	
	$output .= '</tbody>
					<tfoot>
							<tr>
                                                     						 

						<th>Appointment ID</th>
						<th>PatientName</th>					 
						<th>Age</th>
                         <th>Doctor</th>
						 <th>Date</th> 
                        
					</tr>
					</tfoot>
				</table>';
	echo $output;
?>