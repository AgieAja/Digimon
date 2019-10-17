<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Pending</h3>
                        <div class="text-center">
                            <form action="<?= base_url() ?>Pending/cetak" method="POST">
                                <input type="date" name="tgl_1" required>
                                <input type="date" name="tgl_2" required>
                                <button type="submit" class="btn btn-success">Cetak</button>
                                <a href="" class="btn btn-info">Refresh</a>
                            </form>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sales Name</th>
                                    <th>Request No</th>
                                    <th>Request Date</th>
                                    <th>Customer Name</th>
                                    <th>Customer Info No</th>
                                    <th>Sakura No Reference</th>
                                    <th>Brand</th>
                                    <th>MAnufacture</th>
                                    <th>Warehouse</th>
                                    <th>Pending</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pending as $row) { ?>
                                <tr>
                                    <td><?= $row->sales_name; ?></td>
                                    <td><?= $row->request_no; ?></td>
                                    <td><?= date('d-M-Y',strtotime($row->request_date)); ?></td>
                                    <td><?= $row->customer_name; ?></td>
                                    <td><?= $row->customer_info_no; ?></td>
                                    <td><?= $row->sakura_ref_no; ?></td>
                                    <td><?= $row->brand_code; ?></td>
                                    <td><?= $row->manufacture_code; ?></td>
                                    <td><?= $row->warehouse_code; ?></td>
                                    <td><?= $row->pending ?></td>
                                    <td><?= $row->remark ?></td>
                                </tr>
                                <?php } ?>
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
