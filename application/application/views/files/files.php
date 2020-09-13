<?php 
// Load header view
$this->load->view('common/header_view'); 

// Print content?>
<!-- style for uploads area -->
<style type="text/css">

</style>
 
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<!-- end of styles for uploads -->

  
     <div class="content">
        <div class="container-fluid">
        <div id="loader"></div>
<?php
                if (isset($error)){
                    echo '<div class="alert alert-danger alert-dismissible fade show hide-it" role="alert">'.$error.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';
                }
  if (isset($success))
  {
  echo '<div class="alert alert-success text-white alert-dismissible fade show hide-it" role="alert">'.$this->lang->line('files_success').'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';
  }
            ?>

    <!--  dashboard content -->
  <div class="container-fluid animate-bottom" style="display:none;" id="myDiv">
	<!-- new code for files -->
 
 

	<div class="row">
		<div class="col-md-12">
        <a href="<?php echo site_url() ?>dashboard/upload" class="btn btn-danger"><i class="material-icons">cloud_upload</i>&nbsp;&nbsp;<?= $this->lang->line('files_upload_btn'); ?></a>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<h5 class="card-header bg-danger text-white font-weight-bold">
							<?= $this->lang->line('menu_files'); ?>
                    </h5>
                    
						<div class="card-body">
							<p class="card-text">
								 <div class="table-responsive drive-items-table-wrapper">
                               
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="type"></th>
                                        <th class="name truncate"><?= $this->lang->line('files_name'); ?></th>
                                    <th class="name truncate"><?= $this->lang->line('files_description'); ?></th>
                                        <th class="date"><?= $this->lang->line('files_date_uploaded'); ?></th>
                                        <th class="date"><?= $this->lang->line('files_upload_by'); ?></th>
                                     <th class="size"><?= $this->lang->line('files_action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php foreach ($data as $row){ ?>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-text-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#"><?= $row->file_name ;?></a></td>
                                    <td class="name truncate"><a href="#"><?= $row->description ;?></a></td>
                                        <td class="date"><?php $due = $row->uploaded; echo date("D d M Y",strtotime($due)); ?></td>
                                        <td class="name truncate"><a href="#"><?= $row->name ;?></a></td>
                                    <td class="size"><a href="#" class="text-danger"><i class="material-icons">delete</i></a></td>
                                    </tr>
                                <?php  } ;?>
                                </tbody>
                            </table>
                        </div>
							</p>
						</div>
						<div class="card-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        
   <!-- end new code -->     <!-- dashboard content end -->
     </div></div> </div>
  
  <?php
// Load footer view
$this->load->view("common/footer_view");?>