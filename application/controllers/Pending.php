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

        $this->load->view('v_home',$data);
    }

    public function cetak()
    {
        $data['pending'] = $this->M_pending->report();
        $data['tgl_1'] = $this->input->post('tgl_1');
        $data['tgl_2'] = $this->input->post('tgl_2');

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_pending.pdf";

        $this->pdf->load_view('report/v_pending', $data);

        // $this->load->view('report/v_pending',$data);
    }

    

}

?>
