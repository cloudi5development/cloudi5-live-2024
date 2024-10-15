<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
  <div class="navbar-wrapper">
	<div class="navbar-header">
	  <ul class="nav navbar-nav">
		<li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active"><i class="icon-menu5 font-large-1"></i></a></li>
		<li class="nav-item">
			<a href="<?php echo base_url();?>accesspanel/dashboard" class="navbar-brand nav-link">
				<img src="<?php echo base_url(); ?>assets/images/logo-white.png" style="border-radius: 0px;text-align: center;float: right;margin-top: -6px;" alt="" width="100%">
			</a>
		</li>
		<li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
	  </ul>
	</div>
	<div class="navbar-container content container-fluid">
	  <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
		<ul class="nav navbar-nav">
		  <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active"><i class="icon-menu5"></i></a></li>
		  <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
		</ul>
		<ul class="nav navbar-nav float-xs-right">
			<li class="dropdown dropdown-user nav-item">
				<?php 
				$Top = $this->db->query("SELECT * FROM users where id='". $this->session->userdata('user_id') ."'")->row();
				?>
				<a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link" aria-expanded="false">
					<span class="avatar avatar-online">
						<?php if(!empty($Top->image)){ ?>
							<img src="<?php echo base_url(). $Top->image; ?>">
						<?php } else { ?>
							<img src="<?php echo base_url();?>assets/images/avatar.jpg">
						<?php } ?>
					</span>
					<span class="user-name"><?php  echo ucwords($Top->name);?></span>
				</a>
                <div class="dropdown-menu dropdown-menu-right">
					<a href="<?php echo base_url();?>accesspanel/profile" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a>
					<div class="dropdown-divider"></div>
					<a href="<?php echo base_url();?>accesspanel/logout" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
			</li>
		</ul>
	  </div>
	</div>
  </div>
</nav>