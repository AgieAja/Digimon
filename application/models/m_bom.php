<?php

class m_bom extends CI_Model
{
    protected $table = "bil_of_materials";
    public $bom_id;
    public $packaging_id;
    public $movex_filter_master;
    public $sap_filter_master;
    public $status;
    public $remark;
    public $created_at;
    public $updated_at;
    public $deleted_at;
    public $created_by;
    public $updated_by;
    public $deleted_by;

    public function bom_join(){
        
    }
}


?>