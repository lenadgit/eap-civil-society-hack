      // initialize Leaflet
      var map = L.map('map').setView([49.4698076, 24.1103042], 14);

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
    //var popupContent = "<p>Якщо є запитання " +
        //feature.geometry.type + ", <a href = 'https://e-dem.tools/6110100000'>Перейдіть за посиланням</a></p>";
    var popupContent = "<p>Якщо є запитання <a href = 'https://e-dem.tools/6110100000'>Перейдіть за посиланням</a></p>" ;
        //feature.geometry.type + ", <a href = 'https://e-dem.tools/6110100000'>Перейдіть за посиланням</a></p>";    
    if (feature.properties && feature.properties.popupContent) {
      popupContent += feature.properties.popupContent;
    }

    layer.bindPopup(popupContent);
  };

//ДОРОГИ
  L.geoJSON(roads, {

    style: function (feature) {
      return feature.properties && feature.properties.style;
    },

    onEachFeature: onEachFeature,

    pointToLayer: function (feature, latlng) {
      return L.circleMarker(latlng, {
        radius: 8,
        fillColor: "#cc6735",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      });
    }
  }).addTo(map);

  //Жилые дома
  L.geoJSON(buildings, {

    style: function (feature) {
      return feature.properties && feature.properties.style;
    },

    onEachFeature: onEachFeature,

    pointToLayer: function (feature, latlng) {
      return L.circleMarker(latlng, {
        radius: 8,
        fillColor: "#67ff56",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      });
    }
  }).addTo(map);

  //Учебные заведения
  L.geoJSON(schools, {

    style: function (feature) {
      return feature.properties && feature.properties.style;
    },

    onEachFeature: onEachFeature,

    pointToLayer: function (feature, latlng) {
      return L.circleMarker(latlng, {
        radius: 8,
        fillColor: "#0f54c1",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      });
    }
  }).addTo(map);

