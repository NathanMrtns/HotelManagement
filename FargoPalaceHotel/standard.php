
<?php # STANDARD ROOM PAGE.

 session_start();
# display header section.
if ( !isset( $_SESSION[ 'userID' ] ) ){
    include('header.html');
}
else{
    include('logged_header.php');
}
echo '<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="jumbotron">
				<h1>
					<img alt="" src="img/standard_room.jpg" class="img-rounded">
				</h1>
				<p>
                        A standard room is the cheapest in the hotel.
                        It comes as a single, which is one king-size bed, or as a double, with two queen beds.
                        The standard room has the basic amenities, as a television, coffee maker, telephone, desk, closet and private bathroom.
				</p>
				
			</div>
		</div>
	</div>
</div>';
?>
