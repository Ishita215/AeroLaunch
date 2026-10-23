<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>	
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
        <!-- Bootstrap CSS -->
		
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>AeroLaunch | Flight booking</title>         
        <link rel = "icon" href ="../assets/images/brand.png"  type = "image/x-icon">       
    </head>
<style>
:root {
    --aero-ink: #10233f;
    --aero-coral: #f06f61;
}
.astext {
    background:none;
    border:none;
    margin:0;
    padding:0;
    cursor: pointer;
}    
@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
}
h5:hover {
    color: #E8E8E8;
}
h5 {
    color: white;
    font-weight: bold;
    font-size: 20px ;
	font-family: 'Montserrat', sans-serif;
}
.aero-navbar {
    background: var(--aero-ink) !important;
    box-shadow: 0 10px 30px rgba(16, 35, 63, .16);
    padding: .75rem 4vw;
}
.aero-brand {
    display: inline-flex;
    align-items: center;
    gap: .65rem;
}
.aero-brand img { width: 34px; height: 34px; object-fit: contain; }
.aero-brand strong { color: #fff; font-size: 1.08rem; letter-spacing: .02em; }
.aero-nav-link { color: rgba(255,255,255,.76) !important; font-weight: 600; }
.aero-nav-link:hover { color: #fff !important; }
.aero-login { color: #fff; border: 1px solid rgba(255,255,255,.35); border-radius: 999px; padding: .5rem 1rem; }
.aero-footer { display: flex; justify-content: space-between; gap: 1rem; flex-wrap: wrap; padding: 1.25rem 4vw; color: #6f7c8e; background: #eef3f6; font-size: .82rem; }
.btn-login {
    /* font-size: 22px ; */
    font-weight: bold;
	font-family: 'Montserrat', sans-serif;    
}
</style>
    <body>        
        <nav class="navbar navbar-expand-lg navbar-dark aero-navbar">
        <a class="navbar-brand aero-brand" href="index.php">
            <img src="assets/images/plane-logo.png" alt="AeroLaunch">
            <strong>AeroLaunch</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">     
                <li class="nav-item">
                    <a class="nav-link aero-nav-link" href="index.php">
                        Home
                    </a>
                </li>                           
            <?php if(isset($_SESSION['userId'])) { ?>
                <li class="nav-item">
                    <a class="nav-link aero-nav-link" href="my_flights.php">
                        My Flights
                    </a>
                </li>       
                <li class="nav-item">
                    <a class="nav-link aero-nav-link" href="ticket.php">
                        Tickets
                    </a>
                </li>                                                                  
            <?php } ?>
                <li class="nav-item">
                    <a class="nav-link aero-nav-link" href="feedback.php">
                        Feedback
                    </a>
                </li>               
            </ul>           
            <?php
            if(isset($_SESSION['userId'])) {
                echo '
                <ul  class="nav navbar-nav navbar-right">
                    <li class="nav-item mr-3">
                            
                            <h5 class=" text-light">
                            <i class="ml-1 fa fa-user text-light"></i>
                            '.$_SESSION['userUid'].'
                            </h5>
                    </li>          
                    <li class="nav-item ml-3">
                        <form action="includes/logout.inc.php" class="logout_form" method="POST">
                        <button class="astext"  type="submit">
                            <h5> Logout </h5>                            
                            </button>
                        </form> 
                    </li>                       
                </ul>    ';
            } else {
                echo '
                <div class="dropdown" style="margin-right:0">
                <a class="text-light text-decoration-none dropdown-toggle aero-login" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b>Log in</b>
                </a>
                <div class="dropdown-menu w-75" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item " href="login.php">Passenger</a>
                    <a class="dropdown-item " href="admin/login.php">Administrator</a>
                </div>
                </div>';
            }
            ?>
        </div>
        </nav>