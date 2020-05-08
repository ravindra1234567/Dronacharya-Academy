<?php $this->load->view('include/student/header'); ?>
  <style>
  	/* Make the image fully responsive */
  	.carousel-inner img {
  		width: 100%;
  		height: 100%;
  	}
  </style>

  <div id="demo" class="carousel slide" data-ride="carousel">
  	<ul class="carousel-indicators">
  		<li data-target="#demo" data-slide-to="0" class="active"></li>
  		<li data-target="#demo" data-slide-to="1"></li>
  		<li data-target="#demo" data-slide-to="2"></li>
  	</ul>
  	<div class="carousel-inner">
  		<div class="carousel-item active">
  			<img src="<?= base_url() ?>/assets/img/slider/4.jpg" width="100" height="100" alt="Los Angeles"> 
  		</div>
  		<div class="carousel-item">
  			<img src="<?= base_url() ?>/assets/img/slider/5.png" alt="Chicago" > 
  		</div>
  		<div class="carousel-item">
  			<img src="<?= base_url() ?>/assets/img/slider/6.jpg" alt="New York" >
  			<!-- <div class="carousel-caption">
  				<h3>New York</h3>
  				<p>We love the Big Apple!</p>
  			</div> -->   
  		</div>
  	</div>
  	<a class="carousel-control-prev" href="#demo" data-slide="prev">
  		<span class="carousel-control-prev-icon"></span>
  	</a>
  	<a class="carousel-control-next" href="#demo" data-slide="next">
  		<span class="carousel-control-next-icon"></span>
  	</a>
  </div>
  <?php $this->load->view('include/student/footer')?>