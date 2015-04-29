<?php # FAMILY OR TRIPLE ROOM PAGE.

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
					<img alt="" src="img/family_room.jpg" class="img-rounded">
				</h1>
				<p>
                        A triple room has three queen-size beds.
                        Family rooms offer sitting areas that double as a sleeping space when the couch lets out into a bed.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Availability</a>
				</p>
			</div>
		</div>
	</div>
</div>';
?>
