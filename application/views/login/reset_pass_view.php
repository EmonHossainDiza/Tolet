

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
                <h4 class="inner-title">Reset Password</h4>
            </div>
            <div class="modal-body login_body">
                <div class="login_option">
                    <form method="post" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <input type="email" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="conpassword" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Login_submit" class="btn btn-default">Update</button>
                        </div>
                    </form>
                </div>
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