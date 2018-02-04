<?php $this->load->view('header_footer/header');?>
<link rel="stylesheet" href="<?php base_url()?>assets/css/jslider.css">


		<!-- Property Grid Start -->
		<section id="property_area">
			<div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="search_map">
                            <?php $this->load->view('our_map');?>
                        </div>
                    </div>
                </div>

				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="property_sorting">
									<form class="property_filter" action="#" method="post">
										<div class="property_show">
											<select class="selectpicker form-control">
												<option>Any Type</option>
												<option>For Rent</option>
												<option>For Sale</option>
											</select>
										</div>
										<div class="property_view">
											<ul>
												<li>
													<span>Order:</span>
													<select class="selectpicker form-control">
														<option>Default Order</option>
														<option>Featured</option>
														<option>Price Hight</option>
														<option>Price Low</option>
														<option>Latest Item</option>
														<option>Oldest Item</option>
													</select>
												</li>
												<li>
													<a href="property_grid.html"><i class="fa fa-th" aria-hidden="true"></i></a>
												</li>
												<li>
													<a class="active" href="property_list.html"><i class="fa fa-th-list" aria-hidden="true"></i></a>
												</li>
											</ul>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Property Grids -->
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Rent</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-4.png" alt=""></a>
										<div class="sale_amount">2 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text"> 
										<a href="#">
											<h5 class="property-title">Lovelece Road Greenfield</h5>
										</a> <span><i class="fa fa-map-marker" aria-hidden="true"></i> 4213 Duff Avenue South Burlington, VT 05403 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1200 Sqft</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$850/mo</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Sale</div>
										<div class="featured_btn">Featured</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-5.png" alt=""></a>
										<div class="sale_amount">2 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text"> 
										<a href="#">
											<h5 class="property-title">Luxury Condos Infront of River</h5>
										</a> <span><i class="fa fa-map-marker" aria-hidden="true"></i> 2305 Tree Frog Lane Overlandpk, MO 66210 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>4</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$1,205,500</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Rent</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-6.png" alt="" /></a>
										<div class="sale_amount">2 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text"> 
										<a href="#">
											<h5 class="property-title">Park Road Appartment Rent</h5>
										</a> <span><i class="fa fa-map-marker" aria-hidden="true"></i> 4133 Arbor Court Worland, WY 82401 
										</span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>2100 Sqft</li>
												<li><span>Rooms</span>9</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$1300/mo</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Rent</div>
										<div class="featured_btn">Featured</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-7.png" alt=""></a>
										<div class="sale_amount">10 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text"> 
										<a href="#">
											<h5 class="property-title">Lovelece Road Greenfield</h5>
										</a> <span><i class="fa fa-map-marker" aria-hidden="true"></i> 4213 Duff Avenue South Burlington, VT 05403 
										</span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$850/mo</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Sale</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-8.png" alt=""></a>
										<div class="sale_amount">12 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text"> 
										<a href="#">
											<h5 class="property-title">Luxury Condos Infront of River</h5>
										</a> <span><i class="fa fa-map-marker" aria-hidden="true"></i> 2305 Tree Frog Lane Overlandpk, MO 66210 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$1,205,500</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Sale</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-1.png" alt=""></a>
										<div class="sale_amount">15 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text">
										<a href="#"><h5 class="property-title">New Developed Condos</h5></a>
										<span><i class="fa fa-map-marker" aria-hidden="true"></i>367 Sharon Lane South Bend, IN 4601 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1200 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$152,000</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Sale</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-8.png" alt=""></a>
										<div class="sale_amount">17 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text">
										<a href="#"><h5 class="property-title">Renovate Small Condos</h5></a>
										<span><i class="fa fa-map-marker" aria-hidden="true"></i>499 Tenmile Road Boston, MA 02110 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1200 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$152,000</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Rent</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-2.png" alt=""></a>
										<div class="sale_amount">20 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text">
										<a href="#"><h5 class="property-title">Telico Villas House and Condos</h5></a>
										<span><i class="fa fa-map-marker" aria-hidden="true"></i>1751 Finwood Road Freehold, NJ 07728 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1200 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>3</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$850/mo</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Rent</div>
										<div class="featured_btn">Featured</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-3.png" alt=""></a>
										<div class="sale_amount">1 Day Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text">
										<a href="#"><h5 class="property-title">Telico Villas House and Condos</h5></a>
										<span><i class="fa fa-map-marker" aria-hidden="true"></i>1751 Finwood Road Freehold, NJ 07728 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1200 Sqft</li>
												<li><span>Rooms</span>5</li>
												<li><span>Beds</span>3</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$850/mo</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Rent</div>
										<div class="featured_btn">Featured</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-7.png" alt=""></a>
										<div class="sale_amount">10 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text"> 
										<a href="#">
											<h5 class="property-title">Lovelece Road Greenfield</h5>
										</a> <span><i class="fa fa-map-marker" aria-hidden="true"></i> 4213 Duff Avenue South Burlington, VT 05403 
										</span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$850/mo</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Sale</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-8.png" alt=""></a>
										<div class="sale_amount">12 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text"> 
										<a href="#">
											<h5 class="property-title">Luxury Condos Infront of River</h5>
										</a> <span><i class="fa fa-map-marker" aria-hidden="true"></i> 2305 Tree Frog Lane Overlandpk, MO 66210 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$1,205,500</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="property_grid">
									<div class="img_area">
										<div class="sale_btn">Sale</div>
										<a href="#"><img src="<?php echo base_url()?>assets/img/property_grid/property_grid-1.png" alt=""></a>
										<div class="sale_amount">15 Hours Ago</div>
										<div class="hover_property">
											<ul>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="property-text">
										<a href="#"><h5 class="property-title">New Developed Condos</h5></a>
										<span><i class="fa fa-map-marker" aria-hidden="true"></i>367 Sharon Lane South Bend, IN 4601 </span>
										<div class="quantity">
											<ul>
												<li><span>Area</span>1200 Sqft</li>
												<li><span>Rooms</span>7</li>
												<li><span>Beds</span>5</li>
												<li><span>Baths</span>4</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
									<div class="bed_area">
										<ul>
											<li>$152,000</li>
											<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
											<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End property Grids -->
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
					</div>
					<!-- Start Sidebar -->
					<div class="col-md-4">
						<div class="property_sidebar">
							<div class="price_range sidebar-widget">
								<h4 class="widget-title">Price</h4>
								<form class="price-filter" action="#" method="post">
									<span class="price-slider">
										<input class="filter_price" type="text" name="price" value="0;1000000" />
									</span>
								</form>								
							</div>
							<div class="price_range sidebar-widget">
								<h4 class="widget-title">Area</h4>
								<form class="area-filter" action="#" method="post">
									<span class="price-slider">
										<input class="area_filter" type="text" name="price" value="0;10000" />
									</span>
								</form>								
							</div>
							<div class="advance_search sidebar-widget">
								<h4 class="widget-title">Advance Search</h4>
								<form method="post" class="search_form" action="#">
									<div class="row">
										<div class="col-md-12 col-sm-6">
											<select class="selectpicker form-control">
												<option>Any Status</option>
												<option>For Rent</option>
												<option>For Sale</option>
											</select>
										</div>
										<div class="col-md-12 col-sm-6">
											<select class="selectpicker form-control">
												<option>Any Type</option>
												<option>House</option>
												<option>Office</option>
												<option>Appartment</option>
												<option>Condos</option>
												<option>Villa</option>
												<option>Small Family</option>
												<option>Single Room</option>
											</select>
										</div>
										<div class="col-md-12 col-sm-6">
											<select class="selectpicker form-control" data-live-search="true">
												<option>Any States</option>
												<option>New York</option>
												<option>Sydney</option>
												<option>Washington</option>
												<option>Las Vegas</option>
											</select>
										</div>
										<div class="col-md-12 col-sm-6">
											<select class="selectpicker form-control" data-live-search="true">
												<option>All City</option>
												<option>New York</option>
												<option>Sydney</option>
												<option>Washington</option>
												<option>Las Vegas</option>
											</select>
										</div>
										<div class="col-md-6 col-sm-6">
											<select class="selectpicker form-control">
												<option>Beds</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>6</option>
											</select>
										</div>
										<div class="col-md-6 col-sm-6">
											<select class="selectpicker form-control">
												<option>Baths</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
										</div>
										<div class="col-md-12 col-sm-6">
											<button name="search" class="btn btn-default" type="submit">search property</button>
										</div>
									</div>
								</form>
							</div>
							<div class="sidebar_agent sidebar-widget">
								<h4 class="widget-title">Our Agent</h4>
								<div class="member-widget-view">
									<div class="item">
										<div class="team_img"> 
											<div class="profile-pic"><img src="img/teams/1.jpg" alt=""></div>
											<div class="member_info">
												<a href="agent_profile.html"><h5 class="member-name">Taylor Swift</h5></a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="team_img">
											<div class="profile-pic"><img src="img/teams/2.jpg" alt=""></div>
											<div class="member_info">
												<a href="agent_profile.html"><h5 class="member-name">Susan White</h5></a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="team_img">
											<div class="profile-pic"><img src="img/teams/3.jpg" alt=""></div>
											<div class="member_info">
												<a href="agent_profile.html"><h5 class="member-name">Johan Dow</h5></a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="team_img">
											<div class="profile-pic"><img src="img/teams/4.jpg" alt=""></div>
											<div class="member_info">
												<a href="agent_profile.html"><h5 class="member-name">Lisa Milk</h5></a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="team_img">
											<div class="profile-pic"><img src="img/teams/5.jpg" alt=""></div>
											<div class="member_info">
												<a href="agent_profile.html"><h5 class="member-name">Susan White</h5></a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="team_img"> 
											<div class="profile-pic"><img src="img/teams/6.jpg" alt=""></div>
											<div class="member_info">
												<a href="agent_profile.html"><h5 class="member-name">Taylor Swift</h5></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="sidebar_tesimonial">
								<h4 class="widget-title">Clients Feedback</h4>
								<div class="feedback_small">
									<div class="item">
										<div class="testimonial_person">
											<img class="avata" src="img/testimonial/Johan-swift.png" alt="">
											<h6 class="client_name">Leandro Crocker</h6>
											<span>commercial leader</span>
										</div>
										<p>“ Nisi fermentum augue etiam convallis mollis consectetuer bibendum. Gravida. Purus praesent urna fringilla magna lacinia praesent vivamus. Quis adipiscing. Dictum sociosqu lectus. Nulla nascetur vitae praesent elit habitasse.”</p>
									</div>
									<div class="item">
										<div class="testimonial_person">
											<img class="avata" src="img/testimonial/Johan-swift.png" alt="">
											<h6 class="client_name">Leandro Crocker</h6>
											<span>commercial leader</span>
										</div>
										<p>“ Nisi fermentum augue etiam convallis mollis consectetuer bibendum. Gravida. Purus praesent urna fringilla magna lacinia praesent vivamus. Quis adipiscing. Dictum sociosqu lectus. Nulla nascetur vitae praesent elit habitasse.”</p>
									</div>
									<div class="item">
										<div class="testimonial_person">
											<img class="avata" src="img/testimonial/Johan-swift.png" alt="">
											<h6 class="client_name">Leandro Crocker</h6>
											<span>commercial leader</span>
										</div>
										<p>“ Nisi fermentum augue etiam convallis mollis consectetuer bibendum. Gravida. Purus praesent urna fringilla magna lacinia praesent vivamus. Quis adipiscing. Dictum sociosqu lectus. Nulla nascetur vitae praesent elit habitasse.”</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End SIdebar -->
				</div>
			</div>
		</section>
		<!-- Property Grid End -->
		
		<!-- Register Section Start -->
		<section id="register-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="reg_banner">
							<h4 class="reg_banner_title">Are you looking for a House or Customer for your Property sale?</h4>
							<span>Please click the button for register, we will become your best agent and help you for both.</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="register_btn">
							<a href="#" class="btn btn-primary">Register Now</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Register Section End -->

		<?php $this->load->view('header_footer/footer');?>

		<!-- <script src="<?php echo base_url()?>assets/js/jquery.slider.js"></script>  -->