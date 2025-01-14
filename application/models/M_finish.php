<?php

class M_finish extends CI_Model
{
	private $_table = "receive";

	public function join_table(){

		return $query = $this->db->query("SELECT rd.*,rh.request_no,rh.request_date,c.name,ds.sakura_version_no,b.movex_filter_master,b.sap_filter_master,r.created_at as r_created_at,rd.sakura_ref_no,us.name as sales_name
				FROM request_details as rd
				LEFT JOIN request_headers as rh ON rd.request_header_id=rh.request_header_id
				LEFT JOIN customers as c ON rh.customer_code=c.customer_code
				LEFT JOIN drawing_specs as ds ON rd.request_detail_id=ds.request_detail_id
				LEFT JOIN packagings as p ON ds.drawing_spec_id=p.drawing_spec_id
				LEFT JOIN bill_of_materials as b ON p.packaging_id=b.packaging_id
				LEFT JOIN receives as r ON b.bom_id=r.bom_id
				LEFT JOIN users as us ON c.zone_code = us.zone_code
				WHERE rd.status=2 AND ds.status=2 AND p.status=2 AND b.status=2 ORDER BY us.zone_code asc
			")->result();
	}
	public function report(){

		$post = $this->input->post();

		return $query = $this->db->query("SELECT rd.*,rh.request_no,rh.request_date,c.name,ds.sakura_version_no,b.movex_filter_master,b.sap_filter_master,b.remark as b_remark,r.created_at as r_created_at,rd.sakura_ref_no,us.name as sales_name
				FROM request_details as rd
				LEFT JOIN request_headers as rh ON rd.request_header_id=rh.request_header_id
				LEFT JOIN customers as c ON rh.customer_code=c.customer_code
				LEFT JOIN drawing_specs as ds ON rd.request_detail_id=ds.request_detail_id
				LEFT JOIN packagings as p ON ds.drawing_spec_id=p.drawing_spec_id
				LEFT JOIN bill_of_materials as b ON p.packaging_id=b.packaging_id
				LEFT JOIN receives as r ON b.bom_id=r.bom_id
				LEFT JOIN users as us ON c.zone_code = us.zone_code
				WHERE rd.status=2 AND ds.status=2 AND p.status=2 AND b.status=2
				AND rh.request_date BETWEEN '$post[tgl_1]' AND '$post[tgl_2]' ORDER BY us.zone_code asc
			")->result();
	}
}