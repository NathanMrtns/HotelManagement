<?php # SUITE MASTER ROOM PAGE.

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
					<img alt="" src="img/suite_master.jpg" class="img-rounded">
				</h1>
				<p>
                     A master suite is like a micro apartment inside the hotel.
                     They are very spacious with the best views and amenities that that hotel has to offer. This suite is the most expensive room in the hotel.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Availability</a>
				</p>
			</div>
		</div>
	</div>
</div>';
?>
