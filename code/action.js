/*declenchement a la fin de la lecture du css sinon le js ce lance tout de suite et il fait une erreur */
window.onload = function() {
  
  // création de la popup
  var open = document.getElementById("button_modal");
  var close = document.getElementById("boxForm");
  
  open.addEventListener("click", function () {
    document.getElementById("boxForm").style.display = "block"
  });

  close.addEventListener("click", function () { 
    document.getElementById("boxForm").style.display = "none"
  });

  //permet d'arrete la fonction close ce qui evite quand on clic sur l'input ou le formulaire ou autre de fermer la popup
  document.getElementById('form').addEventListener('click', e => e.stopPropagation());

// création de la map
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

    var posGray = document.getElementById("OL_Icon_26");
    var posVienne = document.getElementById("OL_Icon_30");
    var posBeynost = document.getElementById("OL_Icon_22");

    posGray.addEventListener("click", function () {
        document.getElementById("gray").style.display = "block";
        document.getElementById("vienne").style.display = "none";
        document.getElementById("beynost").style.display = "none";
    });

    posVienne.addEventListener("click", function () {
        document.getElementById("gray").style.display = "none";
        document.getElementById("vienne").style.display = "block";
        document.getElementById("beynost").style.display = "none";
    });

    posBeynost.addEventListener("click", function () {
        document.getElementById("gray").style.display = "none";
        document.getElementById("vienne").style.display = "none";
        document.getElementById("beynost").style.display = "block";
    });

    
  //creation variables
var btn_1 = document.getElementById("btn_1");
var btn_2 = document.getElementById("btn_2");
var btn_3 = document.getElementById("btn_3");
var btn_4 = document.getElementById("btn_4");



//donne lemplacement ou il doit scroller pour projet
function nous() {
    qui.scrollIntoView({ behavior: 'smooth' });
}

//donne l'emplacement ou il doit scroller pour competences
function prestation(){
    prestations.scrollIntoView({behavior: 'smooth'});
}

//donne lemplacement ou il doit scroller pour contact crée la fonction (nomage fonction)
function trouve(){
    trouver.scrollIntoView({behavior: 'smooth'});
}

//donne lemplacement ou il doit scroller pour contact crée la fonction (nomage fonction)
function contacts(){
  contact.scrollIntoView({behavior: 'smooth'});
}

// commande du clic on appel la fonction
btn_1.addEventListener("click" , nous);
btn_2.addEventListener("click" , prestation);
btn_3.addEventListener("click" , trouve);
btn_4.addEventListener("click" , contacts);

// la moda

}
