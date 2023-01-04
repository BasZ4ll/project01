
<div class="row" id="bg_i">
<div class="col-md-3" align=center><br></div>
<div class="col-md-6" align=center>
<div class="mt-1 p-2 bg-success text-white rounded"><h5>บันทึกข้อมูลพิกัดแผนที่</h5></div>
<div class="container-fluid" id="bg_i"><BR>
<FORM METHOD=POST action="save.php"  >
<div class="input-group"> 
<span class="input-group-text">ชื่อสถานที่ :</span>
<INPUT TYPE='text' NAME='pointname' id='pointname' class="form-control"><br>
</div>
<div class="input-group"> 
<span class="input-group-text">ค่าละติดจูด :</span>
<INPUT TYPE='text' NAME='mlat' id='mlat' class="form-control" readonly>
<span class="input-group-text">ค่าลองติดจูด :</span>
<INPUT TYPE='text' NAME='mlog' id='mlog' class="form-control" readonly >
<input type="submit" value="Save" class="btn btn-success">
</div>
</form>
<br>
</div>
</div>
<div class="col-md-3" align=center><br></div>
</div>
<p>
    <div id="GoogleMap" style="width:100%;height:400px;"></div>
    <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript">
                var map;
                var infoWindow;
                var infowindowTmp; 
                var infowindow1; 
                var infowindowTmp1; 
                var my_Marker=[];    
                var my_Marker1=[];  

				  function initMap(address) {
						map = new google.maps.Map(document.getElementById('GoogleMap'), {
							center: {lat: 8.43, lng: 99.95},
							zoom: 10
						});

						infoWindow = new google.maps.InfoWindow;
   
						map.markers = [];

						// Try HTML5 geolocation.
						if (navigator.geolocation) {
								navigator.geolocation.getCurrentPosition(function(position) {
										var pos = {
											  lat: position.coords.latitude,
											  lng: position.coords.longitude,
											  mapTypeControl:true,
											  navigationControl:true
										};
										var pos1 = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
										var my_Marker = new google.maps.Marker({ // สร้างตัว marker  
												position: pos1,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  
												map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  
												icon:"marker.png",  
													draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้  
													title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" , // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
											}); 
										map.setCenter(pos);

										// กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร   
										google.maps.event.addListener(my_Marker, 'dragend', function() {
											var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
											map.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker        
											$("#mlat").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
											$("#mlog").val(my_Point.lng());  // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value 
										});     						
          					  }, function() {
          						handleLocationError(true, infoWindow, map.getCenter());
          					  });
          				} else {
          					  // Browser doesn't support Geolocation
          					  handleLocationError(false, infoWindow, map.getCenter());
          				}
				}

    $(function(){
        $("<script/>", {
        "type": "text/javascript",
        src: "http://maps.google.com/maps/api/js?v=3.2&key=AIzaSyB6wk2trQWVwXIZ7egSo2IVsIxql5fSCJc&sensor=false&language=th&callback=initMap"
        }).appendTo("body");    
    });

    </script>  

    <div><br>

<div>


</table>
</div>

