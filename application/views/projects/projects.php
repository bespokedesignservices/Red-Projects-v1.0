<?php 
// Load header view
$this->load->view('common/header_view');?>
<div class="content">
        <div class="container-fluid">
        <div id="loader"></div>

    <!--  dashboard content -->
  <div class="container-fluid animate-bottom" style="display:none;" id="myDiv">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<h5 class="card-header bg-danger text-white font-weight-bold">
							<i class="material-icons text-white font-weight-bold pull-left">account_box</i><?= $this->lang->line('menu_projects'); ?>
						</h5>
						<div class="card-body">
							<p class="card-text">
                              <div class="row">
 <table class="table table-striped">
  <thead>
    <tr class="text-danger font-weight-bold">
      <th scope="col">#</th>
      <th scope="col"><?= $this->lang->line('project_name'); ?></th>
      <th scope="col"><?= $this->lang->line('project_details'); ?></th>
      <th scope="col"><?= $this->lang->line('project_reported'); ?></th>
     <th scope="col"><?= $this->lang->line('project_completed'); ?></th>
      <th scope="col"><?= $this->lang->line('project_status'); ?></th>
    </tr>
  </thead>
  <tbody>
 <?php foreach ($data as $row){?>
    <tr>
      <td class="text-danger font-weight-bold"><?= $row->project_id ;?> </td>
      <td><?= $row->project_name ;?> </td>
      <td><?= $row->project_details ;?> </td>
      <td><?php $reported = $row->date_reported; echo date("D d M Y",strtotime($reported));?> </td>
     <td><?php $expected = $row->expected_completion; echo date("D d M Y",strtotime($expected));?> </td>
    <?php if ($row->fixed == 1){
echo "<td class='text-success font-weight-bold'>".$this->lang->line('project_status_complete')."</td>";
}
else
{
echo "<td class='text-warning font-weight-bold'>".$this->lang->line('project_status_outstanding')."</td>";
 }?>
    </tr>
  <?php } ;?>
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
          </div>
          
        <!-- dashboard content end -->
</div></div>
  <?php
// Load footer view
$this->load->view("common/footer_view");?>