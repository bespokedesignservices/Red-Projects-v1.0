<?php
class Admin extends CI_Controller{
public function __construct(){
        parent::__construct(); 
 $this->load->model('Project_model');
$this->load->model('Dashboard_model');
$this->load->model('Files_model');
$this->load->model('Index_model');
$this->load->model('Dashboard_model');
$this->load->model('Billing_model');
$this->load->model('Message_dashboard_model');
 $this->load->helper('url', 'form');
$this->load->model('Message_dashboard_model');
}
	public function index($offset = 0){
//***************************************************//
// Check if the user is logged in to the application!//
//***************************************************//		
		if($this->session->login != 'true'){//(Is the user logged in?)
			redirect('login');//(If not redirect to login page)
		}else{//(If is logged in load the information for the user dashboard!)
		//(load model)
        $this->load->model('Index_model');//(Load the main model that controls the pages!)
		// (load base_url)
		$this->load->helper('url');//(Load url Helper)

		$this->load->library('session');//(Load the session)
       
		//(Fetch data)
		$this->load->database();//(Load the database)
//***************************************************//
// Load the specialised data from the database .....!//
//***************************************************//	

		
 		$result['data']=$this->Project_model->display_projects();//Display how many projects
		$result['countFixed'] = $this->Dashboard_model->countRowFixed(); //Display how many fixed issues
		$result['countNotFixed'] = $this->Dashboard_model->countRowNotFixed(); //Display how many issues not fixed
		$result['countBugs'] = $this->Dashboard_model->countRowBugs(); //Count all bugs listed
		$this->load->view('admin/dashboard/dashboard',$result);//display result in the dashboard file, this renders the data to be shown on correct page!
	
		}
		
	}
//***************************************************//
// Load the admin page, header and footer!           //
//***************************************************//
public function admin(){
		if($this->session->login != 'true'){//(Is the user logged in?)
			redirect('login');//(If not redirect to login page)
		}else{//(If is logged in load the information for the user dashboard!)
		//(load model)
        $this->load->model('Index_model');//(Load the main model that controls the pages!)
		// (load base_url)
		$this->load->helper('url');//(Load url Helper)

		$this->load->library('session');//(Load the session)
       
		//(Fetch data)
		$this->load->database();//(Load the database)
//***************************************************//
// Load the specialised data from the database .....!//
//***************************************************//	

		
 		$result['data']=$this->Project_model->display_projects();//Display how many projects
		$result['countFixed'] = $this->Dashboard_model->countRowFixed(); //Display how many fixed issues
		$result['countNotFixed'] = $this->Dashboard_model->countRowNotFixed(); //Display how many issues not fixed
		$result['countBugs'] = $this->Dashboard_model->countRowBugs(); //Count all bugs listed
		$this->load->view('admin/dashboard/dashboard',$result);//display result in the dashboard file, this renders the data to be shown on correct page!
	
		}
		
}




}
 //***************************************************//
// end of code do not delete the class ending below! //
//***************************************************//
?>
