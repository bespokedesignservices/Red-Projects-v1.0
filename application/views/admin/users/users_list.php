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
							<i class="material-icons text-white font-weight-bold pull-left">account_box</i><?= $this->lang->line('menu_users'); ?>
						</h5>
						<div class="card-body">
							<p class="card-text">
                              <div class="row">
 <table class="table table-striped">
  <thead>
    <tr class="text-danger font-weight-bold">
     
      <th scope="col"><?= $this->lang->line('user_name'); ?></th>
      <th scope="col"><?= $this->lang->line('user_email'); ?></th>
      <th scope="col"><?= $this->lang->line('user_date_created'); ?></th>
     <th scope="col"><?= $this->lang->line('user_active'); ?></th>
      <th scope="col"><?= $this->lang->line('user_actions'); ?></th>
      <th scope="col"><a class="btn btn-sm btn-success"><i class="material-icons text-white text-bold">add</i></a></th>
    </tr>
  </thead>
  <tbody>
 <?php foreach ($data as $row){?>
    <tr>
      <td class="text-danger font-weight-bold"><?= $row->username ;?> </td>
      <td><?= $row->email ;?> </td>
      <td><?php $created = $row->created_at; echo date("D d M Y",strtotime($created));?></td>
      <?php if ($row->status = 1){
echo "<td class='text-success font-weight-bold'>".$this->lang->line('user_is_active')."</td>";
}
else
{
echo "<td class='text-warning font-weight-bold'>".$this->lang->line('user_not_active')."</td>";
 }?> 
     <td><a href="<?php echo base_url('admin/dashboard/users/list/edit'. $row->id);?>"><i class="material-icons text-danger">delete</i></a><a href="#"><i class="material-icons text-success">visibility</i></a></td>
   <td></td>
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
