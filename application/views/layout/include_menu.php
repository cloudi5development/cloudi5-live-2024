<?php 
	$getpermission=$this->db->select('*')->from('user_privilege')->where('user_id',$this->session->userdata('user_id'))->get()->row();
?>
<div id="main-menu" data-scroll-to-active="true" class="main-menu menu-dark menu-fixed menu-shadow menu-accordion">
	<!-- / main menu header-->
	<!-- main menu content-->
	<?php if($this->session->userdata('login_type') != 'Super Admin') { ?>
	<div class="main-menu-content ps-container ps-theme-light ps-active-y">
		<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
		<?php 
			$dashboardAccess = json_decode($getpermission->dashboard, TRUE);
			if(!empty($dashboardAccess)){
				if (array_key_exists('view' , $dashboardAccess))
				{ 
		?>
			<li class="<?php if ($page_title == 'Dashboard') echo 'active'; ?> nav-item"><a href="<?php echo base_url();?>accesspanel/dashboard"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$teamAccess = json_decode($getpermission->teams, TRUE);
			if(!empty($teamAccess)){
				if (array_key_exists('view' , $teamAccess))
				{ 
		?>	
			<li class="<?php if ($page_title == 'Teams' || $page_title == 'Add Teams' || $page_title == 'Edit Teams') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>Teams"><i class="fa fa-users"></i><span data-i18n="nav.dash.main" class="menu-title">Teams</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$teamAccess = json_decode($getpermission->teams, TRUE);
			if(!empty($teamAccess)){
				if (array_key_exists('view' , $teamAccess))
				{ 
		?>	

            <li class="<?php if ($page_title == 'Clients' || $page_title == 'Add Clients' || $page_title == 'Edit Clients') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>Clients"><i class="fas fa-user-tie"></i><span data-i18n="nav.dash.main" class="menu-title">Clients</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$clientAccess = json_decode($getpermission->teams, TRUE);
			if(!empty($clientAccess)){
				if (array_key_exists('view' , $clientAccess))
				{ 
		?>	


			<li class="<?php if ($page_title == 'Portfolio' || $page_title == 'Add Portfolio' || $page_title == 'Edit Portfolio') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>portfolio/lists"><i class="fa-solid fa-user-group"></i><span data-i18n="nav.dash.main" class="menu-title">Portfolio</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$categoryAccess = json_decode($getpermission->category, TRUE);
			if(!empty($categoryAccess)){
				if (array_key_exists('view' , $categoryAccess))
				{ 
		?>	
			<li class="<?php if ($page_title == 'Category' || $page_title == 'Add Category' || $page_title == 'Edit Category') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>category/"><i class="icon-pencil22"></i><span data-i18n="nav.dash.main" class="menu-title">Blog Category</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$blogAccess = json_decode($getpermission->blog, TRUE);
			if(!empty($blogAccess)){
				if (array_key_exists('view' , $blogAccess))
				{ 
		?>	
			<li class="<?php if ($page_title == 'Blog' || $page_title == 'Add Blog' || $page_title == 'Edit Blog') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>blog_admin/"><i class="icon-star-empty"></i><span data-i18n="nav.dash.main" class="menu-title">Blog Post</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$commentsAccess = json_decode($getpermission->comments, TRUE);
			if(!empty($commentsAccess)){
				if (array_key_exists('view' , $commentsAccess))
				{ 
		?>	
			<li class="<?php if ($page_title == 'Comments') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>comments/"><i class="icon-comments-o"></i><span data-i18n="nav.dash.main" class="menu-title">Blog Comments</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			}
		?>
		<?php
		$jobPostAccess = json_decode($getpermission->job_post, TRUE);
		$jobApplicationAccess = json_decode($getpermission->job_application, TRUE);
		if(!empty($jobPostAccess) || !empty($jobApplicationAccess)){
		?>
			<li class=" nav-item"><a href="#"><i class="icon-leaf"></i><span data-i18n="nav.form_elements.main" class="menu-title">Careers</span></a>
				<ul class="menu-content">
				<?php
					if(!empty($jobPostAccess)){
						if (array_key_exists('view' , $jobPostAccess))
						{ 
				?>		
					<li class="<?php if ($page_title == 'Job Post' || $page_title == 'Add Job Post' || $page_title == 'Edit Job Post') echo 'active'; ?>">
						<a href="<?php echo base_url();?>job_post" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Job Post</a>
					</li>
				<?php }
					} 			
					if(!empty($jobApplicationAccess)){
						if (array_key_exists('view' , $jobApplicationAccess))
						{ 
				?>	
					<li class="<?php if ($page_title == 'Job Application' || $page_title == 'View Application') echo 'active'; ?>">
						<a href="<?php echo base_url();?>job_application" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Job Application</a>
					</li>
					
				<?php }
					}
				?>
					
				</ul>
			</li>
		<?php 
		}  			
			$enquiriesAccess = json_decode($getpermission->enquiries, TRUE);
			if(!empty($enquiriesAccess)){
				if (array_key_exists('view' , $enquiriesAccess))
				{ 
		?>	
			<li class="<?php if ($page_title == 'Contact Enquiry') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>enquiries/"><i class="icon-envelope-o"></i><span data-i18n="nav.dash.main" class="menu-title">Contact Enquiry</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$newsletterAccess = json_decode($getpermission->newsletter, TRUE);
			if(!empty($newsletterAccess)){
				if (array_key_exists('view' , $newsletterAccess))
				{ 
		?>	
		<li class="<?php if ($page_title == 'Write For Us') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>Write_for_us_enquiry/"><i class="icon-envelope-o"></i><span data-i18n="nav.dash.main" class="menu-title">Write For U</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$newsletterAccess = json_decode($getpermission->newsletter, TRUE);
			if(!empty($newsletterAccess)){
				if (array_key_exists('view' , $newsletterAccess))
				{ 
		?>	
			<li class="<?php if ($page_title == 'News Letter') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>newsletter/"><i class="icon-newspaper-o"></i><span data-i18n="nav.dash.main" class="menu-title">News Letter</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$subscribeAccess = json_decode($getpermission->subscribe, TRUE);
			if(!empty($subscribeAccess)){
				if (array_key_exists('view' , $subscribeAccess))
				{ 
		?>	
			<li class=" nav-item"><a href="#"><i class="icon-stack"></i><span data-i18n="nav.form_elements.main" class="menu-title">Subscribe</span></a>
				<ul class="menu-content">
					<li class="<?php if ($page_title == 'Cloudi5 Subscribe') echo 'active'; ?>">
						<a href="<?php echo base_url();?>subscribe/cloudi5" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Cloudi5</a>
					</li>
					<li class="<?php if ($page_title == 'Blog Subscribe') echo 'active'; ?>">
						<a href="<?php echo base_url();?>subscribe/blog" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Blog</a>
					</li>
				</ul>
			</li>
		<?php }
			} 			
			$usersAccess = json_decode($getpermission->users, TRUE);
			if(!empty($usersAccess)){
				if (array_key_exists('view' , $usersAccess))
				{ 
		?>
			<li class="<?php if ($page_title == 'Users' || $page_title == 'Add User' || $page_title == 'Edit User') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>users/"><i class="icon-users2"></i><span data-i18n="nav.dash.main" class="menu-title">Users</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			<li class="<?php if ($page_title == 'Pages' || $page_title == 'Add Pages' || $page_title == 'Edit Pages') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>Pages/"><i class="fa-solid fa-page"></i></i><span data-i18n="nav.dash.main" class="menu-title">Pages</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 			
			$clientAccess = json_decode($getpermission->teams, TRUE);
			if(!empty($clientAccess)){
				if (array_key_exists('view' , $clientAccess))
				{ 
		?>	
		<?php }
			}
			$metaAccess = json_decode($getpermission->meta_pages, TRUE);
			if(!empty($metaAccess)){
				if (array_key_exists('view' , $metaAccess))
				{ 
		?>
			<li class="<?php if ($page_title == 'Meta Tags') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>meta_pages/"><i class="icon-users2"></i><span data-i18n="nav.dash.main" class="menu-title">Meta Tags</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
		<?php }
			} 	
		?>
		
		
		<?php
			$profileAccess		= json_decode($getpermission->profile, TRUE);
			$privilegeAccess	= json_decode($getpermission->privilege, TRUE);
			$settingsAccess		= json_decode($getpermission->settings, TRUE);

			if(!empty($profileAccess) || !empty($privilegeAccess) || !empty($settingsAccess)){
		?>
			<li class=" nav-item"><a href="#"><i class="icon-gear"></i><span data-i18n="nav.form_elements.main" class="menu-title">Settings</span></a>
				<ul class="menu-content">
				<?php			
					if(!empty($profileAccess)){
						if (array_key_exists('view' , $profileAccess))
						{ 
				?>
					<li class="<?php if ($page_title == 'Profile Update') echo 'active'; ?>">
						<a href="<?php echo base_url();?>accesspanel/profile" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Profile</a>
					</li>
				<?php
						}
					}			
					if(!empty($privilegeAccess)){
						if (array_key_exists('view' , $privilegeAccess))
						{ 
				?>	
					<li class="<?php if ($page_title == 'Manage User Privilege Details' || $page_title == 'Add User Privilege Details' ||$page_title == 'Edit User Privilege Details' ) echo 'active'; ?>">
						<a href="<?php echo base_url();?>privilege" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Privilege Access</a>
					</li>
				<?php
						}
					}			
					if(!empty($settingsAccess)){
						if (array_key_exists('view' , $settingsAccess))
						{ 
				?>
					<li class="<?php if ($page_title == 'Site Settings') echo 'active'; ?>">
						<a href="<?php echo base_url();?>settings" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Site Setting</a>
					</li>
				<?php
						}
					}
				?>
				</ul>
			</li>
			
		<?php 
			}
		?>

		</ul>
	</div>
	<?php } else { ?>
	<div class="main-menu-content ps-container ps-theme-light ps-active-y">
		<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
			<li class="<?php if ($page_title == 'Dashboard') echo 'active'; ?> nav-item"><a href="<?php echo base_url();?>accesspanel/dashboard"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			
			<li class="<?php if ($page_title == 'Portfolio' || $page_title == 'Add Portfolio' || $page_title == 'Edit Portfolio') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>portfolio/lists"><i class="icon-database"></i><span data-i18n="nav.dash.main" class="menu-title">Portfolio</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li> 
			<li class="<?php if ($page_title == 'Teams' || $page_title == 'Add Teams' || $page_title == 'Edit Teams') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>Teams"><i class="fa fa-users"></i><span data-i18n="nav.dash.main" class="menu-title">Teams</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li> 
			<li class="<?php if ($page_title == 'Clients' || $page_title == 'Add Clients' || $page_title == 'Edit Clients') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>Clients">   <i class="fas fa-user-tie"></i><span data-i18n="nav.dash.main" class="menu-title">Clients</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li> 
			<li class="<?php if ($page_title == 'Category' || $page_title == 'Add Category' || $page_title == 'Edit Category') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>category/"><i class="icon-pencil22"></i><span data-i18n="nav.dash.main" class="menu-title">Blog Category</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			
			<li class="<?php if ($page_title == 'Blog' || $page_title == 'Add Blog' || $page_title == 'Edit Blog') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>blog_admin/"><i class="icon-star-empty"></i><span data-i18n="nav.dash.main" class="menu-title">Blog Post</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			<li class="<?php if ($page_title == 'Comments') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>comments/"><i class="icon-comments-o"></i><span data-i18n="nav.dash.main" class="menu-title">Blog Comments</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			<li class=" nav-item"><a href="#"><i class="icon-leaf"></i><span data-i18n="nav.form_elements.main" class="menu-title">Careers</span></a>
				<ul class="menu-content">
					<li class="<?php if ($page_title == 'Job Post' || $page_title == 'Add Job Post' || $page_title == 'Edit Job Post') echo 'active'; ?>">
						<a href="<?php echo base_url();?>job_post" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Job Post</a>
					</li>
					<li class="<?php if ($page_title == 'Job Application' || $page_title == 'View Application') echo 'active'; ?>">
						<a href="<?php echo base_url();?>job_application" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Job Application</a>
					</li>
				</ul>
			</li>

			<li class="<?php if ($page_title == 'Contact Enquiry') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>enquiries/"><i class="icon-envelope-o"></i><span data-i18n="nav.dash.main" class="menu-title">Contact Enquiry</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			
			<li class="<?php if ($page_title == 'Write For Us') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>Write_for_us_enquiry/"><i class="icon-envelope-o"></i><span data-i18n="nav.dash.main" class="menu-title">Write For Us Enquiry</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			<li class="<?php if ($page_title == 'News Letter') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>newsletter/"><i class="icon-newspaper-o"></i><span data-i18n="nav.dash.main" class="menu-title">News Letter</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			
			<li class=" nav-item"><a href="#"><i class="icon-stack"></i><span data-i18n="nav.form_elements.main" class="menu-title">Subscribe</span></a>
				<ul class="menu-content">
					<li class="<?php if ($page_title == 'Cloudi5 Subscribe') echo 'active'; ?>">
						<a href="<?php echo base_url();?>subscribe/cloudi5" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Cloudi5</a>
					</li>
					<li class="<?php if ($page_title == 'Blog Subscribe') echo 'active'; ?>">
						<a href="<?php echo base_url();?>subscribe/blog" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Blog</a>
					</li>
				</ul>
			</li>
			
			<li class="<?php if ($page_title == 'Users' || $page_title == 'Add User' || $page_title == 'Edit User') echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>users/"><i class="icon-users2"></i><span data-i18n="nav.dash.main" class="menu-title">Users</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			<li class="<?php if ($page_title == 'Meta Tags' ) echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>meta_pages/"><i class="icon-move"></i><span data-i18n="nav.dash.main" class="menu-title">Mets Tags</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			<li class="<?php if ($page_title == 'pages' ) echo 'active'; ?> nav-item">
				<a href="<?php echo base_url();?>pages/"> <i class="fa fa-file-alt"></i> <span data-i18n="nav.dash.main" class="menu-title">Pages</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			<li class="<?php if ($page_title == 'Site Map' ) echo 'active'; ?> nav-item">
				<a href="<?php echo base_url('settings/siteMapPage');?>"><i class="icon-sitemap"></i><span data-i18n="nav.dash.main" class="menu-title">Site Map</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"></span></a>
			</li>
			<li class=" nav-item"><a href="#"><i class="icon-gear"></i><span data-i18n="nav.form_elements.main" class="menu-title">Settings</span></a>
				<ul class="menu-content">
					<li class="<?php if ($page_title == 'Profile Update') echo 'active'; ?>">
						<a href="<?php echo base_url();?>accesspanel/profile" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Profile</a>
					</li>
					<li class="<?php if ($page_title == 'Manage User Privilege Details' || $page_title == 'Add User Privilege Details' ||$page_title == 'Edit User Privilege Details' ) echo 'active'; ?>">
						<a href="<?php echo base_url();?>privilege" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Privilege Access</a>
					</li>
					<li class="<?php if ($page_title == 'Site Settings') echo 'active'; ?>">
						<a href="<?php echo base_url();?>settings" data-i18n="nav.form_elements.form_validation" class="menu-item"><i class="icon-angle-right"></i>Site Setting</a>
					</li>
				</ul>
			</li>
			
		</ul>
	</div>
	<?php } ?>
	<!-- /main menu content-->
</div>