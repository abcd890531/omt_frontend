<?php 

  $page__title = 'Lucky Dragon Hotel &amp; Casino';
  $is_searching = true;
  $search__option = 'Hotels';

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <div class="activequote">
        <h2 class="activequote__header">Active Quote</h2>
        <ul class="activequote__list list-inline list-unstyled">
          <li class="activequote__item"><h3 class="activequote__label small--upper">Client</h3> <strong class="activequote__value">May Jonathan</strong></li>
          <li class="activequote__item"><h3 class="activequote__label small--upper">Quote #</h3> <strong class="activequote__value">001370</strong></li>
          <li class="activequote__item">
            <h3 class="activequote__label small--upper">Budget</h3> <strong class="activequote__value">$2,000</strong>
            <div class="activequote__progress progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
            <h3 class="activequote__label small--upper">Total</h3> <strong class="activequote__value">$1900</strong>
          </li>
          <li class="activequote__item">
            <h3 class="activequote__label small--upper">Trip Summary By:</h3> 
            <div class="dropdown">
              <strong class="activequote__value dropdown-toggle" data-toggle="dropdown">Date <span class="ion-arrow-down-b ion"></span></strong>
              <div class="activequote__tripsummary dropdown-menu">
                <ol class="activequote__timeline timeline">
                  <li class="timeline__day">
                    <h3 class="day__title">Day 1: Thursday, Jan 4</h3>
                    <address class="small--upper">Las Vegas, NV</address>
                    <ul>
                      <li class="timeline__event"><span class="md-explore mdicon">&#xe87a;</span> Helicopter Tour</li>
                      <li class="timeline__event"><span class="md-hotel mdicon">&#xe53a;</span> Fiesta Rancho Hotel &amp; Casino</li>
                    </ul>
                  </li>
                  <li class="timeline__day">
                    <h3 class="day__title">Day 2: Friday, Jan 5</h3>
                    <address class="small--upper">Las Vegas, NV</address>
                    <ul>
                      <li class="timeline__event"><span class="md-explore mdicon">&#xe87a;</span> Exotic Car Race</li>
                      <li class="timeline__event"><span class="md-hotel mdicon">&#xe53a;</span> Fiesta Rancho Hotel &amp; Casino</li>
                    </ul>
                  </li>
                </ol>
              </div>
            </div>
            <div class="dropdown">
              <strong class="activequote__value dropdown-toggle" data-toggle="dropdown">Destination <span class="ion-arrow-down-b ion"></span></strong>
              <div class="dropdown-menu">
                Another Dropdown
              </div>
            </div>
          </li>
          <li class="activequote__item activequote__exit">Exit <span class="ion-android-close ion"></span></li>
        </ul>
      </div>

      <div class="navigating">
        <a href="hotels.php" class="btn-default btn"><span class="ion-ios-arrow-back ion"></span> Back to Results</a>
      </div>

      <div class="row">
        <div class="hotel__main col-sm-8">
          <header class="hotel__header row">
            <figure class="product__figure col-sm-4">
              <img class="hotel__image product__image" src="http://placehold.it/220x145" alt="Lucky Dragon Hotel &amp; Casino photo" width="220" height="145">
            </figure>
            <div class="col-sm-8">
              <h1 class="hotel__name">Lucky Dragon Hotel &amp; Casino</h1>
              <p class="hotel__rating product__rating"><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span></p>
              <address class="hotel__address">
                300 W Sahara Ave, Las Vegas, NV 89102 <br>
                <a href="#">luckydragonlv.com</a>
              </address>
            </div>
          </header>
          <ul class="hotel__tabs nav-tabs nav" role="tablist">
            <li class="active" role="presentation"><a href="#hotel-details" data-toggle="tab">Details</a></li>
            <li role="presentation"><a href="#hotel-reviews" data-toggle="tab">Reviews (23)</a></li>
            <li role="presentation"><a href="#hotel-map" data-toggle="tab">Map</a></li>
          </ul>
          <div class="hotel__tabcontent tab-content">
            <div id="hotel-details" class="tab-pane active">
              <h2>About the Hotel</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quasi tenetur ipsum vero aliquam, doloremque harum sint cum, unde libero asperiores repellendus iusto, beatae sit aut quam magnam repudiandae illo.</p>
            </div>
            <div id="hotel-reviews" class="tab-pane">
              <div id="reviews__carousel" class="reviews__carousel carousel--nearby carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <?php for ( $i = 0; $i < 3; $i++ ) { ?>
                    <div class="review">
                      <header class="row">
                        <div class="col-sm-9">
                          <h3 class="review__title">Beautiful hotel, worth the money</h3>
                          <cite class="review__author small--upper">Review by John C.</cite>
                        </div>
                        <div class="review__right text--sm--right col-sm-3">
                          <div class="review__rating"><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span></div>
                          <time class="review__date small--upper">June 1, 2018</time>
                        </div>
                      </header>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis enim nostrum quaerat, tempora sint eveniet maiores fuga odio cumque neque consequatur quas molestias. Similique mollitia doloremque culpa odio magnam error!</p>
                    </div>
                    <?php } ?>
                  </div>
                  <div class="item">Next page of reviews here</div>
                  <div class="item">Next page of reviews here</div>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#reviews__carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#reviews__carousel" data-slide-to="1"></li>
                  <li data-target="#reviews__carousel" data-slide-to="2"></li>
                </ol>
                <a class="left carousel-control" href="#reviews__carousel" role="button" data-slide="prev">
                  <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                  Prev
                </a>
                <a class="right carousel-control" href="#reviews__carousel" role="button" data-slide="next">
                  Next
                  <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                </a>
              </div>
            </div>
            <div id="hotel-map" class="tab-pane">
              Map
            </div>
          </div>
          
          <h2>Amenities</h2>
          <ul class="hotel__amenities list-inline list-unstyled">
            <li class="hotel__amenity btn-default btn"><span class="md-spa mdicon">&#xeb4c;</span> Spa</li>
            <li class="hotel__amenity btn-default btn"><span class="md-pool mdicon">&#xeb48;</span> Pool</li>
            <li class="hotel__amenity btn-default btn"><span class="md-fitness_center mdicon">&#xeb43;</span> Gym</li>
            <li class="hotel__amenity btn-default btn"><span class="md-wifi mdicon">&#xe63e;</span> WiFi</li>
            <li class="hotel__amenity btn-default btn disabled"><span class="md-beach_access mdicon">&#xeb3e;</span> Beach</li>
          </ul>
          
          <h2>Photos</h2>
          <a class="hotel__thumbnail" href="#"><img src="http://placehold.it/110x110" alt="Hotel thumbnail photo"></a>
          <a class="hotel__thumbnail" href="#"><img src="http://placehold.it/110x110" alt="Hotel thumbnail photo"></a>
          <a class="hotel__thumbnail" href="#"><img src="http://placehold.it/110x110" alt="Hotel thumbnail photo"></a>
          <a class="hotel__thumbnail" href="#"><img src="http://placehold.it/110x110" alt="Hotel thumbnail photo"></a>
          <a class="hotel__thumbnail" href="#"><img src="http://placehold.it/110x110" alt="Hotel thumbnail photo"></a>
          <a class="hotel__thumbnail hotel__thumbnail--more" href="#">
            <span class="more">+34 <br> more</span>
            <img src="http://placehold.it/110x110" alt="Hotel thumbnail photo">
          </a>

        </div>        
        <aside class="sidebar sidebar--hotel hotel__sidebar col-sm-4">
          
          <h2 class="sidebar__heading"><span class="md-explore mdicon">&#xe87a;</span> Nearby Activities</h2>
          <div id="nearbyactivities__carousel" class="carousel--nearby carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner" role="listbox">
              <?php for ( $i = 0; $i < 3; $i++ ) { ?>
              <div class="product item<?php if ( $i == 0 ) { echo ' active'; } ?>">
                <figure class="product__figure">
                  <img class="product__image" src="http://placehold.it/348x110" alt="Activity image">
                </figure>
                <div class="row">
                  <div class="col-md-7">
                    <small class="product__category small--upper">Adventure, Family</small>
                    <h2 class="product__name">Helicopter Tour</h2>    
                  </div>
                  <div class="product__price col-md-5 text-right">
                    from <big>$95</big> /person <br><small>Incl'd Taxes &amp; Fees</small>
                  </div>
                </div>
                <div class="text-center">
                  <label class="product__addcustomize btn-default btn-md btn"><input type="checkbox"> Add and Customize</label>
                </div>
              </div>
              <?php } ?>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#nearbyactivities__carousel" data-slide-to="0" class="active"></li>
              <li data-target="#nearbyactivities__carousel" data-slide-to="1"></li>
              <li data-target="#nearbyactivities__carousel" data-slide-to="2"></li>
            </ol>
            <a class="left carousel-control" href="#nearbyactivities__carousel" role="button" data-slide="prev">
              <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#nearbyactivities__carousel" role="button" data-slide="next">
              <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


          <h2 class="sidebar__heading"><span class="md-swap_horiz mdicon">&#xe8d4;</span> Airport Transfer</h2>
          <div class="product">
            <img class="product__figure product__image" src="http://placehold.it/364x125" alt="Airport Transfer image">
            <div class="row">
              <div class="col-sm-4">
                <h3 class="product__name">Sedan</h3>
                <span class="product__pax"><span class="ion-ios-people ion"></span> 4&ndash;8</span>
              </div>
              <div class="col-sm-8 text-right">
                <span class="small--upper">USD</span> <big>$154.20</big> <br>
                <small class="text-muted">* Taxes &amp; fees incl'd</small>
              </div>
            </div>
            <div class="text-center">
              <label class="product__addcustomize btn-default btn-md btn"><input type="checkbox"> Add and Customize</label>
            </div>
          </div>
        </aside>        
      </div>

      <h2 class="section__title">Rooms &amp; Rates</h2>
      <table class="packages__table table">
        <tbody>
          <?php for ($i = 0; $i < 3; $i++) { ?>
          <tr>
            <th><h3 class="package__name">Room, 1 King Bed</h3></th>
            <td><span class="package__availability btn-default btn-xs btn">Available</span></td>
            <td><button class="package__toggle btn-link btn-sm btn">Room Details <span class="ion-arrow-down-b ion"></span></button></td>
            <td class="package__price text--sm--right">
              <span class="small--upper">USD</span> <big>$158</big>
              <br><small class="text-muted">*Taxes &amp; fees not incl'd</small>
            </td>
            <td class="package__action"><a href="#quote__add" class="btn-warning btn-md btn-block btn" data-toggle="modal">+ Add Room</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

      <div id="quote__add" class="quote__add modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
              <ul class="navtabs--lg nav-tabs nav row">
                <li class="active col-xs-12 col-sm-6" role="presentation"><a href="#quote-new" data-toggle="tab">Create New Quote</a></li>
                <li class="col-xs-12 col-sm-6" role="presentation"><a href="#quote-add" data-toggle="tab">Add to Existing Quote</a></li>
              </ul>
              <div class="tab-content">
                <div id="quote-new" class="tab-pane form-horizontal active">
                  <div class="form-group">
                    <div class="col-sm-7">
                      <label for="quote__name" class="control-label small--upper">Quote Name (Optional)</label>
                      <input id="quote__name" type="text" class="form-control input--underline" placeholder="Name of Quote…">
                    </div>
                    <div class="col-sm-5">
                      <label for="quote__budget" class="control-label small--upper">Client Budget (Optional)</label>
                      <div class="inputgroup--underline input-group">
                        <input id="quote__budget" type="text" class="form-control input--underline" placeholder="$0.00">
                        <label for="quote__budget" class="input-group-addon">USD</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="quote-add" class="tab-pane text-center row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <label class="control-label small--upper">Search for an Existing Quote</label>
                    <input type="text" class="form-control input-lg" placeholder="Enter quote name or #…">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <hr class="hr--down">
              
              <div class="product--card panel-default panel">
                <div class="panel-body">
                  <header class="product__header media">
                    <div class="media-left media-middle">
                      <img class="product__image media-object" src="http://placehold.it/95x52" alt="Lucky Dragon Hotel &amp; Casino photo">
                    </div>
                    <div class="media-body media-middle">
                      <h2 class="product__name">Lucky Dragon Hotel &amp; Casino</h2>
                      <address class="product__address text-muted small">300 W Sahara Ave, Las Vegas, NV 89102</address>
                    </div>
                    <div class="media-right">
                      <span class="product__icon md-hotel mdicon">&#xe53a;</span>
                    </div>
                  </header>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Check-In / Check-Out</th>
                        <td class="text--sm--right">Jan 11 &ndash; Jan 17</td>
                      </tr>
                      <tr>
                        <th>Room Details</th>
                        <td class="text--sm--right">Room, 1 King Bed</td>
                      </tr>
                      <tr>
                        <th>Price (Incl'd Taxes &amp; Fees</th>
                        <td class="text--sm--right">$158</td>
                      </tr>
                    </tbody>
                  </table>
                  <ul class="nearby__tabs nav-tabs nav" role="tablist">
                    <li class="col-xs-12 col-sm-6 active" role="presentation"><a href="#nearby-activities" data-toggle="tab">Nearby Activities (14)</a></li>
                    <li class="col-xs-12 col-sm-6" role="presentation"><a href="#nearby-transfers" data-toggle="tab">Nearby Airport Transfers</a></li>
                  </ul>
                  <div class="tab-content">
                    <div id="nearby-activities" class="tab-pane active">
                      <div id="add__nearbyactivities__carousel" class="carousel--addnearby carousel--nearby carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner" role="listbox">
                          <?php for ( $i = 0; $i < 3; $i++ ) { ?>
                          <div class="product item<?php if ( $i == 0 ) { echo ' active'; } ?>">
                            <div class="media">
                              <label class="product__addalso media-left media-middle btn-default btn small--upper" data-toggle="collapse" data-target=".productaddon__collapse">
                                <input type="checkbox"> <br> Add This <br> Also
                              </label>
                              <div class="media-body media-middle">
                                <figure class="product__figure">
                                  <img class="product__image" src="http://placehold.it/260x90" alt="Activity image">
                                  <span class="product__pax badge badge--light"><span class="ion-ios-people ion"></span> 4&ndash;8</span>
                                </figure>
                              </div>
                            </div>
                            <div class="product__text row">
                              <div class="col-sm-7">
                                <small class="product__category small--upper">Adventure, Family</small>
                                <h2 class="product__name">Helicopter Tour</h2>    
                              </div>
                              <div class="product__price col-sm-5 text-right">
                                from <big>$95</big> /person <br><small>Incl'd Taxes &amp; Fees</small>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                        <ol class="carousel-indicators">
                          <li data-target="#add__nearbyactivities__carousel" data-slide-to="0" class="active"></li>
                          <li data-target="#add__nearbyactivities__carousel" data-slide-to="1"></li>
                          <li data-target="#add__nearbyactivities__carousel" data-slide-to="2"></li>
                        </ol>
                        <a class="left carousel-control" href="#add__nearbyactivities__carousel" role="button" data-slide="prev">
                          <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#add__nearbyactivities__carousel" role="button" data-slide="next">
                          <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                    <div id="nearby-transfers" class="tab-pane"></div>
                  </div>
                </div>
              </div>
              <div class="product--addon product--card panel-default panel collapse productaddon__collapse">
                <div class="panel-body">
                  <header class="product__header media">
                    <div class="media-left media-middle">
                      <img class="product__image media-object" src="http://placehold.it/95x52" alt="Helicopter Tour photo">
                    </div>
                    <div class="media-body media-middle">
                      <h2 class="product__name">Helicopter Tour</h2>
                      <small class="product__company text-muted">Maverick Helicopter</small>
                    </div>
                    <div class="media-right">
                      <span class="product__icon md-explore mdicon">&#xe87a;</span>
                    </div>
                  </header>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <span class="small--upper">Package</span>
                          <button type="button" class="btn--underline btn-xs btn small">Change Package</button> | 
                          <button type="button" class="btn--underline btn-xs btn small text-muted" data-toggle="collapse" data-target=".productaddon__collapse">Remove</button> 
                        </td>
                        <td class="text--sm--right">Vegas Voyage</td>
                      </tr>
                      <tr>
                        <th class="cell--hasarrow"><span class="ion-arrow-right-a ion text-warning"></span> Select a Date</th>
                        <td class="text--sm--right">
                          <div class="inputgroup--date inputgroup--underline input-group">
                            <label for="quote__date" class="input-group-addon"><span class="ion-android-calendar ion"></span></label>
                            <input id="quote__date" type="date" class="input--underline input-sm form-control" value="2018-01-01">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th class="cell--hasarrow"><span class="ion-arrow-right-a ion text-warning"></span> Amount of People</th>
                        <td class="text--sm--right"><input type="number" class="input--underline input-sm form-control" value="0"></td>
                      </tr>
                      <tr>
                        <th>Duration</th>
                        <td class="text--sm--right">15 Min</td>
                      </tr>
                      <tr>
                        <th>Price (Incl'd Taxes &amp; Fees)</th>
                        <td class="text--sm--right">$95 / person</td>
                      </tr>
                    </tbody>
                  </table>
                  <button type="btn" class="btn-default btn-md btn pull-right" data-toggle="collapse" data-target=".productaddon__collapse">Done</button>
                </div>
              </div>

            </div>
            <div class="modal-footer clearfix">
              <button class="btn-link btn small--upper pull-left" data-dismiss="modal">Cancel</button>
              <div class="pull-right">
                <a href="quote.php" class="btn-warning btn-md btn">Add &amp; Create New Quote</a>
                <p class="text-danger collapse productaddon__collapse">You must choose options above first.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

<?php include('_footer.php'); ?>