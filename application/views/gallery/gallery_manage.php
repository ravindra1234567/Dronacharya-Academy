<?php $this->load->view("include/student/header"); ?>
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
						<th width="40%">Title</th>
						<th width="19%">Created</th>
						<th width="8%">Status</th>
						<th width="18%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if(!empty($gallery)){ $i=0;  
						foreach($gallery as $row){ $i++; 
							$image = !empty($row['file_name'])?'<img src="'.base_url().'uploads/images/'.$row['file_name'].'" alt="" />':''; 
							$statusLink = ($row['status'] == 1)?site_url('manage_gallery/block/'.$row['id']):site_url('manage_gallery/unblock/'.$row['id']);  
							$statusTooltip = ($row['status'] == 1)?'Click to Inactive':'Click to Active';  
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $image; ?></td>
								<td><?php echo $row['title']; ?></td>
								<td><?php echo $row['created']; ?></td>
								<td><a href="<?php echo $statusLink; ?>" title="<?php echo $statusTooltip; ?>"><span class="badge <?php echo ($row['status'] == 1)?'badge-success':'badge-danger'; ?>"><?php echo ($row['status'] == 1)?'Active':'Inactive'; ?></span></a></td>
								<td>
									<a href="<?php echo base_url('manage_gallery/view/'.$row['id']); ?>" class="btn btn-primary">view</a>
									<a href="<?php echo base_url('manage_gallery/edit/'.$row['id']); ?>" class="btn btn-warning">edit</a>
									<a href="<?php echo base_url('manage_gallery/delete/'.$row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete data?')?true:false;">delete</a>
								</td>
							</tr>
						<?php } }else{ ?>
							<tr><td colspan="6">No image(s) found...</td></tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>