<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url();?>dashboard">
			<i class="menu-icon mdi mdi-television"></i>
			<span class="menu-title">Request Monitoring</span>
		</a>
		</li>
		<?php if($this->session->userdata('access_level')==1){ ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-content-copy"></i>
			<span class="menu-title">Masters</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="master">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Customers">Customers</a>
					<a class="nav-link" href="<?php echo base_url();?>Zones">Zones</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#transaction" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-backup-restore"></i>
			<span class="menu-title">Transaction</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="transaction">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Request">Request</a>
					<a class="nav-link" href="<?php echo base_url();?>Receive">Receive</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-chart-line"></i>
			<span class="menu-title">Report</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="report">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Pending">Pending</a>
					<a class="nav-link" href="<?php echo base_url();?>Finish">Finish</a>
					</li>
				</ul>
			</div>
		</li>
		<?php } ?>
		<?php if($this->session->userdata('access_level')==2){ ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#transaction" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-backup-restore"></i>
			<span class="menu-title">Transaction</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="transaction">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Approves">Approves</a>
					</li>
				</ul>
			</div>
		</li>
		<?php } ?>
		<?php if($this->session->userdata('access_level')==3){ ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#transaction" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-backup-restore"></i>
			<span class="menu-title">Transaction</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="transaction">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Approves">Approves</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-chart-line"></i>
			<span class="menu-title">Report</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="report">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Pending">Pending</a>
					<a class="nav-link" href="<?php echo base_url();?>Finish">Finish</a>
					</li>
				</ul>
			</div>
		</li>
		<?php } ?>
		<?php if($this->session->userdata('access_level')==4){ ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#transaction" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-backup-restore"></i>
			<span class="menu-title">Transaction</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="transaction">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Drawing">Drawing</a>
					</li>
				</ul>
			</div>
		</li>
		<?php } ?>
		<?php if($this->session->userdata('access_level')==5){ ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#transaction" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-backup-restore"></i>
			<span class="menu-title">Transaction</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="transaction">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Packaging">Packagings</a>
					</li>
				</ul>
			</div>
		</li>
		<?php } ?>
		<?php if($this->session->userdata('access_level')==6){ ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-content-copy"></i>
			<span class="menu-title">Masters</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="master">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Manufactures">Manufactures</a>
					<a class="nav-link" href="<?php echo base_url();?>Brands">Brands</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#transaction" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-backup-restore"></i>
			<span class="menu-title">Transaction</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="transaction">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Bom">BOM</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-chart-line"></i>
			<span class="menu-title">Report</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="report">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Pending">Pending</a>
					<a class="nav-link" href="<?php echo base_url();?>Finish">Finish</a>
					</li>
				</ul>
			</div>
		</li>
		<?php } ?>
		<?php if($this->session->userdata('access_level')==7){ ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-chart-line"></i>
			<span class="menu-title">Report</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="report">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Pending">Pending</a>
					<a class="nav-link" href="<?php echo base_url();?>Finish">Finish</a>
					</li>
				</ul>
			</div>
		</li>
		<?php } ?>
		<?php if($this->session->userdata('access_level')==8){ ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-content-copy"></i>
			<span class="menu-title">Masters</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="master">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>Users">Users</a>
					<a class="nav-link" href="<?php echo base_url();?>Manufactures">Manufactures</a>
					<a class="nav-link" href="<?php echo base_url();?>Brands">Brands</a>
					<a class="nav-link" href="<?php echo base_url();?>Warehouses">Warehouses</a>
					<a class="nav-link" href="<?php echo base_url();?>Customers">Customers</a>
					<a class="nav-link" href="<?php echo base_url();?>Zones">Zones</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#transaction" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-backup-restore"></i>
			<span class="menu-title">Transaction</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="transaction">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Request">Request</a>
					<a class="nav-link" href="<?php echo base_url();?>Approves">Approves</a>
					<a class="nav-link" href="<?php echo base_url();?>Drawing">Drawing</a>
					<a class="nav-link" href="<?php echo base_url();?>Packaging">Packaging</a>
					<a class="nav-link" href="<?php echo base_url();?>Bom">BOM</a>
					<a class="nav-link" href="<?php echo base_url();?>Receive">Receive</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="ui-basic">
			<i class="menu-icon mdi mdi-chart-line"></i>
			<span class="menu-title">Report</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="report">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Pending">Pending</a>
					<a class="nav-link" href="<?php echo base_url();?>Finish">Finish</a>
					</li>
				</ul>
			</div>
		</li>
		<?php } ?>
	</ul>
</nav>
<div id="logoutModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Information
				</h3>
				<button class="close" data-dismiss="modal" type="close">&times;</button>
			</div>
			<div class="modal-body">
				<h5>Are you sure logout ?</h5>
			</div>
			<div class="modal-footer">
				<a href="<?php echo base_url();?>index.php/auth/logout" class="btn btn-success">Logout</a>
				<button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
