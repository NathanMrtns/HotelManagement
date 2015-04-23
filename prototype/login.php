<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="login.css"
    <title>Fargo Palace Hotel</title>
</head>
<body>
<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.
$page_title = 'Login' ;
include ( 'header.html' ) ;

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>

<!-- Display body section. -->
<section>
    <br /><br /><br />
    <form action="login_action.php" method="post">
    <h1>Login</h1>
    <p>Email Address: <input type="text" name="email"> </p>
    <p>Password: <input type="password" name="pass"></p>
    <p><input type="submit" value="Login" ></p>
    <a href="register.php" id="registerLink">Register your account</a>
</form>

</section>
<?php 

# Display footer section.
# include ( 'footer.html' ) ;

?>
