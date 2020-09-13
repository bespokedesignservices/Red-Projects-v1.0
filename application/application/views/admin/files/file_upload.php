<?php 
// Load header view
$this->load->view('admin/common/header_view'); 

// Print content?>
<!-- style for uploads area -->
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script type="text/javascript">

</script>


  
     <div class="content">
        <div class="container-fluid">
        <div id="loader"></div>

    <!--  dashboard content -->
  <div class="container-fluid animate-bottom" style="display:none;" id="myDiv">
	<!-- new code for files -->
 
		<?php
                if (isset($error)){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="success-alert"><span>'.$error.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span> </span>
  </button></div>';
                }
  if (isset($success))
  {
  echo '<div class="alert alert-success text-white alert-dismissible fade show" role="alert" id="success-alert">'.$this->lang->line('files_success').'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';
  }
            ?>



        
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<h5 class="card-header bg-danger text-white font-weight-bold">
						<?= $this->lang->line('files_upload_file'); ?>
						</h5>   
<div class="card-body">
							<p class="card-text">
          <!-- Standar Form -->
          <h4><?= $this->lang->line('files_info1'); ?></h4>
<p><?= $this->lang->line('files_info2'); ?></p>
           <form method="post" action="<?=base_url('store-image')?>" enctype="multipart/form-data">
        <!--   <input type="text" placeholder="Name" name="name"/>
              <input type="text" placeholder="Description" name="description"/>-->
             <input type="file" id="profile_image" name="profile_image" size="15" class="border border-danger p-2 pr-5 text-danger form-control" multiple/>
             <!-- custom file input -->
       
           <!-- end custom file input -->
                   <div class="table-responsive">
                  
                  <label><?= $this->lang->line('files_info_type'); ?> &nbsp;&nbsp;</label>
                            
                  <input type="submit" name="submit" value="<?= $this->lang->line('files_upload_btn'); ?>" class="btn btn-success btn-md"/>
              
                  </div>
                  </form>
</p>
                </div> </div></div> <!-- /container -->
							
				
				
     
  <!-- end new code for files -->
          
          
        <!-- dashboard content end -->
</div>
  
  <?php
// Load footer view
$this->load->view("admin/common/footer_view");?>