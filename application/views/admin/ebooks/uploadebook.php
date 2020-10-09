<?php $this->load->view("include/admin/header");
// print_r($subject);?>

<style type="text/css">
	@media screen and (min-width: 768px){
		.w-md-75{
			width: 75%;
		}
	}
</style>
<body>
	<div class="container mt-1 border-light shadow container mb-2">
		<div class="h2 m-2 p-2" >UPLOAD E-BOOK</div>
		<hr>
		<form action="<?=base_url()?>/admin/EbookAdmin/upload" method="post" enctype="multipart/form-data" class="mx-auto w-md-75 p-4">
			<div class="form-group row mb-0">
				<label for="chapter" class="col-sm-3 col-form-label">Upload File</label>
				<div class="form-control custom-file col-sm-9">
					<input type="file" name="book_file" class="custom-file-input" id="customFile" accept="application/pdf" required="">
					<label class="custom-file-label" for="customFile">Choose file</label>
				</div>
			</div>
			<small class="text-info d-block mb-2 text-right" >Please compress the pdf before upload</small>
			<div class="form-group row ">
				<label for="book_name" class="col-sm-3 col-form-label">Book Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="book_name" placeholder="Book Name" name="book_name" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="book_type" class="col-sm-3 col-form-label">Book Type</label>
				<div class="col-sm-9">
					<select id="book_type" class="form-control" name="book_type" required="">
						<option disabled selected>Select Book Type</option>
						<option value="1"> E-Book</option>
						<option value="2"> Question Paper</option>
						<option value="3"> DPP</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="class" class="col-sm-3 col-form-label">Class</label>
				<div class="col-sm-9">
					<select id="class" class="form-control" name="class" required="">
						<option disabled selected>Select Class</option>
						<option value="12">12th</option>
						<option value="11">11th</option>
						<option value="10">10th</option>
						<option value="9">9th</option>
					</select>
				</div>
			</div>
			<!-- <div class="form-group row">
				<label for="test-batch-list" class="col-sm-3 col-form-label">Select Batches:</label>
				<div class="load-batches-loader" style="display: none;">
					<span class="font-italic">Loading Batches...</span>
				</div>
				<div class="font-weight-normal col-sm-9">
					<select type="text" name="batches[]" class="form-control col-lg-8" id="test-batch-list" multiple="multiple">
					</select>
				</div>
			</div> -->
			
			<div class="form-group row" id="subjects">
				<label for="subject" class="col-sm-3 col-form-label">Subject </label>
				<div class="col-sm-9">
					<select id="select-subject" class="form-control" name="subject_id">
						<option disabled selected>Select Subject</option>
						<?php foreach ($subjects as $key => $value) {?>
							<option value="<?= $value['category']?>"><?php echo $value['name']?></option>
						<?php }   ?>
					</select>
				</div>
			</div>
			<!-- <div class="form-group row" id="chapters">
				<label for="chapter" class="col-sm-3 col-form-label">Chapter </label>
				<div class="col-sm-9">
					<select id="select-chapters" class="form-control" name="chapter_id">
						<option disabled selected>Select Chapter</option>
						
						
					</select>
				</div>
			</div> -->
			<div class="form-group row">
				<label for="chapter" class="col-sm-3 col-form-label">Book Description</label>
				<div class="col-sm-9">
					<textarea class="form-control" id="description" rows="3" name="book_desc" placeholder="Describe about the book here..."></textarea>
				</div>
			</div>
			<div class="form-group row">
				<h4 class="<?=$this->session->flashdata('alert_class')?> mx-auto"  align="center">
					<?= $this->session->flashdata('upload_msg')?>
				</h4>
			</div>
			<div class="form-group row">
				<div class="col-sm-12" align="center">
					<button type="submit" class="btn btn-primary">Upload <i class="fa fa-upload" aria-hidden="true"></i></button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>