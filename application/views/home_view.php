
<?php $this->load->view('header_footer/header');?>

<!-- Map Banner Part Start -->
<div id="map-banner">
        <div class="homepage-map">
<!--            <div id="map"></div>-->
            <?php $this->load->view('our_map');?>
        </div>
    <!-- Search Form On Map -->
    <div id="find-location" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="map-search">
                    <div class="form-up-btn">Search Location <span><i class="fa fa-angle-up" aria-hidden="true"></i></span></div>
                    <form action="#" method="post" class="property_filter_input">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <select class="selectpicker form-control">
                                    <option>Any Status</option>
                                    <option>For Rent</option>
                                    <option>For Sale</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <select class="selectpicker form-control">
                                    <option>Any State</option>
                                    <option>New york</option>
                                    <option>Sydney</option>
                                    <option>Washington</option>
                                    <option>Las vegas</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <select class="selectpicker form-control">
                                    <option>Bedrooms</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>6</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <select class="selectpicker form-control">
                                    <option>Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6">
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
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="form-control" name="minprice" placeholder="Min Price(USD)" >
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="form-control" name="maxprice" placeholder="Max Price(USD)" >
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <input type="submit" name="search" class="btn btn-default" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Form On Map -->
</div>
<!-- Map Banner Part End -->

<!-- Service Section Start -->
<section id="service_part">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-row">
                    <h3 class="section_title_blue"><span>What you are looking for?</span></h3>
<!--                    <div class="sub-title">-->
<!--                        <p>Pellentesque porttitor dolor natoque pretium. Scelerisque Quisque, vel curabitur lobortis potenti primis praesent volutpat mi nonummy faucibus tempor consequat vulputate.</p>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service_area wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="service_icon"><i class="glyph-icon flaticon-home"></i></div>
                    <a href="property_grid.html"><h4 class="service_title">House</h4></a>
                    <p>Nisi. Tellus lobortis dapibus erat</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service_area wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="service_icon"><i class="glyph-icon flaticon-signs"></i></div>
                    <a href="property_grid.html"><h4 class="service_title">Land</h4></a>
                    <p>Nisi. Tellus lobortis dapibus erat</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service_area wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="service_icon"><i class="glyph-icon flaticon-office"></i></div>
                    <a href="property_grid.html"><h4 class="service_title">Office</h4></a>
                    <p>Nisi. Tellus lobortis dapibus erat</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service_area wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <div class="service_icon"><i class="glyph-icon flaticon-shop"></i></div>
                    <a href="property_grid.html"><h4 class="service_title">Business</h4></a>
                    <p>Nisi. Tellus lobortis dapibus erat</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section End -->


<!-- Property Tab -->
<section id="property-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-row">
                    <h3 class="section_title_blue">Featured <span>Properties</span></h3>
<!--                    <div class="sub-title">-->
<!--                        <p>Pellentesque porttitor dolor natoque pretium. Scelerisque Quisque, vel curabitur lobortis potenti primis praesent volutpat mi nonummy faucibus tempor consequat vulputate.</p>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-section">
                    <div class="auto-container">
                        <!--Filter-->
                        <div class="filters">
                            <ul class="filter-tabs filter-btns clearfix anim-3-all">
                                <li class="active filter" data-role="button" data-filter="all">All</li>
                                <li class="filter" data-role="button" data-filter=".house">House</li>
                                <li class="filter" data-role="button" data-filter=".office">Office</li>
                                <li class="filter" data-role="button" data-filter=".appartment">Appartment</li>
                                <li class="filter" data-role="button" data-filter=".realty">Realty</li>
                            </ul>

                        </div>
                        <!--Filter List-->

                        <!-- Tab Content -->
                        <div class="row filter-list clearfix">
                            <div class="column mix mix_all house appartment col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-1.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Lovelece Road Greenfield</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 528 Poplar Chase Lane Boise</span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$1250/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all house appartment col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-2.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Park Road Appartment Rent</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 3225 George Street Brooksville, FL 34610</span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$1250/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all office realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-3.png" alt=""></a>
                                        <div class="sale_amount">3 Days Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Rose Villa Infront Of River</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 3175 Isaacs Creek Road New Canton</span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$1250/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all office appartment col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">sale</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-4.png" alt=""></a>
                                        <div class="sale_amount">14 Days Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Dulax Condos Include Hall</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 1566 Warner Street Doral, FL 33178 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$350,000</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all house realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-5.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Forest House For Holiday Tour</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>4515 Duncan Avenue New York, NY 116 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
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
                            <div class="column mix mix_all office realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Sale</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-6.png" alt=""></a>
                                        <div class="sale_amount">1 Month Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">New Developed Condos</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>367 Sharon Lane South Bend, IN 4601 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
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
                            <div class="column mix mix_all office realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Sale</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-7.png" alt=""></a>
                                        <div class="sale_amount">4 Days Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Single Villa with Ground</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>367 Sharon Lane South Bend, IN 4601 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
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
                            <div class="column mix mix_all office realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Sale</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-8.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">New Appartment Interior</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>367 Sharon Lane South Bend, IN 4601 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$250,000</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all house appartment col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-1.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Lovelece Road Greenfield</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 528 Poplar Chase Lane Boise</span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$1250/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End tab content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-4 col-md-4">
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
</section>

