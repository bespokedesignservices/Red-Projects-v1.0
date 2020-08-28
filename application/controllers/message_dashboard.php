<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class message_dashboard extends CI_Controller {
	public function __construct(){
        parent::__construct();    
        $this->load->model('messages/dashboard_model');    
    }
    
    function index()
	{
        $data['count_inbox'] = $this->dashboard_model->count_inbox();
        $data['count_sent'] = $this->dashboard_model->count_sent();
        $dashboard = $this->dashboard_model;      
		$this->load->view('include/template',$data);
        
	}
    function barGraph(){
        $count = $this->dashboard_model->count_messages();
        $data = array(
                array(
                    'section'=>'Inbox',
                    'messages' => $count['inbox']
                    ),
                array(
                    'section'=>'Sent Items',
                    'messages' => $count['sent']
                    )
            );
        echo json_encode($data);
    }
   
    
    function lineGraph(){
        $data = array();
        for($i=0; $i <= 15; $i++){             
            $date = date ( 'Y-m-d', strtotime ( "-$i day" ) );
            $count = $this->dashboard_model->count_inserted($date);
            $data[] = array(
                    'period' => $date,
                    'inbox' => $count['inbox'],
                    'sent' => $count['sent']
                );
        }
         echo json_encode($data); 
    }
    
}
