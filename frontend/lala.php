<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldHigh.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

chart.backgroundSeries.mapPolygons.template.polygon.fill = am5core.color("#aadaff");
chart.backgroundSeries.mapPolygons.template.polygon.fillOpacity = 1;
// Create the map chart
// https://www.amcharts.com/docs/v5/charts/map-chart/
var chart = root.container.children.push(am5map.MapChart.new(root, {
  panX: "translateX",
  panY: "translateY",
  projection: am5map.geoMercator(),
  homeGeoPoint: { longitude: 119, latitude: -3 },
  homeZoomLevel: 10
}));


// Create main polygon series for countries
// https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
  geoJSON: am5geodata_worldHigh,
  exclude: ["AQ"]
}));

// Add zoom control
// https://www.amcharts.com/docs/v5/charts/map-chart/map-pan-zoom/#Zoom_control
chart.set("zoomControl", am5map.ZoomControl.new(root, {}));




// Set clicking on "water" to zoom out
chart.chartContainer.get("background").events.on("click", function() {
  chart.goHome();
})

polygonSeries.events.on("datavalidated", function() {
  chart.goHome();
})

var pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
pointSeries.bullets.push(function() {
  return am5.Bullet.new(root, {
    sprite: am5.Picture.new(root, {
      templateField: "pictureSettings"
    })
  })
})


// Create point series for markers
// https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
var pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
var colorset = am5.ColorSet.new(root, {});

pointSeries.bullets.push(function () {
  var container = am5.Container.new(root, {});

  var circle = container.children.push(
    am5.Circle.new(root, {
      radius: 4,
      tooltipY: 0,
      fill: colorset.next(),
      strokeOpacity: 0,
      tooltipText: "{title}"
    })
  );

  var circle2 = container.children.push(
    am5.Circle.new(root, {
      radius: 4,
      tooltipY: 0,
      fill: colorset.next(),
      strokeOpacity: 0,
      tooltipText: "{title}"
    })
  );

  circle.animate({
    key: "scale",
    from: 1,
    to: 5,
    duration: 600,
    easing: am5.ease.out(am5.ease.cubic),
    loops: Infinity
  });
  circle.animate({
    key: "opacity",
    from: 1,
    to: 0,
    duration: 600,
    easing: am5.ease.out(am5.ease.cubic),
    loops: Infinity
  });

  return am5.Bullet.new(root, {
    sprite: container
  });
});

var cities = [

  {
    
    latitude: -6.2,
    longitude: 106.816,
    url: "https://www.google.com/maps/place/PT.+Meditrans+Global/@-2.9601349,119.3594472,15z/data=!4m6!3m5!1s0x0:0x2715ae49e66b9300!4b1!8m2!3d-6.2750118!4d106.8540065"
  },
  {
    title: "JAKARTA HEAD OFFICE",
    latitude: -6.2,
    longitude: 106.816,
    url: "https://www.google.com/maps/place/PT.+Meditrans+Global/@-2.9601349,119.3594472,15z/data=!4m6!3m5!1s0x0:0x2715ae49e66b9300!4b1!8m2!3d-6.2750118!4d106.8540065"
  },
  {
    title: "SURABAYA HEAD OFFICE",
    latitude: -7.337,
    longitude: 112.776,
    url: "https://www.google.com/maps/place/Rungkut+menanggal+harapan+o%2F28/@-7.3361769,112.7759994,17z/data=!4m9!1m2!2m1!1sjalan+rungkut+menanggal+harapan+blok+o%2F28!3m5!1s0x2dd7fb0a65f75061:0x659fa318c1619c86!8m2!3d-7.3364773!4d112.7782214!15sCilqYWxhbiBydW5na3V0IG1lbmFuZ2dhbCBoYXJhcGFuIGJsb2sgby8yOJIBEGNvcnBvcmF0ZV9vZmZpY2U"

  },
  {
    title: "SITE BANDUNG",
    latitude: -6.903,
    longitude: 107.608,
    url: "https://www.google.com/maps/place/PT.+Meditrans+Global/@-2.9601349,119.3594472,15z/data=!4m6!3m5!1s0x0:0x2715ae49e66b9300!4b1!8m2!3d-6.2750118!4d106.8540065"

  },
  {
    title: "SITE PALEMBANG",
    latitude: -2.991,
    longitude: 104.770,
    url: "http://www.google.co.jp"
  },
  {
    title: "SITE PADANG",
    latitude: -0.934,
    longitude: 100.251
  },
  {
    title: "SITE MAKASSAR",
    latitude: -5.111,
    longitude: 119.333
  }
  
];

for (var i = 0; i < cities.length; i++) {
  var city = cities[i];
  addCity(city.longitude, city.latitude, city.title);
}

function addCity(longitude, latitude, title) {
  pointSeries.data.push({
    geometry: { type: "Point", coordinates: [longitude, latitude] },
    title: title
  });
}

// Make stuff animate on load
chart.appear(1000, 100);


}); // end am5.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>






