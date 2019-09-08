<?php

class pending extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_pending');
        if($this->session->userdata('status') != 'login'){
                redirect('auth');
        }
    }
    public function index()
    {   
        $data['footer'] = "templates/v_footer";
        $data['header'] = "templates/v_header";
        $data['navbar'] = "templates/v_navbar";
        $data['sidebar'] = "templates/v_sidebar";
        $data['pluginjs'] = "templates/v_pluginjs";
        $data['body'] = "report/v_list_pending";

        $data['pending'] = $this->M_pending->join_table();

        $this->load->view('V_home',$data);
    }

    

}

?>