<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard_model extends CI_Model {

function display_messages()
	{

$id = $this->session->userdata('session_id');
$this->db->select("*");
	$query = $this->db->get('messages',' where message_id = $id');
// get theresult row
	return $query->result();

	}
public function CountRowBugs()
	{

{
$id = $this->session->userdata('session_id');
  $this->db->select("COUNT(bugs) as count", " where id_proj = $id");
  $this->db->from('projects');
  $this->db->where(array('bugs !=' => ''));//Count bugs!
  $query = $this->db->get();
  if ($query->num_rows() > 0 )
  {
    $row = $query->row();
 return $row->count;
  }
  return 0;
}
}
public function CountRowFixed()
	{

{
$id = $this->session->userdata('session_id');
  $this->db->select("COUNT(fixed) as count", "where id_proj = $id");
  $this->db->from('projects');
  $this->db->where(array('fixed !=' => '' ));//Count if is fixed !
  $query = $this->db->get();
  if ($query->num_rows() > 0 )
  {
    $row = $query->row();
 return $row->count;
  }
  return 0;
}
}
public function CountRowNotFixed()
	{

{
$id = $this->session->userdata('session_id');
  $this->db->select("COUNT(fixed) as count","where id = $id");
  $this->db->from('projects');
  $this->db->where(array('fixed !=' => 1));//Count if not fixed!
  $query = $this->db->get();
  if ($query->num_rows() > 0 )
  {
    $row = $query->row();
 return $row->count;
  }
  return 0;
}
}
}

?>