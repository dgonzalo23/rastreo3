<!DOCTYPE html>
<html>
    <head>
        <title>Historico</title>

        <!--no hace nada-->
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

        <!--se queda -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <!--se queda-->
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <!--se queda-->
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--se queda -->
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!--se queda-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <!--se queda -->
        <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        <!--se queda-->
        <script src="https://maps.googleapis.com/maps/api/js?libraries=drawing,places"></script>
        <!--REVISAR-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!--se queda -->
       <link rel="stylesheet" href="styles.css">
       
        <style>
      #floating-panel {
          position: absolute;
          top: 125px;
          left: 90%;
          z-index: 5;
          
          background-color: #fff;
          padding: 0px;
          border: 0px solid #999;
          text-align: center;
          font-family: 'Roboto','sans-serif';
          line-height: 10px;
          padding-left: 0px;
        }
    </style>
           <style>
      #panel {
          position: absolute;
          top: 125px;
          left: 0%;
          z-index: 5;
          
          background-color: #F5F5F5;
          padding: 0px;
          border: 0px solid #999;
          text-align: center;
          font-family: 'Roboto','sans-serif';
          line-height: 10px;
          padding-left: 0px;
        }
    </style>
               <style>
      #gps {
          position: absolute;
          top: -40px;
          left: 14%;
          z-index: 5;
          
          background-color: #F5F5F5;
          padding: 0px;
          border: 0px solid #999;
          text-align: center;
          font-family: 'Roboto','sans-serif';
          line-height: 10px;
          padding-left: 0px;
        }
    </style>
    </head>
    <title>Rastreo Satelital</title>
    <style >
    #body {
        background-color: #fff;
        }
        </style>
    <body id="page3">
        <!--================================================-->
<header>
        <div class="border-bot">
            <div class="main">
                <div id="gps">
                <h1><a href="index.php"></a></h1>
                </div>
                <nav>
                    <ul class="menu">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a  href="realtime.php">Tiempo real</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
        <!--=======================DATEPICKER======================================-->
        
    <div class="panel panel-default" id="panel">
        
        <div class='col-xs-6'>
            <div class='input-group date' id= 'datetimepicker6' name='datetimepicker6'>
                <input type="text" class="form-control" id='fechainicial' name='datetimepicker6'/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <div class='col-xs-6'>
                <div class='input-group date' id='datetimepicker7' name='datetimepicker7'>
                    <input type='text' class="form-control" id='fechafinal' name='datetimepicker7'/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
        </div>
            
        <div class='col-xs-6' id="result"><?php include("actual.php"); ?></div>
    

    <!--===================================================================-->
</header>
<style >
 #panel11 {
          position: absolute;
          top: 80px;
          left: 0%;
          z-index: 5;
          background-color: #F5F5F5;
          padding: 0px;
          border: 0px solid #999;
          text-align: center;
          font-family: 'Roboto','sans-serif';
          line-height: 10px;
          padding-left: 0px;
          }
           #foter {
          position: absolute;
          top: 700px;
          left: 0%;
          z-index: 5;
          background-color: #F5F5F5;
          padding: 0px;
          border: 0px solid #999;
          text-align: center;
          font-family: 'Roboto','sans-serif';
          line-height: 10px;
          padding-left: 0px;
          }
          </style>
        <!--=============================================-->
      
        <!--===============DATEPICKERS=====================-->


    <!--=========PANEL==============-->
<div id="floating-panel">
        <form>
            <input type="submit" class="btn btn-default" value="Ver Recorrido" onclick="return chk()">
            </form>      
    </div> 

<!--==================================-->
</div>
<!--=========SLIDER MAPA=================-->
    <div class="panel panel-default" id="panel11">
    <div class="panel-body">
    <div id="slider"></div>
        </div>
        </div>
    <div class="map-responsive" id="map1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<!--=================================-->
       
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker({

          locale: "es",
          format: "YYYY-MM-DD HH:mm:ss"
         
        });
        $('#datetimepicker7').datetimepicker({
 
            locale: "es",
            format: "YYYY-MM-DD HH:mm:ss"
            
        });
        
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            //var id1 = $(this).attr("id");
        });
        
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            //var id2 = $(this).attr("id");
        });
    });
</script>
        
<script >
    var locations = [];
    var idmin;
    var idmax;
    var idmin2;
    var idmax2;
    var matriz;
    var tamano;
    var posicionhis;
    var recorrido = null;
    var selection;
    var lati;
    var long;
    var fechor;
    var marcadoractual;
    var marker = [];
    
    var myCenter=new google.maps.LatLng(parseFloat(LatitudGPSS),parseFloat(LongitudGPSS));
    
    var map;

    var point;
    
        map = new google.maps.Map(document.getElementById("map1"), {
            zoom: 15,
            center: myCenter    
        });
                
        recorrido = new google.maps.Polyline({
            path: locations,
            strokeColor: "#FF0000",
            strokeOpacity: 1.0,
            strokeWeight: 2
        });
    
        recorrido.setMap(map);
    
        function setMapOnAll(map) {
            for (var i = 0; i < marker.length; i++) {
                marker[i].setMap(map);
            }
        }
    
        $("#slider" ).slider({
            range: "min",
            step: 1,
            slide: function( event, ui ) {
                setMapOnAll(null);
                marker=[];
                selection = ui.value;
                console.log(selection);
                lati = matriz[selection].lat;
                long = matriz[selection].lng;
                fechor = matriz[selection].fechahora;
                console.log(lati);
                console.log(long);
                posicionslider = new google.maps.LatLng(lati,long); 
                marcadoractual = new google.maps.Marker({
                                position: posicionslider,
                                map: map
                                
                            })
                marker.push(marcadoractual);
                setMapOnAll(map);
                var infowindow = new google.maps.InfoWindow({
                    content: fechor
                });
                infowindow.open(map, marcadoractual);
                map.setCenter(posicionslider);
            }
        }); 
      
        function chk(){
        var contador = 0;    
            if (contador == 0) {
                recorrido.setPath([]);
                contador = 1;
                locations = [];
            if (contador == 1) {
            var fechainicial = document.getElementById('fechainicial').value;
            var fechafinal= document.getElementById('fechafinal').value;
            $.ajax({
                type: "post",
                url: "semilla.php",
                data: {'fechainicial':fechainicial, 'fechafinal':fechafinal},
                cache: false,
                success: function(respuesta){
                    matriz = JSON.parse(respuesta);
                    tamano = matriz.length;
                    $( "#slider" ).slider( "option", "min", 0 );
                    $( "#slider" ).slider( "option", "max", tamano-1 );
                        for (var k in matriz){
                            var lathis = parseFloat(matriz[k].lat);
                            var longhis = parseFloat(matriz[k].lng);
                            posicionhis = new google.maps.LatLng(lathis,longhis);
                            locations.push(posicionhis);   
                            recorrido.setPath(locations); 
                        }
                    map.setCenter(locations[0]);
                    map.setZoom(15);
                }
            });
            console.log(contador);
            }}
            return false;
        }
    

        function clear(){
            recorrido.setMap(null);
        }  
    
        function CargarDB(){    $('#result').load('actual.php'); }
</script>
    
        
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation" id="foter">
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
                            Phone: +1 800 559 6580 Email: <a href="#">Cristianq@uninorte.edu.co</a>
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
    </div>
  </body>
</html>
