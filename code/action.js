/*declenchement a la fin de la lecture du css sinon le js ce lance tout de suite et il fait une erreur */
window.onload = function() {

    map = new OpenLayers.Map("map");
    map.addLayer(new OpenLayers.Layer.OSM());
    var lonLat = new OpenLayers.LonLat(4.990678, 45.828183)
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
          );


          var gra = new OpenLayers.LonLat(5.590088, 47.447798)
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
          );

          var vie = new OpenLayers.LonLat(4.865646, 45.513533)
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
          );
        
    var zoom=6;
    var markers = new OpenLayers.Layer.Markers( "Markers" );
    //markers.bindPopup("<p>Paris</p>");
    map.addLayer(markers);

    markers.addMarker(new OpenLayers.Marker(lonLat));
    markers.addMarker(new OpenLayers.Marker(gra));
    markers.addMarker(new OpenLayers.Marker(vie));

    map.setCenter (lonLat, zoom);

    var posGray = document.getElementById("OL_Icon_22");
    var posVienne = document.getElementById("OL_Icon_26");
    var posBeynost = document.getElementById("OL_Icon_30");

    posGray.addEventListener("click", function () {
        document.getElementById("infoGray").style.display = "block";
        document.getElementById("infoVienne").style.display = "none";
        document.getElementById("infoBeynost").style.display = "none";
    });

    posVienne.addEventListener("click", function () {
        document.getElementById("infoGray").style.display = "none";
        document.getElementById("infoVienne").style.display = "block";
        document.getElementById("infoBeynost").style.display = "none";
    });

    posBeynost.addEventListener("click", function () {
        document.getElementById("infoGray").style.display = "none";
        document.getElementById("infoVienne").style.display = "none";
        document.getElementById("infoBeynost").style.display = "block";
    });

}
