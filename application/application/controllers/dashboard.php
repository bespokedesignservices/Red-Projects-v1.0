<?php
class Dashboard extends CI_Controller{
/***************************************************//
// Load the dashboard header, stats and footer!      //
//***************************************************//
public function dashboard(){
// //load model
	
		// //load model
        $this->load->model('Index_model');

		// get data
		// load base_url
		$this->load->helper('url');

	$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->Project_model->display_projects();//call the records model
	$this->load->view('projects/projects',$result);//display result in the stats file
	
	}
}
?>