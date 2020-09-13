<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class files_model extends CI_Model {
function display_files()
	{
$id = $this->session->userdata('session_id');
	$query = $this->db->get("uploads", " where id = $id");
// get theresult row
	return $query->result();

	}
//***************************************************//
// Load the about us page, header and footer!        //
//***************************************************//
public function aboutus(){
		// //load model
        $this->load->model('Index_model');
		// get data
		//$data['content'] = $this->Main_model->getAboutusData();
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->view('files/file_upload');
		}
//***************************************************//
// load uploads page, header and footer!        //
//***************************************************//
public function file_upload(){
		// //load model
        $this->load->model('Files_model');
		// load base_url
		$this->load->helper('url');
		// load view
		$this->load->view('files/file_upload');
	}
}
?>