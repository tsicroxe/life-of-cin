
@extends('welcome')

@section('content')
<script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>
<div class='container align-items-center' id="mapdiv" style="width: 1000px; height: 450px;"></div>
<script type="text/javascript">
    var map = AmCharts.makeChart("mapdiv", {
        type: "map",
        theme: "dark",
        projection: "mercator",
        panEventsEnabled: true,
        backgroundColor: "#535364",
        backgroundAlpha: 1,
        zoomControl: {
            zoomControlEnabled: true
        },
        dataProvider: {
            map: "worldHigh",
            getAreasFromMap: true,
            areas: [{
                    "id": "AT",
                    "showAsSelected": true
                },
                {
                    "id": "FR",
                    "showAsSelected": true
                },
                {
                    "id": "DE",
                    "showAsSelected": true
                },
                {
                    "id": "PT",
                    "showAsSelected": true
                },
                {
                    "id": "ES",
                    "showAsSelected": true
                },
                {
                    "id": "GB",
                    "showAsSelected": true
                },
                {
                    "id": "CA",
                    "showAsSelected": true
                },
                {
                    "id": "MX",
                    "showAsSelected": true
                },
                {
                    "id": "US",
                    "showAsSelected": true
                },
                {
                    "id": "PE",
                    "showAsSelected": true
                },
                {
                    "id": "CN",
                    "showAsSelected": true
                }
            ]
        },
        areasSettings: {
            autoZoom: true,
            color: "#B4B4B7",
            colorSolid: "#84ADE9",
            selectedColor: "#84ADE9",
            outlineColor: "#666666",
            rollOverColor: "#9EC2F7",
            rollOverOutlineColor: "#000000"
        }
    });
</script>

@endsection