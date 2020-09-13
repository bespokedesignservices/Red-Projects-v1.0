<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ImageUploadController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
    }

    public function index() {
        $this->load->view('files/file_upload');
    }

    public function store() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|txt|docx';
        //$config['max_size'] = 2000;
        //$config['max_width'] = 1500;
        //$config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('files/file_upload', $error);
        } else {
            //$upload = array('image_metadata' => $this->upload->data());
 $success = array('success' => $this->upload->display_errors());
            $this->load->view('files/file_upload', $success);
     
        $this->load->library('email');

$this->email->from('admin@bepsokedesignservices.com', 'ADMIN');
$this->email->to('admin@bepsokedesignservices.com');
//$this->email->cc('another@another-example.com');
//$this->email->bcc('them@their-example.com');

$this->email->subject('Message from RED Projects, A user has uploaded a file to the server');
$this->email->message('A user has uploaded a file to the project server that requires reviewing. Regards Admin');

$this->email->send();
        }
    }

}