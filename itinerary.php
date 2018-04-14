<?php   

  $is_itinerary = true; 

?>

<?php include('_head.php'); ?>

  <main class="main container-fluid" id="main">

    <div class="navigating hidden-print">
      <a href="hotels.php" class="btn-default btn"><span class="ion-ios-arrow-back ion"></span> Back to Results</a>
    </div>

    <header class="itinerary__header">
      <div class="row">
        <div class="col-sm-7 col-md-8">
          <h1 class="page-title">My Itinerary</h1>
          <time class="small--upper">Jan 4, 2017 &ndash; Jan 8, 2017</time>
          <p>Prepared for Jonathan May</p>
        </div>
        <div class="hidden-print itinerary__toolbar col-sm-5 col-md-4 text--sm--right">
          <a href="#" class="btn-default btn"><span class="ion-android-share ion"></span> Share…</a>
          <a href="#itinerary__print" class="itinerary__print btn-default btn" data-toggle="modal"><span class="ion-android-print ion"></span> Print</a>
          <a href="#" class="btn-default btn"><span class="md-file_download mdicon">&#xe2c4;</span> Save PDF</a>
        </div>
      </div>
    </header>

    <div class="itinerary__summary">
      <div class="row">
        <div class="col-sm-6 col-md-5">
          <h2 class="summary__title">Travel Summary</h2>
          <ul class="summary__list list-inline list-unstyled">
            <li><span class="ion-ios-sunny ion"></span> 5 Days</li>
            <li><span class="ion-ios-moon ion"></span> 4 Nights</li>
            <li><span class="ion-location ion"></span> 3 Destinations</li>
            <li><span class="ion-android-compass ion"></span> 5 Activities</li>
          </ul>
          <ol class="summary__timeline timeline">
            <li class="timeline__transfer">Flight from New York to Las Vegas (4h 35m) (2,540 Miles)</li>
            <li class="timeline__event"><span class="md-hotel mdicon">&#xe53a;</span> Fiesta Rancho Hotel &amp; Casino</li>
            <li class="timeline__transfer">Drive Las Vegas to Los Angeles (4h 35m) (2,540 Miles)</li>
            <li class="timeline__event">
              <span class="md-hotel mdicon">&#xe53a;</span> Hyatt House Los Angeles / El Segundo
              <br>
              <a href="#traveltime__add" class="btn-xs btn" data-toggle="modal"><span class="ion-android-add-circle ion text-warning"></span> Add Travel Time</a>
            </li>
            <li class="timeline__event"><span class="md-hotel mdicon">&#xe53a;</span> Hilton Hotel</li>
            <li class="timeline__transfer">Flight from San Diego to New York (4h 35m) (2,540 Miles)</li>
          </ol>
        </div>
        <div class="col-sm-6 col-md-7">
          <img src="http://placehold.it/720x480" alt="Map">
        </div>
      </div>
    </div>

    <div id="traveltime__add" class="traveltime__add modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header modalheader--center">
            <h2 class="modal-title">Add Travel Time</h2>
            <p>We will automatically calculate travel times, all you need to do is select if traveling by car or&nbsp;plane.</p>
            <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
          </div>
          <div class="modal-header text-center">
            <div class="fromto media">
              <div class="media-body">
                <span class="small--upper">Departing From</span> <br>
                <big>San Diego, CA</big>
              </div>
              <div class="media-left media-middle"><span class="ion-android-arrow-forward ion"></span></div>
              <div class="media-body">
                <span class="small--upper">Traveling To</span> <br>
                <big>Los Angeles, CA</big>
              </div>
            </div>
            <h3>Traveling by?</h3>
            <div class="btngroup--separate btngroup--checkvisible btn-group" data-toggle="buttons">
              <label class="btn-default btn-sm btn active"><input type="radio" name="traveltime" checked> Airplane</label>
              <label class="btn-default btn-sm btn"><input type="radio" name="traveltime"> Car</label>
            </div>
          </div>
          <div class="modal-footer clearfix">
            <button class="btn-link btn small--upper pull-left" data-dismiss="modal">Cancel</button>
            <div class="pull-right">
              <button type="button" class="btn-warning btn-md btn" data-dismiss="modal">Add Travel Time</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="itinerary__print" class="itinerary__print modal fade in">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header modalheader--center">
            <h2 class="modal-title">Print Options</h2>
            <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
          </div>
          <div class="modal-header">
            <h3>Print background images?</h3>
            <p>Selecting 'no' will remove background images, and replace it with a simple white color to reduce the amount of ink used in printing.</p>
            <div class="btngroup--separate btngroup--checkvisible btn-group" data-toggle="buttons">
              <label class="btn-default btn-sm btn active"><input type="radio" name="printoptions" checked> Yes</label>
              <label class="btn-default btn-sm btn"><input type="radio" name="printoptions"> No</label>
            </div>
            <div class="checkbox"><label><input type="checkbox"> Don't ask me this again</label></div>
          </div>
          <div class="modal-footer clearfix">
            <button class="btn-link btn pull-left" data-dismiss="modal">Cancel</button>
            <div class="pull-right">
              <button type="button" class="itinerary__toggleprint btn-warning btn-md btn" data-dismiss="modal">Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <p class="text-center hidden-print">
      <a href="#itinerary" class="btn-default btn">Full Itinerary <span class="ion-ios-arrow-down ion"></span></a>
    </p>

  </main>


  <div id="itinerary" class="itinerary">
    <div class="itinerary__entry entry--start">
      <h2 class="entry__title container-fluid">Leave for Las Vegas, NV</h2>
    </div>
    <div class="itinerary__entry entry--transfer transfer--plane">
      <div class="container-fluid"><span class="transfer__icon ion-android-plane ion"></span> Flight from New York to Las Vegas: 4h 35min (2,540 miles)</div>
    </div>
    <div class="itinerary__place" style="background-image: url('https://picsum.photos/640/480/?blur');">
      <div class="itinerary__entry entry--day">
        <div class="container-fluid">
          <h2 class="entry__title day__title">Day 1: Las Vegas, NV</h2>
          <time class="day__date">Thursday, Jan 4, 2018</time>
          
          <h3 class="day__header small--upper">Activities for the Day:</h3>
          <div class="day__activities row">
            <div class="col-sm-6">

              <div class="day__activity panel panel-body showing--more">
                <span class="product__icon"><span class="md-explore mdicon">&#xe87a;</span></span>
                <figure class="product__figure">
                  <img class="product__image" src="https://picsum.photos/280/280" alt="">
                </figure>
                <h4 class="product__name">Helicopter Tour</h4>
                <address class="product__address small--upper">300 W Sahara Ave, Las Vegas, NV 89102</address>
                <button class="activity__toggle btn-link btn">
                  <span class="less">Less Details</span>
                  <span class="more">Full Details</span>
                </button>
                <div class="activity__more">
                  <h5 class="product__header small--upper">Includes</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <h5 class="product__header small--upper">Description</h5>
                  <p>Autem adipisci odio unde accusantium expedita facere, dolorum repellendus facilis architecto exercitationem hic praesentium assumenda voluptate, magnam fugiat illo ipsam sequi. Doloribus.</p>
                </div>                
                <div class="activity__meta">
                  <div class="meta__item">
                    <h5 class="product__header small--upper">Duration</h5>
                    <p>30 min</p>
                  </div>
                  <div class="meta__item">
                    <h5 class="product__header small--upper">People</h5>
                    <p>2</p>
                  </div>
                </div>
              </div>    

            </div>            
          </div>
          
        </div>
      </div>
      <div class="itinerary__entry entry--day">
        <div class="container-fluid">
          <h2 class="entry__title day__title">Day 2: Las Vegas, NV</h2>
          <time class="day__date">Friday, Jan 5, 2018</time>          
          
          <h3 class="day__header small--upper">Hotels, Car Rentals, Transfers:</h3>
          <div class="day__bookings">
            <div class="day__booking booking--hotel panel">
              <span class="product__icon"><span class="md-hotel mdicon">&#xe53a;</span></span>
              <div class="booking__meta clearfix">
                <div class="booking__col col-sm-3">
                  <h4 class="product__name">Fiesta Rancho Hotel &amp; Casino</h4>
                  <address class="product__address small--upper">300 W Sahara Ave, Las Vegas, NV 89102</address>
                </div>
                <div class="booking__col col-sm-3">
                  <h5 class="booking__header small--upper">Room</h5>
                  Junior Suite 1 King bed
                </div>
                <div class="booking__col col-sm-2">
                  <h5 class="booking__header small--upper">Check-in</h5>
                  Thu, Jan 4, 2018
                </div>
                <div class="booking__col col-sm-2">
                  <h5 class="booking__header small--upper">Check-out</h5>
                  Mon, Jan 8, 2018
                </div>
                <div class="booking__col col-sm-1">
                  <h5 class="booking__header small--upper">Nights</h5>
                  2
                </div>
                <div class="booking__col col-sm-2 pull-right">
                  <button class="booking__toggle btn-link btn" data-toggle="collapse" data-target=".booking__collapse">
                    <span class="less">Less Details</span>
                    <span class="more hide">Full Details</span>
                  </button>
                </div>
              </div>
              <div class="booking__collapse collapse in panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <h5 class="small--upper">About the Hotel</h5>
                    <div class="product__rating">
                      <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
                    </div>
                    <p><a href="#">luckydragonlv.com</a></p>
                    <p>Aut ullam accusamus aspernatur, dolore tenetur, qui voluptatum. Recusandae est itaque sed. Soluta odit autem delectus repellat corporis, sint cumque ab ipsa.</p>
                    <h5 class="small--upper">Amenities</h5>
                    <ul class="hotel__amenities list-inline list-unstyled">
                      <li class="hotel__amenity btn-default btn"><span class="md-spa mdicon">&#xeb4c;</span> Spa</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-pool mdicon">&#xeb48;</span> Pool</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-fitness_center mdicon">&#xeb43;</span> Gym</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-wifi mdicon">&#xe63e;</span> WiFi</li>
                      <li class="hotel__amenity btn-default btn disabled"><span class="md-beach_access mdicon">&#xeb3e;</span> Beach</li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <div id="booking__carousel" class="carousel--product carousel slide" data-ride="carousel" data-interval="false">
                      <div class="carousel-inner" role="listbox">
                        <a href="hotel.php" class="item active"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                        <a href="hotel.php" class="item"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                        <a href="hotel.php" class="item"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                      </div>
                      <ol class="carousel-indicators">
                        <li data-target="#booking__carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#booking__carousel" data-slide-to="1"></li>
                        <li data-target="#booking__carousel" data-slide-to="2"></li>
                      </ol>
                      <a class="left carousel-control" href="#booking__carousel" role="button" data-slide="prev">
                        <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#booking__carousel" role="button" data-slide="next">
                        <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>   
                  </div>
                </div>
              </div>
            </div>
            <div class="day__booking booking--car panel">
              <span class="product__icon"><span class="md-directions_car mdicon">&#xe531;</span></span>
              <div class="booking__meta clearfix">
                <div class="booking__col col-sm-3">
                  <h4 class="product__name">Compact Car</h4>
                  <span class="product__company small--upper">Avis Car Rental</span>
                </div>
                <div class="booking__col col-sm-3">
                  <h5 class="booking__header small--upper">Insurance</h5>
                  Basic
                </div>
                <div class="booking__col col-sm-2">
                  <h5 class="booking__header small--upper">Pick-up Location</h5>
                  300 W Sahara Ave, Las Vegas, NV 89102
                </div>
                <div class="booking__col col-sm-2">
                  <h5 class="booking__header small--upper">Drop-off Location</h5>
                  300 W Sahara Ave, Las Vegas, NV 89102
                </div>
                <div class="booking__col col-sm-1">
                  <h5 class="booking__header small--upper">Days</h5>
                  2
                </div>
                <div class="booking__col col-sm-2 pull-right">
                  <button class="booking__toggle btn-link btn" data-toggle="collapse" data-target=".booking__collapse">
                    <span class="less">Less Details</span>
                    <span class="more hide">Full Details</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="itinerary__place hide">
      <div class="itinerary__entry entry--transfer transfer--car">
        <div class="container-fluid"><span class="transfer__icon ion-android-car ion"></span> Drive from Las Vegas to San Diego: 4h 35min (2,540 miles)</div>
      </div>
    </div>
    <div class="itinerary__entry entry--add">
      <div class="container-fluid">
         <a href="#traveltime__add" class="btn-link btn" data-toggle="modal"><span class="ion-android-add-circle ion text-warning"></span> Add Travel Time</a>
      </div>
    </div>

    <div class="itinerary__place" style="background-image: url('https://picsum.photos/640/480/?blur');">
      <div class="itinerary__entry entry--day">
        <div class="container-fluid">
          <h2 class="entry__title day__title">Day 1: Las Vegas, NV</h2>
          <time class="day__date">Thursday, Jan 4, 2018</time>
          
          <h3 class="day__header small--upper">Activities for the Day:</h3>
          <div class="day__activities row">
            <div class="col-sm-6">

              <div class="day__activity panel panel-body showing--more">
                <span class="product__icon"><span class="md-explore mdicon">&#xe87a;</span></span>
                <figure class="product__figure">
                  <img class="product__image" src="https://picsum.photos/280/280" alt="">
                </figure>
                <h4 class="product__name">Helicopter Tour</h4>
                <address class="product__address small--upper">300 W Sahara Ave, Las Vegas, NV 89102</address>
                <button class="activity__toggle btn-link btn">
                  <span class="less">Less Details</span>
                  <span class="more">Full Details</span>
                </button>
                <div class="activity__more">
                  <h5 class="product__header small--upper">Includes</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <h5 class="product__header small--upper">Description</h5>
                  <p>Autem adipisci odio unde accusantium expedita facere, dolorum repellendus facilis architecto exercitationem hic praesentium assumenda voluptate, magnam fugiat illo ipsam sequi. Doloribus.</p>
                </div>                
                <div class="activity__meta">
                  <div class="meta__item">
                    <h5 class="product__header small--upper">Duration</h5>
                    <p>30 min</p>
                  </div>
                  <div class="meta__item">
                    <h5 class="product__header small--upper">People</h5>
                    <p>2</p>
                  </div>
                </div>
              </div>    

            </div>            
          </div>
          
        </div>
      </div>
      <div class="itinerary__entry entry--day">
        <div class="container-fluid">
          <h2 class="entry__title day__title">Day 2: Las Vegas, NV</h2>
          <time class="day__date">Friday, Jan 5, 2018</time>          
          
          <h3 class="day__header small--upper">Hotels, Car Rentals, Transfers:</h3>
          <div class="day__bookings">
            <div class="day__booking booking--hotel panel">
              <span class="product__icon"><span class="md-hotel mdicon">&#xe53a;</span></span>
              <div class="booking__meta clearfix">
                <div class="booking__col col-sm-3">
                  <h4 class="product__name">Fiesta Rancho Hotel &amp; Casino</h4>
                  <address class="product__address small--upper">300 W Sahara Ave, Las Vegas, NV 89102</address>
                </div>
                <div class="booking__col col-sm-3">
                  <h5 class="booking__header small--upper">Room</h5>
                  Junior Suite 1 King bed
                </div>
                <div class="booking__col col-sm-2">
                  <h5 class="booking__header small--upper">Check-in</h5>
                  Thu, Jan 4, 2018
                </div>
                <div class="booking__col col-sm-2">
                  <h5 class="booking__header small--upper">Check-out</h5>
                  Mon, Jan 8, 2018
                </div>
                <div class="booking__col col-sm-1">
                  <h5 class="booking__header small--upper">Nights</h5>
                  2
                </div>
                <div class="booking__col col-sm-2 pull-right">
                  <button class="booking__toggle btn-link btn" data-toggle="collapse" data-target=".booking__collapse">
                    <span class="less">Less Details</span>
                    <span class="more hide">Full Details</span>
                  </button>
                </div>
              </div>
              <div class="booking__collapse collapse in panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <h5 class="small--upper">About the Hotel</h5>
                    <div class="product__rating">
                      <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
                    </div>
                    <p><a href="#">luckydragonlv.com</a></p>
                    <p>Aut ullam accusamus aspernatur, dolore tenetur, qui voluptatum. Recusandae est itaque sed. Soluta odit autem delectus repellat corporis, sint cumque ab ipsa.</p>
                    <h5 class="small--upper">Amenities</h5>
                    <ul class="hotel__amenities list-inline list-unstyled">
                      <li class="hotel__amenity btn-default btn"><span class="md-spa mdicon">&#xeb4c;</span> Spa</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-pool mdicon">&#xeb48;</span> Pool</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-fitness_center mdicon">&#xeb43;</span> Gym</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-wifi mdicon">&#xe63e;</span> WiFi</li>
                      <li class="hotel__amenity btn-default btn disabled"><span class="md-beach_access mdicon">&#xeb3e;</span> Beach</li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <div id="booking__carousel" class="carousel--product carousel slide" data-ride="carousel" data-interval="false">
                      <div class="carousel-inner" role="listbox">
                        <a href="hotel.php" class="item active"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                        <a href="hotel.php" class="item"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                        <a href="hotel.php" class="item"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                      </div>
                      <ol class="carousel-indicators">
                        <li data-target="#booking__carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#booking__carousel" data-slide-to="1"></li>
                        <li data-target="#booking__carousel" data-slide-to="2"></li>
                      </ol>
                      <a class="left carousel-control" href="#booking__carousel" role="button" data-slide="prev">
                        <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#booking__carousel" role="button" data-slide="next">
                        <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>   
                  </div>
                </div>
              </div>
            </div>
            <div class="day__booking booking--car panel">
              <span class="product__icon"><span class="md-directions_car mdicon">&#xe531;</span></span>
              <div class="booking__meta clearfix">
                <div class="booking__col col-sm-3">
                  <h4 class="product__name">Compact Car</h4>
                  <span class="product__company small--upper">Avis Car Rental</span>
                </div>
                <div class="booking__col col-sm-3">
                  <h5 class="booking__header small--upper">Insurance</h5>
                  Basic
                </div>
                <div class="booking__col col-sm-2">
                  <h5 class="booking__header small--upper">Pick-up Location</h5>
                  300 W Sahara Ave, Las Vegas, NV 89102
                </div>
                <div class="booking__col col-sm-2">
                  <h5 class="booking__header small--upper">Drop-off Location</h5>
                  300 W Sahara Ave, Las Vegas, NV 89102
                </div>
                <div class="booking__col col-sm-1">
                  <h5 class="booking__header small--upper">Days</h5>
                  2
                </div>
                <div class="booking__col col-sm-2 pull-right">
                  <button class="booking__toggle btn-link btn" data-toggle="collapse" data-target=".booking__collapse">
                    <span class="less">Less Details</span>
                    <span class="more hide">Full Details</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="itinerary__entry entry--end">
      <div class="container-fluid">
        <h2 class="entry__title">Day 5: Travel Home</h2>
        <time class="day__date">Monday, Jan 8, 2018</time>
        <a href="#main" class="backtotop btn">Back to Top <span class="ion-ios-arrow-thin-up ion"></span></a>
      </div>
    </div>

  </div>


<?php include('_footer.php'); ?>  