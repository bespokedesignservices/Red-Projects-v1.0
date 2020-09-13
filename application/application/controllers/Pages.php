


<?php
class Admin_projects extends CI_Controller{
public function __construct(){
        parent::__construct(); 
 $this->load->model('admin/Project_model','projects');
$this->load->model('admin/Dashboard_model');
$this->load->model('admin/Files_model');
$this->load->model('admin/Index_model');
$this->load->model('admin/Billing_model','billing');
 $this->load->helper('url', 'form');
}
	public function index($offset = 0){

		//***************************************************//
// Load the about us page, header and footer!        //
//***************************************************//

		// //load model
        $this->load->model('Index_model');
		// get data
		$data['content'] = $this->Index_model->getAboutusData();
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->view('admin/common/header_view');
		$this->load->view('admin/about/aboutus_view',$data);
   		$this->load->view('admin/common/footer_view');
    }
public function aboutus($offset = 0){
//***************************************************//
// Load the billing  page, header and footer!        //
//***************************************************//
			//***************************************************//
// Load the about us page, header and footer!        //
//***************************************************//

		// //load model
        $this->load->model('Index_model');
		// get data
		$data['content'] = $this->Index_model->getAboutusData();
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->view('admin/common/header_view');
		$this->load->view('admin/about/aboutus_view',$data);
   		$this->load->view('admin/common/footer_view');
		}
	
        }	

    
?>