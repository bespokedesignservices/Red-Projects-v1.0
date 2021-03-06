<?php
$user_id= $this->session->userdata('id');
 //set variables
 $this->lang->load('english_lang');//Load the language file!
 $app_title = $this->lang->line('app_title');//Call the App title! - This can be changed via the apps Language/english_lang.php file......
 $admin_app_title = $this->lang->line('admin_app_title');//Call the App title! - This can be changed via the apps Language/english_lang.php file......

?>
<!doctype html>
<html>
    <head>
        <title><?= $admin_app_title ;//This prints the App Title!?></title>

   
        
   <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="<?php echo base_url(); ?>resources/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
     <script>
    $(document).ready (function(){
   $("#success-alert").hide();
   $("#myWish").click(function showAlert() {
      $("#success-alert").alert();
      window.setTimeout(function () { 
         $("#success-alert").alert('close'); 
      }, 2000);             
   });      
});
    </script>

<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid red;
  border-radius: 50%;
  border-top: 16px solid darkred;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  
}
</style>
    <script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
   
</head>

<body class="light-edition" onLoad="myFunction()" style="margin:0;">

<div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="light" data-image="<?php echo base_url(); ?>resources/assets/img/sidebar-1.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="https://projects.bespokedesignservices.com/" class="simple-text logo-normal text-danger font-weight-bold text-uppercase">
        <?= $app_title ;//This prints the App Title!?>
        </a>
      </div>
      <div class="sidebar-wrapper">
  <ul class="nav">
          <li class="nav-item active md-accordion accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
            <a class="nav-link" href="<?php echo site_url() ?>admin">
              <i class="material-icons">dashboard</i>
              <p><?= $this->lang->line('menu_dashboard'); ?></p>
            </a>
          </li>
          <!-- your sidebar here -->
   
         <li class="nav-item">
         
           <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="material-icons">important_devices</i>
              <p><?= $this->lang->line('menu_admin_projects'); ?></p>
              </a>
          </li>
       
         <div class="collapse" id="collapseExample">
                 
                  <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/projects"><i class="material-icons">preview</i>View Project</a>
          <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/proejects/edit"><i class="material-icons">edit</i>Update Project</a>
                  <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/projects/create"><i class="material-icons">add</i>Create A Project</a>
                  
                </div>
         
         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
              <i class="material-icons">list</i>
              <p><?= $this->lang->line('menu_admin_billing'); ?></p>
            </a>
          </li>
  <div class="collapse" id="collapseExample2">
                 
                  <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/billing"><i class="material-icons">preview</i>View Invoices</a>
          <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/invoices/edit"><i class="material-icons">edit</i>Update Invoice</a>
                  <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/invoices/create"><i class="material-icons">add</i>Create an Invoice</a>
                  
                </div>
        <li class="nav-item">
            <a class="nav-link"  data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
              <i class="material-icons">work</i>
              <p><?= $this->lang->line('menu_admin_files'); ?></p>
        </a>
  
       
          </li>
  <div class="collapse" id="collapseExample3">
                 
                  <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/files"><i class="material-icons">preview</i>View Files</a>
          <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/upload"><i class="material-icons">cloud_upload</i>Upload Files</a>
  </div>
                  
    

         
   <!-- Plugins -->
  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
              <i class="material-icons">settings_input_composite</i>
            <p><?= $this->lang->line('menu_plugins'); ?></p>
            </a>
          </li>
  <div class="collapse" id="collapseExample4">
                 
                  <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/plugins"><i class="material-icons">preview</i>View all plugins</a>
          <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/plugins/add"><i class="material-icons">cloud_upload</i>Upload Plugin Files</a>
  </div>
  <!-- end plugins -->
    <!--Users -->
  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
              <i class="material-icons">people</i>
            <p>Users</p>
            </a>
          </li>
  <div class="collapse" id="collapseExample5">
                 
                  <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/users/list"><i class="material-icons">preview</i>View all Users</a>
          <a class="dropdown-item text-muted" href="<?php echo site_url() ?>admin/dashboard/usres/add"><i class="material-icons">add</i>Add a user</a>
  </div>
  <!-- end users -->
       
   <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url() ?>logout">
              <i class="material-icons">lock_open</i>
              <p><?= $this->lang->line('menu_logout'); ?></p>
            </a>
          </li>
        </ul>
      </div>
    </div>
        <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
  
            <a class="navbar-brand text-danger" href="javascript:void(0)"><?= $this->lang->line('admin_app_welcome'); ?>&nbsp;<?= $this->session->userdata('firstname');?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
           <li class="nav-item">
            <a class="nav-link text-danger shadow" href="<?php echo site_url() ?>admin">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-danger" href="<?php echo site_url() ?>admin/dashboard/profile">
              <i class="material-icons">account_circle</i>
              <p>profile</p>
            </a>
          </li>
      
       <li class="nav-item">
            <a class="nav-link text-danger" href="<?php echo site_url() ?>logout">
              <i class="material-icons">lock_open</i>
              <p>logout</p>
            </a>
          </li>
          </ul>
     
          </div>
        </div>
      </nav>
      <!-- End Navbar -->