<!-- End Property Tab -->


<!-- Recent Section Start -->
<section id="recent_property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-row">
                    <h3 class="section_title_blue">Recent <span>Property</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="property_slide">
                    <div class="item">
                        <div class="property_grid">
                            <div class="img_area">
                                <div class="sale_btn">Rent</div>
                                <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-1.png" alt=""></a>
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
                                    <h5 class="property-title">Park Road Appartment Rent</h5>
                                </a><span><i class="fa fa-map-marker" aria-hidden="true"></i> 3225 George Street Brooksville, FL 34610</span>
                                <div class="quantity">
                                    <ul>
                                        <li><span>Area</span>1600 Sqft</li>
                                        <li><span>Rooms</span>9</li>
                                        <li><span>Beds</span>4</li>
                                        <li><span>Baths</span>3</li>
                                        <li><span>Garage</span>1</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bed_area">
                                <ul>
                                    <li>$1250/mo</li>
                                    <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                    <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="property_grid">
                            <div class="img_area">
                                <div class="sale_btn">Sale</div>
                                <div class="featured_btn">Featured</div>
                                <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-2.png" alt=""></a>
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
                                    <h5 class="property-title">Park Road Appartment Rent</h5>
                                </a><span><i class="fa fa-map-marker" aria-hidden="true"></i> 3494 Lyon Avenue Middleboro, MA 02346 </span>
                                <div class="quantity">
                                    <ul>
                                        <li><span>Area</span>1600 Sqft</li>
                                        <li><span>Rooms</span>9</li>
                                        <li><span>Beds</span>4</li>
                                        <li><span>Baths</span>3</li>
                                        <li><span>Garage</span>1</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bed_area">
                                <ul>
                                    <li>$1,410,000</li>
                                    <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                    <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="property_grid">
                            <div class="img_area">
                                <div class="sale_btn">Rent</div>
                                <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-3.png" alt=""></a>
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
                                    <h5 class="property-title">Park Road Appartment Rent</h5>
                                </a><span><i class="fa fa-map-marker" aria-hidden="true"></i> 39 Parrill Court Oak Brook, IN 60523 </span>
                                <div class="quantity">
                                    <ul>
                                        <li><span>Area</span>1600 Sqft</li>
                                        <li><span>Rooms</span>9</li>
                                        <li><span>Beds</span>4</li>
                                        <li><span>Baths</span>3</li>
                                        <li><span>Garage</span>1</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bed_area">
                                <ul>
                                    <li>$1200/mo</li>
                                    <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                    <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="property_grid">
                            <div class="img_area">
                                <div class="sale_btn">Rent</div>
                                <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-4.png" alt=""></a>
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
                                    <h5 class="property-title">Central Road Appartment Rent</h5>
                                </a><span><i class="fa fa-map-marker" aria-hidden="true"></i> 39 Parrill Court Oak Brook, IN 60523 </span>
                                <div class="quantity">
                                    <ul>
                                        <li><span>Area</span>1600 Sqft</li>
                                        <li><span>Rooms</span>9</li>
                                        <li><span>Beds</span>4</li>
                                        <li><span>Baths</span>3</li>
                                        <li><span>Garage</span>1</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bed_area">
                                <ul>
                                    <li>$1200/mo</li>
                                    <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                    <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recent Section End -->

<!--achivement Section Start-->
<div id="achivment">
    <div class="container">
        <div class="row">
            <div class="fact-counter">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="achievement wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                        <h2 class="counting" data-speed="3000" data-stop="1020">1020</h2>
                        <p class="subject">Project Done</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="achievement wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                        <h2 class="counting" data-speed="3000" data-stop="960">960</h2>
                        <p class="subject">Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="achievement wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                        <h2 class="counting" data-speed="3000" data-stop="420">420</h2>
                        <p class="subject">Awards Win</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="achievement wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                        <h2 class="counting" data-speed="3000" data-stop="860">860</h2>
                        <p class="subject">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--achivement Section End-->

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




