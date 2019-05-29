function timer() {
  var days        = Math.floor(seconds/24/60/60);
  var hoursLeft   = Math.floor((seconds) - (days*86400));
  var hours       = Math.floor(hoursLeft/3600);
  var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
  var minutes     = Math.floor(minutesLeft/60);
  var remainingSeconds = seconds % 60;
  if (remainingSeconds < 10) {
      remainingSeconds = "0" + remainingSeconds;
  }

  $('.countdown-seconds').html(remainingSeconds);
  $('.countdown-minutes').html(minutes);
  $('.countdown-hours').html(hours);
  $('.countdown-days').html(days);

  if (seconds == 0) {
      clearInterval(countdownTimer);
      document.getElementById('countdown').innerHTML = "Completed";
  } else {
      seconds--;
  }
}

var seconds;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: new google.maps.LatLng(49.448335, 11.091619),
    mapTypeId: 'roadmap',
    styles: [
      {
          "featureType": "all",
          "elementType": "labels.text.fill",
          "stylers": [
              {
                  "saturation": 36
              },
              {
                  "color": "#000000"
              },
              {
                  "lightness": 40
              }
          ]
      },
      {
          "featureType": "all",
          "elementType": "labels.text.stroke",
          "stylers": [
              {
                  "visibility": "on"
              },
              {
                  "color": "#000000"
              },
              {
                  "lightness": 16
              }
          ]
      },
      {
          "featureType": "all",
          "elementType": "labels.icon",
          "stylers": [
              {
                  "visibility": "off"
              }
          ]
      },
      {
          "featureType": "administrative",
          "elementType": "geometry.fill",
          "stylers": [
              {
                  "color": "#000000"
              },
              {
                  "lightness": 20
              }
          ]
      },
      {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [
              {
                  "color": "#000000"
              },
              {
                  "lightness": 17
              },
              {
                  "weight": 1.2
              }
          ]
      },
      {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#000000"
              },
              {
                  "lightness": 20
              }
          ]
      },
      {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#000000"
              },
              {
                  "lightness": 21
              }
          ]
      },
      {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [
              {
                  "color": "#000000"
              },
              {
                  "lightness": 17
              }
          ]
      },
      {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
              {
                  "color": "#000000"
              },
              {
                  "lightness": 29
              },
              {
                  "weight": 0.2
              }
          ]
      },
      {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#000000"
              },
              {
                  "lightness": 18
              }
          ]
      },
      {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#000000"
              },
              {
                  "lightness": 16
              }
          ]
      },
      {
          "featureType": "transit",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#424242"
              },
              {
                  "lightness": 19
              }
          ]
      },
      {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#37375a"
              },
              {
                  "lightness": 17
              }
          ]
      }
  ]

  });

  var transitLayer = new google.maps.TransitLayer();
  transitLayer.setMap(map);

  var features = [
    {
      position: new google.maps.LatLng(49.448412,11.096546),
      type: 'main',
      title: 'ownCloud Conference',
      label: {text: 'Conference Venue', color: '#ffffff' },
      image: {
        size: new google.maps.Size(48, 48),
        url: ajax_params.template_path + '/img/conference/marker-conference.png',
        labelOrigin: new google.maps.Point(50,-10)
      },
      content: '<div class="mapwindow>'+
        '<div>'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">TH Nürnberg</h1>'+
        '<div id="bodyContent">'+
        '<p>Faculty of architecture</p>'+
        '</div>'+
        '</div>'
    },
    {
      position: new google.maps.LatLng(49.447966, 11.097439),
      type: 'transit',
      title: 'S-Bahn Line S1, S2, S3 "Dürrenhof"',
      label: {text: 'S-Bahn Dürrenhof', color: '#ffffff' },
      image: {
        size: new google.maps.Size(48, 48),
        url: ajax_params.template_path + '/img/conference/marker-transit.png',
        labelOrigin: new google.maps.Point(42,40)
      },
      content: '<div class="mapwindow>'+
        '<div>'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Public transport station "Dürrenhof"</h1>'+
        '<div id="bodyContent">'+
        '<p>Lines: S1, S2, S3, 1 station from Nürnberg main station</p>'+
        '<p>See schedules here: <a href="https://www.vgn.de/02b47cae-b50b-b97a-ad0e-0c50b22d3e70?to=de%3A09564%3A510&td=de%3A09564%3A427">VGN website</a>' +
        '</div>'+
        '</div>'
    },
    {
      position: new google.maps.LatLng(49.4484967,11.095457),
      type: 'transit',
      title: 'Tram Line 5 "Dürrenhof"',
      label: {text: 'Tram Dürrenhof', color: '#ffffff' },
      image: {
        size: new google.maps.Size(48, 48),
        url: ajax_params.template_path + '/img/conference/marker-transit.png',
        labelOrigin: new google.maps.Point(0,40)
      },
      content: '<div class="mapwindow>'+
        '<div>'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Public transport station "Dürrenhof"</h1>'+
        '<div id="bodyContent">'+
        '<p>Lines: Tram 5, Bus 5, 2 minutes from Nürnberg main station.</p>'+
        '<p>See schedules here: <a href="https://www.vgn.de/02b47cae-b50b-b97a-ad0e-0c50b22d3e70?to=de%3A09564%3A510&td=de%3A09564%3A427">VGN website</a>' +
        '</div>'+
        '</div>'
    },
    {
      position: new google.maps.LatLng(49.4466896,11.0822634),
      type: 'transit',
      title: 'Nürnberg main station',
      label: {text: 'Nürnberg main station', color: '#ffffff' },
      image: {
        size: new google.maps.Size(48, 48),
        url: ajax_params.template_path + '/img/conference/marker-transit.png',
        labelOrigin: new google.maps.Point(0,40)
      }
    },
    {
      position: new google.maps.LatLng(49.4478549,11.0803419),
      type: 'transit',
      title: 'Hotel "Le Meridien"',
      label: {text: 'Le Meridien', color: '#ffffff' },
      image: {
        size: new google.maps.Size(48, 48),
        url: ajax_params.template_path + '/img/conference/marker-accomodation.png',
        labelOrigin: new google.maps.Point(21,-10)
      },
      content: '<div class="mapwindow">'+
        '<h1 id="firstHeading" class="firstHeading">Hotel "Le meridien Grand"</h1>'+
        '<div id="bodyContent">'+
        '<img src="https://t-ec.bstatic.com/images/hotel/max1024x768/853/85393217.jpg" />'+
        '<p>Directly across from Nuremberg Central Station, this hotel offers elegant rooms with marble bathrooms, flat-screen TVs and iPod docking stations. The pedestrian area and Old Town are just steps away.</p>' +
        '<p>The rooms of Le Meridien Grand Hotel Nürnberg have views of the quiet courtyard, train station or historic quarter.<p>'+
        '<p>Distance to Conference venue: by foot: 15min / by public transportation: 3-5 min</p>' +
        '<a class="button-oc" target="_blank" href="https://www.booking.com/hotel/de/le-meridien-grand-nuremberg.html">Book now</a>' +
        '</div>'+
        '</div>'
    },
    {
      position: new google.maps.LatLng(49.4469797,11.0844563),
      type: 'transit',
      title: 'Hotel "Holiday Inn Express"',
      label: {text: 'Holiday Inn Express', color: '#ffffff' },
      image: {
        size: new google.maps.Size(48, 48),
        url: ajax_params.template_path + '/img/conference/marker-accomodation.png',
        labelOrigin: new google.maps.Point(21,-10)
      },
      content: '<div class="mapwindow">'+
        '<h1 id="firstHeading" class="firstHeading">Holiday Inn Express</h1>'+
        '<div id="bodyContent">'+
        '<img src="https://s-ec.bstatic.com/images/hotel/max1280x900/346/34606473.jpg" />'+
        '<p>This hotel is centrally in Nuremberg, just a quarter mile from the main station and near the Old Town. Free Wi-Fi is provided for guests at Holiday Inn Express Nurnberg City - Hauptbahnhof.</p>' +
        '<p>Distance to Conference venue: by foot: 10min / by public transportation: 3-5 min</p>' +
        '<a class="button-oc" target="_blank" href="https://www.booking.com/hotel/de/holiday-inn-express-nurnberg-city-hauptbahnhof.html">Book now</a>' +
        '</div>'+
        '</div>'
    },
    {
      position: new google.maps.LatLng(49.4473843,11.0850644),
      type: 'transit',
      title: 'Hotel "NH Collection"',
      label: {text: 'NH Collection', color: '#ffffff' },
      image: {
        size: new google.maps.Size(48, 48),
        url: ajax_params.template_path + '/img/conference/marker-accomodation.png',
        labelOrigin: new google.maps.Point(21,-10)
      },
      content: '<div class="mapwindow">'+
        '<h1 id="firstHeading" class="firstHeading">NH Collection</h1>'+
        '<div id="bodyContent">'+
        '<img src="https://s-ec.bstatic.com/images/hotel/max1280x900/809/80948904.jpg" />'+
        '<p>Located in the Mitte neighborhood in Nürnberg, 1 km from Schauspielhaus Theater, NH Collection Nürnberg City features free WiFi access and private parking. The hotel has a terrace and fitness center, and guests can enjoy a meal at the restaurant.</p>' +
        '<p>Distance to Conference venue: by foot: 10min / by public transportation: 3-5 min</p>' +
        '<a class="button-oc" class="button-oc" target="_blank" href="https://www.booking.com/hotel/de/nhnurnbergcity.html">Book now</a>' +
        '</div>'+
        '</div>'
    },
    {
      position: new google.maps.LatLng(49.4470056,11.0848112),
      type: 'transit',
      title: 'Hotel "Hampton by Hilton"',
      label: {text: 'Hampton by Hilton', color: '#ffffff' },
      image: {
        size: new google.maps.Size(48, 48),
        url: ajax_params.template_path + '/img/conference/marker-accomodation.png',
        labelOrigin: new google.maps.Point(21,-10)
      },
      content: '<div class="mapwindow">'+
        '<h1 id="firstHeading" class="firstHeading">Hapton bei Hilton</h1>'+
        '<div id="bodyContent">'+
        '<img src="https://s-ec.bstatic.com/images/hotel/max1280x900/809/80948904.jpg" />'+
        '<p>Located in Nürnberg, half a kilometer from Schauspielhaus Theater, Hampton by Hilton Nürnberg City Center features air-conditioned rooms with free WiFi throughout the property. Guests can enjoy the on-site bar.</p>' +
        '<p>Distance to Conference venue: by foot: 10min / by public transportation: 3-5 min</p>' +
        '<a class="button-oc" target="_blank" href="https://www.booking.com/hotel/de/hampton-by-hilton-na1-4rnberg-city-centre.html">Book now</a>' +
        '</div>'+
        '</div>'
    }
  ];

  // Create markers.
  features.forEach(function(feature) {
    var marker = new google.maps.Marker({
      position: feature.position,
      icon: feature.image,
      map: map,
      title: feature.title,
      label: feature.label,
      labelAnchor: new google.maps.Point(20, 0),
      labelClass: "labels", // the CSS class for the label
      labelStyle: {opacity: 0.75}
    });

    if (typeof feature.content !== 'undefined') {
      var infowindow = new google.maps.InfoWindow({
        content: feature.content
      });

      lastInfoWindow = infowindow;

      marker.addListener('click', function() {
        lastInfoWindow.close();
        infowindow.open(map, marker);
      });
    }

  });
}

