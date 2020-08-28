<?php
class UserDashboard extends CI_Controller{
public function __construct(){
        parent::__construct(); 
 $this->load->model('Project_model');
$this->load->model('Dashboard_model');
$this->load->model('Files_model');
$this->load->model('Index_model');
$this->load->model('Dashboard_model');
$this->load->model('Billing_model');
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
		$this->load->view('dashboard/dashboard',$result);//display result in the dashboard file, this renders the data to be shown on correct page!
	
		}
		
	}




//***************************************************//
// Load the files page, header and footer!           //
//***************************************************//
	public function files(){
		// //load model
        $this->load->model('Files_model');

		// get data
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->Files_model->display_files();//call the records model
	$this->load->view('files/files',$result);//display result in the stats file
	
	}

//***************************************************//
// Load the billing  page, header and footer!        //
//***************************************************//
public function billing(){
		// //load model
        $this->load->model('Billing_model');

		// get data
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->Billing_model->display_billing();//call the records model
	$this->load->view('billing/billing',$result);//display result in the stats file
	
	}
//***************************************************//
// Load the profile  page, header and footer!        //
//***************************************************//
public function profile(){
// //load model
        $this->load->model('Index_model');
// load base_url
		$this->load->helper('url');
//Fetch data
$this->load->database();
	$result['data']=$this->Index_model->display_records();
	$this->load->view('profile/profile',$result);
// load view
		//$this->load->view('profile');

	}
//***************************************************//
// Load the variables for the profiles               //
//***************************************************//
	public function userdata(){

//set variables
     $username = $this->session->userdata('username');
       $email = $this->session->userdata('email');
   $balance = $this->session->userdata('client_balance');
 $about = $this->session->userdata('about_me');
 $job = $this->session->userdata('job_title');
 $address = $this->session->userdata('address');
 $city = $this->session->userdata('city');
 $postalcode = $this->session->userdata('postal_code');
 $mobile = $this->session->userdata('mobile');
 $firstname = $this->session->userdata('firstname');
 $lastname = $this->session->userdata('lastname');
    }
//***************************************************//
// Load the projects page, header and footer!        //
//***************************************************//
function projects(){
			// load base_url
		$this->load->helper('url');

	$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
	$result['data']=$this->Project_model->display_projects();//call the records model
	$this->load->view('projects/projects',$result);//display result in the stats file
	
    
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
public function inbox(){
		// //load model
        $this->load->model('message_model');
		// get data
		//$data['content'] = $this->Main_model->getAboutusData();
		// load base_url
		$this->load->helper('url');

		// load view
		$this->load->view('messages/inbox');
		}
}
 //***************************************************//
// end of code do not delete the class ending below! //
//***************************************************//
?>