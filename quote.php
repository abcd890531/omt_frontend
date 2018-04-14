<?php 

  $page__title = 'Quote';

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <div class="navigating clearfix">
        <p class="pull-left">
          <a href="quotes.php" class="btn-default btn"><span class="ion-ios-arrow-back ion"></span> All Quotes</a>
        </p>
        <p class="pull-right text--sm--right">
          <a href="#" class="btn-link btn"><span class="ion-ios-chatboxes-outline ion"></span> Ask us for Confirmation</a>
          <a href="myitinerary.php" class="btn-default btn">View Itinerary</a>
          <button type="button" class="btn-warning btn">Generate Quote <span class="ion-android-arrow-dropright ion"></span></button>
        </p>
      </div>

      <header class="quote__header row">
        <div class="col--clientname form-group col-sm-5 col-md-3">
          <label for="quote__name" class="control-label small--upper">Client Name</label>
          <div class="inputgroup--underline input-group">
            <input id="quote__name" type="text" class="input--underline form-control" value="May, Jonathan">
            <label for="quote__name" class="input-group-addon"><span class="ion-android-create ion"></span></label>
          </div>
        </div>
        <div class="col--quotenum form-group col-sm-2 col-md-2">
          <h2 class="small--upper">Quote #</h2>
          <div>0018481</div>
        </div>
        <div class="col--agency form-group col-sm-5 col-md-3">
          <h2 class="small--upper">Agency</h2>
          <img class="company__photo" src="http://placehold.it/30x30" alt="Company logo">
          Twin City Travel &amp; Tourism
        </div>
        <div class="col--total form-group col-sm-4 col-md-2">
          <h2 class="small--upper">Total</h2>
          <div>01/01/18 @ 1:34 PM</div>
        </div>
        <div class="col--budget form-group col-sm-3 col-md-2">
          <label class="small--upper">Budget</label>
          <div class="inputgroup--underline input-group">
            <input id="quote__name" type="text" class="input--underline form-control" value="$2,000">
            <label for="quote__name" class="input-group-addon"><span class="ion-android-create ion"></span></label>
          </div>
        </div>
        <div class="col--quotetotal form-group col-sm-3 col-md-2">
          <h2 class="small--upper">Quote Total</h2>
          <div>
            $2,100.00 
            <span title="Prices May Have Changed" class="popovertoggle--hover md-error mdicon text--yellow" data-toggle="popover" data-content-source="#quoteexpired__popover">&#xe001;</span>

            <div class="popover-content hide" id="quoteexpired__popover">
              <p>The prices within this quote have expired. Refresh to see updated price quotes.</p>
              <div class="clearfix">
                <button type="button" class="popover__cancel btn text-muted pull-left">Not now</button>
                <a href="quotes.php" class="btn pull-right">Yes, Refresh</a>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="sorting row">
        <div class="sorting__by col-sm-6">
          <span class="small--upper">Sort By:</span>
          <div class="btn-group" data-toggle="buttons">
            <label class="sorting__btn btn--underline btn-sm btn active" data-toggle="collapse" data-target=".quoteby__collapse"><input type="radio" name="sort"> Date</label>
            <label class="sorting__btn btn--underline btn-sm btn" data-toggle="collapse" data-target=".quoteby__collapse"><input type="radio" name="sort"> Type</label>
          </div>
        </div>
        <div class="col-sm-6 text--sm--right">
          <a href="#quote__map" class="sorting__showmap sorting__btn btn-link btn" data-toggle="modal">
            <span class="ion-android-map ion"></span>
            Show Map View</span>
          </a>
          <button type="button" class="sorting__refresh btn--refresh btn--yellow btn-default btn"><span class="ion-android-sync ion"></span> Refresh All Prices</button>
          <span class="sorting__expire">
            <span class="ion-android-time ion text--yellow"></span>
            <small class="small--upper">Prices expire in</small> <big>23 h 59 m</big>
          </span>
        </div>
      </div>

      <div class="quote__bydate quoteby__collapse collapse in">

        <div class="quotebydate__group">
          <header class="quoteby__header clearfix">
            <div class="pull-left">
              <h2 class="heading--inline">Thursday, Jan 4, 2018</h2>
              <a href="activity.php#quote" class="btn-default btn-sm btn">+ Add More</a>
            </div>
            <div class="pull-right">
              <label class="checkbox"><input type="checkbox"> Show Discarded Items (3)</label>  
            </div>
          </header>          
          <div class="quotebydate__list list-group">
            <div class="quotebydate__item list-group-item media">
              <div class="media-left media-middle">
                <button type="button" class="quotebydate__handle btn"><span class="ion-android-more-vertical ion"></span></button>
                <span class="quotebydate__icon md-hotel mdicon">&#xe53a;</span>
              </div>
              <div class="media-body media-middle">
                <table class="quote__table table--dense table--middle table">
                  <thead>
                    <tr>
                      <th>Check-In/Check-Out</th>
                      <th>Hotel</th>
                      <th>Destination</th>
                      <th>Room</th>
                      <th>Nights</th>
                      <th>Total</th>
                      <td rowspan="2">
                        <button type="button" class="btn--delete btn-link btn"><span class="md-delete mdicon">&#xe872;</span></button>
                        <button type="button" class="btn--edit btn-link btn"><span class="md-edit mdicon">&#xe3c9;</span></button>
                        <a href="#quote__details" class="btn-default btn" data-toggle="modal" data-target="#quote__details">Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td>01/04 &ndash; 01/06</td>
                      <td>Lucky Dragon Hotel &amp; Casino</td>
                      <td>Las Vegas, NV</td>
                      <td>Junior Suite, 1 King Bed</td>
                      <td>2</td>
                      <td>
                        $620.00 
                        <span title="Prices May Have Changed" class="popovertoggle--hover md-error mdicon text--yellow" data-toggle="popover" data-content-source="#quoteexpired__popover">&#xe001;</span>
                        <br><small class="text-success">+ $13.00</small>
                      </td>
                    </tr>
                  </thead>  
                </table>
              </div>
            </div>
            <div class="quotebydate__item list-group-item media disabled">
              <div class="media-left media-middle">
                <button type="button" class="quotebydate__handle btn"><span class="ion-android-more-vertical ion"></span></button>
                <span class="quotebydate__icon md-explore mdicon">&#xe87a;</span>
              </div>
              <div class="media-body media-middle">
                <table class="quote__table table--dense table--middle table">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Activity Name</th>
                      <th>Destination</th>
                      <th>Meeting Location</th>
                      <th>Duration</th>
                      <th>#of People</th>
                      <th>Total</th>
                      <td rowspan="2" class="text-center">
                        <a href="#">Discard Forever</a> | <a href="#">Reactivate</a>
                      </td>
                    </tr>
                    <tr>
                      <td>01/07</td>
                      <td>Guided Bike Activity Tour</td>
                      <td>San Francisco, CA</td>
                      <td>San Francisco</td>
                      <td>2 hrs</td>
                      <td>2</td>
                      <td>$40.00 <small class="text-danger">- $30.00</small></td>
                    </tr>
                  </thead>  
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="quote__bytype quoteby__collapse collapse">

        <div class="quoteby__group">
          <header class="quoteby__header clearfix">
            <div class="pull-left">

              <h2>
                <span class="md-explore mdicon">&#xe87a;</span>
                Activities
              </h2>
              <a href="#hotel__add" class="btn-default btn-sm btn" data-toggle="modal">+ Add Hotel</a>
            </div>
            <div class="pull-right">
              <label class="checkbox"><input type="checkbox"> Show Discarded Items (3)</label>  
            </div>
          </header>
          <table class="quote__table table--outerth table--middle table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Activity Name</th>
                <th>Destination</th>
                <th>Meeting Location</th>
                <th>Duration</th>
                <th># of People</th>
                <th colspan="2">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01/05</td>
                <td>Helicopter Tour (Las Vegas)</td>
                <td>Las Vegas, NV</td>
                <td>Vegas Strip</td>
                <td>30 min</td>
                <td>2</td>
                <td>$195.00 </td>
                <td>
                  <button type="button" class="btn--delete btn-link btn"><span class="md-delete mdicon">&#xe872;</span></button>
                  <button type="button" class="btn--edit btn-link btn"><span class="md-edit mdicon">&#xe3c9;</span></button>
                  <a href="#quote__details" class="btn-default btn" data-toggle="modal" data-target="#quote__details">Details</a>
                </td>
              </tr>
              <tr class="disabled">
                <td>01/05</td>
                <td>Helicopter Tour (Las Vegas)</td>
                <td>Las Vegas, NV</td>
                <td>Vegas Strip</td>
                <td>30 min</td>
                <td>2</td>
                <td>$195.00 </td>
                <td class="cell--action text-center">
                  <a href="#">Discard Forever</a> | <a href="#">Reactivate</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

      <div id="quote__edit" class="quote__edit modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header modalheader--center">
              <h3>Edit Hotel</h3>
              <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
            </div>
            <div class="modal-body">
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
                        <th class="small--upper">Check-In / Check-Out</th>
                        <td class="text--sm--right">
                          <button type="button" class="input--daterangepicker input--select btn-block btn">
                            <span class="startdate">Jan 11</span> &ndash; <span class="enddate">Jan 17</span>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <th class="small--upper">Room</th>
                        <td class="text--sm--right">
                          <select class="input--select form-control">
                            <option value="">Room, 1 King Bed</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th class="small--upper" colspan="2">Special Requests/Services:</th>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <div class="form-inline clearfix">
                            <p class="checkbox pull-left">
                              <label><input type="checkbox"> Breakfast <small class="text-muted">$40/night</small></label>
                            </p>
                            <select class="input--select form-control pull-right">
                              <option value="">1</option>
                            </select>
                          </div>
                          <p class="checkbox">
                            <label><input type="checkbox"> Roll-away Bed <small class="text-muted">Free</small></label>
                          </p>
                          <p class="checkbox">
                            <label><input type="checkbox"> Connecting Rooms <small class="text-muted">$45/night</small></label>
                          </p>
                          <p class="checkbox">
                            <label><input type="checkbox"> Crib <small class="text-muted">Free</small></label>
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="product__grandtotal table">
                    <tbody>
                      <tr>
                        <th>Price (Incl'd Taxes &amp; Fees)</th>
                        <td class="text-right"><big>$158</big></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer clearfix">
              <button class="btn-link btn small--upper pull-left" data-dismiss="modal">Cancel</button>
              <div class="pull-right">
                <button type="button" class="btn-warning btn-md btn">Save Changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="quote__details" class="quote__details modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header modalheader--center">
              <h3>Hotel Details</h3>
              <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
            </div>
            <div class="modal-header">

              <table class="product__table table--dense table">
                <thead>
                  <tr>
                    <th>Room</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Nights</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Junior Suite, 1 King Bed</td>
                    <td>Thu, Jan 4, 2018</td>
                    <td>Sat, Jan 6, 2018</td>
                    <td>2</td>
                  </tr>
                </tbody>
              </table>

              <div id="product__carousel" class="product__figure carousel--product carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner" role="listbox">
                  <a href="hotel.php" class="item active"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                  <a href="hotel.php" class="item"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                  <a href="hotel.php" class="item"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#product__carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#product__carousel" data-slide-to="1"></li>
                  <li data-target="#product__carousel" data-slide-to="2"></li>
                </ol>
                <a class="left carousel-control" href="#product__carousel" role="button" data-slide="prev">
                  <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#product__carousel" role="button" data-slide="next">
                  <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

              <header class="hotel__header row">
                <figure class="product__figure col-sm-4">
                  <img class="hotel__image product__image" src="http://placehold.it/220x145" alt="Lucky Dragon Hotel &amp; Casino photo" width="220" height="145">
                </figure>
                <div class="col-sm-8">
                  <h4 class="product__name">Lucky Dragon Hotel &amp; Casino</h4>
                  <p>
                    <span class="hotel__rating product__rating">
                      <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
                    </span>
                    <a href="#">luckydragonlv.com</a>
                  </p>
                  <address class="hotel__address small--upper">
                    300 W Sahara Ave, Las Vegas, NV 89102
                  </address>
                </div>
              </header>

              <div class="hotel__details">
                <ul class="hotel__tabs nav-tabs nav" role="tablist">
                  <li class="active" role="presentation"><a href="#hotel-details" data-toggle="tab">Details</a></li>
                  <li role="presentation"><a href="#hotel-reviews" data-toggle="tab">Reviews (23)</a></li>
                  <li role="presentation"><a href="#hotel-map" data-toggle="tab">Map</a></li>
                </ul>
                <div class="hotel__tabcontent tab-content">
                  <div id="hotel-details" class="tab-pane active">
                    <h2>About the Hotel</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quasi tenetur ipsum vero aliquam, doloremque harum sint cum, unde libero asperiores repellendus iusto, beatae sit aut quam magnam repudiandae illo.</p>
                    <h2>Amenities</h2>
                    <ul class="hotel__amenities list-inline list-unstyled">
                      <li class="hotel__amenity btn-default btn"><span class="md-spa mdicon">&#xeb4c;</span> Spa</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-pool mdicon">&#xeb48;</span> Pool</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-fitness_center mdicon">&#xeb43;</span> Gym</li>
                      <li class="hotel__amenity btn-default btn"><span class="md-wifi mdicon">&#xe63e;</span> WiFi</li>
                      <li class="hotel__amenity btn-default btn disabled"><span class="md-beach_access mdicon">&#xeb3e;</span> Beach</li>
                    </ul>
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
              </div>

            </div>
          </div>
        </div>
      </div>

      <div id="hotel__add" class="hotel__add modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header modalheader--center">
              <h2>Add Hotels to Itinerary</h2>
              <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
            </div>
            <div class="modal-header">
              <h3>Search Destinations from Itinerary?</h3>
              <p>Select a destination that is already within your itinerary</p>
              <div class="row btngroup--separate btn-group" data-toggle="buttons">
                <div class="col-sm-6 text--sm--right">
                  <label class="btn-default btn active"><input type="radio" name="dest"> Las Vegas, NV</label>
                  <label class="btn-default btn"><input type="radio" name="dest"> San Diego, CA</label>
                </div>
                <div class="col-sm-6">
                  <label class="btn-default btn"><input type="radio" name="dest"> Las Vegas, NV</label>
                  <label class="btn-default btn"><input type="radio" name="dest"> San Diego, CA</label>
                </div>
              </div>
              <h3 class="or--separator small--upper">Or</h3>
              <h3>Search a New Destination</h3>
              <p>Search for Hotels in a different destination</p>
              <div class="form-group">
                <div class="search__inputgroup inputgroup--search input-group-lg input-group">
                  <label class="search__icon input-group-addon" for="search__input" id="search__icon"><span class="ion-ios-search ion"></span></label>
                  <input type="text" class="form-control input-lg" id="search__input" aria-describedby="search__icon" placeholder="Search" value="">
                </div><!-- /.search__inputgroup -->
              </div>
            </div>
            <div class="modal-footer clearfix">
              <button class="btn-link btn small--upper pull-left" data-dismiss="modal">Cancel</button>
              <div class="pull-right">
                <button type="button" class="btn-warning btn-md btn">Search Hotels</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="quote__map" class="quote__map modal fade">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
              <table class="table--dense table">
                <thead>
                  <tr>
                    <th class="small--upper" width="200">Client Name</th>
                    <th class="small--upper">Quote #</th>
                  </tr>
                  <tr>
                    <td><big>May, Jonathan</big></td>
                    <td><big>0018481</big></td>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="modal-body form-inline">
              <div class="form-group">
                <label class="small--upper">View Destination(s)</label>
                <select name="" id="" class="input--select form-control">
                  <option value="">All</option>
                </select>
              </div>
              <div class="form-group">
                <span class="checkbox-inline"><label><input type="checkbox"> Activities (3)</label></span>
                <span class="checkbox-inline"><label><input type="checkbox"> Hotels (3)</label></span>
                <span class="checkbox-inline"><label><input type="checkbox"> Car Rentals (1)</label></span>
              </div>
            </div>
            <div id="map">/map/</div>
          </div>
        </div>
      </div>

    </main>

<?php include('_footer.php'); ?>