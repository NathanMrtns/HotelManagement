
<?php # HOME PAGE.
 session_start();
# display header section.
if ( !isset( $_SESSION[ 'userID' ] ) ){
    include('header.html');
}
else{
    include('logged_header.php');
}

echo '<div class="carousel slide" id="carousel-275680">
    <ol class="carousel-indicators">
	<li class="active" data-slide-to="0" data-target="#carousel-275680">
	</li>
	<li data-slide-to="1" data-target="#carousel-275680">
	</li>
	<li data-slide-to="2" data-target="#carousel-275680">
	</li>
    </ol>
    <div class="carousel-inner">
	<div class="item active">
            <img alt="" src="img/fargo-palace-hotel.jpg" >
	    <div class="carousel-caption">
		<h4>
		    Fargo Palace Hotel
		</h4>
		<p>
                    Situated in downtown Fargo overlooking the city business, government and cultural districts, the 18-story Radisson Fargo is the second-tallest building in North Dakota and dominates the flatlands of the Red River Valley.
		</p>
	</div>
    </div>
    <div class="item">
	<img alt="" src="img/fargodome.jpg">
	<div class="carousel-caption">
	    <h4>
		Good attractions
	    </h4>
	    <p>
                You can enjoy easy access to popular attractions like the Fargodome, North Dakota State University, the Fargo Civic Center and numerous shops, coffeehouses, galleries, museums and theaters in downtown Fargo.
	    </p>
	</div>
    </div>
    <div class="item">
	<img alt="" src="img/prime_room_2.jpg" >
	<div class="carousel-caption">
	    <h4>
		Prime Rooms
	    </h4>
	    <p>
		Experiment these confortable places.
	    </p>
	</div>
    </div>
    </div> <a class="left carousel-control" href="#carousel-275680" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-275680" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
    <div class="jumbotron">
	<h1>
	    Welcome to the Fargo Palace Hotel!
	</h1>
	<p>
            Our hotel Euro-style hotel rooms and on-site amenities, including a well-equipped fitness center, free Wi-Fi, complimentary airport shuttle service, a business center and three excellent dining outlets, ensure you a memorable stay.
	</p>
    </div>
</div>
</div>
</div>';
