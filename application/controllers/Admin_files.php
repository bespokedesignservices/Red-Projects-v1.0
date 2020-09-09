<?php
class Admin_files extends CI_Controller{
public function __construct(){
        parent::__construct(); 
 $this->load->model('admin/Project_model');
$this->load->model('admin/Dashboard_model');
$this->load->model('admin/Files_model');
$this->load->model('admin/Index_model');
$this->load->model('admin/Billing_model');
 $this->load->helper('url', 'form');
}
	public function index($offset = 0){
//***************************************************//
// Check if the user is logged in to the application!//
//***************************************************//		
		if($this->session->login != 'true'){//(Is the user logged in?)
			redirect('login');//(If not redirect to login page)
		}else{//(If is logged in load the information for the user dashboard!)
		//(load model)
      // //load model
        $this->load->model('admin/Files_model');

		// get data
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->Files_model->display_files();//call the records model
	$this->load->view('admin/files/files',$result);//display result in the stats file
	
        }	
    }
//***************************************************//
// Load the file upload page, header and footer!     //
//***************************************************//
public function upload(){
		// //load model
        $this->load->model('admin/Files_model');
		// get data
		//$data['content'] = $this->Main_model->getAboutusData();
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->view('admin/files/file_upload');
		}
	public function admin_files($offset = 0){
//***************************************************//
// Check if the user is logged in to the application!//
//***************************************************//		
		if($this->session->login != 'true'){//(Is the user logged in?)
			redirect('login');//(If not redirect to login page)
		}else{//(If is logged in load the information for the user dashboard!)
		//(load model)
      // //load model
        $this->load->model('admin/Files_model');

		// get data
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->Files_model->display_files();//call the records model
        $this->load->view('admin/dashboard/script_js');
        $this->load->view('admin/common/header_view');
	$this->load->view('admin/files/files',$result);//display result in the stats file
	   $this->load->view('admin/common/footer_view');
        }	
    }
}
?>