<div class="robust-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
		<?php echo message_box('success'); ?>
		<?php echo message_box('error'); ?>
		<section id="horizontal-form-layouts">
	<div class="row">
		<div class="col-xs-12">
			<div class="card">
				<div class="card-body">
					<div class="card-block">
						<div class="row">
							<div class="col-lg-3 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
								<div class="card-content">
									<div class="card-body">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="danger"><?php echo count($category);?></h3>
												<a href="<?php echo base_url('category');?>" title="Category"><span>Blog Category</span></a>
											</div>
											<div class="media-right media-middle">
												<i class="icon-pencil22 font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
								<div class="card-content">
									<div class="card-body">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="danger"><?php echo count($blog);?></h3>
												<a href="<?php echo base_url('blog_admin');?>" title="Blog Post"><span>Blog Post</span></a>
											</div>
											<div class="media-right media-middle">
												<i class="icon-star-empty font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
								<div class="card-content">
									<div class="card-body">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="danger"><?php echo count($comments);?></h3>
												<a href="<?php echo base_url('comments');?>" title="Blog Comments"><span>Blog Comments</span></a>
											</div>
											<div class="media-right media-middle">
												<i class="icon-comments-o font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
								<div class="card-content">
									<div class="card-body">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="danger"><?php echo count($enquiries);?></h3>
												<a href="<?php echo base_url('enquiries');?>" title="Contact Enquiry"><span>Contact Enquiry</span></a>
											</div>
											<div class="media-right media-middle">
												<i class="icon-envelope-o font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><hr>
					<div class="card-block">
						<div class="row">
							<div class="col-lg-3 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
								<div class="card-content">
									<div class="card-body">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="danger"><?php echo count($newsletter);?></h3>
												<a href="<?php echo base_url('newsletter');?>" title="News Letter"><span>News Letter</span></a>
											</div>
											<div class="media-right media-middle">
												<i class="icon-newspaper-o font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
								<div class="card-content">
									<div class="card-body">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="danger"><?php echo count($subscribe);?></h3>
												<a href="<?php echo base_url('subscribe/cloudi5');?>" title="Subscribe"><span>Subscribe</span></a>
											</div>
											<div class="media-right media-middle">
												<i class="icon-stack font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
								<div class="card-content">
									<div class="card-body">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="danger"><?php echo count($users);?></h3>
												<a href="<?php echo base_url('users');?>" title="Profile"><span>Users</span></a>
											</div>
											<div class="media-right media-middle">
												<i class="icon-user font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
								<div class="card-content">
									<div class="card-body">
										<div class="media">
											<div class="media-body text-left">
												<h3 class="danger"><?php echo '';?></h3>
												<a href="<?php echo base_url('settings');?>" title="Site Setting"><span>Site Setting</span></a>
											</div>
											<div class="media-right media-middle">
												<i class="icon-gear font-large-2 float-right"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
	</div>
</div>
<!-- JS Content Start -->
<?php $this->load->view('layout/common_js'); ?>
<!-- JS Content End -->
<script type="text/javascript">	
</script>