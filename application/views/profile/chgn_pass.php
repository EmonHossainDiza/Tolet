	<?php $this->load->view('header_footer/header');?>
		<!-- Banner Section Start -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">Change password</h3>
							<div class="page_location">
								<a href="index_1.html">Home</a> 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<a href="index_1.html">Pages</a> 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>Change password</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Section End -->
		
		<!-- Profile Setting Start -->
		<section id="profile_setting">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="settings_links">
							<ul>
								<li><span>Account Settings</span></li>
								<li class="active"><a href="<?php echo base_url()?>My_profile"><i class="flaticon-user"></i>My Profile</a></li> 
							</ul>
							<ul>
								<li><span>Manage Properties</span></li>
								<li><a href="<?php echo base_url()?>My_post"><i class="flaticon-home"></i>My Post</a></li>
								<li><a href="<?php echo base_url()?>Fav_post""><i class="flaticon-star"></i>Favorited Properties</a></li>
								<li><a href="<?php echo base_url()?>New_post""><i class="flaticon-export"></i>Submit New Property</a></li>
							</ul>
							<!-- <ul>
								<li><a href="message.html"><i class="flaticon-notification"></i>Message <sup><i class="fa fa-circle" aria-hidden="true"></i></sup> <span>( 20 )</span></a></li>
								<li><a href="comments.html"><i class="flaticon-chat"></i>Feedback and Comments</a></li>
								<li><a href="invoices.html"><i class="flaticon-invoice"></i>Payments and Invoice</a></li>
							</ul> -->
							<ul>
								<li><a href="change_password.html"><i class="flaticon-locked"></i>Change Password</a></li>
								<li><a href="logout.html"><i class="flaticon-upload"></i>Log Out</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="row">
							<div class="col-md-8 col-sm-8">
								<h4 class="inner-title">Change Your Password</h4>
								<form class="submit_form" action="#" method="post">
									<div class="change_password">
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Current Password">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="New Password">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="New Password Again">
										</div>
										<div class="form-group">
											<input id="send" class="btn btn-default" value="Save Change" type="submit">
										</div>
										<div class="alert alert-warning">Password must be in 8 characters with minimum 1 special characters</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Profile Setting End -->
		<?php $this->load->view('header_footer/footer');?>