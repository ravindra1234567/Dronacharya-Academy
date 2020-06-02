<?php $this->load->view("include/admin/header")?>
<div class="container" id="admin-home-container">
	<div class="row mt-4">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Gallery Section:</h4>
					<p class="card-text">You can upload New image and also manage already uploaded and previous gallery.</p>
					<!-- <a href="<?=base_url()?>createTest" class="m-1 card-link btn btn-light btn-outline-dark">Create New Test</a> -->
					<a href="<?=base_url()?>galleryManage" class="m-1 card-link btn btn-light btn-outline-dark">Manage Gallery</a>
					<a href="<?=base_url()?>adminGallery" class="m-1 card-link btn btn-light btn-outline-dark">Preview Gallery</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">E-Books:</h4>
					<p class="card-text">You can manage E-books from here. You can upload , update, delete or view their details.</p>
					<a href="<?=base_url()?>admin/EbookAdmin" class="m-1 card-link btn btn-light btn-outline-dark">Upload E-Book</a>
					<!-- <a href="<?=base_url()?>Promocode/view" class="m-1 card-link btn btn-light btn-outline-dark">View Promocodes</a> -->
				</div>
			</div>
		</div>
	</div>
</div>