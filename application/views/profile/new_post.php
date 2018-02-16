
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
                                <option>Selcet Post Type</option>
                                <option value="1">Family</option>
                                <option>Sublet</option>
                                <option>Bechelor-Mess</option>
                            </select>
                        </div>


                        <div id="postInformation" >



                        </div>
					</div>
				</div>
			</div>
		</section>
		<!-- Submit Property End -->

		<?php $this->load->view('header_footer/footer');?>

<script>
    function requiredInfoByCategory() {
        var x = document.getElementById('requiredInfoByCategory').value;


        $.ajax({
            type:'POST',
            url:'<?php echo base_url("UserPanel/PostController/requiredInfoByCategory")?>',
            data:{'catId':x},
            cache: false,
            success:function(data)
            {
                $('#postInformation').html(data);
            }
        });

        document.getElementById("postInformation").style.display ="block";
    }
</script>
