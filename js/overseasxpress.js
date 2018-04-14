$(function() {
  
  // debug
  // $('#traveltime__add').modal('show');


  // Hash
  // console.log( location.href.indexOf("#") );
  // if ( location.href.indexOf("#") !== -1 ) {
  //   var hash = location.href.substr(location.href.indexOf("#"));
  //   var $account__tabs = $('.account__tabs');
  //   console.log(hash);
  //   switch (hash) {
  //     case 'commission': {
  //       $('#' + hash).tab('show');
  //       break;
  //     }
  //     case 'profile': {
  //       $('#' + hash).tab('show');
  //       break;
  //     }
  //   }
  // }


  // Top Nav Search
  // show menu results on focus 
  var $search        = $('#search'),
      $search__icon  = $('#search__icon'),
      $search__input = $search.find('.form-control'),
      $search__close = $search.find('.search__close'),
      // $search__popup = $search.find('.search__popup');
      // $search__option = $search.find('.search__option'),
      $search__options = $search.find('.search__options');
      // $search__destination = $search.find('.search__destination'),
      // $search__destinations = $search.find('.search__destinations');

  $search__input.on('focus', function() {
    if ( $search.hasClass('is--destination') ) {
      // if on destination page, move the options dropdown and make it visible
      // $search.addClass('has--options');  
      $search__options.detach().insertBefore('.search__dropdowns');
    } else {
      $search.addClass('has--results');  
    }
  }).on('blur', function() {
    if ( $search.hasClass('is--destination') ) {
      // if on destination page, return the options dropdown back to its btn-group 
      // but set a delay so you can still click on stuff
      setTimeout(function() {
        $search__options.detach().appendTo('.btngroup--searchoption');
      }, 500);
    }
  });
  $search__icon.on('click', function(e) {
    $search.addClass('has--results');
    if ( $search.hasClass('is--destination') ) {
      e.preventDefault();
    }
  });
  $search__close.on('click', function() {
    $search.removeClass('has--results');
  });


  // Popover
  $('.popovertoggle--hover').popover({
    trigger:    'manual',
    html:       true,
    placement:  'bottom',
    template:   '<div class="popover" role="tooltip"><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
    content:  function() {
      return $( $(this).attr('data-content-source') ).html();
    }
  }).on('mouseenter', function() {
    var $this = $(this);
    $this.popover('show');
    $('body').on('click', function() {
      $this.popover('hide');
    });
    $('.popover__cancel').on('click', function() {
      $this.popover('hide');
    });
  });
  $('.search__detail').popover({
    html:       true,
    placement:  'bottom',
    template:   '<div class="search__details popover--searchdetails popover" role="tooltip"><div class="popover-content row"></div></div>',
    content:  function() {
      return $( $(this).attr('data-content-source') ).html();
    }
  });


  // Quote hover
  $('.quotebydate__handle').on('mouseenter mouseleave', function() {
    $(this).parents('.quotebydate__item').toggleClass('hover');
  });


  // Flyout toggle
  $('.flyout__close').on('click', function() {
    $(this).parents('.flyout').toggleClass('active');
  });
  

  // Input Group Number
  // add and subtract
  var $inputgroup__number = $('.inputgroup--number'),
      $number__add = $inputgroup__number.find('.plus'),
      $number__subtract = $inputgroup__number.find('.minus');
  $number__add.on('click', function() {
    var $input = $(this).siblings('input').first(),
        $value = parseInt( $input.val() );
    $input.val( 1 + $value );
  });
  $number__subtract.on('click', function() {
    var $input = $(this).siblings('input').first(),
        $value = parseInt( $input.val() );
    if ( $value > 0 ) {
      $input.val( -1 + $value );
    }
  });


  // Account > Commission Rates
  $('.commission__example__toggle').on('click', function(e) {
    $('#commission__rates').toggleClass('disabled');
    $('#commission__example').toggleClass('hide');
    e.preventDefault();
  });


  // My Itinerary
  $('.itinerary .activity__toggle').on('click', function() {
    // toggle a class to the activity panel 
    $(this).parents('.day__activity').toggleClass('showing--more');
  });
  $('.itinerary .booking__toggle').on('click', function() {
    // toggle the hide class on the child elements 
    $(this).find('.less').toggleClass('hide');
    $(this).find('.more').toggleClass('hide');
  });

  $('.itinerary__toggleprint').on('click', function() {
    $('.main').toggleClass('for--print');
  });


  // Date Range Picker
  $('.input--daterangepicker').daterangepicker({
    'buttonClasses': 'btn',
    'applyClass':  'btn-link btn-md',
    'cancelClass': 'btn-link btn-md'
  }).on('apply.daterangepicker hide.daterangepicker', function() {
    var $startdate = $(this).find('.startdate'),
        $enddate = $(this).find('.enddate'),
        $date = $(this).data('daterangepicker');

    $startdate.text( $date.startDate.format('MMM D') );
    $enddate.text( $date.endDate.format('MMM D') );
  });


  $('.input--daterangepicker').data('daterangepicker').setStartDate('03/01/2014');
 $('.input--daterangepicker').data('daterangepicker').setEndDate('03/31/2014');

  $('.input--daterangepicker').trigger('apply.daterangepicker');





  // Range Slider
  $('.input--pricerange').slider({
    'tooltip_position': 'bottom'
  });
  $('.input--pricerange').on('change', function() {
    var $startprice = $(this).data('slider')._state.value[0];
    var $endprice = $(this).data('slider')._state.value[1];
    var $input = $(this).parents('.pricerange').find('.pricerange__input');
    var $input__start = $input.find('.startprice');
    var $input__end = $input.find('.endprice');
    $input__start.text( $startprice );
    $input__end.text( $endprice );
  });


  // Drilldown
  function updateLocationsCrumb( list ) {
    var $level__name  = $('.locations__crumb').find('.level__name');
    var $level__value = $('.locations__crumb').find('.level__value');
    $level__name.text( list.data('level-name') );
    $level__value.text( list.data('level-value') );
  }
  $('.locations__level:first-child').find('li').on('click', function() {
    // switch visibility of heading if 1st list 
    $('.locations__nav').removeClass('hide');
    $('.locations__title').addClass('hide');
  });

  $('.locations__city').find('li').on('click', function() {
    // toggle active class if clicking on destination
    $(this).toggleClass('active');
  });

  $('.locations__level').not(':last-child').find('li').on('click', function() {
    var $activeItem = $(this);
    var $activeList = $(this).parents('.locations__level');
    
    // get values to save in data & display in heading, then show the next list 
    $activeList.data('level-value', $activeItem.text());
    $activeList.addClass('hide').next('.locations__level').removeClass('hide');
    updateLocationsCrumb( $activeList );
  });
  $('.level__back').on('click', function() {
    var $activeList = $('.locations__level').not('.hide').first();
    
    // switch visibility of heading if 2nd list 
    if ( $activeList.index('.locations__level') === 1 ) {
      $('.locations__title').removeClass('hide');
      $('.locations__nav').addClass('hide');
    }

    // toggle visibility of lists
    $activeList.not(':first-child').addClass('hide').prev('.locations__level').removeClass('hide');   

    // update heading values with PREVIOUS 
    if ( $activeList.data('level-name') === 'City' ) {
      // use Region heading 
      updateLocationsCrumb( $activeList.siblings('.locations__region') );
    } else {
      updateLocationsCrumb( $activeList.prev('.locations__level') );
    }

  });


  // Maps
  if ( $('.itinerary__map #map').length ) {
    initMap();
  }
  // init only when map object is shown
  $('#map').on('shown.bs.collapse', function() {
    initMap(); 
  });
  // init only when map object is shown
  $('#map').on('shown.bs.modal', function() {
    initMap(); 
  });

});


