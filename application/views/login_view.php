<!doctype html>
<html class="no-js" lang="zxx">

 <head>
     <title><?php echo $title;?></title>
 </head>
<body>

<form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Profile">
    <fieldset>
        <div id="msg"><?php echo $this->session->flashdata('msg')?></div>
        <div class="row">
            <h3>Login</h3>
            <div class="form-group">
                <label>Username or email address *</label>
                <input class="form-control" name="email"  type="email">
            </div>
            <div class="form-group">
                <label>Password *</label>
                <input class="form-control" name="password"  type="password">
            </div>
            <div class="form-group btn-register">
                <button class="btn-send" type="submit" name="Login_submit">Login</button>
            </div>
        </div>
    </fieldset>
</form>

<h2><a href="<?php echo base_url()?>">Home</a></h2>

</body>
</html>