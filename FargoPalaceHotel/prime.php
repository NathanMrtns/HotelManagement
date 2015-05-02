<?php # PRIME ROOM PAGE.

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
					<img alt="" src="img/prime_room.jpg" class="img-rounded">
				</h1>
				<p>
                        Prime rooms providing a comfortable and luxurious stay for your guests.
                        All of the rooms in this section feature such guest amenities as LCD TVs, hairdryers in all bathrooms, granite countertops and high-speed Internet access. 
				</p>
				
			</div>
		</div>
	</div>
</div>';
?>
