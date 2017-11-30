<div class="footer">
	<div class="container">
		<div id="map" style="width:100%;height:500px"></div>
			
		</div>
		<div class="info">
			<div class="row">
				<div class="col-md-3 col-xs-12 col-sm-6 colu">
					<p>quick links</p>
					<ul>
						<li><a href="index.php" id="">home</a></li>
						<li><a href="newproduct.php" id="">new products</a></li>
						<li><a href="allproduct.php" id="">all products</a></li>
						<li><a href="" id="">specials</a></li>
						<li><a href="contact.php" id="">contacts</a></li>
						<li><a href="#" id="">reviews</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6 colu">
					<p>customers</p>
					<ul>
						<li><a href="#" id="">login</a></li>
						<li><a href="#" id="">create acount</a></li>
						<li><a href="#" id="">reviews</a></li>
						<li><a href="#" id="">ships & return</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6 colu">
					<p>flolow us</p>
					<ul>
						<li><a href="#" id="">fabook</a></li>
						<li><a href="#" id="">twiter</a></li>
						<li><a href="#" id="">rss</a></li>
					</ul>	
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6 colu">
					<p>contact us</p>
					<ul>
						<li><i class="fa fa-phone-square" aria-hidden="true"></i> 098765431</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> frteam@gmail.com</li>
					</ul>	
				</div>
			</div>
		</div>
		<hr>
		<div class="rules">
			<p>Copyright&copy; Frteam | MNM | 2017</p>
		</div>
	</div>
</div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(16.054407,108.202167);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  // Zoom to 9 when clicking on marker
  google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdqeyJvbK_rJsHrA1HdnmGwUA6i1si1CA=moto-shop"></script>