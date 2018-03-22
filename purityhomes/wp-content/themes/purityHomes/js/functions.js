var templateUrl = object_name.templateUrl;

function nav() {
  if ($(document).scrollTop() > 70){
    $("header").addClass("stick");
  } else {
    $("header").removeClass("stick");
  }
  if ($(document).scrollTop() > 200){
    $(".banner-tag").addClass("enlarge");
  }
}

var mapSideBar, mapFooter;

function initMap() {
  var myLatLng = {lat: -43.5141525, lng: 172.635146};
  var icon1 = templateUrl+'/assets/images/purityhomes_marker.png';
  var icon2 = templateUrl+'/assets/images/purityhomes_marker2.png';
  var styles = [
    {
      "featureType": "administrative",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#444444"
        }
      ]
    },
    {
      "featureType": "landscape",
      "elementType": "all",
      "stylers": [
        {
          "color": "#f2f2f2"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "all",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 45
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "saturation": "-66"
        },
        {
          "lightness": "-28"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "transit",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "transit.station.airport",
      "elementType": "geometry.fill",
      "stylers": [
        {
          "visibility": "on"
        },
        {
          "color": "#e6e6e6"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "all",
      "stylers": [
        {
          "color": "#c1c1c1"
        },
        {
          "visibility": "on"
        }
      ]
    }
  ];

  var mapOptions = {
    scrollwheel: false,
    zoom: 13,
    center: myLatLng,
    styles: styles,
    disableDefaultUI: true,
    zoomControl: true
  };

  console.log(document.getElementById("map_sideBar"));

  if(document.getElementById("map_sideBar")) {
    mapSideBar = new google.maps.Map(document.getElementById("map_sideBar"), mapOptions);
  }

  mapFooter = new google.maps.Map(document.getElementById("map_footer"), mapOptions);


  new google.maps.Marker({
    position: myLatLng,
    map: mapSideBar,
    icon: icon1
  });

 new google.maps.Marker({
    position: myLatLng,
    map: mapFooter,
    icon: icon2
  });
}

nav();


$(document).on("scroll", function(){
  nav()
});

$(document).ready(function() {

  setTimeout(function(){
    $('.static-gallery .gallery-slider').slick({
      infinite: true,
      speed: 2000,
      adaptiveHeight: true,
      dots: true
    });
    $('.static-gallery').css('opacity', 1)
  }, 200);

  $('.menu-item-has-children > a').click(function(e){
    e.preventDefault();
    $(this).siblings( ".sub-menu" ).toggleClass('open');
  });


  $('.floorplan .gray-dark').before('<section class="padding-md gray-light"><div class="container"><div class="row"><div class="col-md-12 basic-header"></div></div></div></section>');

  $('.floorplan .gray-dark .container > h2:first-of-type').appendTo('.basic-header');
  $('.floorplan .gray-dark .container > p:first-of-type').appendTo('.basic-header');

  setTimeout(function(){
    $('.floorplan .gray-dark').css('opacity', '1');
  }, 500);


  $('input:radio[name=own-section]').change(function () {
    if ($(this).val() == 'Yes') {
      $('textarea[name=address]').css('opacity', '1').css('pointer-events', 'all');
    }
    if ($(this).val() == 'No') {
      $('textarea[name=address]').css('opacity', '0.2').css('pointer-events', 'none');
    }
  });

});
