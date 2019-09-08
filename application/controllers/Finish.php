<?php

class finish extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_finish');
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
        $data['body'] = "report/v_list_finish";

        $data['finish'] = $this->M_finish->join_table();

        $this->load->view('v_home',$data);
    }
}

?>