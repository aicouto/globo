<!DOCTYPE HTML>
<html>
  <head>
    <script src="http://localhost/mapas/v2/api.js"></script>
   <script>
      function initialize() {
        var options = {
			atmosphere: true, 
		  	sky: true,
			center: [0, 0], 
			zoom: 5,
			zooming:false
		};
        var earth = new WE.map('earth_div', options);
        var sufix='%3fkey=R8rAisQ0L6EL1wW8JVYQ';
        sufix='';
        WE.tileLayer('http://localhost/mapas/marble/{z}/{x}/{y}.jpg'+sufix, {
          minZoom: 0,
          maxZoom: 5,
          attribution: 'NASA'
        }).addTo(earth);
      }
    </script>
    <style type="text/css">
      html, body{padding: 0; margin: 0;}
      #earth_div{top: 0; right: 0; bottom: 0; left: 0;
                 position: absolute !important;
                 background-image: -webkit-gradient(
                   linear,
                   left bottom,
                   left top,
                   color-stop(0, rgb(253,253,253)),
                   color-stop(0.15, rgb(253,253,253)),
                   color-stop(0.53, rgb(223,223,223)),
                   color-stop(0.56, rgb(255,255,255)),
                   color-stop(1, rgb(253,253,253))
                   );
                 background-image: -moz-linear-gradient(
                   center bottom,
                   rgb(253,253,253) 0%,
                   rgb(253,253,253) 15%,
                   rgb(223,223,223) 53%,
                   rgb(255,255,255) 56%,
                   rgb(253,253,253) 100%
                   );
      }
    </style>
    <title>WebGL Earth API: Custom Tiles</title>
  </head>
  <body onload="initialize()">
    <div id="earth_div"></div>
  </body>
</html>
