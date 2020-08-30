<?php
$user_id= $this->session->userdata('id');
 //set variables
 $this->lang->load('english_lang');//Load the language file!
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $this->lang->line('app_title') ;?></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="<?php echo base_url(); ?>resources/assets/css/login-back.css" rel="stylesheet" />

</head>
<body>
   <div class="container">

<div class="row m-5 no-gutters shadow-lg">
<div class="col-md-6 d-none d-md-block">
<img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
</div>
<div class="col-md-6 bg-white p-5">

<h3 class="pb-4 text-danger font-weight-bold"> <?= $this->lang->line('app_title') ;?></h3>
<small>Written by: <?= $this->lang->line('app_dev'); ?>&nbsp;|&nbsp; <a href="https://bespokedesignservices.com" class="text-dark"><?= $this->lang->line('app_creator'); ?></a></small>
<h3 class="pb-3 text-danger"><?= $this->lang->line('login_welcome'); ?></h3>
<div class="form-style">
<?php 
$attributes = array('class' => 'form-signin');
echo form_open('login-post', $attributes); ?>
<!-- <form class="form-signin" method="POST"> -->
   <?php 
        echo $this->session->flashdata('login_info');
        echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
  <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
    <?php 
      $data = array(
                'name'          => 'username',
                'id'            => 'username',
                'class'         => 'form-control',
                'placeholder'   => 'Username'
                //'required'      => 'required'
            );
        echo form_input($data);

    ?>
  
	</div>
<br/>
	<?php
 	$attributes = array(
                'class' => 'sr-only'
        );
    echo form_label('Password', 'inputPassword', $attributes);
      $data = array(
                'type'          => 'password',
                'name'          => 'password',
                'id'            => 'inputPassword',
                'class'         => 'form-control',
                'placeholder'   => 'Password'
                //'required'      => 'required'
            );
        echo form_input($data);
echo'<br/>';
    $data = array(
                'class'         => 'btn btn-lg btn-danger btn-block',
                'value'      => 'Login'
            );
        echo form_submit($data);
    ?>
<br/>
  <a class="btn btn-lg btn-default btn-block" href="<?php echo base_url(); ?>register"><?= $this->lang->line('login_register'); ?></a>
<?php echo form_close(); ?>
</div>

</div>

</div>
</div>

<div class="container text-center small text-white mt-4 mb-5 font-weight-bold">
    &copy;<?= $this->lang->line('app_title'); ?> | Wriiten by: <?= $this->lang->line('app_dev'); ?> | Dashboard design by: Creative Tim
</div>

</body>
</html>
