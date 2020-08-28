<?php 
// Load header view
$this->load->view('common/header_view'); 

// Print content?>


  
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
							<?= $this->lang->line('billing_invoice');?>
						</h5>
						<div class="card-body">
							<p class="card-text">
                              <div class="row">
 <table class="table table-striped">
  <thead>
    <tr class="text-danger font-weight-bold">
      <th scope="col">#</th>
      <th scope="col"><?= $this->lang->line('billing_item');?></th>
      <th scope="col"><?= $this->lang->line('billing_date_generated');?></th>
      <th scope="col"><?= $this->lang->line('billing_date_due');?></th>
     <th scope="col"><?= $this->lang->line('billing_item_price');?></th>
      <th scope="col"><?= $this->lang->line('billing_qty');?></th>
    <th scope="col"><?= $this->lang->line('billing_total');?></th>
    <th scope="col"><?= $this->lang->line('billing_status');?></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data as $row){ ?>
    <tr>
      <td class="text-danger font-weight-bold"><?= $row->inv_number ;?> </td>
      <td><?= $row->inv_item_name ;?> </td>
           <td><?php $created = $row->inv_date; echo date("D d M Y",strtotime($created));?> </td>
     <td><?php $due = $row->inv_due_date; echo date("D d M Y",strtotime($due)); ?> </td>
     <td><?= $row->inv_price ;?> </td>
     <td><?= $row->inv_qty ;?> </td>
     <td><?= $row->inv_total ;?> </td>
    <td><?php 
 if ($row->inv_status == 1){
echo "<span class='text-success font-weight-bold'>".$this->lang->line('billing_status_paid')."</span></td>";
 }
else
{
echo "<span class='text-danger font-weight-bold'>".$this->lang->line('billing_status_due')."</span></td>";
}
;?> 
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