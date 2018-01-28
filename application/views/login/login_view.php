

<?php $this->load->view('header_footer/header');?>

<!-- Advertisement Section Start -->
<section class="header_adv">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header_adv_area">
                    <img src="<?php base_url()?>assets/img/banner/banner.png"/>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="login-box">
    <div id="msg"><?php echo $this->session->flashdata('msg')?></div>
    <!-- Modal -->
    <div id="myModal_two">
        <div class="modal-dialog toggle_area" role="document">
            <div class="modal-header toggle_header">
                <h4 class="inner-title"><?php if($this->session->userdata('lang')==2){ echo "সাইন ইন করুন";} else{ echo "Sign In Account";}?></h4>
            </div>
            <div class="modal-body login_body">
<!--                <p>Welcome to Uniland, please sign in general user or agent both!</p>-->
                <div class="login_option">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Profile">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="<?php if($this->session->userdata('lang')==2){ echo "ইমেইল ";} else{ echo "Email Address";}?>">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="<?php if($this->session->userdata('lang')==2){ echo "পাসওয়ার্ড";} else{ echo "password";}?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Login_submit" class="btn btn-default"><?php if($this->session->userdata('lang')==2){ echo "সাইন ইন করুন";} else{ echo "Sign In";}?></button>
                        </div>
                    </form>
                </div>
                <div class="submit_area"><span><?php if($this->session->userdata('lang')==2){ echo "হারাইয়া গেসে?<a href=\"#\">গুতা দে</a>";} else{ echo "Lost Your Password? <a href=\"#\">click here</a>";}?></span></div>
            </div>
            <div class="modal-footer"> <span><?php if($this->session->userdata('lang')==2){ echo "কিল্ক করুন <a href=\"#\">নিয়মনীতি</a> সম্পর্কে জানতে ";} else{ echo "Click and read our terms and condition<a href=\"#\">Terms and Condition</a>";}?></span> </div>
        </div>
    </div>
</section>


<!-- Advertisement Section Start -->
<section class="footer_adv">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer_adv_area">
                    <img src="<?php base_url()?>assets/img/banner/banner.png"/>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('header_footer/footer');?>