var activities = [ 
  {
    'type': 'activity',
    'lat': '-33.890542', 
    'lng': '151.274856',
    'title': 'Bondi'
  }
];
var hotels = [ 
  {
    'type': 'hotel',
    'lat': '-33.80010128657071', 
    'lng': '151.28747820854187',
    'title': 'Manly'
  }
];
var activity = {
  'type': 'place',
  'lat': -33.80010128657071,
  'lng': 151.28747820854187,
  'title': 'Activity Name'
};

function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: {lat: -33.9, lng: 151.2}
  });

  var icon_orange = {
    url: 'img/map-marker-orange.png',
    size: new google.maps.Size(25, 39)
  };

  var icon_turquoise = {
    url: 'img/map-marker-turquoise.png',
    size: new google.maps.Size(25, 39)
  };

  var icon_activity = {
    url: 'img/map-marker-activity.png',
    size: new google.maps.Size(45, 45),
    scaledSize: new google.maps.Size(36, 36),
    anchor: new google.maps.Point(18, 18)
  };

  var icon_hotel = {
    url: 'img/map-marker-hotel.png',
    size: new google.maps.Size(45, 45),
    scaledSize: new google.maps.Size(36, 36),
    anchor: new google.maps.Point(18, 18)
  };

  // Browse page 
  if ( $('.itinerary__map').length ) {
    var marker = new google.maps.Marker({
      map: map, 
      title: activity.title, 
      position: {lat: activity.lat, lng: activity.lng},
      icon: icon_orange
    });
  }

  // Activities / Hotels pages 
  if ( $('#map__activity').length )
    placeMarkers( map, activities, icon_activity );
  if ( $('#map__hotel').length )
    placeMarkers( map, hotels, icon_hotel );  
  
  // Activity page 
  if ( $('#activity__map').length ) {
    var marker = new google.maps.Marker({
      map: map, 
      title: 'Some Location',
      position: {lat: activity.lat, lng: activity.lng}
    });
    // notworking
    // google.maps.event.addListener(marker, 'mouseover', function() { 
    //   marker.setIcon( icon_turquoise );
    // });
  }

  google.maps.event.addListener(map, 'idle', function(){
    google.maps.event.trigger(map, 'resize'); 
  });

}

