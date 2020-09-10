<?php
class Admin_profile extends CI_Controller{
public function __construct(){
        parent::__construct(); 
 $this->load->model('admin/Project_model');
$this->load->model('admin/Dashboard_model');
$this->load->model('admin/Files_model');
$this->load->model('admin/Index_model');
$this->load->model('admin/Billing_model');
 $this->load->helper('url', 'form');
}
//***************************************************//
// Load the profile  page, header and footer!        //
//***************************************************//
public function admin_profile(){
// //load model
        $this->load->model('admin/Index_model');
// load base_url
		$this->load->helper('url');
//Fetch data
$this->load->database();
	$result['data']=$this->Index_model->display_records();
	$this->load->view('admin/common/header_view');
	$this->load->view('admin/profile/profile',$result);
	$this->load->view('admin/common/footer_view');
	

	}
//***************************************************//
// Load the variables for the profiles               //
//***************************************************//
	public function userdata(){

//set variables
     $username = $this->session->userdata('username');
       $email = $this->session->userdata('email');
   $balance = $this->session->userdata('client_balance');
 $about = $this->session->userdata('about_me');
 $job = $this->session->userdata('job_title');
 $address = $this->session->userdata('address');
 $city = $this->session->userdata('city');
 $postalcode = $this->session->userdata('postal_code');
 $mobile = $this->session->userdata('mobile');
 $firstname = $this->session->userdata('firstname');
 $lastname = $this->session->userdata('lastname');
    }
}
?>
