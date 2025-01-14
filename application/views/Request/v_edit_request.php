<form action="<?= base_url() ?>Request/update" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-heading mt-3 mx-auto"><b> Request Header</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2"><label>Request No :</label></div>
                        <div class="col-lg-2">
                            <input type="hidden" name="request_header_id" readonly class="form-control" value="<?= $res->request_header_id  ?>">

                            <input type="text" readonly class="form-control" value="<?= $res->request_no  ?>">
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2"><label>Request Date :</label></div>
                        <div class="col-lg-2"><input type="text" readonly class="form-control" value="<?= date('d-M-Y',strtotime($res->request_date))  ?>"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-2"><Label>Customer :</Label></div>
                        <div class="col-lg-4">
                            <Select class="form-control" name="customer_code">
                                <option value="<?= $res->customer_code ?>"><?= $res->customer_code ?></option>
                                <?php foreach ($listCustomer as $row): ?>
                                    <?php if ($row->customer_code <> $res->customer_code): ?>
                                        <option value="<?= $row->customer_code ?>"><?= $row->customer_code ?> - <?= $row->name ?></option>
                                    <?php endif ?>
                                
                                <?php endforeach ?>

                            </Select></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2"><label>Po No Customer</label></div>
                        <div class="col-lg-2"><input class="form-control" type="text" name="customer_po_no" value="<?= $res->po_number_customer ?>" autocomplete="off" placeholder="Enter PO No..." ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-heading mt-3 mx-auto"><b>Detail Items</b></div>
                <div class="card-body">
                    <table class="table table-bordered table-bordered">
                        <thead>
                            <tr>
                                <th>Customer No Info</th>
                                <th>Sakura No Ref</th>
                                <th>Manufacture</th>
                                <th>Warehouse</th>
                                <th>Brand</th>
                                <th>Order Qty</th>
                                <th>Image Ref</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tambahform">
                        <?php foreach ($listRequesDetail as $row) { ?>
                            <tr id="item">
                                <td>
                                    <input name="request_detail_id[]" class="form-control" type="hidden" value="<?= $row->request_detail_id ?>">
                                    <input name="customer_no_info[]" class="form-control" type="text" value="<?= $row->customer_info_no ?>">
                                </td>
                                <td><input name="sakura_no_ref[]" class="form-control" type="text" value="<?= $row->sakura_ref_no ?>"></td>
                                <td>
                                    <select class="form-control" name="manufacture[]">
                                        <option value="<?= $row->manufacture_code ?>"><?= $row->manufacture_code ?></option>
                                        <?php foreach ($listManufacture as $item) { ?>
                                            <?php if ($item->manufacture_code <> $row->manufacture_code) { ?>
                                               <option value="<?= $item->manufacture_code ?>"><?= $item->manufacture_code ?></option>
                                        <?php }
                                         } ?>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="warehouse[]">
                                        <option value="<?= $row->warehouse_code ?>"><?= $row->warehouse_code ?></option>
                                        <?php foreach ($listWarehouse as $item) { ?>
                                            <?php if ($item->warehouse_code <> $row->warehouse_code) { ?>
                                               <option value="<?= $item->warehouse_code ?>"><?= $item->warehouse_code ?></option>
                                        <?php }
                                         } ?>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="brand[]">
                                         <option value="<?= $row->brand_code ?>"><?= $row->brand_code ?></option>
                                        <?php foreach ($listBrand as $item) { ?>
                                            <?php if ($item->brand_code <> $row->brand_code) { ?>
                                               <option value="<?= $item->brand_code ?>"><?= $item->brand_code ?></option>
                                        <?php }
                                         } ?>
                                    </select>
                                </td>
                                <td><input class="form-control" type="number" name="order_qty[]" value="<?= $row->order_qty ?>"></td>
                                <td><input class="form-control" type="file" name="image_ref[]">
                                    <input type="hidden" class="form-control" name="image_ref[]" value="<?= $row->item_images ?>">
                                    <?php $strImg = str_replace(".", "", $row->item_images) ?>
                                    <a href="#" data-toggle="modal" data-target="#itemImages<?= $strImg ?>"><?= $row->item_images ?></a>
                                </td>
                                <td><a href="<?php echo base_url().'request/deleterow/'.$row->request_detail_id ?>" class="btn btn-danger">-</a></td>
                            </tr>

                            <div id="itemImages<?= $strImg ?>" class="modal fade " role="dialog">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header modal-primary">
                                    <h3 class="modal-title">Image
                                    </h3>
                                    <button class="close" data-dismiss="modal" type="close">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <h5><img src="<?= base_url(); ?>uploads/<?= $row->item_images ?>" class="img img-responsive img-thumbnail"></h5>
                                  </div>
                                  <div class="modal-footer">
                                    <!-- <a href="<?php echo base_url();?>auth/logout" class="btn btn-success">Logout</a> -->
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php } ?>
                            
                        </tbody>
                    </table>
                    <br/>
                    <label>Note</label>
                    <input type="text" class="form-control" name="note" value="<?= $note->approve_note ?>" placeholder="" readonly>
                    <br>
                    <br>
                    <!-- <button type="button" class="btn btn-success" id="tambahdata">Add</button> -->
                    <br>
                    <br>
                    <a href="<?= base_url(); ?>request" class="btn btn-danger ml-1" style="float:right;">Cancel</a>
                    <button type="submit" class="btn btn-info ml-1" style="float:right;" type="submit">Submit</button>
                    <a href="<?= base_url() ?>request/printRequest/<?= $res->request_header_id  ?>" class="btn btn-warning" style="float:right;" type="reset">Print</a>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
$(document).ready(function(){  
  var i=1;  
  $('#tambahdata').click(function(){  
       i++;  
       $('#tambahform').append('<tr id="row'+i+'">'
        +'<td><input name="customer_no_info[]" class="form-control name_list" type="text" value=""></td>'
        +'<td><input name="sakura_no_ref[]" class="form-control name_list" type="text" value=""></td>'
        +'<td>'
            +'<select class="form-control name_list" name="manufacture[]">'
                +'<option value="" selected disabled>Choose</option>'
                +'<?php foreach ($listManufacture as $row) { ?>'
                   +'<option value="<?= $row->manufacture_code ?>"><?= $row->manufacture_code ?></option>'
                +'<?php } ?>'
            +'</select>'
        +'</td>'
        +' <td>'
            +'<select class="form-control name_list" name="warehouse[]">'
                +'<option value="" selected disabled>Choose</option>'
                +'<?php foreach ($listWarehouse as $row) { ?>'
                   +'<option value="<?= $row->warehouse_code ?>"><?= $row->warehouse_code ?></option>'
                +'<?php } ?>'
            +'</select>'
        +'</td>'
        +'<td>'
            +'<select class="form-control name_list" name="brand[]">'
                +'<option value="" selected disabled>Choose</option>'
                +'<?php foreach ($listBrand as $row) { ?>'
                   +'<option value="<?= $row->brand_code ?>"><?= $row->brand_code ?></option>'
                +'<?php } ?>'
            +'</select>'
        +'</td>'
        +'<td><input class="form-control name_list" type="number" name="order_qty[]" value=""></td>'
        +'<td><input class="form-control name_list" type="file" name="image_ref[]"></td>'
        +'<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  
  });  
  $(document).on('click', '.btn_remove', function(){  
       var button_id = $(this).attr("id");   
       $('#row'+button_id+'').remove();  
  });
});  
</script>