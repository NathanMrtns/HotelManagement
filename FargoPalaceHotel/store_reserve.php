<?php
session_start();
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'userID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

include('logged_header.php');


# Get passed product id and assign it ot a variable.
if(isset($_GET['id'])){
    $_SESSION['room_number'] = $_GET['id'];
}


//connect to MySQL (host, user_name, password)
require('connect_db.php');

$query = 'SELECT room_number, capacity, description, room_type, price
         FROM room WHERE room_number = '. "'" . $_SESSION['room_number'] . "'";
         
if(!($result = mysqli_query($dbc, $query))){
    print ("Coudnot execute query! <br />");
    die(mysql_error());
}

print '<div class="panel panel-default">';
    	print '<div class="panel-heading">Reserves</div>';
			print "<table class='table'>";
				print "<tr><td>Room Number</td><td>Capacity</td><td>Description</td><td>Type</td><td>Price</td>";
				$row = mysqli_fetch_array($result);
                echo "<tr><td>" . $row['room_number'] . "</td><td> " . $row['capacity'] . "</td><td> " . $row['description'] . "</td><td> " . $row['room_type'] . "</td><td> $" . $row['price'] . "</td><td> ";

?>
