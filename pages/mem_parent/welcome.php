<?php 
include_once('navbar_login.php');
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
<div id="map" style="width:100%;height:700px;" bgcolor="white">Show Google Map Here.</div>
    <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
    <script>
    function initMap() {
        var mapProp = {
            center: new google.maps.LatLng(8.4636, 99.8620),
            mapTypeId: google.maps.MapTypeId.HYBRID,
            zoom: 13,
            
        };

        /* start show map */
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
/* click */

           /* show info window in sql*/
              var infowindow = new google.maps.InfoWindow();
                var marker, i;
                var markers = [];
                var locations = [
                    <?php
                    $sql = "SELECT * FROM student where parentID = '".$_SESSION['userid']."'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "['" . $row['studentName'] . "'," . $row['mlat'] . "," . $row['mlog'] . "],";
                    }
                    ?>
                ];
                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                        icon: '../img/marker.png',
                        title: locations[i][0]
                    });
                    markers.push(marker);
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
                /* end show info window in sql*/
            }
            google.maps.event.addDomListener(window, 'load', initMap);
        </script>



    
    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6wk2trQWVwXIZ7egSo2IVsIxql5fSCJc&callback=initMap"></script>



<!-- Script view google map -->

</html>