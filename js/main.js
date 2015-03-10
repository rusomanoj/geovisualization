var WGS84 = new OpenLayers.Projection('EPSG:4326');
var MERCATOR = new OpenLayers.Projection('EPSG:900913');
var map = new OpenLayers.Map("map");
map.addLayer(new OpenLayers.Layer.OSM());

var size = new OpenLayers.Size(21, 25);
var offset = new OpenLayers.Pixel(-(size.w / 2), -size.h);
var icon = new OpenLayers.Icon('http://www.openlayers.org/dev/img/marker.png', size, offset);

var markers = new OpenLayers.Layer.Markers("Markers");
map.addLayer(markers);

//add some random markers
markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(-88.6376953125, 36.74768773190056).transform(WGS84, MERCATOR), icon.clone()));

markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(-88.04443359375, 37.142803443716836).transform(WGS84, MERCATOR), icon.clone()));

markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(-89.12109375, 37.09023980307208).transform(WGS84, MERCATOR), icon.clone()));

var bounds = markers.getDataExtent();
map.zoomToExtent(bounds);/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


