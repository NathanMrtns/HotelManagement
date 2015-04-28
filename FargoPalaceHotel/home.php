<?php
session_start();
include('header.html');

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'userID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

echo "<p>You are logged in, {$_SESSION['first_name']}
    {$_SESSION['last_name']} </p>";

echo '<nav class="navbar navbar-default">
      <div class="container-fluid">
          <div>
          <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="store_reserve.php">Reserves</a></li>
              <li><a href="#">Check out</a></li>
              <li><a href="log_out.php">Log out</a></li>
          </ul>
          </div>
      </div>
      </nav>' ;
      
?>
