<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<style type="text/css">
   

#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}
.container-flui{
  background-color:#1d1d1d !important;
  font-family: "Asap", sans-serif;
  color:#989898;
  /*margin:10px;*/
  font-size:16px;
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }

</style>
<script type="text/javascript">
    $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
        
        $(this).addClass('transition');
    }, function(){
        
        $(this).removeClass('transition');
    });
});
    
</script>


<!-- Page Content -->
<div class="container-fluid page-top">
    <h2>Gallery Images</h2>
    <hr>
    <div class="row">
         <?php if(!empty($gallery)){ ?> 
        <?php 
            foreach($gallery as $row){ 
                $uploadDir = base_url().'uploads/images/'; 
                $imageURL = $uploadDir.$row["picture"]; 
        ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="<?php echo $imageURL; ?>" class="fancybox" rel="ligthbox">
                <img   src="<?php echo $imageURL; ?>" class="zoom img-fluid "  alt="">
                <p><?php //echo $row["title"]; ?></p>
            </a>
        </div>
        <?php } ?> 
        <?php }else{ ?>
            <div class="col-xs-12">
                <div class="alert alert-danger">No image(s) found...</div>
            </div>
        <?php } ?>

        
        
    </div>
</div>

