let map;

let markers = [];

let info = new google.maps.InfoWindow();

function initMap() {

    // Styles for map
    // https://developers.google.com/maps/documentation/javascript/styling
    let styles = [

        // Hide Google's labels
        {
            featureType: "all",
            elementType: "labels",
            stylers: [
                { visibility: "off" }
            ]
        },

        // Hide roads
        {
            featureType: "road",
            elementType: "geometry",
            stylers: [
                { visibility: "off" }
            ]
        }

    ];

    // Options for map
    // https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    let options = {
        center: { lat: 22.1127045, lng: -101.0262814 }, // SLP, Mexico
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        maxZoom: 14,
        panControl: true,
        styles: styles,
        zoom: 13,
        zoomControl: true
    };

    // Get DOM node in which map will be instantiated

    // Instantiate map
    map = new google.maps.Map(document.getElementById("GooglMap"), options);

    // Configure UI once Google Map is idle (i.e., loaded)

};


// Add marker for place to map
function addMarker(place) {
    const marker = new google.maps.Marker({
        label: place.place_name + ', ' + place.admin_name1,
        position: { lat: place.latitude, lng: place.longitude },
        icon: {
            url: 'https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi-dotless_hdpi.png',
            size: new google.maps.Size(22, 40),
            scaledSize: new google.maps.Size(22, 40),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(11, 40),
            labelOrigin: new google.maps.Point(11, 50)
        }
    });

    marker.setMap(map);
    marker.addListener('click', function() {
        showInfo(marker);

    });

    markers.push(marker);

    // TODO
}







// Remove markers from map
function removeMarkers() {
    markers.forEach(function(marker) {
        marker.setMap(null);
    });

    markers.length = 0;
    // TODO
}





// Show info window at marker with content
function showInfo(marker, content) {
    // Start div
    let div = "<div id='info'>";
    if (typeof(content) == "undefined") {
        // http://www.ajaxload.info/
    } else {
        div += content;
    }

    // End div
    div += "</div>";

    // Set info window's content
    info.setContent(div);

    // Open info window (if not already open)
    info.open(map, marker);
}
