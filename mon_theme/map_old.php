<h5 style="margin-left:25%">Carte</h5>

<div id="map" style="height:300px;width:500px;margin-left:25%;"></div>


<script type="text/javascript">
var map = L.map('map').setView([47.9, 1.9], 13);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

</script>
