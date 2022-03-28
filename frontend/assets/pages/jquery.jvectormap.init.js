$(document).ready(function () {
	function listRegionNames(map) {
	   var options = "";
	  $.each(jvm.Map.maps[map].paths, function(index, value) {
		options += '<option value="ID" selected>INDO</option>';
	  });
	  $("#regions").html(options).load(function() {
		var mapObj = $("#map").vectorMap("get", "mapObject");
		mapObj.clearSelectedRegions();
		mapObj.setSelectedRegions(this.value);
		mapObj.setFocus({scale: 1, x: 0.5, y: 0.5, animate: false});
		customZoomToRegion(mapObj, this.value, 0.01 * $("#factor").val());
	  });
	}
	function customZoomToRegion(map, code, factor) {
	  var bBox = map.regions[code].element.shape.getBBox();
	  var normRCX = (bBox.x + 0.5 * bBox.width)/map.defaultWidth;
	  var normRCY = (bBox.y + 0.5 * bBox.height)/map.defaultHeight;
	  var scale = Math.min(map.defaultWidth/bBox.width, map.defaultHeight/bBox.height);
	  map.setFocus({x: normRCX, y: normRCY, scale: scale * factor, animate: true});
	}
	var map = "world_mill_en";
	listRegionNames(map);
	$("#map").vectorMap({
	  map: map,
	  zoomMax: 100,
	  regionsSelectable: true,
	  onRegionClick: function(e,  code,  isSelected,  selectedRegions){
		var mapObj = $("#"+e.target.parentElement.id).vectorMap("get", "mapObject");
		mapObj.clearSelectedRegions();
		mapObj.setFocus({scale: 1, x: 0.5, y: 0.5, animate: false});
		customZoomToRegion(mapObj, code, 0.01 * $("#factor").val());
		return true;
	  }
	});
  });