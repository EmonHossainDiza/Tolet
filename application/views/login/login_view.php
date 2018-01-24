

<?php $this->load->view('header_footer/header');?>

<!-- Banner Section Start -->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_area">
                    <img src="<?php base_url()?>assets/img/banner/banner.png"/>
<!--                    <h3 class="page_title">Sign In</h3>-->
<!--                    <div class="page_location">-->
<!--                        <a href="index_1.html">Home</a>-->
<!--                        <i class="fa fa-angle-right" aria-hidden="true"></i>-->
<!--                        <span>Sign In</span>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="login-box">
    <!-- Modal -->
    <div id="myModal_two">
        <div class="modal-dialog toggle_area" role="document">
            <div class="modal-header toggle_header">
                <h4 class="inner-title">Sign In Account</h4>
            </div>
            <div class="modal-body login_body">
                <p>Welcome to Uniland, please sign in general user or agent both!</p>
                <div class="login_option">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Profile">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Login_submit" class="btn btn-default">Sign In</button>
                        </div>
                    </form>
                </div>
                <div class="submit_area"><span>Lost your password? <a href="#">click here</a></span></div>
            </div>
            <div class="modal-footer"> <span>Click and read our terms and condition<a href="#">Terms and Condition</a></span> </div>
        </div>
    </div>
</section>

<!-- Banner Section Start -->
<section id="banner2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_area2">
                    <img src="<?php base_url()?>assets/img/banner/banner.png"/>
<!--                    <h3 class="page_title2">Sign In</h3>-->
<!--                    <div class="page_location2">-->
<!--                        <a href="index_1.html">Home</a>-->
<!--                        <i class="fa fa-angle-right" aria-hidden="true"></i>-->
<!--                        <span>Sign In</span>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('header_footer/footer');?>