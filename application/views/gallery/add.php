<?php $this->load->view("include/admin/header")?>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <form role="form" method="post" enctype="multipart/form-data" class="ml-4 border">
            <div class="text-center bg-success text-light p-2">Upload Image</div>
            <div class="panel">
                <div class="panel-body">
                 <div class="form-group col-md-12">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" placeholder="Image Title" required="true" />
                </div>
                <div class="form-group col-md-12">
                    <label>Image</label>
                    <input class="form-control" type="file" onchange="readURL(this);" name="picture" required="true" />
                </div>
                <div class="col-md-2 h-60 mb-2">
                    <img id="blah" src="#" alt="" class=" mw-100 mh-50" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success ml-4" name="userSubmit" value="Submit">
                </div>
            </div>
        </div>
    </form>
</div>

</div>
<script type="text/javascript">
 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
            .attr('src', e.target.result)
            .width(150)
            .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>