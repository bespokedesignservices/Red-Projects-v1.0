<?php
class Admin extends CI_Controller{
public function __construct(){
        parent::__construct(); 
  $this->load->model('admin/Project_model','projects');
$this->load->model('admin/Dashboard_model','dashboard');
$this->load->model('admin/Files_model','files');
$this->load->model('admin/Index_model');
$this->load->model('admin/Billing_model','billing');
 $this->load->helper('url', 'form');
}
	public function index($offset = 0){
//***************************************************//
// Load the billing  page, header and footer!        //
//***************************************************//
		// //load model
        $this->load->model('admin/Dashboard_model','dashboard');
		// load base_url
		$this->load->helper('url');
		// load view
		$this->load->library('session');
		//Fetch data
	
        }	
 
public function admin($offset = 0){
//***************************************************//
// Check if the user is logged in to the application!//
//***************************************************//		
		if($this->session->id != '1'){//(Is the user logged in as standard user or admin?)
			redirect('login');//(If not redirect to standard login page or if already logged in go to non admin dashboard)
		}else{//(If is logged in load the information for the user dashboard!)
		//(load model)
        $this->load->model('Index_model');//(Load the main model that controls the pages!)
        
        	// //load model
        $this->load->model('Billing_model','billing');
		// (load base_url)
		$this->load->helper('url');//(Load url Helper)

		$this->load->library('session');//(Load the session)
       
		//(Fetch data)
		$this->load->database();//(Load the database)
//***************************************************//
// Load the specialised data from the database .....!//
//***************************************************//	
////***************Show pie chart for clients/users  ********************************************************************//
   $query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(created_at) as month_name FROM users WHERE status = '0' && YEAR(created_at) = '" . date('Y') . "'
      GROUP BY YEAR(created_at),MONTH(created_at)" ); 
 
      $record = $query->result();
      $data = [];
 
      foreach($record as $row) {
            $data['label'][] = $row->month_name;
            $data['data'][] = (int) $row->count;
      }
      $result['chart_data'] = json_encode($data);
////*******************Show bar chart for projects details ************************************************************////   
 $query =  $this->db->query("SELECT COUNT(inv_id) as count,MONTHNAME(inv_date) as month_name FROM invoices WHERE YEAR(inv_date) = '" . date('Y') . "'
      GROUP BY YEAR(inv_date),MONTH(inv_date)"); 
 
      $record = $query->result();
      $data = [];
 
      foreach($record as $row) {
            $data['label2'][] = $row->month_name;
            $data['data2'][] = (int) $row->count;
      }
      $result['chart_data2'] = json_encode($data);
        ////*******************Show bar chart for projects details ************************************************************////   
 $query =  $this->db->query("SELECT COUNT(project_id) as count,MONTHNAME(expected_completion) as month_name FROM projects WHERE YEAR(expected_completion) = '" . date('Y') . "'
      GROUP BY YEAR(expected_completion),MONTH(expected_completion)"); 
 
      $record = $query->result();
      $data = [];
 
      foreach($record as $row) {
            $data['label3'][] = $row->month_name;
            $data['data3'][] = (int) $row->count;
      }
      $result['chart_data3'] = json_encode($data);
        
        //******   Render the data to dashboard! ****************************************************////
      
        $result['invoices']=$this->billing->display_billing();//Display how many projects
        $result['countFixed'] = $this->dashboard->countRowFixed(); //Display how many fixed issues
		$result['countNotFixed'] = $this->dashboard->countRowNotFixed(); //Display how many issues not fixed
		$result['countBugs'] = $this->dashboard->countRowBugs(); //Count all bugs listed
        $this->load->view('admin/common/header_view');
		$this->load->view('admin/dashboard/dashboard',$result);//display result in the dashboard file, this renders the data to be shown on correct page!
		$this->load->view('admin/common/footer_view');
		}
		
	}
 
    }
?>
