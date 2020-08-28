<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//This is the project model
class Project_model extends CI_Model {

function display_projects()
	{
$id = $this->session->userdata('id');
       $query = $this->db->get("projects");
$this->db->where("id_proj = $id");
// get theresult row
	return $query->result();
	}
//End of file!

}//keep this here it escapes the code correctly!
?>