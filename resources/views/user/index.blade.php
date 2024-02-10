<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kyusi-Ligtas</title>
    <style>
        #map {
            height: 100svh;
            width: 80%;
            padding: 0 5px;
        }

        body {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        #form {
            width: auto;
            display: flex;
            flex-direction: column;
        }

        #form input {
            width: 100%;
            margin: 5px 0;
        }

        #form select {
            width: 100%;
            margin: 5px 0;
        }

        #form label {
            margin: 15px 0 0 0;
        }

        #form button {
            margin: 15px 0;
            padding: 5px;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body class="">
    <div id = "form">
        <h1>Incident Reporting</h1>
        <label for="location">Location</label>
        <input type="text" id="location" placeholder="Location">
        <label for="type">Emergency Type</label>
        <select name="type" id="type">
            <option value="N/A">Please Select Emergency Type</option>
            @foreach ($incident_types as $incident_type)
                <option value="{{ $incident_type }}">{{ $incident_type }}</option>
            @endforeach
        </select>
        <label for="message">Message</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit">Report</button>
    </div>
    <div id="map">

    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwL5lNFx2aUqbHCTrRinKYlaevyqDDZBQ&callback=initMap"
        async></script>
    <script>
        let map, activeInfoWindow, markers = [];

        /* ----------------------------- Initialize Map ----------------------------- */
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 14.646619588734419,
                    lng: 121.05015124173785,
                },
                zoom: 15
            });

            map.addListener("click", function(event) {
                mapClicked(event);
            });

            initMarkers();
        }

        /* ------------------------- Handle Map Click Event ------------------------- */
        function mapClicked(event) {
            console.log(map);
            console.log(event.latLng.lat(), event.latLng.lng());
        }

        /* ------------------------ Handle Marker Click Event ----------------------- */
        function markerClicked(marker, index) {
            console.log(map);
            console.log(marker.position.lat());
            console.log(marker.position.lng());
        }

        /* ----------------------- Handle Marker DragEnd Event ---------------------- */
        function markerDragEnd(event, index) {
            console.log(map);
            console.log(event.latLng.lat());
            console.log(event.latLng.lng());
        }
    </script>
</body>

</html>
