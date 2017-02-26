<div id="map" style="height: 300px; width: 100%"></div>
<script>
    function initMap() {
        var home = {lat: 59.848402, lng: 17.622111};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: home
        });
        var marker = new google.maps.Marker({
            position: home,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Fsbfr8e3gfxXjDmWIN-yE8Hp7QG8P24&callback=initMap">
</script>