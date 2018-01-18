<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title><?php echo $title ?></title>
</head>
<body>

<?php  if($this->session->userdata('login_type')=='0') {?>

<p>User Type:
    <?php if($res->user_type == "0"){
        echo "User";
    }?>
</p>
<p>User Nmae:  <?php echo $res->user_name; ?> </p>
<p>User Email:  <?php echo $res->user_email; ?> </p>
<p>User Phone:  <?php echo $res->user_phone; ?> </p>
<p>User Gender:
    <?php if($res->user_gender == "1"){
        echo "Male";
    }
    elseif($res->user_gender == "2"){
        echo "Female";
    }
    else{
        echo "Trans Gender";
    }?>
</p>
<p>User NID:  <?php echo $res->user_nid; ?> </p>
<p>User Status:
    <?php if($res->user_status == "0"){
        echo "Inactive";
    }
    elseif($res->user_status == "1"){
        echo "Active";
    }?>
</p>

<?php } elseif($this->session->userdata('login_type')=='1'){?>
    <p>User Type:
        <?php if($res->user_type == "1"){
            echo "Admin";
        }?>
    </p>
    <p>User Nmae:  <?php echo $res->user_name; ?> </p>
    <p>User Email:  <?php echo $res->user_email; ?> </p>
    <p>User Phone:  <?php echo $res->user_phone; ?> </p>
    <p>User Gender:
        <?php if($res->user_gender == "1"){
            echo "Male";
        }
        elseif($res->user_gender == "2"){
            echo "Female";
        }
        else{
            echo "Trans Gender";
        }?>
    </p>
    <p>User NID:  <?php echo $res->user_nid; ?> </p>
    <p>User Status:
        <?php if($res->user_status == "0"){
            echo "Inactive";
        }
        elseif($res->user_status == "1"){
            echo "Active";
        }?>
    </p>
<?php } ?>


<h2><a href="<?php echo base_url()?>Logout">logout</a></h2>

</body>
</html>