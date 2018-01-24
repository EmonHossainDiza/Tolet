

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

<section class="reg_popup">
    <!-- Modal -->
    <div id="myModal">
        <div class="modal-dialog toggle_area" role="document">
            <div class="modal-header toggle_header">
                <h4 class="inner-title">Create An Account</h4>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Registration/Survey">

                    <div class="signup_option">
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="submit_area">
                        <button type="submit" name="reg" class="btn btn-default">Sign Up</button>
                    </div>
                </form>

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