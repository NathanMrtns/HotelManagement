<?php
session_start();
include('logged_header.php');
//connect to MySQL (host, user_name, password)
require('connect_db.php');

$query1 = 'SELECT * FROM room INNER JOIN temp_reserv ON room.room_number = temp_reserv.room_number WHERE temp_reserv.userID = '. "'" . $_SESSION['userID'] . "'";
if(!($result1 = @mysqli_query($dbc, $query1))){
        print ("Coudnot execute query1! <br />");
        die(mysql_error());
 }
 $subTotal = 0;
 print '<div class="panel panel-default">';
    	print '<div class="panel-heading">RESERVES TO CONFIRM:</div>';
			print "<table class='table'>";
				print "<tr><td>Room Number</td><td>Capacity</td><td>Description</td><td>Type</td><td>Price</td>";
				while($row1 = mysqli_fetch_array($result1))
			          {
			          echo "<tr><td>" . $row1['room_number'] . "</td><td> " . $row1['capacity'] . "</td><td> " . $row1['description'] . "</td><td> " 
                                          . $row1['room_type'] . "</td><td> $" . $row1['price'] . "</td></tr> ";
                                  $subTotal += $row1['price'];

			          }
                                  $total = $subTotal * 1.06;
			          
                                  print"<tr><td>" . "<strong>" . $_SESSION['first_name'] . "'s bill" . "</strong>" . "</td><td></td><td></td><td></td>";
                                  printf ("<td>SubTotal : $%0.2f</td></tr>", $subTotal);
			          print "<tr><td></td><td></td><td></td><td></td>";
				  printf ("<td>Total(SubTotal + Tax) : $%0.2f</td></tr>", $total);
                                  print "<tr><td></td><td></td><td></td><td></td>";
                                  print "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#myModal'>Confirm</button></td></tr>";
				
			print"</table>";
		print "</div>";
	print "</div>";
        
print'<div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">

           <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Reserves Confirmation</h4>
              </div>
              <div class="modal-body">
                  <p>Reserves will be confirmed, and a recept is sending to your email.</p>
              </div>
              <div class="modal-footer">
                  <button type="buttom" class="btn btn-default" data-dismiss="modal" onclick=self.location="check_out.php?trigger=true">OK</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
           </div>
         </div>
      </div>';

if(isset($_GET['trigger'])){
    $query2 = 'SELECT room_number, start_date, end_date FROM temp_reserv WHERE userID ='. "'" . $_SESSION['userID'] . "'";
    if(!($result2 = @mysqli_query($dbc, $query2))){
        print ("Coudnot execute query2! <br />");
        die(mysql_error());
    }
    while($row2 = mysqli_fetch_array($result2)){
        $query_aux = 'INSERT INTO reservation(room_number, userID, start_date, end_date) VALUES(' ."'". $row2['room_number'] . "'" . ","
        . "'". $_SESSION['userID'] . "'" . "," ."'". $row2['start_date'] . "'" . "," . "'". $row2['end_date']. "'" . ")";
     
        if(!($result_aux = @mysqli_query($dbc, $query_aux))){
            print ("Coudnot execute this current query! <br />");
            die(mysql_error());
        }
        $query_aux ="";
        $result_aux="";

    }
    $query3 = 'DELETE FROM temp_reserv WHERE userID='. "'" . $_SESSION['userID'] . "'";
    if(!($result3 = @mysqli_query($dbc, $query3))){
        print ("Coudnot execute query3! <br />");
        die(mysql_error());
    }
    
    $query4 = 'SELECT first_name, last_name, email FROM user_table WHERE userID='. "'" . $_SESSION['userID'] . "'";
    if(!($result4 = @mysqli_query($dbc, $query4))){
        print ("Coudnot execute query3! <br />");
        die(mysql_error());
    }
    $row4 = mysqli_fetch_array($result4);
    
    // SEND EMAIL TO CUSTOMER 
    $to = $row4['email'];
    $subject = "Reservation receipt";
    $message = "Dear" . " " . $_SESSION['first_name'] . " " . $_SESSION['last_name']
        . ", your reserves generate a total of $" . $total . ". Thank you for enjoy our services." ;
    $from = "fargopalace@hotel.com";
    $headers = "From:" . $from;

    error_log(mail($to, $subject, $message, $headers));
    mail($to, $subject, $message, $headers);
    
    unset($_GET['trigger']);
    
}
 

@header('Location: index.php');
mysqli_close($dbc);
exit;
?>

