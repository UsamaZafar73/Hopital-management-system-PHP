<?php

 $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "detection_system";
			
			$conn = mysqli_connect($servername, $username, $password);
			mysqli_select_db($conn, $dbname);   
	
	$alerts = 'SELECT * FROM alert_table where type="suspicious_activity"';
	$result =mysqli_query($conn,$alerts);
 
 

	$output = '<table id="itemReportsTable" class="table table-sm table-striped table-bordered table-hover" style="width:100%">
				<thead>
					<tr>
						<th>AI image ID</th>
						<th>Type of Activity</th>
						<th>Description</th>
						<th>Location</th>
						<th>Date and Time</th>
						 
                        
					</tr>
				</thead>
				<tbody>';
	
	// Create table rows from the selected data 
	while($row =mysqli_fetch_assoc($result)){
 
        
		$output .= '<tr>' .
						'<td>' . $row['image_id'] . '</td>' .
						'<td>' . $row['Type'] . '</td>' .
						//'<td>' . $row['itemName'] . '</td>' .
//						'<td><a href="#" class="itemDetailsHover" data-toggle="popover" id="' . $row['productID'] . '">' . $row['itemName'] . '</a></td>' .
						'<td>' . $row['Description'] . '</td>' .
						'<td>' . $row['Location'] . '</td>' .
						'<td>' . $row['time'] . '</td>' . 
 
                        
                        
    
 
 
 
					'</tr>';
        
        
	}
	
//	$itemDetailsSearchStatement->closeCursor();
	
	$output .= '</tbody>
					<tfoot>
							<tr>
						<th>AI image ID</th>
						<th>Type of Activity</th>
						<th>Description</th>
						<th>Location</th>
						<th>Date and Time</th>
						 
                        
					</tr>
					</tfoot>
				</table>';
	echo $output;
?>