function placeMarkers( map, data, icon ) {

  for (var i = 0; i < data.length; i++) {

    var title = data[i].title;
    var latlngset = new google.maps.LatLng(data[i].lat, data[i].lng);
    
    var marker = new google.maps.Marker({
      map: map, 
      title: title, 
      position: latlngset,
      icon: icon
    });

    var contentString = '';
    if ( data[i].type === 'activity' ) {
      contentString = document.getElementById('map__activity').innerHTML;
    }
    if ( data[i].type === 'hotel' ) {
      contentString = document.getElementById('map__hotel').innerHTML;
    }

    var infowindow = new google.maps.InfoWindow({ 
      // content: title,
      content: contentString,
      // maxWidth: 390
    });

    google.maps.event.addListener(marker, 'click', function() { 
      
      infowindow.open(map, marker);
  
    }); 

    // infowindow.open(map, marker);

    // google.maps.event.addListener(marker, 'mouseenter', function() { 
    //   marker.setOptions({
    //     icon: {
    //       scaledSize: new google.maps.Size(45, 45)
    //     }
    //   });
    // });

    // change some infowindow styles
    google.maps.event.addListener(infowindow, 'domready', function() {

      var iwOuter = $('.gm-style-iw');
      iwOuter.css({ 'top':'', 'bottom':0 });
      iwOuter.find('div:first-child').css({ 'overflow':'' });

      var iwBackground = iwOuter.prev();
      iwBackground.addClass('gm-style-iw-ui')
      iwBackground.children(':nth-child(1)').addClass('gm-style-iw-arrow');
      iwBackground.children(':nth-child(2)').css({ 'box-shadow':'', 'background-color':'', 'border-radius':'' }).addClass('gm-style-iw-shadow');
      iwBackground.children(':nth-child(4)').css({ 'border':'', 'background-color':'', 'border-radius':'' }).addClass('gm-style-iw-bg');

      var iwClose = iwOuter.next();
      iwClose.css({ 'top':'30px', 'right':'50px' }).addClass('gm-style-iw-close');

    });

  }
}