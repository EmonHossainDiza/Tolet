<!DOCTYPE html>
<html lang="en">

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
    <link rel="shortcut icon" href="<?php echo base_url()?>img/favicon.ico">


    <?php $this->load->view("css_js/common-css");?>

    <!-- login/Reg page -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login/main.css">
    <!-- end login/Reg page -->

</head>
<body class="pagewrap login_and_Signup">

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
                            <a class="navbar-brand" href="<?php echo base_url()?>"><img class="nav-logo" src="<?php base_url()?>assets/img/logo1.png" alt=""></a>
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
                                        <li><a href="index_2.html">Fixed Height Map</a></li>
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
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Property List <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="property_list.html">Right Sidebar</a></li>
                                                <li><a href="property_list_left.html">Left Sidebar</a></li>
                                                <li><a href="property_list_full.html">Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Property Grid <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="property_grid.html">Right Sidebar</a></li>
                                                <li><a href="property_grid_left.html">Left Sidebar</a></li>
                                                <li><a href="property_grid_full.html">Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Single Properties <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="single_property.html">Single Property 1</a></li>
                                                <li><a href="single_property_2.html">Single Property 2</a></li>
                                                <li><a href="single_property_3.html">Single Property 3</a></li>
                                                <li><a href="single_property_4.html">Single Property 4</a></li>
                                                <li><a href="single_property_5.html">Single Property 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Property With Map <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="property_grid_map.html">Grid View</a></li>
                                                <li><a href="property_list_map.html">List View</a></li>
                                                <li><a href="property_grid_fullmap.html">Grid View Full Map</a></li>
                                                <li><a href="property_list_fullmap.html">List View Full Map</a></li>
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
                                        <li class="active"><a href="submit_property.html">Submit Property</a></li>
                                        <li><a href="terms_and_condition.html">Terms And Condition</a></li>
                                        <li><a href="pricing_table.html">Pricing Table</a></li>
                                        <li><a href="invoice_details.html">Invoice</a></li>
                                        <li><a href="message_view.html">Message</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog_grid.html">Blog Grid</a></li>
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog_detail.html">Blog Detail</a></li>
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

<!--<section class="login-box">-->
<div  class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-110" method="post" action="<?php echo base_url()?>validateUser" onsubmit="return validateUser()">
					<span class="login100-form-title">
						Create An New Account
					</span>

                <div class="wrap-input100 validate-input m-b-10" data-validate="Please enter Your name">
                    <input class="input100" type="text" name="userName" id="userName" placeholder="Name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate="Please enter Your Email">
                    <input class="input100" type="email" name="userEmail" id="userEmail" placeholder="Email Address">
                    <span id="emailFocus" class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate="Please enter Your phone">
                    <input class="input100" type="text" name="userPhone" id="userPhone" placeholder="Phone">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" type="password" name="userPass" id="userPass" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="text-center p-t-0 p-b-16">

                    <input id="checkBox" type="checkbox">
                        <span class="txt1">
							I have read carefully and accept the
						</span>

                    <a href="#" class="txt2">
                        Terms and Condition
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="flex-col-c p-t-20">
                    <h3>OR</h3>
                    <p>Register In With</p>
                </div>

                <div class="flex-col-c p-t-20 p-b-20">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss icon" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook icon" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter icon" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle icon" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin icon" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

                <!---->
                <!--                <div class="flex-col-c p-t-50 p-b-40">-->
                <!--						<span class="txt1 p-b-9">-->
                <!--							Don’t have an account?-->
                <!--						</span>-->
                <!---->
                <!--                    <a href="#" class="txt3">-->
                <!--                        Sign up now-->
                <!--                    </a>-->
                <!--                </div>-->
            </form>
        </div>
    </div>
</div>
<!--</section>-->


<!-- Footer Section Start -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer_widget">
                    <div class="footer-logo"><a href="<?php echo base_url()?>"><img class="logo-bottom" src="<?php base_url()?>assets/img/logo2.png" alt=""></a></div>
                    <div class="footer_contact">
                        <p>Netus ut pede mus vestibulum montes. Mus. Pretium. Mattis habitant netus ligula ridiculus a nam bibendum fusce litora. Ac ullamcorper blandit, viverra pellentesque scelerisque. Phasellus aptent sociosqu nec posuere.</p>
                    </div>
                    <div class="socail_area">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_widget">
                    <div class="footer-title">
                        <h4>Get In Touch</h4>
                    </div>
                    <div class="footer_contact">
                        <ul>
                            <li> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="ftr-list">
                                    <h6 class="touch-title">Office Address</h6>
                                    <span>1707 Orlando Central pkwy ste 100 Orlando FL, USA</span>
                                </div>
                            </li>
                            <li> <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="ftr-list">
                                    <h6 class="touch-title">Call Us 24/7</h6>
                                    <span>(+241) 542 34251, (+241) 234 88232</span>
                                </div>
                            </li>
                            <li> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <div class="ftr-list">
                                    <h6 class="touch-title">Email Address</h6>
                                    <span>info@webmail.com</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_widget">
                    <div class="footer-title">
                        <h4>Quick Links</h4>
                    </div>
                    <div class="footer_contact">
                        <ul>
                            <li><a href="faq.html">Freequinly Ask Question</a></li>
                            <li><a href="about.html">About Our Company</a></li>
                            <li><a href="our_service.html">Our Professional Services</a></li>
                            <li><a href="terms_and_condition.html">Terms and Conditions</a></li>
                            <li><a href="submit_property.html">Submit Your Property</a></li>
                            <li><a href="#">Become A Member</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_area">
                    <div class="footer-title">
                        <h4>Newslatter</h4>
                    </div>
                    <div class="footer_contact">
                        <p>Subscribe to our newsletter and we will inform your about newset projects.</p>
                        <div class="news_letter">
                            <form action="#" method="post">
                                <input type="email" name="email" placeholder="Enter Your Email" class="news_email">
                                <button type="submit" name="submit" class="btn btn-default">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->

<!-- Scroll to top -->
<div class="scroll-to-top">
    <a href="#" class="scroll-btn" data-target=".pagewrap"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
<!-- End Scroll To top -->


</body>

</html>

<!-- All Javascript Plugin File here -->

<?php $this->load->view("css_js/common-js");?>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>

<!-- js for login/Reg -->
<script src="<?php echo base_url()?>assets/css/login/main.js"></script>
