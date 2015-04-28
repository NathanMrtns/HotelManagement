
<?php
include('header.html');
?>
<html lang="en">
<head>
  <script>
  $(function() {
    $( "#startDate,#endDate" ).datepicker();
  });
  </script>
</head>

<body>
	<form class="form-inline" method="post" >
		<div class="input-group input-group-sm">
		    <div class="col-xs-3">
	    		<span>Start Date: <input class="form-control" type="text" name="startDate" id="startDate"><span>
	    	</div>
	    	<div class="col-xs-3">
				<span>End Date: <input class="form-control" type="text" name="endDate" id="endDate"></span>
			</div>
			<div class="col-xs-2">
				<p>Room Capacity: 
					<select class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</p>
			</div>
			<div class="col-xs-2">
				<br>
				<button type="submit" class="btn btn-default">Search Rooms</button>
			</div>
		</div>
	</form>
</body>
</html>