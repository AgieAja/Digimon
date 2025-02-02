<?php 
echo $this->session->flashdata("msg");
?>
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Request</h3></div>
                    <div class="panel-body">
                        <a href="<?php echo base_url();?>Request/add" class="btn btn-info">
							Create
                        </a>
                        <br/><br/>
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Request No</th>
                                    <th>Customer Name</th>
                                    <th>Customer PO No</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listRequest as $row) { 
                                    if (empty($row->deleted_by)) { ?>
                                        
                                    <tr>
                                        <td><?= $row->request_no ?></td>
                                        <td><?= $row->name ?></td>
                                        <td><?= $row->po_number_customer ?></td>
                                        <td><?= $row->user_name ?></td>
                                        <td><?= date('d F Y',strtotime($row->created_at)) ?></td>
                                        <td>
                                        <?php if ($row->approve_status ==0) { 
                                            echo "Reject";
                                        }else if($row->approve_status ==1){
                                            echo "Waiting";
                                        }else if( $row->approve_status ==2){
                                            echo "Revision";
                                        }else if($row->approve_status==3){
                                            echo "Approve";
                                        } ?>
                                        
                                        </td>
                                        <td>
                                        <?php if ($row->approve_status ==1) { ?>
                                            <a href="<?php echo base_url();?>Request/edit/<?= $row->request_header_id ?>">Edit</a> 
                                            <!-- <a href="<?php echo base_url();?>Request/delete/<?= $row->request_header_id ?>">Delete</a> -->
                                        <?php }elseif($row->approve_status ==2){ ?>
                                            <a href="<?php echo base_url();?>Request/edit/<?= $row->request_header_id ?>">Edit</a>
                                            <!-- <a href="<?php echo base_url();?>Request/delete/<?= $row->request_header_id ?>">Delete</a> -->
                                        <?php }elseif($row->approve_status ==0){ ?>
                                            <a href="<?php echo base_url();?>Request/delete/<?= $row->request_header_id ?>">Delete</a>
                                        <?php } ?>   
                                        </td>
                                    </tr>
                                <?php } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css">
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $("#datatable").DataTable();
    });
</script>
