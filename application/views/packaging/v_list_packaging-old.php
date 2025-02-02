<?php

?>
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Packaging</h3></div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Request No</th>
                                    <th>Customer Name</th>
                                    <th>Customer PO No</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Sales</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listRequest as $row) { ?>
                                <tr>
                                    <td><?= $row->request_no  ?></td>
                                    <td><?= $row->name  ?></td>
                                    <td><?= $row->po_number_customer  ?></td>
                                    <td><?= $row->user_name  ?></td>
                                    <td><?= date('d-M-Y',strtotime($row->created_at))?></td>
                                    <td><?= $row->sales  ?>
                                        <td>
                                        <a href="<?php echo base_url();?>Packaging/detail/<?= $row->request_header_id ?>">Detail</a>
                                    </td>
                                    </td>

                                </tr>
                                <?php } ?>
                                <!-- <tr>
                                    <td>RQM000001</td>
                                    <td>Allied (M) Filtration Solution Nc</td>
                                    <td>PO no: A-20190823-125</td>
                                    <td>Nurahman_1</td>
                                    <td>25-Aug-2019</td>
                                    <td>Lavinia_j</td>
                                    <td>
                                        <a href="<?php echo base_url();?>index.php/Packaging/detail">Detail</a>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
