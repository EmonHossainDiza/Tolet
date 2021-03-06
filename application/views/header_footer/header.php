<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unicoderbd.com/theme/html/uniland/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 16:45:14 GMT -->
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Uniland - Real Estate HTML5 Template">
    <meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
    <meta name="author" content="unicoder">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Uniland - Real Estate HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php base_url()?>assets/img/favicon.ico">

    <?php $this->load->view("css_js/common-css");?>

    <link rel="stylesheet" href="<?php base_url()?>assets/css/leaflet.css">

        
    <link rel="stylesheet" href="<?php base_url()?>assets/fonts/flaticon.css">

<!--    <link rel="stylesheet" href="--><?php //base_url()?><!--assets/css/jslider.css">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body >

<!-- Page Loader -->
<div class="loading-page">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>
<!-- End Loader -->

<!-- Color Settings -->
<div class="color-panel">
    <div class="on-panel"><img src="<?php base_url()?>assets/img/icons/settings.png" alt=""></div>
    <div class="panel-box">
        <span class="panel-title">Change Colors</span>
        <ul class="color-box">
            <li class="green" data-path="<?php base_url()?>assets/css/colors/green.css" data-image="<?php base_url()?>assets/img/logo1.png" data-target="<?php base_url()?>assets/img/logo2.png"></li>
            <li class="blue" data-path="<?php base_url()?>assets/css/colors/blue.css" data-image="<?php base_url()?>assets/img/logo1_blue.png" data-target="<?php base_url()?>assets/img/logo2_blue.png"></li>
            <li class="red" data-path="<?php base_url()?>assets/css/colors/red.css" data-image="<?php base_url()?>assets/img/logo1_red.png" data-target="<?php base_url()?>assets/img/logo2_red.png"></li>
            <li class="purple" data-path="<?php base_url()?>assets/css/colors/purple.css" data-image="<?php base_url()?>assets/img/logo1_purple.png" data-target="<?php base_url()?>assets/img/logo2_purple.png"></li>
            <li class="yellow" data-path="<?php base_url()?>assets/css/colors/yellow.css" data-image="<?php base_url()?>assets/img/logo1_yellow.png" data-target="<?php base_url()?>assets/img/logo2_yellow.png"></li>
            <li class="orange" data-path="<?php base_url()?>assets/css/colors/orange.css" data-image="<?php base_url()?>assets/img/logo1_orange.png" data-target="<?php base_url()?>assets/img/logo2_orange.png"></li>
            <li class="magento" data-path="<?php base_url()?>assets/css/colors/magento.css" data-image="<?php base_url()?>assets/img/logo1_magento.png" data-target="<?php base_url()?>assets/img/logo2_magento.png"></li>
            <li class="turquoise" data-path="<?php base_url()?>assets/css/colors/turquoise.css" data-image="<?php base_url()?>assets/img/logo1_turquoise.png" data-target="<?php base_url()?>assets/img/logo2_turquoise.png"></li>
            <li class="lemon" data-path="<?php base_url()?>assets/css/colors/lemon.css" data-image="<?php base_url()?>assets/img/logo1_lemon.png" data-target="<?php base_url()?>assets/img/logo2_lemon.png"></li>
        </ul>
    </div>
</div>
<!-- End Color Settings -->

<header id="header">
    <!-- Top Header Start -->
    <div id="top_header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-5">
                    <div class="top_contact">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> Need Support ? +1-435-782-4312</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-7">
                    <div class="top_right">
                        <ul>
                            <li>
                                <div class="lan-drop"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eng <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">sp</a></li>
                                        <li><a href="#">ch</a></li>
                                        <li><a href="#">ud</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="<?php base_url()?>Registration" class="toogle_btn" >Register</a></li>
                            <li><a href="<?php base_url()?>Login" class="toogle_btn" >Login</a></li>
                            <li><a href="<?php base_url()?>Reset" class="toogle_btn" >reset</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header End -->

    <!-- Nav Header Start -->
    <div id="nav_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <nav class="navbar navbar-default nav_edit">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php base_url()?>"><img class="nav-logo" src="<?php base_url()?>assets/img/logo1.png" alt=""></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse my_nav" id="bs-example-navbar-collapse-1">
                            <div class="submit_property">
                                <a href="submit_property.html"><i class="fa fa-plus" aria-hidden="true"></i>Submit Property</a>
                            </div>
                            <ul class="nav navbar-nav navbar-right nav_text">
                                <li><a href="<?php echo base_url()?>">homme</a></li>
                                <li class="dropdown">
                                    <a href="index_1.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index_1.html">Simple Image Slider</a></li>
                                        <li class="active"><a href="index_2.html">Fixed Height Map</a></li>
                                        <li><a href="index_3.html">Video Banner + Search</a></li>
                                        <li><a href="index_4.html">Fixed Banner + Search</a></li>
                                        <li><a href="index_5.html">Property Slide</a></li>
                                        <li><a href="index_6.html">Full Height Map + Nav</a></li>
                                        <li><a href="index_7.html">Fixed Height Map + Search</a></li>
                                        <li><a href="index_8.html">Full Height Map + Search</a></li>
                                        <li><a href="index_9.html">Map Left + Search Right</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Properties <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Single Properties <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url()?>All-property">All Property</a></li>
                                                <li><a href="<?php echo base_url()?>All-property-grid">All Property Grid</a></li>
                                                <li><a href="<?php echo base_url()?>Single-property">Single Property</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agents <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="agents.html">Agents</a></li>
                                        <li><a href="agent_profile_grid.html">Agent Profile Grid</a></li>
                                        <li><a href="agent_profile_list.html">Agent Profile List</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="mission.html">Our Mission</a></li>
                                                <li><a href="career.html">Careers</a></li>
                                                <li><a href="award.html">Awards</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="my_profile.html">My Profile</a></li>
                                                <li><a href="profile_media.html">Social Media</a></li>
                                                <li><a href="my_properties.html">My Properties</a></li>
                                                <li><a href="my_favorite.html">Favorited Properties</a></li>
                                                <li><a href="submit_property.html">Submit New Property</a></li>
                                                <li><a href="message.html">Message</a></li>
                                                <li><a href="comments.html">Feedback and Comments</a></li>
                                                <li><a href="invoices.html">Payments and Invoice</a></li>
                                                <li><a href="change_password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="our_service.html">Our Service</a></li>
                                        <li><a href="submit_property.html">Submit Property</a></li>
                                        <li><a href="terms_and_condition.html">Terms And Condition</a></li>
                                        <li><a href="pricing_table.html">Pricing Table</a></li>
                                        <li><a href="invoice_details.html">Invoice</a></li>
                                        <li><a href="message_view.html">Message</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url()?>My_profile">my profile</a></li>
                                        <li><a href="<?php echo base_url()?>Fav_post">Fav posts</a></li>
                                        <li><a href="<?php echo base_url()?>New_post">New post</a></li>
                                        <li><a href="<?php echo base_url()?>My_post">My post</a></li>
                                        <li><a href="<?php echo base_url()?>Chng_pass">change paswsword</a></li>


                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>

                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Header End -->
</header>