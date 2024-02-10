<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kyusi-Ligtas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #map {
            height: 100svh;
            width: 75%;
            padding: 0 5px;
        }

        body {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            gap: 20px;
            padding: 0 15px;
            background: #333333;
        }

        #incidents {
            width: 22%;
            display: flex;
            flex-direction: column;
            padding: 5px;
        }

        #incidents h1 {
            color: #fff;
        }

        #list {
            background: grey;
            height: 100%;
            padding: 5px;
            overflow: scroll;
        }

        #list ul {
            list-style: none;
        }

        #list li {
            border: 1px solid black;
            height: 70px;
            margin: 5px 0;
            padding: 5px 5px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        #actions button {
            background: rgb(183, 0, 0);
            padding: 5px;
            color: #fff;
            border: none;
            text-align: center;
            cursor: pointer;
        }

        #details {}
    </style>
</head>

<body class="">
    <div id="incidents">
        <h1>Incidents</h1>
        <div id="list">
            <ul>
                <li>
                    <div id="details">
                        Incident 1
                    </div>
                    <div id="status">
                        Not Attended
                    </div>
                    <div id="actions">
                        <button>X</button>
                    </div>
                </li>
                <li>
                    <div id="details">
                        Incident 2
                    </div>
                    <div id="status">
                        Attended
                    </div>
                    <div id="actions">
                        <button>X</button>
                    </div>
                </li>
                <li>
                    <div id="details">
                        Incident 3
                    </div>
                    <div id="status">
                        Not Attended
                    </div>
                    <div id="actions">
                        <button type="button">X</button>
                    </div>
                </li>
            </ul>
        </div>
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
