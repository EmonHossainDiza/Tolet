/* This showResult function is used as the callback function*/

function showResult(result) {
    var latitude = result.geometry.location.lat();
    var longitude = result.geometry.location.lng();

    //$('#property_location_map').html(latitude+', '+longitude);
    
    showMap(latitude, longitude)
}

function getLatitudeLongitude(callback, address) {
    // If adress is not supplied, use default value 'Ferrol, Galicia, Spain'
    address = address || 'Ferrol, Galicia, Spain';
    // Initialize the Geocoder
    geocoder = new google.maps.Geocoder();
    if (geocoder) {
        geocoder.geocode({
            'address': address
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                callback(results[0]);
            }
        });
    }
}


var address;
function get_property_location_map(){
    var post_address = $('#post_address').val();
    var post_state = $('#post_state').val();
    var post_city = $('#post_city').val();
    var post_zip = $('#post_zip').val();
    var post_division = $('#post_division').val();
    var post_country = $('#post_country').val();

    address = post_address+' , '+post_state+' , '+post_city+' , '+post_zip+' , '+post_division+' , '+post_country;
    
    //console.log(address);
    //exit();
    


    getLatitudeLongitude(showResult, address)
}

function showMap(latitude, longitude) {
    $('#property_location_map').show();
    
    //var latlng = new google.maps.LatLng(51.4975941, -0.0803232);
    var latlng = new google.maps.LatLng(latitude, longitude);
    //alert(latitude+', '+longitude);

    $('#property_location_map_lat_long').html(latitude.toFixed(4)+', '+longitude.toFixed(4));

    var map = new google.maps.Map(document.getElementById('property_location_map'), {
        center: latlng,
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });


    /****** Info Window Contents *******/
    var contentString = '<div class="info_content">' +
        '<p>'+address+'</p>' + '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });




    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'Set lat/lon values for this property',
        draggable: true
    });
    google.maps.event.addListener(marker, 'dragend', function(a) {
        //console.log(a);
        infowindow.open(map,marker);
        $('#property_location_map_lat_long').html(a.latLng.lat().toFixed(4) + ', ' + a.latLng.lng().toFixed(4));

    });
    /****** Info Window Without Click *******/
    infowindow.open(map,marker);
}
