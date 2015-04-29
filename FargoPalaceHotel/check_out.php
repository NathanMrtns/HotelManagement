<?php
session_start();
include('logged_header.php');
//connect to MySQL (host, user_name, password)
require('connect_db.php');

$query = 'SELECT * FROM room INNER JOIN temp_reserv ON room.room_number = temp_reserv.room_number WHERE temp_reserv.userID = '. "'" . $_SESSION['userID'] . "'";
if(!($result = @mysqli_query($dbc, $query))){
        print ("Coudnot execute query! <br />");
        die(mysql_error());
 }
 $subTotal = 0;
 print '<div class="panel panel-default">';
    	print '<div class="panel-heading">RESERVES TO CONFIRM:</div>';
			print "<table class='table'>";
				print "<tr><td>Room Number</td><td>Capacity</td><td>Description</td><td>Type</td><td>Price</td>";
				while($row = mysqli_fetch_array($result))
			          {
			          echo "<tr><td>" . $row['room_number'] . "</td><td> " . $row['capacity'] . "</td><td> " . $row['description'] . "</td><td> " 
                                          . $row['room_type'] . "</td><td> $" . $row['price'] . "</td></tr> ";
                                  $subTotal += $row['price'];

			          }
                                  printf ("<tr><td>SubTotal : $%0.2f", $subTotal);
				
			print"</table>";
		print "</div>";
	print "</div>";
        
mysqli_close($dbc);
exit;
?>
