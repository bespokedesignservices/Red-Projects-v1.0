<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_model extends CI_Model {
//Set the functions for the pages!
function getAboutusData(){
        return "About us content";
    }
function getFile_upload(){
        return "Uploads";
    }
function display_records()
	{
	$id = $this->session->userdata('session_id');
       $query = $this->db->get("users", " where id = $id");

  
    // get theresult row
	return $query->result();
 

   	}//End of file!

}//keep this here it escapes the code correctly!