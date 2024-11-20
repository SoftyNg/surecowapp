<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Surecow</title>

		<!-- Loading third party fonts -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
		crossorigin="anonymous">
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" 
		rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
		<link href="<?= BASE_URL?>/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="<?= BASE_URL?>/fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">
         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?= THEME_DIR ?>css/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		<link rel="shortcut icon" type="image/x-icon" href="<?=BASE_URL?>/images/surecowtitle.png" />

	</head>


	<body>
		 <!-- Navbar -->
		 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Brand -->
      <a class="navbar-brand" href="#">
	  <img src="<?= BASE_URL?>/images/sclogosmall.png" 
	  alt="Company Name" class="logo">
	  </a>

      <!-- Toggler/collapsible Button for Mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
	  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links and Dropdown -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <!-- Home link -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          
          <!-- Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action 1</a></li>
              <li><a class="dropdown-item" href="#">Action 2</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else</a></li>
            </ul>
          </li>
        </ul>

        <!-- Buttons aligned to the right -->
        <div class="d-flex">
          <button class="btn btn-outline-primary me-2" type="button">Login</button>
          <button class="btn btn-primary" type="button">Register</button>
        </div>
      </div>
    </div>
  </nav>
 
				






            <?= Template::display($data) ?>






            <div class="footer">
				<div class="row">
					<div class="col-md-4">
					<img src="<?= BASE_URL?>/images/sclogosmall.png" 
					alt="Company Name" class="logo"/>
					</div>
					<div class="col-md-4 align-center">
						<div>
						   <ul class="footer-links">
							<li>About us</li>
							<li>About us</li>
							<li>About us</li>
						</ul>
                       </div>
					</div>
					<div class="col-md-4 align-right">
						<img src="<?= BASE_URL?>/images/sclogosmall.png" 
	  alt="Company Name" class="logo">
					</div>
                </div>
				<div class="row">
					<div class="col-md-6">
				<p>&copy; <span id="year"></span> Surecow. All rights reserved.</p>
                  </div>
				  <div class="col-md-6 align-right">
				<p><a href="">Privacy policy</a>  <a href="">Terms & condition.</a></p>
                  </div>
                </div>
		</div>

		<script src="<?= BASE_URL?>/js/jquery-1.11.1.min.js"></script>
		<script src="<?= BASE_URL?>/js/testimonial.js"></script>
		
		<script src="<?= BASE_URL?>/js/plugins.js"></script>
		<script src="<?= BASE_URL?>/js/app.js"></script>
		<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		