<?php $this->load->view('common/header_view');?>

     
     <div class="content">
        <div class="container-fluid">
        <div id="loader"></div>

    <!--  dashboard content -->
  <div class="container-fluid animate-bottom" style="display:none;" id="myDiv">
 
<div class="row">
           
                    </tr>
            <?php 
foreach ($data as $row);{ ?>  
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <h4 class="card-title"><?= $this->lang->line('dashboard_completed'); ?></h4>
                 
                </div>
                <div class="card-body">
               <h1 class="text-danger" style="text-align:center;">  
            <td class='text-success font-weight-bold'><?= $countFixed ;?></td></h1>
                 
                </div>
                <div class="card-footer">
                  <div class="stats">
                  
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <h4 class="card-title"><?= $this->lang->line('dashboard_outstanding'); ?></h4>
                
                </div>
                <div class="card-body">
                
                 <h1 class="text-danger" style="text-align:center;"><td class='text-success font-weight-bold'><?= $countNotFixed ;?></td></h1>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                  </div>
                </div>
              </div>
            </div>
<div class="col-xl-4 col-lg-12">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category"><?= $this->lang->line('dashboard_fixed'); ?></p>
               <h1 class="text-danger card-title" style="text-align:center;">
                          
<td class='text-success font-weight-bold'><?= $countBugs ;?></td></h1>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons pull-left">local_offer</i> Tracked from Github
                  <i class="material-icons pull-right">info_outline</i><a href="#" class="text-light pull-right"> Report an issue</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        

    <?php } ?>    
          
          <div class="row">
          
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><?= $this->lang->line('dashboard_tasks'); ?>:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> <?= $this->lang->line('dashboard_bugs'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> <?= $this->lang->line('dashboard_bugs'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> <?= $this->lang->line('dashboard_server'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                        <tr>
                        <th><?= $this->lang->line('dashboard_details'); ?></th>
                        <th><?= $this->lang->line('dashboard_reported'); ?></th>
                        <th><?= $this->lang->line('dashboard_fixed'); ?></th>
                        
                      </tr>
                     
                    <?php foreach ($data as $row){ ?> 
					<tr>
                     
					<td><?= $row->tasks;?> </td>
					<td><?php $reported = $row->date_reported; echo date("D d M Y",strtotime($reported));?></td>  
                  
                   <td><?php $expected = $row->expected_completion; echo date("D d M Y",strtotime($expected)) ;?></td>
                            
                        </tr>
                        <?php } ;?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                         <tr>
                            <td><a href="<?= $row->website;?>"><?= $row->website;?></a>
                            </td>
                         
                          </tr>
                        
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <?= $row->server;?>
                            </td>
                         
                          </tr>
                   
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div></div>
</div>
<?php $this->load->view('common/footer_view');?>