var lastInfoWindow;

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

$(document).ready(function() {
  var upgradeTime = $('#countdown-timer').attr('data-date');
  seconds = upgradeTime;

  // var countdownTimer = setInterval('timer()', 1000);

  $(window).scroll(function() {
    var pos = $(window).scrollTop();

    $('header .geo.blue').css({top: '-' + (pos / 10) + 'px'});
    $('header .geo.pink').css({top: '-' + (pos / 3) + 'px'});
    $('header .geo.yellow').css({top: (pos / 5) + 'px'});
    $('header .geo.green').css({right: (pos) + 'px'});
  });

  var map;
  $.getScript( "https://maps.googleapis.com/maps/api/js?key=AIzaSyA0R3a-lj1HLQpo1cJVgNe7lu3oiZSbVLU&callback=initMap" );

  $('.schedule .days .button-oc').on('click', function() {
    $('.schedule .button-oc.active').removeClass('active');
    $(this).addClass('active');

    $('.schedule table.active').fadeOut(300, function() {
      $('.schedule table[data-day="' + $(this).attr('data-day') + '"]').show();
    })
    return false;
  });

  $('form.newsletter-subscribe').submit(function(e) {
    $form = $(this);
    $form.addClass('loading');
    e.preventDefault();
    var $form = $(this);

    jQuery.ajax({
      url : ajax_params.url,
      type : 'post',
      dataType: 'JSON',
      data : {
        action : 'marketo',
        nonce: ajax_params.nonce,
        data: {
          'action': 'newsletter-submission',
          'lead': {
            'email': $form.find('input').val()
          }
        }
      },
      success : function( response ) {
        if (response.success === 1) {
          $form.removeClass('loading');
          $form.find('.success').show();
          $form.find('button').slideUp(300);
        }
      }
    });
    return false;
  });

  $('.register form').submit(function() {
    var $form = $(this);
    var errors = false;

    if ($form.find('input#firstname').val() === '') {
      $form.find('input#firstname').parents('.mdl-textfield').addClass('has-error');
      errors = true;
    }

    if ($form.find('input#lastname').val() === '') {
      $form.find('input#lastname').parents('.mdl-textfield').addClass('has-error');
      errors = true;
    }

    if ($form.find('input#email').val() === '') {
      $form.find('input#email').parents('.mdl-textfield').addClass('has-error');
      errors = true;
    }

    if ($form.find('input#country').val() === '') {
      $form.find('input#country').parents('.mdl-textfield').addClass('has-error');
      errors = true;
    }

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(String($form.find('input#email').val()).toLowerCase())) {
      $form.find('input#email').parents('.mdl-textfield').addClass('has-error');
      errors = true;
    }

    if (errors)
      return false;

    $form.addClass('loading');
    $form.find('button').blur();

    jQuery.ajax({
      url : ajax_params.url,
      type : 'post',
      dataType: 'JSON',
      data : {
        action : 'marketo',
        nonce: ajax_params.nonce,
        data: {
          'action': 'conference-signup',
          'lead': {
            'firstname': $form.find('input#firstname').val(),
            'lastname': $form.find('input#lastname').val(),
            'email': $form.find('input#email').val(),
            'company': $form.find('input#company').val(),
            'newsletter': $form.find('#newsletter').prop('checked'),
            'country': $form.find('#country').val()
          }
        }
      },
      success : function( response ) {
        $form.removeClass('loading');
        $form.find('.button-oc').hide();
        $form.find('.success').show();
      }
    });
    return false;
  });

  var e = getParameterByName('e');
  if (e !== null) {
    $('html, body').animate({
      scrollTop: $('section.register').offset().top - 40
    }, 1000, 'easeInOutQuad');

    setTimeout(function() {
      jQuery.ajax({
        url : ajax_params.url,
        type : 'post',
        dataType: 'JSON',
        data : {
          action : 'marketo',
          nonce: ajax_params.nonce,
          data: {
            'action': 'setProgramStatus',
            'programId': 1527,
            'status': 'Confirmed',
            'lead': {
              'id': e,
            }
          }
        },
        success : function( response ) {
          $('section.register').find('.fa-circle-o-notch').hide();
          $('section.register').find('.waiting').hide();

          if(response.success == 1) {
            $('section.register').find('.confirmed').show();
            $('section.register').find('.fa-check').removeClass('hide').delay(1000).addClass('roll');
          } else {
            $('section.register').find('.error').show();
          }
        }
      });
    }, 900);
  }
});
