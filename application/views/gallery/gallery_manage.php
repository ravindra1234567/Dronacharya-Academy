<?php $this->load->view("include/admin/header"); ?>
<?php if($this->session->flashdata('success_msg')){ ?>
	<div class="row">
		<div class="col-md-2 ml-2"></div>
		<div class="col-6">
			<div class="alert alert-success alert-dismissible fade show"><?php echo $this->session->flashdata('success_msg'); ?></div>
		</div>
		<?php 

	}if($this->session->flashdata('error_msg')){ ?>
		<div class="col-xs-6">
			<div class="alert alert-danger alert-dismissible fade show">
				<?php echo $this->session->flashdata('error_msg'); ?>
			</div>
		</div>
	<?php }?>
	<?php 

	// foreach ($imageData as $key => $value) {
	// 	echo "<pre>";
	// 	print_r($value);
	// }

	//exit;?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 head">
				<h5><?php  ?></h5>
				<!-- Add link -->
				<div class="float-right mb-1">
					<a href="<?php echo base_url('Gallery/Users/index'); ?>" class="btn btn-success"><i class="plus"></i> Upload Image</a>
				</div>
			</div>

			<!-- Data list table --> 
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th width="5%">#</th>
						<th width="10%"></th>
						<th width="18%">Title</th>
						<th width="19%">Created</th>
						<th width="8%">Status</th>
						<th width="18%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if(!empty($imageData)){ $i=0;  
						foreach($imageData as $row){ $i++; 
							$image = !empty($row['picture'])?'<img src="'.base_url().'uploads/images/'.$row['picture'].'" height= "70" width="100" alt="" />':''; 
							$statusLink = ($row['status'] == 1)?site_url('Gallery/Users/block/'.$row['id']):site_url('Gallery/Users/unblock/'.$row['id']);  
							$statusTooltip = ($row['status'] == 1)?'Click to Inactive':'Click to Active';  
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $image; ?></td>
								<td><?php echo $row['title']; ?></td>
								<td><?php echo $row['created']; ?></td>
								<td><a href="<?php echo $statusLink; ?>" title="<?php echo $statusTooltip; ?>"><span class="badge <?php echo ($row['status'] == 1)?'badge-success':'badge-danger'; ?>"><?php echo ($row['status'] == 1)?'Active':'Inactive'; ?></span></a></td>
								<td colspan="8">
									<a href="<?php echo base_url('Gallery/Users/view/'.$row['id']); ?>" class="btn btn-primary">view</a>
									<!-- <a href="<?php echo base_url('Gallery/Users/edit/'.$row['id']); ?>" class="btn btn-warning">edit</a> -->
									<a href="<?php echo base_url('Gallery/Users/delete/'.$row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete data?')?true:false;">delete</a>
								</td>
							</tr>
						<?php } }else{ ?>
							<tr><td colspan="6">No image(s) found...</td></tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>