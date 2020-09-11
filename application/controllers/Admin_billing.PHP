<?php
class Admin_billing extends CI_Controller{
public function __construct(){
        parent::__construct(); 
 $this->load->model('admin/Project_model');
$this->load->model('admin/Dashboard_model');
$this->load->model('admin/Files_model');
$this->load->model('admin/Index_model');
$this->load->model('admin/Billing_model','billing');
 $this->load->helper('url', 'form');
}
	public function index($offset = 0){
//***************************************************//
// Load the billing  page, header and footer!        //
//***************************************************//
		// //load model
        $this->load->model('admin/Billing_model'.'billing');
		// load base_url
		$this->load->helper('url');
		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->billing->display_billing();//call the records model
    $this->load->view('admin/common/header_view');
	$this->load->view('admin/billing/billing',$result);//display result in the stats file
    $this->load->view('admin/common/footer_view');
	
        }	
public function admin_billing($offset = 0){
//***************************************************//
// Load the billing  page, header and footer!        //
//***************************************************//
		// //load model
        $this->load->model('admin/Billing_model');
		// load base_url
		$this->load->helper('url');
		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->billing->display_billing();//call the records model
    $this->load->view('admin/common/header_view');
	$this->load->view('admin/billing/billing',$result);//display result in the stats file
    $this->load->view('admin/common/footer_view');
	
        }	

    }
?>
