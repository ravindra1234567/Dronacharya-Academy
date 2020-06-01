	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="icon" href="input/logo.png"> -->
		<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!-- fornt link -->
		<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Oxanium:wght@200;800&family=Pridi:wght@500&display=swap" rel="stylesheet">

		<style type="text/css">
			@media only screen and (max-width: 425px) {
				#IET1{
					display:none;
				}
				#logo{
					height:100px;
					width:100px;
				}
			}
			@media only screen and (min-width: 601px) {
				#IET2{
					display:none;
				}
				#logo{
					height:80px;
					width:80px;
				}
			}
			@media only screen and (max-width: 754px) {
				.navbar-brand{
					font-size:1.5rem!important;
				}

			}
			/*
			.content{
				min-height: 320px;
				margin-top: 80px;


			}
			*/
			@media screen and (min-width: 768px){
				.rwd-break { display: none; }
				.extra_padding{
					padding-left:209px;
				}
			}
			.active{
				font-size:20px;
				font-weight: 600;
				margin:auto;
			}
			.nav-link{
				margin: auto;
				font-size: 20px;
			}		
			h1{
				font-family: arial,sans-serif;
			}
		</style>


	</head>
	<div class=" p-3 row text-center" style="background:#cdafdb; ">
		<div class="col-sm-1"></div><span><i class="fas fa-phone-alt"></i>  +91 7047178936</span>
		<div class="col-sm-1"></div><span><i class="far fa-envelope"></i> ravindrakushwahanwg@gmail.com</span>
		<div class="col-sm-4"></div>
		<div>
			<a href="<?= base_url()?>contact"><button class="btn btn-primary">Enroll Now </button></a>
			&nbsp<i class="fab fa-facebook"></i>
			&nbsp<i class="fab fa-google-plus-g"></i>
			&nbsp<i class="fab fa-youtube"></i>
			&nbsp<i class="fab fa-whatsapp"></i>
		</div>
	</div>
	<nav class="navbar navbar-light dark  sticky-top navbar-expand-lg  mb-3" style="background: white">
		<a href="index.jsp"><img id="logo" class="img-fluid rounded-circle" src="<?=base_url()?>assets/img/logo.png" ></a>

		<a id="IET1" class="navbar-brand ml-2" href="#" style="font-size:2rem;color: #827f7f">DRONACHARYA  &nbsp ACADEMY</a>
		<a id="IET2" class=" " style="color: #827f7f">DRONACHARYA ACADEMY</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link font" href="<?= base_url()?>home">Home</a>
				<a  class="nav-item nav-link  active" href="#"></a>
				<li class="dropdown nav-item nav-link">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Courses <span class=""></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a class="nav-link" href="course.php">MPPSC</a></li>              
						<li><a class="nav-item nav-link " href="course-detail.php">SSC</a></li> 
						<li><a class="nav-link" href="course.php">RAILWAY</a></li> 
						<li><a class="nav-link" href="course.php">BANK</a></li> 
						<li><a class="nav-link" href="course.php">MPSI</a></li> 
						<li><a class="nav-link" href="course.php">CONSTABLE</a></li> 
						<li><a class="nav-link" href="course.php">SAMVIDA</a></li>            
					</ul>
				</li>
				<a  class="nav-item nav-link"  href="<?= base_url()?>gallery" >Gallery</a>  
				<a  class="nav-item nav-link"  href="<?= base_url()?>contact" >Contact</a>
				<a class="nav-item nav-link " href="<?= base_url()?>about">About US</a>
				<a  class="nav-item nav-link font text-white" href="<?= base_url()?>student_login"><button class="btn-primary btn">Register</button></a>
				<a class="nav-item nav-link disabled text-white" href="#" tabindex="-1" aria-disabled="true"></a>
			</div>
		</div>
	</nav>
	</html>