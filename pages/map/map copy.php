<?php 
include_once('../../connect.php');
  $sql="select * from student";
  $res=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> <!-- Responsive website -->
    <title>GPS Tracker</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./test.js"></script>
</head>

<body bgcolor="">
    <div id="map" style="height:600px;" bgcolor="white">Show Google Map Here.</div>
</body>
<!-- Script view google map -->
<script>
    function initMap() {
        var mapProp = {
            center: new google.maps.LatLng(8.4636, 99.8620),
            mapTypeId: google.maps.MapTypeId.HYBRID,
            zoom: 17,
        };

        /* start show map */
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
/* click */

        /* show marker */
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(8.4636, 99.8620),
            map: map,
            icon: '',
            title: 'Hello World!'
        });

        <?php while($row=mysqli_fetch_array($res)) { ?> 
        var location = [{ 
                name: "<?php echo $row['studentID']; ?>",
                lat: "<?php echo $row['lat']; ?>",
                lon: "<?php echo $row['lon']; ?>",
                test: "<?php echo $row['studentName']; ?>"
            }
     
        ]
        
        $.each(location, function(index, value) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(value.lat, value.lon),
                map: map,
                title: value.name,
                test: value.test
            });
        });    <?php }  ?>      
    }

    
    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6wk2trQWVwXIZ7egSo2IVsIxql5fSCJc&callback=initMap"></script>

</html>