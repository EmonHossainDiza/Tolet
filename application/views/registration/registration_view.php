

<?php $this->load->view('header_footer/header');?>


<div class="log_reg_box_area reg_box_area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-md-offset-right-4 from_box_area">
                <h2>SING UP</h2>
                <div class="from_box sing_upbox">
                    <form action="">
                        <div class="input_title"> <i class="fa fa-user" aria-hidden="true"></i>Name:</div>
                        <input type="text"  name="" class="input_box">
                        <div class="input_title"> <i class="fa fa-envelope" aria-hidden="true"></i>Email:</div>
                        <input type="mail"  name="" class="input_box">
                        <div class="input_title"><i class="fa fa-lock" aria-hidden="true"></i>Password:</div>
                        <input type="password"  name="" class="input_box">
                        <div class="input_title"><i class="fa fa-lock" aria-hidden="true"></i>Confirm Password:</div>
                        <input type="password"  name="" class="input_box">
                        <input  type="submit" name="" value="Next"  class="submit_btn">
                    </form>
                    <h3>Alternative Singup</h3>
                    <div class="alter_sing">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('header_footer/footer');?>