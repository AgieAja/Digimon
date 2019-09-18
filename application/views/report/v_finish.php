<!DOCTYPE html>
<html>
<head>
	<title>Laporan <?= $tgl_1  ?> s/d <?= $tgl_2 ?></title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		img{
			margin-top: 40px;
			float: left;
			width: 100;
			height: 70;
		}
		.header,h1{
			margin-left: 5%;
		}
		h3{
			margin-left: 30%;
		}
		h5{
			margin-left: 30%;
		}
		thead{
			font-size: 12px;
			background: #ffeaa7;
		}
		tbody,td{
			font-size: 11px;
			margin-left: 5px;
		}
	</style>
</head>
<body>
	<img src="assets/images/ss.jpg">
	<div class="header">
		<h1>PT. Selamat Sempurna Tbk</h1>
		<h3>Report Data OF Finish Request</h3>
		<h5>Data : <?= date('d F Y',strtotime($tgl_1)) ?> - <?= date('d F Y',strtotime($tgl_2)) ?></h5>
	</div>
	<p></p>
	<table border="1" cellspacing="0">
		<thead>
			<tr>
	            <th>Request No</th>
	            <th>Request Date</th>
	            <th>Customer Name</th>
	            <th>Customer Info No</th>
	            <th>Sakura No Reference</th>
	            <th>Brand</th>
	            <th>MAnufacture</th>
	            <th>Warehouse</th>
	            <th>Filter Master Movex</th>
	            <th>Filter Master SAP</th>
	            <th>Finish Request</th>
	        </tr>
		</thead>
		<tbody>
			<?php foreach ($finish as $row) { ?>
            <tr>
                <td><?= $row->request_no; ?></td>
                <td><?= date('d-M-Y',strtotime($row->request_date)); ?></td>
                <td><?= $row->name; ?></td>
                <td><?= $row->customer_info_no; ?></td>
                <td><?= $row->sakura_ref_no; ?></td>
                <td><?= $row->brand_code; ?></td>
                <td><?= $row->manufacture_code; ?></td>
                <td><?= $row->warehouse_code; ?></td>
                <td><?= $row->movex_filter_master; ?></td>
                <td><?= $row->sap_filter_master; ?></td>
                <td><?= date('d-M-Y',strtotime($row->r_created_at)) ?></td>
            <?php } ?>
		</tbody>
	</table>
	<p style="margin-top: 20px;"></p>
	<p>Print By</p>
    <p style="margin-top: 30px">&nbsp;</p>
    <p style="font-size: 13px;"><u><strong><?=  $this->session->userdata('name'); ?></strong></u></p>
    <p style="font-size: 13px;">
        <?php if ($this->session->userdata('access_level') ==1){
            echo "Admin Sales";
        }elseif ($this->session->userdata('access_level') ==2){
            echo "Sales";
        }elseif ($this->session->userdata('access_level') ==3){
            echo "Head Sales";
        }elseif ($this->session->userdata('access_level') ==4){
            echo "Enginnering Drawing";
        }elseif ($this->session->userdata('access_level') ==5){
            echo "Enginnering Packaging";
        }elseif ($this->session->userdata('access_level') ==6){
            echo "Enginnering BOM";
        }elseif ($this->session->userdata('access_level') ==7){
            echo "Enginnering Head";
        }elseif ($this->session->userdata('access_level') ==8){
            echo "Sistem Admin";
        } ?>    
    </p>
</body>
</html>