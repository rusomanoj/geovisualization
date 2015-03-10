<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src="<?php echo base_url(); ?>js/main.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>css/homepage.css" rel="stylesheet" type="text/css"/>
 <script src="http://www.openlayers.org/api/OpenLayers.js"></script> 
	
	<style>

	    #map{
		position:absolute; top:52px; bottom:0; right: 0;width:80%;
		}

	</style>

</head>
<body>
    <h3>Generated Report</h3> <br/><br/>	
<div width="100%">
      <div style="float:left; width:30px">Mean</div>
      <div style="background: #0A0; width: 100px; margin-left:70px" >21.7</div>
    </div><br/><br/>
    <div width="100%">
      <div style="float:left; width:30px">Standard Deviation</div>
      <div style="background: #0A0; width: 32px; margin-left:70px" >3.25</div>
    </div>
<div id='map'></div>

<script>
{
    map = new OpenLayers.Map("map");
    map.addLayer(new OpenLayers.Layer.OSM());
    
    epsg4326 =  new OpenLayers.Projection("EPSG:4326"); //WGS 1984 projection
    projectTo = map.getProjectionObject(); //The map projection (Spherical Mercator)
   
    var lonLat = new OpenLayers.LonLat( -5.1167777 ,53.5000000 ).transform(epsg4326, projectTo);
          
    var zoom=6;
    map.setCenter (lonLat, zoom);
    
//    var styleMap = new OpenLayers.StyleMap({
//  strokeColor: '#ff0000',
//  fillColor: '#ff0000'
//});

    //var myStyle = {color:blue};
    var vectorLayer = new OpenLayers.Layer.Vector("Overlay");

    var markers = [
       ([ -0.127500, 51.5072000 ]),
       ([ -2.233324, 53.4667728 ]),
       ([ -0.119623, 52.6333008 ]),
       ([ -3.000000, 53.4000000 ]),
       ([ -1.400000, 50.9000000 ]),
       ([ -1.385000, 54.9100000 ]),
       ([ -4.259000, 55.8580000 ])
    ];
    
   
    for (var i=0; i<markers.length; i++) {
      
       var lon = markers[i][0];
       var lat = markers[i][1];
       
        var feature = new OpenLayers.Feature.Vector(
                new OpenLayers.Geometry.Point( lon, lat ).transform(epsg4326, projectTo),
                {description: "marker number " + i},
		{pointRadius: 13,fillColor: "green",fillOpacity: 0.5, strokeColor: "black"}
            );             
        vectorLayer.addFeatures(feature);
    }                        
    
    map.addLayer(vectorLayer);
    
    
		
}

</script>

</body>
</html>

