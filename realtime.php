<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tiempo real</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">  
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Vegur_500.font.js" type="text/javascript"></script>
	<script src="js/Ropa_Sans_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>	 
	<script src="js/script.js" type="text/javascript"></script> 
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<body id="page2">
	<!--==============================header=================================-->
	<header>
		<div class="border-bot">
			<div class="main">
				<h1><a href="index.html">Global Tracking System</a></h1>
				<nav>
					<ul class="menu">
						<li><a class="active" href="index.php">Home</a></li>
						<li><a class="active" href="historico.php">Historico</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
	</header>
<style>
      html, body {
        height: 100%;
        margin: 0;
      }
      #map {
        height: 100%;
        width: 100%;
      } 
    </style>

    <div id="map"></div>
    <script>
        
             var map;
function initMap() {
    
    var point;
    var locations = new Array();
    map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15
            });

setInterval(function(){
    downloadUrl("dynamicdb.php", function(data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName("marker");

    
    for (var i = 0; i < markers.length; i++) {
        point = new google.maps.LatLng(
        parseFloat(markers[i].getAttribute("lat")),
        parseFloat(markers[i].getAttribute("lng")));
        map.setCenter(point);
          }



        if(locations[0]==null){
        locations[0]=point;
        }else {      
         var f=locations.length;
         locations[0+f]=point;
        }

  

    var myIcon = {
     url: "http://icons.iconarchive.com/icons/iconshow/transport/128/Sportscar-car-2-icon.png", //url
     scaledSize: new google.maps.Size(30, 30) };

var marker = new google.maps.Marker({
    position: locations[0+f],
    icon:myIcon,
    map: map
  });


var recorrido = new google.maps.Polyline({
    path: locations,
    strokeColor: "#FF0000",
    strokeOpacity: 1.0,
    strokeWeight: 2
    });



    recorrido.setMap(map);
    });
    }, 1000);
}

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;
        request.onreadystatechange = function() {
            if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
            }
        };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
  </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtxNxHoSNOl8JMvcc4KAIlkoSlURTKL54&callback=initMap"
            async defer></script>
	<!--==============================footer=================================-->
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_3">
						<div class="spacer-1">
							<a href="index.php"><img src="images/logo1.png" alt=""></a>
						</div>
					</div>
					<div class="grid_5">
						<div class="indent-top2">
							<p class="prev-indent-bot">&copy; 2016 Proyecto 2 by Cristian Camargo, Gonzalo Duarte y Guido Mercado</p>
							Phone: +1 800 559 6580 Email: <a href="#">dgonzalo@uninorte.edu.co</a>
						</div>
					</div>
					<div class="grid_4">
						<ul class="list-services">
							<li><a class="item-1" href="#"></a></li>
							<li><a class="item-2" href="#"></a></li>
							<li><a class="item-3" href="#"></a></li>
							<li><a class="item-4" href="#"></a></li>
						</ul>
						<span class="footer-text">&copy; 2016 <a class="link color-2" href="#">Privacy Policy</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
