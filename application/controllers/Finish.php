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

    public function cetak()
    {
        $data['finish'] = $this->M_finish->report();
        $data['tgl_1'] = $this->input->post('tgl_1');
        $data['tgl_2'] = $this->input->post('tgl_2');

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_finish.pdf";

        $this->pdf->load_view('report/v_finish', $data);
    }
}

?>