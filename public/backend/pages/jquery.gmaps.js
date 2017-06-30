/**
* Theme: Adminox Admin Template
* Author: Coderthemes
* Google Maps
*/

!function(e){"use strict"
var t=function(){}
t.prototype.createBasic=function(e){return new GMaps({div:e,lat:-12.043333,lng:-77.028333})},t.prototype.createMarkers=function(e){var t=new GMaps({div:e,lat:-12.043333,lng:-77.028333})
return t.addMarker({lat:-12.043333,lng:-77.03,title:"Lima",details:{database_id:42,author:"HPNeo"},click:function(e){console.log&&console.log(e),alert("You clicked in this marker")}}),t.addMarker({lat:-12.042,lng:-77.028333,title:"Marker with InfoWindow",infoWindow:{content:"<p>HTML Content</p>"}}),t},t.prototype.createWithPolygon=function(e,t){var a=new GMaps({div:e,lat:-12.043333,lng:-77.028333})
a.drawPolygon({paths:t,strokeColor:"#BBD8E9",strokeOpacity:1,strokeWeight:3,fillColor:"#BBD8E9",fillOpacity:.6})
return a},t.prototype.createWithOverlay=function(e){var t=new GMaps({div:e,lat:-12.043333,lng:-77.028333})
return t.drawOverlay({lat:t.getCenter().lat(),lng:t.getCenter().lng(),content:'<div class="gmaps-overlay">Our Office!<div class="gmaps-overlay_arrow above"></div></div>',verticalAlign:"top",horizontalAlign:"center"}),t},t.prototype.createWithStreetview=function(e,t,a){return GMaps.createPanorama({el:e,lat:t,lng:a})},t.prototype.createWithRoutes=function(t,a,n){var r=new GMaps({div:t,lat:a,lng:n})
return e("#start_travel").click(function(t){t.preventDefault(),r.travelRoute({origin:[-12.044012922866312,-77.02470665341184],destination:[-12.090814532191756,-77.02271108990476],travelMode:"driving",step:function(t){e("#instructions").append("<li>"+t.instructions+"</li>"),e("#instructions li:eq("+t.step_number+")").delay(450*t.step_number).fadeIn(200,function(){r.setCenter(t.end_location.lat(),t.end_location.lng()),r.drawPolyline({path:t.path,strokeColor:"#131540",strokeOpacity:.6,strokeWeight:6})})}})}),r},t.prototype.createMapByType=function(e,t,a){var n=new GMaps({div:e,lat:t,lng:a,mapTypeControlOptions:{mapTypeIds:["hybrid","roadmap","satellite","terrain","osm","cloudmade"]}})
return n.addMapType("osm",{getTileUrl:function(e,t){return"http://tile.openstreetmap.org/"+t+"/"+e.x+"/"+e.y+".png"},tileSize:new google.maps.Size(256,256),name:"OpenStreetMap",maxZoom:18}),n.addMapType("cloudmade",{getTileUrl:function(e,t){return"http://b.tile.cloudmade.com/8ee2a50541944fb9bcedded5165f09d9/1/256/"+t+"/"+e.x+"/"+e.y+".png"},tileSize:new google.maps.Size(256,256),name:"CloudMade",maxZoom:18}),n.setMapTypeId("osm"),n},t.prototype.createWithMenu=function(e,t,a){var n=new GMaps({div:e,lat:t,lng:a})
n.setContextMenu({control:"map",options:[{title:"Add marker",name:"add_marker",action:function(e){this.addMarker({lat:e.latLng.lat(),lng:e.latLng.lng(),title:"New marker"}),this.hideContextMenu()}},{title:"Center here",name:"center_here",action:function(e){this.setCenter(e.latLng.lat(),e.latLng.lng())}}]})},t.prototype.init=function(){var t=this
e(document).ready(function(){t.createBasic("#gmaps-basic"),t.createMarkers("#gmaps-markers")
var e=[[-12.040397656836609,-77.03373871559225],[-12.040248585302038,-77.03993927003302],[-12.050047116528843,-77.02448169303511],[-12.044804866577001,-77.02154422636042]]
t.createWithPolygon("#gmaps-polygons",e),t.createWithOverlay("#gmaps-overlay"),t.createWithStreetview("#panorama",42.3455,-71.0983),t.createWithRoutes("#gmaps-route",-12.043333,-77.028333),t.createMapByType("#gmaps-types",-12.043333,-77.028333),t.createWithMenu("#gmaps-menu",-12.043333,-77.028333)})},e.GoogleMap=new t,e.GoogleMap.Constructor=t}(window.jQuery),function(e){"use strict"
e.GoogleMap.init()}(window.jQuery)