
<?php $this->load->view('header_footer/header');?>
		
		<!-- Submit Property Start -->
		<section id="submit_property">
			<div class="container">
				<div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="settings_links">
                            <ul>
                                <li><span>Account Settings</span></li>
                                <li class="active"><a href="<?php echo base_url()?>My_profile"><i class="flaticon-user"></i>My Profile</a></li>
                            </ul>
                            <ul>
                                <li><span>Manage Properties</span></li>
                                <li><a href="<?php echo base_url()?>My_post"><i class="flaticon-home"></i>My Post</a></li>
                                <li><a href="<?php echo base_url()?>Fav_post""><i class="flaticon-star"></i>Favorited Properties</a></li>
                                <li><a href="<?php echo base_url()?>New_post""><i class="flaticon-export"></i>Submit New Property</a></li>
                            </ul>
                            <!-- <ul>
                                <li><a href="message.html"><i class="flaticon-notification"></i>Message <sup><i class="fa fa-circle" aria-hidden="true"></i></sup> <span>( 20 )</span></a></li>
                                <li><a href="comments.html"><i class="flaticon-chat"></i>Feedback and Comments</a></li>
                                <li><a href="invoices.html"><i class="flaticon-invoice"></i>Payments and Invoice</a></li>
                            </ul> -->
                            <ul>
                                <li><a href="change_password.html"><i class="flaticon-locked"></i>Change Password</a></li>
                                <li><a href="logout.html"><i class="flaticon-upload"></i>Log Out</a></li>
                            </ul>
                        </div>
                    </div>

					<div class="col-md-8 col-sm-12">
                        <div class="col-md-12 col-sm-12">
                            <label>Choose Property Type</label>
                            <select id="requiredInfoByCategory" class="selectpicker form-control" data-live-search="true" onchange="requiredInfoByCategory()">

                                <option value="">Selcet Post Type</option>
                                <?php foreach ($catInfo as $cinfo) { ?>

                                <option value="<?php echo $cinfo->post_category_id; ?>"><?php echo $cinfo->post_category_name; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div id="post_type_error" style="display: none;">
                            <!-- <div class="alert alert-warning" style="margin-left: 0px; width: 20%;">Please choose Property Type.</div> -->
                            <div class="alert alert-warning">Please choose Property Type.</div>
                        </div>


                        <div id="postInformation" style="margin-top: 90px;">



                        </div>
					</div>
				</div>
			</div>
		</section>
		<!-- Submit Property End -->

		<?php $this->load->view('header_footer/footer');?>

<script>
    function requiredInfoByCategory() {
        var x = $('#requiredInfoByCategory').val();

        if(x == ''){
            //alert('Please select post type.');
            $('#post_type_error').show();
            $('#postInformation').hide();
            $('#postInformation').html('');
            return false;
        }

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("UserPanel/PostController/requiredInfoByCategory")?>',
            data:{'catId':x},
            cache: false,
            success:function(data)
            {
                $('#post_type_error').hide();
                $('#postInformation').show();
                $('#postInformation').html(data);
                $('#category_id').val(x);

            }
        });
    }
</script>
