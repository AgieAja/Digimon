<!DOCTYPE html>
<html>
<head>
	<title>Laporan <?= $tgl_1  ?> s/d <?= $tgl_2 ?></title>
	<style type="text/css">
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
		<h3>Report Data OF Pending Request</h3>
		<h5>Data : <?= date('d F Y',strtotime($tgl_1)) ?> - <?= date('d F Y',strtotime($tgl_2)) ?></h5>
	</div>
	<p></p>
	<table border="1" cellspacing="0">
		<thead>
			<tr>
				<th>Request No</th>
				<th>Request Date</th>
				<th>Customer Name</th>
				<th>Customer No Info</th>
				<th>Sakura Version No</th>
				<th>Brand</th>
				<th>Manufacture</th>
				<th>Warehouse</th>
				<th>Pending</th>
				<th>Remarks</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pending as $row) { ?>
				<tr>
	                <td><?= $row->request_no; ?></td>
	                <td><?= date('d/m/Y',strtotime($row->request_date)); ?></td>
	                <td><?= $row->customer_name; ?></td>
	                <td><?= $row->customer_info_no; ?></td>
	                <td><?= $row->sakura_version_no; ?></td>
	                <td><?= $row->brand_code; ?></td>
	                <td><?= $row->manufacture_code; ?></td>
	                <td><?= $row->warehouse_code; ?></td>
	                <td><?= $row->pending ?></td>
	                <td><?= $row->remark ?></td>
	            </tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>