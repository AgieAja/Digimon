<?php

class Packaging extends CI_Controller
{
    public function __construct(){
        parent::__construct();

        $this->load->model('m_request_header');

        if($this->session->userdata('status') != 'login'){
                redirect('auth');
        }
        
    }

    public function index(){
        $data['header'] = "templates/v_header";
        $data['navbar'] = "templates/v_navbar";
        $data['sidebar'] = "templates/v_sidebar";
        $data['footer'] = "templates/v_footer";
        $data['pluginjs'] = "templates/v_pluginjs";
        $data['body'] = "packaging/v_list_packaging";
        $data['listRequest'] = $this->m_request_header->retrieveRequest();
        
        $this->load->view('v_home', $data);
    }

    public function detail(){
        $data['header'] = "templates/v_header";
        $data['navbar'] = "templates/v_navbar";
        $data['sidebar'] = "templates/v_sidebar";
        $data['footer'] = "templates/v_footer";
        $data['pluginjs'] = "templates/v_pluginjs";
        $data['body'] = "packaging/v_detail_packaging";

        $this->load->view('v_home', $data);
    }
}
