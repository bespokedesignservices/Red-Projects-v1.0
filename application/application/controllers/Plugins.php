<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plugins extends CI_Controller {

    private $_plugins;

    public function __construct()
    {
        parent::__construct();
        $this->config->load('plugins');
        $this->load->model('Plugins_model');
        $this->load->library('session');
        $this->load->database();//Load the database
      
        
    }

    public function index()
    {
		$this->load->helper('url');
		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
        $data['plugins'] = $this->Plugins_model->get_plugins();
        $this->load->view('admin/plugins/plugin_list', $data);
    }
    public function view_plugins()
    {
        // load base_url
		$this->load->helper('url');
		// load view
		$this->load->library('session');
		//Fetch data
$this->load->database();//Load the database
        $data['plugins'] = $this->Plugins_model->get_plugins();
        $this->load->view('admin/plugins/plugin_list', $data);
    }
    public function config()
    {
        $data = array();

        if( ! $plugin = $this->input->get('plugin'))
        {
            redirect('/');
        }
        elseif( ! isset($this->_plugins[$plugin]))
        {
            die("Unknown plugin {$plugin}");
        }
        elseif($this->_plugins[$plugin]->status != 1)
        {
            die("The plugin {$plugin} isn't enabled");
        }
        else
        {
            $data['plugin'] = $plugin;

            // Just some random stuff to send to the data, not needed unless the plugin
            // controller requires it
            $plugin_data = array('some' => 'data');

            if( ! $data['plugin_content'] = $this->plugins_lib->view_controller($plugin, $plugin_data))
            {
                die('No controller for this plugin');
            }
        }
        $this->load->helper('url');
		// load view
		$this->load->library('session');
		//Fetch data
        $this->load->database();//Load the database
        $data['plugin_content'] = $this->Plugins_model->get_plugin();
        $this->load->view('admin/common/header_view');
        $this->load->view('admin/plugins/plugin_settings', $data);
        $this->load->view('admin/common/footer_view');
    }

}
