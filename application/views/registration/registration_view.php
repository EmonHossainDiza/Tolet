

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


<section class="reg_popup">
    <!-- Modal -->
    <div id="myModal">
        <div class="modal-dialog toggle_area" role="document">
            <div class="modal-header toggle_header">
                <h4 class="inner-title"><?php if($this->session->userdata('lang')==2){ echo "একাউন্ট তৈরি করুন ";} else{ echo "Create An Account";}?></h4>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Registration/Survey">

                    <div class="signup_option">
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="<?php if($this->session->userdata('lang')==2){ echo "নাম ";} else{ echo "name";}?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="<?php if($this->session->userdata('lang')==2){ echo "ইমেইল ";} else{ echo "Email Address";}?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="<?php if($this->session->userdata('lang')==2){ echo "ফোন ";} else{ echo "Phone";}?>">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="<?php if($this->session->userdata('lang')==2){ echo "পাসওয়ার্ড ";} else{ echo "Password";}?>">
                        </div>
                        <div class="form-group">
                            <input id="checkBox" type="checkbox">  <?php if($this->session->userdata('lang')==2){ echo "হ হ  <a href=\"#\">নিয়মনীতি </a> পইড়া নিসি ";} else{ echo "I have read carefully and accept the <a href=\"#\">Terms and Condition";}?>
                        </div>
                    </div>
                    <div class="submit_area">
                        <button type="submit" name="reg" class="btn btn-default"><?php if($this->session->userdata('lang')==2){ echo "সাইন আপ ";} else{ echo "Sign Up";}?></button>
                    </div>
                </form>

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


