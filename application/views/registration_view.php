<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title><?php echo $title;?></title>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Registration/Survey">
    <fieldset>
        <div id="msg"><?php echo $this->session->flashdata('msg')?></div>
        <div class="row">
            <h3>Login</h3>
            <div class="form-group">
                <label>Username *</label>
                <input class="form-control" name="uname"  type="text">
            </div>
            <div class="form-group">
                <label>email address *</label>
                <input class="form-control" name="email"  type="email">
            </div>
            <div class="form-group">
                <label>Phone *</label>
                <input class="form-control" name="phone"  type="text">
            </div>
            <div class="form-group">
                <label>Password *</label>
                <input class="form-control" name="password"  type="password">
            </div>
            <div class="form-group">
                <label>Are you agree?</label>
                <input class="form-control" name="condition"  type="checkbox" value="agreed">I agree with all terms & condition<br>
            </div>
            <div class="form-group btn-register">
                <button class="btn-send" type="submit" name="reg_submit">Submit</button>
            </div>
        </div>
    </fieldset>
</form>

<h2><a href="<?php echo base_url()?>">Home</a></h2>

</body>
</html>