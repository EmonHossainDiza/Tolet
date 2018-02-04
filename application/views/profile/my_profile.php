<?php $this->load->view('header_footer/header');?>

<!-- Banner Section Start -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">My Profile</h3>
							<div class="page_location">
								<a href="index_1.html">Home</a> 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<a href="index_1.html">Pages</a> 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>My Profile</span>
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
							<div class="col-md-8 col-sm-12">
								<form class="profile_area" method="post" action="#">
									<div class="personal_infor">
										<h4 class="inner-title">personal information</h4>
										<p>Euismod Ac penatibus magna vel tempor, porttitor ullamcorper urna, massa natoque venenatis mollis libero neque velit risus, magnis vehicula nam.</p>
										<div class="information_form">
											<div class="row">
												<div class="col-md-12">
													<label class="profile_label">Agent ID</label>
													<input type="text" name="agentid" class="form-control" placeholder="PO19281" disabled >
												</div>
												<div class="col-md-12">
													<label class="profile_label">Your Name</label>
													<input type="text" name="name" class="form-control" placeholder="Harry E. Ewalt">
												</div>
												<div class="col-md-12">
													<label class="profile_label">Your Title</label>
													<input type="text" name="title" class="form-control" placeholder="Property Agent">
												</div>
												<div class="col-md-12">
													<label class="profile_label">Email Address :</label>
													<input type="text" class="form-control" placeholder="Enter Your Email">
												</div>
												<div class="col-md-12">
													<label class="profile_label">Phone :</label>
													<input type="tel" class="form-control" placeholder="000-000-000">
												</div>
												<div class="col-md-12">
													<label class="profile_label">country :</label>
													<select class="selectpicker form-control" data-live-search="true">
														<option>USA</option>
														<option>UK</option>
														<option>SP</option>
													</select>
												</div>
												<div class="col-md-12">
													<label class="profile_label">About Me :</label>
													<textarea class="form-control" placeholder="Write About Here....."></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="more_info">
										<h4 class="inner-title">More Info</h4>
										<div class="information_form">
											<div class="row">
												<div class="col-md-12">
													<label class="profile_label">Address</label>
													<input type="text" name="address" class="form-control" placeholder="Your Location Address">
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-6 col-xs-12">
															<label class="profile_label">City/state :</label>
															<input type="text" name="city" class="form-control" placeholder="City Or State">
														</div>
														<div class="col-md-6 col-xs-12">
															<label class="profile_label">Zip code :</label>
															<input type="text" name="zipcode" class="form-control" placeholder="Zip Code">
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<label class="profile_label">Date of Birth :</label>
													<input type="text" class="form-control" placeholder="00-00-0000/d-m-y">
												</div>
												<div class="col-md-12">
													<label class="profile_label">Skype ID :</label>
													<input type="text" class="form-control" placeholder="Your Skype ID">
												</div>
											</div>
										</div>
									</div>
									<div class="save_change">
										<button class="btn btn-default" type="submit">Save Changes</button>
										<p><span>Note : </span>Morbi nibh dis. Pede. Erat, porta urna. Adipiscing Ipsum nibh morbi taciti proin quisque sit quam curae; vulputate ridiculus. Dictumst ullamcorper nullam Parturient, urna. Etiam nascetur enim lectus torquent pellentesque.</p>
									</div>
								</form>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="prifile_picture">
									<form class="avata-form" action="#" method="post">
										<img src="<?php echo base_url()?>assets/img/teams/2.jpg" alt="" />
										<input type="file" name="user-image" id="avata-upload">
										<label class="avata-edit" for="avata-upload"><i class="flaticon-tool-1"></i></label>
									</form>
								</div>
								<div class="avata-info"><span>Name:</span> Harry E. Ewalt</div>
								<div class="avata-info"><span>Email:</span> ewalt32@info.com</div>
								<div class="avata-info"><span>Role:</span> Agent</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Profile Setting End -->

		<?php $this->load->view('header_footer/footer');?>