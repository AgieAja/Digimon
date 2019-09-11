<?php

class M_pending extends CI_Model
{
	private $_table = "receive";

	public function join_table(){

		// return $query = $this->db->query("SELECT rd.*,rh.request_no,rh.request_date,c.name,ds.sakura_version_no,
		// 		rd.status as rd_status,ds.status as ds_status,p.status as p_status,b.status as b_status
		// 		FROM request_details as rd
		// 		LEFT JOIN request_headers as rh ON rd.request_header_id=rh.request_header_id
		// 		LEFT JOIN customers as c ON rh.customer_code=c.customer_code
		// 		LEFT JOIN drawing_specs as ds ON rd.request_detail_id=ds.request_detail_id
		// 		LEFT JOIN packagings as p ON ds.drawing_spec_id=p.drawing_spec_id
		// 		LEFT JOIN bill_of_materials as b ON p.packaging_id=b.packaging_id
		// 		WHERE rd.status IS Null OR ds.status IS Null OR p.status IS Null OR b.status IS Null 
		// 	")->result();

		  $query = "SELECT rh.request_no, rh.request_date,ds.sakura_version_no, rd.brand_code,rd.warehouse_code, rd.manufacture_code, rd.customer_info_no , c.name AS customer_name, u.name AS created_by,us.name AS approve_by
        ,CASE WHEN ra.approve_status IS NULL AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Request-New'
        WHEN ra.approve_status = 0 AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Request-Reject'
        WHEN ra.approve_status = 3 AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Request-Approved'
        WHEN ra.approve_status = 2 AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Request-Revisi'
				WHEN ra.approve_status = 3 AND rd.status = 1 AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Drawing-Pending'
        WHEN ra.approve_status = 3 AND rd.status = 2 AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Drawing-OK'
        WHEN ra.approve_status = 3 AND ds.status = 1 AND p.status IS NULL AND b.status IS NULL THEN 'Packaging-Pending'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status IS NULL AND b.status IS NULL THEN 'Packaging-OK'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 1 AND b.status IS NULL THEN 'BOM-Pending'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 2 AND b.status IS NULL THEN 'BOM-OK'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 2 AND b.status = 1 THEN 'BOM-Pending'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 2 AND b.status = 2 THEN 'BOM-OK' ELSE 'Undefined' END 'pending'
        ,CASE WHEN ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN ra.approve_note
        WHEN ra.approve_status = 3 AND ds.status IS NOT NULL AND p.status IS NULL AND b.status IS NULL THEN ds.remark
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status IS NOT NULL AND b.status IS NULL THEN p.remark
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 2 AND b.status IS NOT NULL THEN b.remark ELSE 'Undefined' END 'remark'
        FROM request_details AS rd
        INNER JOIN request_headers AS rh ON rh.request_header_id = rd.request_header_id
        LEFT JOIN request_approves AS ra ON ra.request_header_id = rh.request_header_id
        LEFT JOIN drawing_specs AS ds ON ds.request_detail_id = rd.request_detail_id
        LEFT JOIN packagings AS p ON p.drawing_spec_id = ds.drawing_spec_id
        LEFT JOIN bill_of_materials AS b ON b.packaging_id = p.packaging_id
        LEFT JOIN receives AS r ON r.bom_id = b.bom_id
        LEFT JOIN customers AS c ON c.customer_code = rh.customer_code
        LEFT JOIN users AS u ON u.id = rh.created_by
        LEFT JOIN users as us ON us.id = ra.approve_by
        WHERE rh.deleted_at IS NULL AND (r.status IS NULL OR r.status = 1) ORDER BY rh.request_header_id DESC
        ";

        return $this->db->query($query)->result();

	}

  public function report(){

    $post = $this->input->post();

    $query = "SELECT rh.request_no, rh.request_date,ds.sakura_version_no, rd.brand_code,rd.warehouse_code, rd.manufacture_code, rd.customer_info_no , c.name AS customer_name, u.name AS created_by,us.name AS approve_by
        ,CASE WHEN ra.approve_status IS NULL AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Request-New'
        WHEN ra.approve_status = 0 AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Request-Reject'
        WHEN ra.approve_status = 3 AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Request-Approved'
        WHEN ra.approve_status = 2 AND ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN 'Request-Revisi'
        WHEN ra.approve_status = 3 AND ds.status = 1 AND p.status IS NULL AND b.status IS NULL THEN 'Drawing-Pending'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status IS NULL AND b.status IS NULL THEN 'Drawing-OK'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 1 AND b.status IS NULL THEN 'Packaging-Pending'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 2 AND b.status IS NULL THEN 'Packaging-OK'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 2 AND b.status = 1 THEN 'BOM-Pending'
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 2 AND b.status = 2 THEN 'BOM-OK' ELSE 'Undefined' END 'pending'
        ,CASE WHEN ds.status IS NULL AND p.status IS NULL AND b.status IS NULL THEN ra.approve_note
        WHEN ra.approve_status = 3 AND ds.status IS NOT NULL AND p.status IS NULL AND b.status IS NULL THEN ds.remark
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status IS NOT NULL AND b.status IS NULL THEN p.remark
        WHEN ra.approve_status = 3 AND ds.status = 2 AND p.status = 2 AND b.status IS NOT NULL THEN b.remark ELSE 'Undefined' END 'remark'
        FROM request_details AS rd
        INNER JOIN request_headers AS rh ON rh.request_header_id = rd.request_header_id
        LEFT JOIN request_approves AS ra ON ra.request_header_id = rh.request_header_id
        LEFT JOIN drawing_specs AS ds ON ds.request_detail_id = rd.request_detail_id
        LEFT JOIN packagings AS p ON p.drawing_spec_id = ds.drawing_spec_id
        LEFT JOIN bill_of_materials AS b ON b.packaging_id = p.packaging_id
        LEFT JOIN receives AS r ON r.bom_id = b.bom_id
        LEFT JOIN customers AS c ON c.customer_code = rh.customer_code
        LEFT JOIN users AS u ON u.id = rh.created_by
        LEFT JOIN users as us ON us.id = ra.approve_by
        WHERE rh.deleted_at IS NULL 
        AND rh.request_date BETWEEN '$post[tgl_1]' AND '$post[tgl_2]'
        ORDER BY rh.request_header_id DESC
        ";

        return $this->db->query($query)->result();

        // $data = $this->db->query($query)->result();
        // var_dump($data);
        // exit();


  }
}
