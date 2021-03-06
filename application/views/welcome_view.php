<!DOCTYPE html>
<html>
<head>
    <title>map</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <input type="hidden" name="baseUrl" id="baseUrl" value="<?php echo base_url(); ?>">
<script type="text/javascript">
    $(document).ready(function() {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var width = $( window ).width();
                var height = $( window ).height();
                var base_url = $('#baseUrl').val();
                var main_url = base_url + 'Welcome/view_user_info';
                //var manage_video_id = $('#manage_single_video_id').val();
                var formdata = new FormData();
                formdata.append("latitude", latitude);
                formdata.append("longitude", longitude);
                formdata.append("width", width);
                formdata.append("height", height);

                $.ajax({
                    url: main_url,
                    type: "POST",
                    data: formdata,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data)
                    {
                        info = JSON.parse(data);
                        $('#user_data').html(info['geo']['geo_city_name']+'<br>'+info['geo']['geo_country_name']+'<br>'+info['geo']['geo_latitude_longitude']+'<br>');
                        $('#user_data1').html(info['view']['view_content_info_device_name']+'<br>'+info['view']['view_content_info_device_resolution']+'<br>'+info['view']['view_content_info_visitor_ip_address']+'<br>'+info['view']['view_content_info_visitor_browser']+'<br>'+info['view']['view_content_info_visitor_referrer']);
                    }
                });
            });
        }
    });

</script>
<br>
<p id="demo">Click the button to get your position.</p>


<div id="user_data"></div>
<div id="user_data1"></div>
<div id="mapholder"></div>


<!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyDhtdWgnJBSZl7DNaIMgPCIf2qhSBW7bWM"></script> -->

<script>
    // var x = document.getElementById("demo");

    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(showPosition, showError);
    //     } else {
    //         x.innerHTML = "Geolocation is not supported by this browser.";
    //     }

    // function showPosition(position) {
    //     x.innerHTML = "Latitude: " + position.coords.latitude +
    //         "<br>Longitude: " + position.coords.longitude;

    //     var lat = position.coords.latitude;
    //     var lon = position.coords.longitude;

    //     var latlon = new google.maps.LatLng(lat, lon);
    //     var mapholder = document.getElementById('mapholder');
    //     mapholder.style.height = '250px';
    //     mapholder.style.width = '250px';

    //     var myOptions = {
    //         center:latlon,zoom:14,
    //         mapTypeId:google.maps.MapTypeId.ROADMAP,
    //         mapTypeControl:false,
    //         navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    //     }

    //     var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
    //     var marker = new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
    // }

    // function showError(error) {
    //     switch(error.code) {
    //         case error.PERMISSION_DENIED:
    //             x.innerHTML = "User denied the request for Geolocation."
    //             break;
    //         case error.POSITION_UNAVAILABLE:
    //             x.innerHTML = "Location information is unavailable."
    //             break;
    //         case error.TIMEOUT:
    //             x.innerHTML = "The request to get user location timed out."
    //             break;
    //         case error.UNKNOWN_ERROR:
    //             x.innerHTML = "An unknown error occurred."
    //             break;
    //     }
    // }




</script>
</br>
<h2><a href="<?php echo base_url()?>Login">Login</a></h2>
</br>
<h2><a href="<?php echo base_url()?>Registration">Registration</a></h2>

</body>
</html>
