<?php ;?>

     
     <div class="content">
        <div class="container-fluid">
        <div id="loader"></div>

    <!--  dashboard content -->
  <div class="container-fluid animate-bottom" style="display:none;" id="myDiv">
 
<div class="row">
<!-- stats area -->
 
             <div class="col-xl-4 col-lg-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title"><?= $this->lang->line('dashboard_users'); ?></h4>
             </div>
                <div class="card-body">
                
                   <div class="chart-container">
    <div class="bar-chart-container">
      <canvas id="bar-chart"></canvas>
    </div>
  </div>
            
               
                </div>
                <div class="card-footer">
                  <div class="stats">
               
                  </div>
                </div>
              </div>
            </div>
<!-- end stats area -->
<!-- stats area -->
             <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                   <h4 class="card-title"><?= $this->lang->line('dashboard_invoice'); ?></h4>
                </div>
                <div class="card-body">
                  <div class="chart-container">
    <div class="bar-chart-container">
      <canvas id="bar-chart2"></canvas>
    </div>
  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                  </div>
                </div>
              </div>
            </div>
<!-- end stats area -->
                    </tr>
           
 
           
 <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                   <h4 class="card-title"><?= $this->lang->line('dashboard_projects'); ?></h4>
                </div>
                <div class="card-body">
                  <div class="chart-container">
    <div class="bar-chart-container">
      <canvas id="bar-chart3"></canvas>
    </div>
  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        

     
          
          <div class="row">
          
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><?= $this->lang->line('dashboard_invoices'); ?>:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">table_view</i> <?= $this->lang->line('dashboard_invoice_all'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">credit_card</i> <?= $this->lang->line('dashboard_invoice_due'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">receipt</i> <?= $this->lang->line('dashboard_invoice_paid'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                  <a href="#" class="btn">View all invoices</a>
                  <a href="#" class="btn">Create an invoice</a>
                  <a href="#" class="btn">Mark an invoice paid</a>
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                        <tr>
                        <th><?= $this->lang->line('billing_number'); ?></th>
                        <th><?= $this->lang->line('billing_item'); ?></th>
                        <th><?= $this->lang->line('billing_date_generated'); ?></th>
                        <th><?= $this->lang->line('billing_date_due'); ?></th>
                        <th><?= $this->lang->line('billing_total'); ?></th>
                        <th><?= $this->lang->line('billing_status'); ?></th>
                        
                      </tr>
                     
                    <?php foreach ($invoices as $invoices){ ?> 
					<tr>
                     
					<td><?= $invoices->inv_number;?> </td>
                     <td><?= $invoices->inv_item_name ;?> </td>
					<td><?php $generated = $invoices->inv_date; echo date("D d M Y",strtotime($generated));?></td>  
                  
                   <td><?php $due = $invoices->inv_due_date; echo date("D d M Y",strtotime($due)) ;?></td>
                        <td><?= $this->lang->line('billing_currency'); ?><?= $invoices->inv_total ;?> </td>    
                    <td> <?php if ($invoices->inv_status === '1'): ?><?= 'Paid';?><?php else : ?><?= 'Due';?><?php endif; ?></td>  
                    <td><i class="material-icons">pageview</i></td>
                        </tr>
                      
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                         <tr>
                            <td>
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
                            
                            </td>
                         
                          </tr>
                   
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
     <!-- messages -->
       <div class="row">
          
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><?= $this->lang->line('text_messages'); ?>:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#all" data-toggle="tab">
                            <i class="material-icons">mail</i> <?= $this->lang->line('text_all'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#read" data-toggle="tab">
                            <i class="material-icons">mail_outline</i> <?= $this->lang->line('text_read'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#sent" data-toggle="tab">
                            <i class="material-icons">outbox</i> <?= $this->lang->line('text_sent'); ?>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                   
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                   <a href="#" class="btn">Send a message</a>
                  <a href="#" class="btn">Go to inbox</a>
                    <div class="tab-pane active" id="all">
                      <table class="table">
                        <tbody>
                        <tr>
                        <th><?= $this->lang->line('billing_number'); ?></th>
                        <th><?= $this->lang->line('billing_item'); ?></th>
                        <th><?= $this->lang->line('billing_date_generated'); ?></th>
                        <th><?= $this->lang->line('billing_date_due'); ?></th>
                        <th><?= $this->lang->line('billing_total'); ?></th>
                        <th><?= $this->lang->line('billing_status'); ?></th>
                        
                      </tr>
                     
                
					<tr>
                     
					<td><?= $invoices->inv_number;?> </td>
                     <td><?= $invoices->inv_item_name ;?> </td>
					<td><?php $generated = $invoices->inv_date; echo date("D d M Y",strtotime($generated));?></td>  
                  
                   <td><?php $due = $invoices->inv_due_date; echo date("D d M Y",strtotime($due)) ;?></td>
                        <td><?= $this->lang->line('billing_currency'); ?><?= $invoices->inv_total ;?> </td>    
                    <td> <?php if ($invoices->inv_status === '1'): ?><?= 'Paid';?><?php else : ?><?= 'Due';?><?php endif; ?></td> 
                      <td><i class="material-icons">pageview</i></td>
                        </tr>
                        <?php } ;?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="read">
                      <table class="table">
                        <tbody>
                         <tr>
                            <td>
                            </td>
                         
                          </tr>
                        
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="sent">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                            
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
     <!-- emd messages -->
</div>

 <?php $this->load->view('admin/dashboard/counter');?>
<?php ;?>