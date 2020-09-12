<?php
class Admin_users_list extends CI_Controller{
public function __construct(){
        parent::__construct(); 
 $this->load->model('admin/Project_model');
$this->load->model('admin/Dashboard_model');
$this->load->model('admin/Files_model');
$this->load->model('admin/Index_model');
$this->load->model('admin/Billing_model','billing');
$this->load->model('admin/User_model','users');
 $this->load->helper('url', 'form');
}
	public function index($offset = 0){
//***************************************************//
// Load the user list  page, header and footer!        //
//***************************************************//
		// //load model
        $this->load->model('admin/User_model','users');
		// load base_url
		$this->load->helper('url');
		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->users->get_user_info();//call the records model
    $this->load->view('admin/common/header_view');
	$this->load->view('admin/users/users_list',$result);//display result in the stats file
    $this->load->view('admin/common/footer_view');
	
        }	
public function admin_users($offset = 0){
//***************************************************//
// Load the user list page, header and footer!        //
//***************************************************//
	// //load model
        $this->load->model('admin/User_model','users');
		// load base_url
		$this->load->helper('url');
		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->users->list_all();//call the records model
    $this->load->view('admin/common/header_view');
	$this->load->view('admin/users/users_list',$result);//display result in the stats file
    $this->load->view('admin/common/footer_view');
	
        }	

    }
?>
