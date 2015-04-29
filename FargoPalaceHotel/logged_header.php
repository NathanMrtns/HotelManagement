<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fargo Palace Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <nav class="navbar navbar-default navbar-inverse" role="navigation">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="reserve.php">Make your reserve</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rooms<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="standard.php">Standard</a>
                                    </li>
                                    <li>
                                        <a href="family.php">Triple or family</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="master.php">Suite Master</a>
                                    </li>
                                    <li>
                                        <a href="vip.php">Suite VIP</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="store_reserve.php">Reserves</a>
                            </li>
                            <li>
                                <a href="#">Check Out</a>
                            </li>

               <?php echo   "<form class='navbar-form navbar-right' action='log_out.php' method='post' role='login' >
                                <div class='form-group'>
                                    <label><span style='color:#FFFFFF'>" . $_SESSION['first_name']. " " . $_SESSION['last_name'] . "</span></label>
                                </div>
                                <button type='submit' class='btn btn-default'>Log Out</button>
                            </form>
                        </ul>
                    </div>
                </nav>" ; ?>



