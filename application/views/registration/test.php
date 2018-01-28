<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/color.css" id="color-change">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/responsive.css">

<style type="text/css">
    /* Base CSS */
    #pswd_info {
        background: #dfdfdf none repeat scroll 0 0;
        color: #fff;
        left: 20px;
        position: absolute;
        top: 115px;
    }
    #pswd_info h4{
        background: black none repeat scroll 0 0;
        display: block;
        font-size: 14px;
        letter-spacing: 0;
        padding: 17px 0;
        text-align: center;
        text-transform: uppercase;
    }
    #pswd_info ul {
        list-style: outside none none;
    }
    #pswd_info ul li {
        padding: 10px 45px;
    }

    .valid {
        background: rgba(0, 0, 0, 0) url("https://s19.postimg.org/vq43s2wib/valid.png") no-repeat scroll 2px 6px;
        color: green;
        line-height: 21px;
        padding-left: 22px;
    }

    .invalid {
        background: rgba(0, 0, 0, 0) url("https://s19.postimg.org/olmaj1p8z/invalid.png") no-repeat scroll 2px 6px;
        color: red;
        line-height: 21px;
        padding-left: 22px;
    }

    #pswd_info::before {
        background: #dfdfdf none repeat scroll 0 0;
        content: "";
        height: 25px;
        left: -13px;
        margin-top: -12.5px;
        position: absolute;
        top: 86%;
        transform: rotate(45deg);
        width: 25px;
    }
    #pswd_info {
        display:none;
    }

</style>
</head>
<body>



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
                            <input type="text" id="name" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="phone" id="phone" class="form-control" placeholder="phone number">
                        </div>
                        <div class="form-group">
                            <input type="password" id="paw" class="form-control" placeholder="Password">
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

            <div class="modal-footer"> <span><?php if($this->session->userdata('lang')==2){ echo "কিল্ক করুন <a href=\"#\">নিয়মনীতি</a> সম্পর্কে জানতে ";} else{ echo "Click and read our terms and condition <a href=\"#\">Terms and Condition</a>";}?></span> </div>
        </div>

<!--        <div style="position: relative" class="col-md-4">-->
<!--            <div style="background-color: white;" class="aro-pswd_info">-->
<!--                <div id="pswd_info">-->
<!--                    <h4>Password must be requirements</h4>-->
<!--                    <ul>-->
<!--                        <li id="letter" class="invalid">At least <strong>one letter</strong></li>-->
<!--                        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>-->
<!--                        <li id="number" class="invalid">At least <strong>one number</strong></li>-->
<!--                        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>-->
<!--                        <li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>




</body>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('input[type=password]').keyup(function() {
            var pswd = $(this).val();

            //validate the length
            if ( pswd.length < 8 ) {
                $('#length').removeClass('valid').addClass('invalid');
            } else {
                $('#length').removeClass('invalid').addClass('valid');
            }

            //validate letter
            if ( pswd.match(/[A-z]/) ) {
                $('#letter').removeClass('invalid').addClass('valid');
            } else {
                $('#letter').removeClass('valid').addClass('invalid');
            }

            //validate capital letter
            if ( pswd.match(/[A-Z]/) ) {
                $('#capital').removeClass('invalid').addClass('valid');
            } else {
                $('#capital').removeClass('valid').addClass('invalid');
            }

            //validate number
            if ( pswd.match(/\d/) ) {
                $('#number').removeClass('invalid').addClass('valid');
            } else {
                $('#number').removeClass('valid').addClass('invalid');
            }

            //validate space
            if ( pswd.match(/[^a-zA-Z0-9\-\/]/) ) {
                $('#space').removeClass('invalid').addClass('valid');
            } else {
                $('#space').removeClass('valid').addClass('invalid');
            }

        }).focus(function() {
            $('#pswd_info').show();
        }).blur(function() {
            $('#pswd_info').hide();
        });

    });
</script>