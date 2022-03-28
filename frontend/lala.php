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
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
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
  geoJSON: am5geodata_worldLow,
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

pointSeries.bullets.push(function() {
  return am5.Bullet.new(root, {
    sprite: am5.Label.new(root, {
      templateField: "labelSettings",
      centerX: am5.p50,
      dy: 10
    })
  })
})

pointSeries.data.setAll([{
  geometry: { type: "Point", coordinates: [-3.703790, 40.416775] },
  pictureSettings: {
    src: "https://www.amcharts.com/wp-content/uploads/assets/weather/animated/rainy-1.svg",
    width: 50,
    height: 50,
    centerX: am5.p50,
    centerY: am5.p50
  },
  labelSettings: {
    text: "Madrid: +22C"
  }
},
{
  geometry: { type: "Point", coordinates: [2.352222, 48.856614] },
  pictureSettings: {
    src: "https://www.amcharts.com/wp-content/uploads/assets/weather/animated/thunder.svg",
    width: 50,
    height: 50,
    centerX: am5.p50,
    centerY: am5.p50
  },
  labelSettings: {
    text: "Paris: +18C"
  }
},
{
  geometry: { type: "Point", coordinates: [13.404954, 52.520007] },
  pictureSettings: {
    src: "https://www.amcharts.com/wp-content/uploads/assets/weather/animated/cloudy-day-1.svg",
    width: 50,
    height: 50,
    centerX: am5.p50,
    centerY: am5.p50
  },
  labelSettings: {
    text: "Berlin: +13C"
  }
},
{
  geometry: { type: "Point", coordinates: [21.012229, 52.229676] },
  pictureSettings: {
    src: "https://www.amcharts.com/wp-content/uploads/assets/weather/animated/day.svg",
    width: 50,
    height: 50,
    centerX: am5.p50,
    centerY: am5.p50
  },
  labelSettings: {
    text: "Warsaw: +22C"
  }
},
{
  geometry: { type: "Point", coordinates: [12.480180, 41.872389] },
  pictureSettings: {
    src: "https://www.amcharts.com/wp-content/uploads/assets/weather/animated/day.svg",
    width: 50,
    height: 50,
    centerX: am5.p50,
    centerY: am5.p50
  },
  labelSettings: {
    text: "Rome: +29C"
  }
},
{
  geometry: { type: "Point", coordinates: [-0.127758, 51.507351] },
  pictureSettings: {
    src: "https://www.amcharts.com/wp-content/uploads/assets/weather/animated/rainy-7.svg",
    width: 50,
    height: 50,
    centerX: am5.p50,
    centerY: am5.p50
  },
  labelSettings: {
    text: "London: +10C"
  }
},
{
  geometry: { type: "Point", coordinates: [18.068581, 59.329323] },
  pictureSettings: {
    src: "https://www.amcharts.com/wp-content/uploads/assets/weather/animated/rainy-1.svg",
    width: 50,
    height: 50,
    centerX: am5.p50,
    centerY: am5.p50
  },
  labelSettings: {
    text: "Stockholm: +8C"
  }
}
])

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
    title: "JAKARTA HEAD OFFICE",
    latitude: -6.2,
    longitude: 106.816,
    url: "https://www.google.com/maps/place/PT.+Meditrans+Global/@-2.9601349,119.3594472,15z/data=!4m6!3m5!1s0x0:0x2715ae49e66b9300!4b1!8m2!3d-6.2750118!4d106.8540065"
  },
  {
    title: "Peking",
    latitude: 39.9056,
    longitude: 116.3958
  },
  {
    title: "New Delhi",
    latitude: 28.6353,
    longitude: 77.225
  },
  {
    title: "Tokyo",
    latitude: 35.6785,
    longitude: 139.6823,
    url: "http://www.google.co.jp"
  },
  {
    title: "Ankara",
    latitude: 39.9439,
    longitude: 32.856
  },
  {
    title: "Buenos Aires",
    latitude: -34.6118,
    longitude: -58.4173
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






