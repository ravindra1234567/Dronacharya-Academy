<style>
    .w{  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;}
</style>
<div class="container">
    <div class="row">
        <a href="<?php echo base_url('Gallery/Users/galleryManage'); ?>" class="btn btn-primary">Back to List</a>
        <div class="col-md-12">
            <h5 class="text-center"><?php echo !empty($image['title'])?$image['title']:''; ?></h5>
            <?php if(!empty($image['picture'])){ ?>
                <div class="img-box text-center">
                    <img src="<?php echo base_url('uploads/images/'.$image['picture']); ?>" class="rounded w" width="375" height="420">
                </div>
            <?php } ?>
        </div>
    </div>
</div>