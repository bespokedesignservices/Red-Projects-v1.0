<?php
/**
* 
*/
class User_model extends CI_Model
{
	public function insert_profile($email, $firstname, $lastname, $address, $city, $postal_code, $mobile, $job_title, $about_me, $password){
		$query = $this->db->query("INSERT INTO users (email, firstname, lastname, address, city, postal_code, mobile, job_title, about_me, password) VALUES ('$email', '$firstname', '$lastname', '$address','$city','$postal_code','$mobile','$job_title','$about_me', md5('$password'))");
	}
	public function insert_user($name, $email, $password){
		$query = $this->db->query("INSERT INTO users (username, email, password) VALUES ('$name', '$email', md5('$password'))");
	}

	public function login_user($username, $password){
		$query =$this->db->query("SELECT * FROM users WHERE username='$username' AND password=md5('$password')");
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function get_user_info($username){
		$query =$this->db->query("SELECT * FROM users WHERE username='$username'");
     
		if($query->num_rows() == 1){
			$userinfo = $query->result_array();
			return $userinfo;
		}
    }
public function list_all(){
      $query = $this->db->get("users");
$id = $this->session->userdata('session_id');
$this->db->where('id', " where id != $id");
// get theresult row
	return $query->result();
}
		
}
?>