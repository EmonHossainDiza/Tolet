

<?php $this->load->view('header_footer/header');?>


<div class="log_reg_box_area">
    <div class="container">
        <div id="msg"><?php echo $this->session->flashdata('msg')?></div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-md-offset-right-4 from_box_area">
                <h2>LOGIN</h2>
                <div class="from_box login_box">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Profile">
                        <div class="input_title"> <i class="fa fa-envelope" aria-hidden="true"></i>Email:</div>
                        <input type="mail"  name="email" class="input_box">
                        <div class="input_title"><i class="fa fa-lock" aria-hidden="true"></i>Password:</div>
                        <input type="password"  name="password" class="input_box">
                        <input  type="submit" name="Login_submit" value="login"  class="submit_btn">
                    </form>
                    <a href="recover.html">Forgotten password?</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('header_footer/footer');?>