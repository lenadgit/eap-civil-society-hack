      // initialize Leaflet
      var map = L.map('map').setView([49.5484448, 25.5276289], 12);

      // add the OpenStreetMap tiles
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
      }).addTo(map);

      // show the scale bar on the lower left corner
      L.control.scale().addTo(map);

      // show a marker on the map
  var baseballIcon = L.icon({
    iconUrl: 'point.png',
    iconSize: [32, 37],
    iconAnchor: [16, 37],
    popupAnchor: [0, -28]
  });

  function onEachFeature(feature, layer) {
    var popupContent = "<p>Задать вопрос или пожаловаться <a href = 'https://e-dem.tools/6110100000'> перейдите по ссылке</a></p>" ;
        //feature.geometry.type + ", <a href = 'https://e-dem.tools/6110100000'>Перейдіть за посиланням</a></p>";    
    if (feature.properties && feature.properties.popupContent) {
      popupContent += feature.properties.popupContent;
    }

    layer.bindPopup(popupContent);
  };

  L.geoJSON(wheelchairs, {

    style: function (feature) {
      return feature.properties && feature.properties.style;
    },

    onEachFeature: onEachFeature,

    pointToLayer: function (feature, latlng) {
      return L.circleMarker(latlng, {
        radius: 8,
        fillColor: "#ff7800",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      });
    }
  }).addTo(map);