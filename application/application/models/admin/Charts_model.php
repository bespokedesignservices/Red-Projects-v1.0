
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//This is the project model
class Charts_model extends CI_Model {

function Completed_projects()
	{
$query =  $this->db->query("SELECT COUNT(project_id) as count,MONTHNAME(expected_completion) as month_name FROM projects WHERE YEAR(expected_completion) = '" . date('Y') . "'
      GROUP BY YEAR(expected_completion),MONTH(expected_completion)"); 
 
    

	}
function Invoice_count()
	{
$query =  $this->db->query("SELECT COUNT(inv_id) as count,MONTHNAME(inv_date) as month_name FROM invoices WHERE YEAR(inv_date) = '" . date('Y') . "'
      GROUP BY YEAR(inv_date),MONTH(inv_date)"); 
 


    
  
}
function Client_count()
	{
     $query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(created_at) as month_name FROM users WHERE YEAR(created_at) = '" . date('Y') . "'
      GROUP BY YEAR(created_at),MONTH(created_at)"); 
 
 

}
//End of file!
}//keep this here it escapes the code correctly!
?>