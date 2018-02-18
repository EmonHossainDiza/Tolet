
<link href="<?php echo base_url()?>assets/css/datepicker.css" rel="stylesheet" media="screen">




<form action="<?php echo base_url()?>Add-Family-Post" enctype="multipart/form-data" method="post" class="submit_form">
    <input type="hidden" name="category_id" id="category_id" class="form-control">
    <div class="basic_information">
        <h4 class="inner-title">Basic Information</h4>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <input type="text" name="post_title" placeholder="Property Title" class="form-control" required>
            </div>
            </div>
        </div>
    </div>


    <div class="basic_information">
        <h4 class="inner-title">Common Infomation</h4>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <label for="feature_2">No. of Room</label>
                <input type="text" name="room_number" placeholder="No. of Room" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="feature_2">No. of Bathroom</label>
                <input type="text" name="bathroom_number" placeholder="No. of Bathroom" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="feature_2">No. of Balcony</label>
                <input type="text" name="balcony_number" placeholder="No. of Balcony" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="feature_2">Area (Sqft)</label>
                <input type="text" name="area_sqft" placeholder="Area (Sqft)" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="feature_2">Floor</label>
                <input type="text" name="floor_number" placeholder="Floor" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="feature_2">Contact No</label>
                <input type="text" name="contact_number" placeholder="Contact No" class="form-control" oninput="this.value = this.value.replace(/[^0-9+]/g, '');" required>
            </div>

            <div class="col-md-4 col-sm-4">
                <label for="feature_2">Rent Date</label>
<!--                <input type="text" name="rent_date" placeholder="Rent Date" class="datepicker" data-date-format="mm/dd/yyyy">-->
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' id="eventStartDateTime" name="rent_date" placeholder="dd-mm-yyy"  class="form-control" required/>
                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="feature_2">Rent Amount</label>
                <input type="text" name="rent_amount" placeholder="Rent Amount" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="feature_2">Advance Rent Amount</label>
                <input type="text" name="advance_rent_amount" placeholder="Advance Rent Amount" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            </div>
            <div class="col-md-12">
                <div class="important_facts">
                    <label>Is rent amount negotiable?</label>
                    <div class="radio_check">
                        <input type="checkbox" name="negotiable_check" id="radio_2" name="question" value="1">
                        <label for="radio_2"><span>No</span><span>Yes</span></label>
                    </div>
                </div>
                <div class="important_facts">
                    <label>Do you have any installment system for payment?</label>
                    <div class="radio_check">
                        <input type="checkbox" name="installment_check" id="radio_1" name="question" value="1">
                        <label for="radio_1"><span>No</span><span>Yes</span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="property_location">
        <h4 class="inner-title">Property Location</h4>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <label for="feature_2">Property Adddress</label>
                        <input type="text" placeholder="Property Adddress" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="feature_2">State</label>
                        <input type="text" placeholder="State" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="feature_2">City</label>
                        <input type="text" placeholder="City" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="feature_2">Zip Code</label>
                        <input type="text" placeholder="Zip Code" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label for="feature_2">Select City</label>
                        <select class="selectpicker form-control" data-live-search="true">
                            <option>Selcet Country</option>
                            <option>USA</option>
                            <option>Germany</option>
                            <option>Netherland</option>
                            <option>France</option>
                            <option>England</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="check_feature">
        <h4 class="inner-title">check feature</h4>
        <div class="row">
            <div class="check_submit">
                <ul>
                    <li>
                        <input id="feature_1" name="cc_camera" value="1" type="checkbox" class="submit_checkbox">
                        <label for="feature_1"></label>
                        <span>CC Camera</span>
                    </li>
                    <li>
                        <input id="feature_2" name="car_parking" value="1" type="checkbox" class="submit_checkbox">
                        <label for="feature_2"></label>
                        <span>Car Parking</span>
                    </li>
                    <li>
                        <input id="feature_3" name="lift" value="1" type="checkbox" class="submit_checkbox">
                        <label for="feature_3"></label>
                        <span>Lift</span>
                    </li>
                    <li>
                        <input id="feature_4" name="generator" value="1" type="checkbox" class="submit_checkbox">
                        <label for="feature_4"></label>
                        <span>Generator</span>
                    </li>
                    <li>
                        <input id="feature_5" name="play_ground" value="1" type="checkbox" class="submit_checkbox">
                        <label for="feature_5"></label>
                        <span>Play Ground</span>
                    </li>
                    <li>
                        <input id="feature_6" name="water_gas_eclectricity" value="1" type="checkbox" class="submit_checkbox">
                        <label for="feature_6"></label>
                        <span>24x7 Water, Gas, Electricity</span>
                    </li>
                    <li>
                        <input id="feature_7" name="security_guard" value="1" type="checkbox" class="submit_checkbox">
                        <label for="feature_7"></label>
                        <span>Security Guard</span>
                    </li>
                    <li>
                        <input id="feature_8" name="geyser" value="1" type="checkbox" class="submit_checkbox">
                        <label for="feature_8"></label>
                        <span>Geyser</span>
                    </li>

                </ul>
            </div>
        </div>
        <div class="alert alert-warning">Check the extra features and facility of the property, it will show with the property.</div>
    </div>



    <div class="description">
        <h4 class="inner-title">Description</h4>
        <textarea name="post_description" placeholder="Type Description..." class="form_description" required></textarea>
        <div class="alert alert-warning">Need a proper description about the property. So that client can easily understand about the property.</div>
    </div>



    <div class="upload_media">
        <div class="row">
            <div class="col-md-12">
                <div class="browse_submit">
                    <span>Add photos</span>
                    <input type="file" name="post_image" id="fileupload-example-1"/>
                    <label class="fileupload-example-label" for="fileupload-example-1">Drop your photos here or Click</label>
                </div>
            </div>
        </div>
        <div class="alert alert-warning">Please uplaod the photo of the property, please keep the photo size 760X410 ratio and please upload the PDF or Doc file at the document attachment.</div>
    </div>


    <div class="property_owner">
        <div class="browse_submit">
            <button name="SubmitPost" class="btn btn-default">submit property</button>
            <p><span>note</span> : Your property will under review for 24 Hours after submission *</p>
        </div>
    </div>
</form>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/datepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>
<!---->
<!--<script>-->
<!--    $('.datepicker').datepicker({-->
<!--        format: 'mm/dd/yyyy',-->
<!--        startDate: '-3d'-->
<!--    });-->
<!--</script>-->