var roads = {
    "type": "FeatureCollection",
    "features": [
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    24.133137,
                    49.470820
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "Послуги з відновлення дорожнього покриття після розкопки<br><br><b>14 873 грн</b><br><br>"
            },
            "id": 100
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    24.138917,
                    49.469650
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "Поточний ремонт дороги по вулиці B.Чорновола <br>(відрізок дороги від вулиці ходорівська в напрямку вулиці о.довбуша)<br><br><b>135000 грн</b>"
            },
            "id": 101
        },
    ]
};

var buildings = {
    "type": "FeatureCollection",
    "features": [
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    24.1433092,
                    49.4684506
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "Капітальний ремонт прибудинкової території по вул. Cтепана Бандери<br><br><b>380 345 грн</b><br><br>"
            },
            "id": 100
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    24.148199,
                    49.4681685
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "Капітальний ремонт внутрішньобудинкових інженерних мереж<br> водопровідної мережі житлового будинку №40<br><br><b>50 391 грн</b>"
            },
            "id": 101
        },
    ]
};

var schools = {
    "type": "FeatureCollection",
    "features": [
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    24.149114,
                    49.467683
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "Капітальний ремонт приміщення пральні, <br>гладильної та кухонного блоку ДНЗ Малятко<br><br><b>356 989 грн</b><br><br>"
            },
            "id": 100
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    24.138497,
                    49.470577
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "Капітальний ремонт. <br>Заміна підлоги в коридорі першого поверху. <br>Заміна вікон на металопластикові - 3 шт. другого поверху ДНЗ № 5 Голубок<br><br><br><b>50 997 грн</b>"
            },
            "id": 101
        },
    ]
};

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

