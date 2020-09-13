<?php $this->load->view('admin/common/header_view');?>
<div class="content">
        <div class="container-fluid">
        <div id="loader"></div>

    <!--  dashboard content -->
  <div class="container-fluid animate-bottom" style="display:none;" id="myDiv">
 
<div class="row">
<!-- stats area -->
 
             <div class="col-xl-12 col-lg-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title"><?= $this->lang->line('plugin_title'); ?></h4>
             </div>
                <div class="card-body">
<table class="table table-striped">
    <thead>
    <tr class="text-center">
        <th width="150"><?= $this->lang->line('plugin_name'); ?></th>
        <th><?= $this->lang->line('plugin_status'); ?></th>
        <th><?= $this->lang->line('plugin_support'); ?></th>
        <th><?= $this->lang->line('plugin_version'); ?></th>
        <th><?= $this->lang->line('plugin_description'); ?></th>
        <th><?= $this->lang->line('plugin_author'); ?></th>
        <th><?= $this->lang->line('plugin_data'); ?></th>
        <th><?= $this->lang->line('plugin_actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($plugins as $k => $p): ?>
    <tr>
        <td><?php echo '<a href='.base_url().'plugins/config/?plugin=' . $p->system_name . '>' . $p->name . '</a>'; ?></td>
        <td><?php echo ($p->status ? 'Enabled' : 'Disabled'); ?></td>
        <td><?php echo '<a href=' . $p->uri . '" target="_blank"><i class="material-icons">help</i></a>'; ?></td>
        <td><?php echo $p->version; ?></td>
        <td><?php echo $p->description; ?></td>
        <td><?php echo '<a href=' . $p->author_uri . '" target="_blank">' . $p->author . '</a>'; ?></td>
        <td><pre><?php echo ($p->data ? print_r(unserialize($p->data), TRUE) : 'No Data'); ?></pre></td>
        <td><div class="btn-group" role="group" aria-label="Basic example"><?php echo '<a href='.base_url().'plugins/config/?plugin=' . $p->system_name . ' class="btn btn-sm btn-white text-dark"><i class="material-icons" tooltip="Settings">settings</i></a>'; ?><a href="#" class="btn btn-sm btn-success"><i class="material-icons" tooltip="Uninstall">add</i></a><a href="#" class="btn btn-sm btn-danger"><i class="material-icons" tooltip="Uninstall">delete</i></a></div></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
                    <div class="card-footer">
                  <div class="stats">
               
                  </div>
                </div>
              </div>
            </div>
             </div>
  </div>
        </div>
<?php $this->load->view('admin/common/footer_view');?>