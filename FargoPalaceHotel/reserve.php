
<?php
session_start();

if ( !isset( $_SESSION[ 'userID' ] ) ){
    include('header.html');
}
else{
    include('logged_header.php');
}
?>

<script>
	$(document).ready(function () {
   		//$("#endDate").datepicker({
   		//	disabled: true
   		//})
   		var $startDate = $("#startDate");
   		$startDate.datepicker({
   			minDate: 0,
   			onSelect: function(date){
   				var selectedDate = $("#startDate").datepicker('getDate');
   				$("#endDate").datepicker('option', "minDate", selectedDate);
   			}
   		})
   		if($("#startDate").datepicker('getDate')==null){
   			var minDate = 0;
   		}
   		$("#endDate").datepicker({
   			minDate: minDate,
   			onSelect: function(date){
   				var selectedEndDate = $("#endDate").datepicker('getDate');
   				$("#startDate").datepicker('option', "maxDate", selectedEndDate);
   			}
   		})

  	});
</script>

<body>
	<form class="form-inline" method="post">
        <div class="alert alert-info">
                    <h4>
                        FIND A ROOM
                    </h4> <strong>RESERVES:</strong> Fill out the capacity, start date, end date and room type. This way we will provide avaiable rooms for you.
        </div>
        <br />
		<div class="input-group input-group-sm">
		    <div class="col-xs-3">
	    		<span>Start Date: <input class="form-control" type="text" name="startDate" id="startDate" required><span>
	    	</div>
	    	<div class="col-xs-3">
				<span>End Date: <input class="form-control" type="text" name="endDate" id="endDate" required></span>
			</div>
			<div class="col-xs-2">
				<p>Room Capacity: 
					<select class="form-control" name="capacity">
						<option value"">Capacity</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</p>
			</div>
			<div class="col-xs-2">
				<p>Room Type: 
					<select class="form-control" name="rtype">
						<option value"">Room type</option>
						<option value="Standard">Standard</option>
						<option value="Prime">Prime</option>
					</select>
				</p>
			</div>
			<div class="col-xs-2">
				<br>
				<button type="submit" name="searchBtn" value"search" class="btn btn-default">Search Rooms</button>
			</div>
		</div>
	</form>

<?php
	if (isset($_POST['startDate']) && isset($_POST['endDate']) && isset($_POST['capacity'])) {
    $_SESSION['startDate'] = $_POST['startDate'];
    $_SESSION['endDate'] = $_POST['endDate'];
    $_SESSION['capacity'] = $_POST['capacity'];
    $_SESSION['rtype'] = $_POST['rtype'];

	//connect to MySQL (host, user_name, password)
	require('connect_db.php');

	$query = 'select room_number, capacity, description, room_type, price 
		      from room 
	          where capacity = '. "'" . $_SESSION['capacity'] . "'"
	          . "and room_type = " . "'" . $_SESSION['rtype'] . "'";

	if(!($result = mysqli_query($dbc, $query)))
	{
	    print ("Coudnot execute query! <br/>");
	    die(mysql_error());
	}
	print '<div class="panel panel-default">';
    	print '<div class="panel-heading">Search Results</div>';
			print "<table class='table'>";
				print "<tr><td>Room Number</td><td>Capacity</td><td>Description</td><td>Type</td><td>Price</td><td>Make reserve</td>";
				while($row = mysqli_fetch_array($result))
			          {
			          echo "<tr><td>" . $row['room_number'] . "</td><td> " . $row['capacity'] . "</td><td> " . $row['description'] . "</td><td> " . $row['room_type'] . "</td><td> $" . $row['price'] . "</td><td> "
                      . "<a href='store_reserve.php?id=" . $row['room_number']."'>Make your reserve</a>" . "</td></tr>"; //these are the fields that you have stored in your database table employee
			          }
				/*for($c=0; $row = mysqli_fetch_row($result); $c++)
				{
				    print("<tr>");
				    foreach($row as $key => $value)
				    	if(substr($value, -3) == ".00"){
							print ("<td style=width:200px>$ $value</td>");
						}else{
							print ("<td style=width:200px>$value</td>");
						}	        
				    print("</tr>");
				}*/
			print"</table>";
		print "</div>";
	print "</div>";

	mysqli_close($dbc);
    exit;
}else{
    if(isset($_SESSION['startDate']) && isset($_SESSION['endDate']) && isset($_SESSION['capacity'])) {
        unset($_SESSION['startDate']);
        unset($_SESSION['endDate']);
        unset($_SESSION['capacity']);
        print "";
	}
}
?>
</body>

</html>
