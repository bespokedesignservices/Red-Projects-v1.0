<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class billing_model extends CI_Model {
function display_billing()
	{
$id = $this->session->userdata('session_id');
	$query = $this->db->get("invoices", " where id = $id");

// get theresult row
	return $query->result();

	}
}
?>