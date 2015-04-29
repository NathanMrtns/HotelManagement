<?php # SUITE VIP ROOM PAGE.

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
					<img alt="" src="img/suite_vip.jpg" class="img-rounded">
				</h1>
				<p>
                     Each Suite VIP provides comfortable areas to conduct business, along with private accommodations perfectly suited for executive teams.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Availability</a>
				</p>
			</div>
		</div>
	</div>
</div>';
?>
