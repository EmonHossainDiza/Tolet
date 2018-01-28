
<?php $this->load->view('header_footer/header');?>

  
    <!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhtdWgnJBSZl7DNaIMgPCIf2qhSBW7bWM&callback=initMap">
    </script> -->
  
  <!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Current Location</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #latlng {
        width: 225px;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
  <h4><a href="<?php echo base_url()?>Login">Login</a></h4>
  <h4><a href="<?php echo base_url()?>Registration">Registration</a></h4>

<!--  <div>-->
<!--      --><?php //
//        echo "<pre>";
//        print_r($view_content_info);
//        ?>
<!--        <br>-->
<!--    </div>-->
    <div id="floating-panel">
      <!-- <input id="latlng" type="text" value="40.714224,-73.961452"> -->
      <input id="latlng" type="text" value="">
      <!-- <input id="submit" type="button" value="Reverse Geocode"> -->
    </div>
    <div id="map"></div>
    <script>
      $(document).ready(function() {
        var latitude;
        var longitude;
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                 latitude = position.coords.latitude;
                 longitude = position.coords.longitude;
                $('#latlng').val(latitude+','+longitude);

                  initMap();
                });
        }
      });
    
      function initMap() {
        var input = document.getElementById('latlng').value;
        var latlngStr = input.split(',', 2);
        var lat_v = parseFloat(latlngStr[0])
        var lng_v = parseFloat(latlngStr[1]);

        //alert(input+','+lat_v+','+lng_v);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: {lat: lat_v, lng: lng_v}
        });
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
        
        geocodeLatLng(geocoder, map, infowindow);
        // document.getElementById('submit').addEventListener('click', function() {
        //   geocodeLatLng(geocoder, map, infowindow);
        // });
      }

      function geocodeLatLng(geocoder, map, infowindow) {
        var input = document.getElementById('latlng').value;
        var latlngStr = input.split(',', 2);

        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        //alert(input+','+latlng);
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
              map.setZoom(17);
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            //window.alert('Geocoder failed due to: ' + status);
          }
        });
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhtdWgnJBSZl7DNaIMgPCIf2qhSBW7bWM&callback=initMap">
    </script>
  </body>
</html>

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

<!-- Property Tab -->
<section id="property-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-row">
                    <h3 class="section_title_blue">Featured <span>e -Tolet</span></h3>
                    <div class="sub-title">
                        <p>Let us find your home</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-section">
                    <div class="auto-container">
                        <!--Filter-->
                        <div class="filters">
                            <ul class="filter-tabs filter-btns clearfix anim-3-all">
                                <li class="active filter" data-role="button" data-filter="all">All</li>
                                <li class="filter" data-role="button" data-filter=".house">Appartment</li>
                                <li class="filter" data-role="button" data-filter=".office">Office</li>
                                <li class="filter" data-role="button" data-filter=".appartment">Sublet</li>
                                <li class="filter" data-role="button" data-filter=".realty">Mess</li>
                            </ul>
                        </div>
                        <!--Filter List-->

                        <!-- Tab Content -->
                        <div class="row filter-list clearfix">
                            <div class="column mix mix_all house appartment col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-1.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Lovelece Road Greenfield</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 528 Poplar Chase Lane Boise</span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$1250/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all house appartment col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-2.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Park Road Appartment Rent</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 3225 George Street Brooksville, FL 34610</span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$1250/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all office realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-3.png" alt=""></a>
                                        <div class="sale_amount">3 Days Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Rose Villa Infront Of River</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 3175 Isaacs Creek Road New Canton</span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$1250/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all office appartment col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">sale</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-4.png" alt=""></a>
                                        <div class="sale_amount">14 Days Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Dulax Condos Include Hall</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 1566 Warner Street Doral, FL 33178 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$350,000</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all house realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-5.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Forest House For Holiday Tour</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>4515 Duncan Avenue New York, NY 116 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$850/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all office realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Sale</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-6.png" alt=""></a>
                                        <div class="sale_amount">1 Month Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">New Developed Condos</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>367 Sharon Lane South Bend, IN 4601 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$152,000</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all office realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Sale</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-7.png" alt=""></a>
                                        <div class="sale_amount">4 Days Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Single Villa with Ground</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>367 Sharon Lane South Bend, IN 4601 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$152,000</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all office realty col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Sale</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-8.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">New Appartment Interior</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>367 Sharon Lane South Bend, IN 4601 </span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$250,000</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column mix mix_all house appartment col-md-4 col-sm-6 col-xs-12">
                                <div class="property_grid">
                                    <div class="img_area">
                                        <div class="sale_btn">Rent</div>
                                        <div class="featured_btn">Featured</div>
                                        <a href="#"><img src="<?php base_url()?>assets/img/property_grid/property_grid-1.png" alt=""></a>
                                        <div class="sale_amount">12 Hours Ago</div>
                                        <div class="hover_property">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-text">
                                        <a href="#"><h6 class="property-title">Lovelece Road Greenfield</h6></a>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> 528 Poplar Chase Lane Boise</span>
                                        <div class="quantity">
                                            <ul>
                                                <li><span>Area</span>1600 Sqft</li>
                                                <li><span>Rooms</span>9</li>
                                                <li><span>Beds</span>4</li>
                                                <li><span>Baths</span>3</li>
                                                <li><span>Garage</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bed_area">
                                        <ul>
                                            <li>$1250/mo</li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End tab content -->
                    </div>
                </div>
            </div>
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