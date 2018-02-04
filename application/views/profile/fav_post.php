<?php $this->load->view('header_footer/header');?>
	
		<!-- Banner Section Start -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">Favorite Properties</h3>
							<div class="page_location">
								<a href="index_1.html">Home</a> 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<a href="index_1.html">Pages</a> 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>Favorite Properties</span>
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
						<div class="my_property_list">
							<table class="list_table" border="0" cellpadding="0" cellspacing="0">
								<thead>
									<tr>
										<td>Properties</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="<?php echo base_url()?>assets/img/property_grid/property_grid-8.png" alt="" >
											<div class="property-text">
												<a href="#"><h6 class="property-title">Condos In the Middle of Roseland</h6></a>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>3896 Longview Avenue</span>
												<div class="listing_price">$1800/mo</div>
											</div>
										</td>
										<td>
											<span><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Delete</a></span>
										</td>
									</tr>
									<tr>
										<td>
											<img src="<?php echo base_url()?>assets/img/property_grid/property_grid-6.png" alt="" >
											<div class="property-text">
												<a href="#"><h6 class="property-title">Condos In the Middle of Roseland</h6></a>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>3896 Longview Avenue</span>
												<div class="listing_price">$750/mo</div>
											</div>
										</td>
										<td>
											<span><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Delete</a></span>
										</td>
									</tr>
									<tr>
										<td>
											<img src="<?php echo base_url()?>assets/img/property_grid/property_grid-7.png" alt="" >
											<div class="property-text">
												<a href="#"><h6 class="property-title">Condos In the Middle of Roseland</h6></a>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>3896 Longview Avenue</span>
												<div class="listing_price">$750/mo</div>
											</div>
										</td>
										<td>
											<span><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Delete</a></span>
										</td>
									</tr>
									<tr>
										<td>
											<img src="<?php echo base_url()?>assets/img/property_grid/property_grid-5.png" alt="" >
											<div class="property-text">
												<a href="#"><h6 class="property-title">Condos In the Middle of Roseland</h6></a>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>3896 Longview Avenue</span>
												<div class="listing_price">$550,000</div>
											</div>
										</td>
										<td>
											<span><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Delete</a></span>
										</td>
									</tr>
									<tr>
										<td>
											<img src="<?php echo base_url()?>assets/img/property_grid/property_grid-4.png" alt="" >
											<div class="property-text">
												<a href="#"><h6 class="property-title">Condos In the Middle of Roseland</h6></a>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>3896 Longview Avenue</span>
												<div class="listing_price">$600,000</div>
											</div>
										</td>
										<td>
											<span><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Delete</a></span>
										</td>
									</tr>
									<tr>
										<td>
											<img src="<?php echo base_url()?>assets/img/property_grid/property_grid-3.png" alt="" >
											<div class="property-text">
												<a href="#"><h6 class="property-title">Condos In the Middle of Roseland</h6></a>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>3896 Longview Avenue</span>
												<div class="listing_price">$136,000</div>
											</div>
										</td>
										<td>
											<span><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Delete</a></span>
										</td>
									</tr>
									<tr>
										<td>
											<img src="<?php echo base_url()?>assets/img/property_grid/property_grid-2.png" alt="" >
											<div class="property-text">
												<a href="#"><h6 class="property-title">Condos In the Middle of Roseland</h6></a>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>3896 Longview Avenue</span>
												<div class="listing_price">$1350/mo</div>
											</div>
										</td>
										<td>
											<span><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Delete</a></span>
										</td>
									</tr>
									<tr>
										<td>
											<img src="<?php echo base_url()?>assets/img/property_grid/property_grid-1.png" alt="" >
											<div class="property-text">
												<a href="#"><h6 class="property-title">Condos In the Middle of Roseland</h6></a>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>3896 Longview Avenue</span>
												<div class="listing_price">$326,000</div>
											</div>
										</td>
										<td>
											<span><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Delete</a></span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- Pagination -->
						<div class="row">
							<div class="col-md-12">
								<div class="pagination_area">
									<nav aria-label="Page navigation">
										<ul class="pagination pagination_edit">
											<li>
												<a href="#" aria-label="Previous">
													<span aria-hidden="true">prev</span>
												</a>
											</li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li>
												<a href="#" aria-label="Next">
													<span aria-hidden="true">next</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<!-- End Pagination -->
					</div>
				</div>
			</div>
		</section>
		<!-- Profile Setting End -->
		
		<?php $this->load->view('header_footer/footer');?>