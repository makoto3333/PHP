
function mapInit() {
    'use strict';
    var myLatLng = {lat:36.370943, lng: 140.476308};
    var centerPosition = new google.maps.LatLng(myLatLng);
    var option = {
        zoom : 16,
        center : centerPosition,
        mapTypeId : google.maps.MapTypeId.ROADMAP
    };
    //地図本体描画
    var googlemap = new google.maps.Map(document.getElementById("mapField"), option);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: googlemap,
        title: 'This is Mito St.'
    });

};

document.write("<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDcmRRFYf5tx9Z4ZvcAju00xDcvBg0DqAY&callback=mapInit'></script>");

 mapInit();

