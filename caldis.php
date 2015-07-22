<?php
include "includes/app.php";
?>
<html>
<head>
	
</head>
<body>
	<script type="text/javascript" src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAA7j_Q-rshuWkc8HyFI4V2HxQYPm-xtd00hTQOC0OXpAMO40FHAxT29dNBGfxqMPq5zwdeiDSHEPL89A" ></script>
	<script type="text/javascript">
		function calmsdistace() {
			var geocoder, loca1 = "<?php echo get("to", "New Delhi, India"); ?>", loca2 = "<?php echo get("from", "IIT Delhi, New Delhi, India"); ?>", gDir, location1, location2;
			function initialize(){
				geocoder = new GClientGeocoder();
				gDir = new GDirections();
				GEvent.addListener(gDir, "load", function() {
					var drivingDistanceKilometers = gDir.getDistance().meters / 1000;
					var resul = {"dist": drivingDistanceKilometers, "duration_min": (gDir.getDuration ().seconds/60) };
					window.parent.sainiji(resul);
				});
			}

			function showLocation() {
				geocoder.getLocations(loca1, function (response) {
					if (!response || response.Status.code != 200){
						alert("Sorry, we were unable to geocode the first address");
					}
					else {
						location1 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
						geocoder.getLocations(loca2, function (response) {
							if (!response || response.Status.code != 200){
								alert("Sorry, we were unable to geocode the second address");
							} else {
								location2 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
								gDir.load('from: ' + location1.address + ' to: ' + location2.address);
							}
						});
					}
				});
			}
			initialize();
			showLocation();
		}
		calmsdistace();

	</script>
</body>
</html>

<?php
closedb();
?>