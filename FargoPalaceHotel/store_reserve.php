<?php
session_start();

if(isset($_GET['id'])){
    $_SESSION['room_number'] = $_GET['id'];
}

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'userID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

include('logged_header.php');

//connect to MySQL (host, user_name, password)
require('connect_db.php');

if(isset($_SESSION['room_number'])){
    
    $startDate = strtotime($_SESSION['startDate']);
    $startDateSQL = date('Y-m-d H:i:s', $startDate);
    $endDate = strtotime($_SESSION['endDate']);
    $endDateSQL = date('Y-m-d H:i:s', $endDate);

    # insert a new reserve by the current user.
    $query1 = 'INSERT INTO reservation(room_number, userID, start_date, end_date) VALUES(' ."'". $_SESSION['room_number'] . "'" . ","
    . "'". $_SESSION['userID'] . "'" . "," ."'". $startDateSQL . "'" . "," . "'". $endDateSQL. "'" . ")";

   if(!($result1 = @mysqli_query($dbc, $query1))){
        print ("Coudnot execute query1! <br />");
        die(mysql_error());
    }
}

$query2 = 'SELECT reservationID, room_number, start_date, end_date FROM reservation WHERE userID = '. "'" . $_SESSION['userID'] . "'";
         
if(!($result2 = @mysqli_query($dbc, $query2))){
    print ("Coudnot execute query2! <br />");
    die(mysql_error());
}

print '<div class="panel panel-default">';
    	print '<div class="panel-heading">Reserves</div>';
			print "<table class='table'>";
				print "<tr><td>Reservation</td><td>Room</td><td>startDate</td><td>endDate</td></tr>";
				while($row = mysqli_fetch_array($result2)){
                                    echo "<tr><td>" . $row['reservationID'] . "</td><td> " . $row['room_number'] . "</td><td> " . $row['start_date'] . "</td><td> " . $row['end_date'] . "</td></tr>";
                                }
# unset session
unset($_SESSION['room_number']);
unset($_SESSION['startDate']);
unset($_SESSION['endDate']);

?>
