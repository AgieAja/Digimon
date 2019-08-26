<?php

class m_approve extends CI_Model
{
    protected $_table = "request_approves";
    public $request_approve_id;
    public $request_header_id;
    public $approve_date;
    public $approve_by;
    public $approve_status;


    public function join_table(){

        $query = $this->db->query("SELECT rh.*,c.name,u.user_name,ra.approve_status
                FROM request_headers as rh
                LEFT JOIN customers as c
                ON rh.customer_code = c.customer_code
                LEFT JOIN users as u
                ON u.id = rh.created_by
                LEFT JOIN request_approves as ra
                ON rh.request_header_id = ra.request_header_id
            ");
        return  $query->result();
    }

    public function saveApprove()
    {
    	$this->db->select_max('request_header_id');
        $this->db->where('request_no', $this->input->post('request_no'));
        $ress_header_id = $this->db->get('request_headers')->row();

    	$this->request_header_id = $ress_header_id->request_header_id;
    	$this->approve_by = $this->session->userdata('id');
    	$this->approve_status = 1;

    	$this->db->insert($this->_table, $this);

    }

}
