<?php 

  $page__title = 'Hotels in Las Vegas';
  $is_searching = true;
  $search__option = 'Hotels';
  $is_itinerary = true;
?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <div class="filtering form-horizontal row">
        <div class="filter__col col-sm-4 col-md-2">
          <label for="filter__checkinout" class="small--upper">Check-in / Check-out</label>
          <button type="button" class="input--daterangepicker input--select btn-block btn">
            <span class="startdate">Jan 11</span> &ndash; <span class="enddate">Feb 17</span>
          </button>
        </div>
        <div class="filter__col col-sm-4 col-md-2">
          <label for="filter__checkinout" class="small--upper">Price Range</label>
          <button type="button" class="pricerange__input input--select btn-block btn dropdown-toggle" data-toggle="dropdown">
            $<span class="startprice">100</span> &ndash; $<span class="endprice">450</span>
          </button>
        </div>
        <div class="filter__col col-sm-4 col-md-1">
          <label for="filter__rating" class="small--upper">Rating</label>
          <select name="filter__rating" id="filter__rating" class="input--select form-control">
            <option value="">Any</option>
          </select>
        </div>
        <div class="filter__col col-sm-6 col-md-5">
          <label class="small--upper">Hotels Near an Activity 
            <span class="popovertoggle--hover md-error mdicon" data-toggle="popover" data-content-source="#hotelsnear__popover">&#xe001;</span>
          </label>
          <div class="popover-content hide" id="hotelsnear__popover">
            <p>You must already have selected an itinerary which has activities already in it.</p>
            <a href="myitinerary.php">Select from your Itineraries <span class="ion-arrow-right-b ion"></span></a>
          </div>
          <div class="form-inline">
            <label class="label--inline" for="filter__nearmi">Within</label>
            <select name="filter__nearmi" id="filter__nearmi" class="input--select form-control" disabled>
              <option value="">1 Mile</option>
            </select>
            <label class="label--inline" for="filter__nearactivity">of</label>
            <select name="filter__nearactivity" id="filter__nearactivity" class="input--select form-control" disabled>
              <option value="">Helicopter Tour</option>
            </select>
          </div>
        </div>
        <div class="filter__col col-xs-12 col-sm-3 col-md-2 pull-right text-right">
          <button class="filter__reset btn-link btn-sm small--upper btn--underline">Reset Filters</button>
        </div>
      </div>

      <div class="sorting row showmap__collapse collapse in">
        <div class="col-sm-9 pull-left">
          <span class="small--upper">Sort By:</span>
          <div class="btn-group" data-toggle="buttons">
            <label class="sorting__btn btn--underline btn-sm btn active"><input type="radio" name="sort"> Price</label>
            <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Rating</label>
            <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Hotel Name</label>
            <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Availability</label>
          </div>
        </div>
        <div class="col-sm-3 pull-right text-right">
          <button type="button" class="sorting__showmap sorting__btn btn-link btn" data-toggle="collapse" data-target=".showmap__collapse">
            <span class="ion-android-map ion"></span>
            Show Map View</span>
          </button>
        </div>
      </div>
      <div class="sorting row showmap__collapse collapse">
        <div class="col-sm-9 pull-left">
          <span class="small--upper">Show:</span>
          <div class="btngroup--separate btn-group" data-toggle="buttons">
            <label class="btn-default btn-sm btn active"><input type="checkbox"> Activities</label>
            <label class="btn-default btn-sm btn"><input type="checkbox"> Hotels</label>
          </div>
        </div>
        <div class="col-sm-3 pull-right text-right">
          <button type="button" class="sorting__showmap sorting__btn btn-link btn" data-toggle="collapse" data-target=".showmap__collapse">
            <span class="ion-android-map ion"></span>
            Hide Map View</span>
          </button>
        </div>
      </div>

      <section class="section--hotels hotels showmap__collapse collapse in" id="hotels">

        <div class="products row">

          <?php for ( $i = 0; $i < 3; $i++ ) { 
            $carousel_id = 'product__00' . $i . '__carousel';
            $details_id = 'product__00' . $i . '__details';
          ?>
          <article class="product col-sm-6 col-md-4">
            <?php /*if ( $i == 0 ) {*/ ?>

            <div id="<?php echo $carousel_id; ?>" class="product__figure carousel--product carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner" role="listbox">
                <a href="hotel.php" class="item active"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                <a href="hotel.php" class="item"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
                <a href="hotel.php" class="item"><img class="product__image" src="http://placehold.it/364x256" alt="Product image"></a>
              </div>
              <ol class="carousel-indicators">
                <li data-target="#<?php echo $carousel_id; ?>" data-slide-to="0" class="active"></li>
                <li data-target="#<?php echo $carousel_id; ?>" data-slide-to="1"></li>
                <li data-target="#<?php echo $carousel_id; ?>" data-slide-to="2"></li>
              </ol>
              <a class="left carousel-control" href="#<?php echo $carousel_id; ?>" role="button" data-slide="prev">
                <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#<?php echo $carousel_id; ?>" role="button" data-slide="next">
                <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <span class="product__recommended badge">Recommended</span>
            </div>              

            <a href="hotel.php" class="product__link product__text row">
              <div class="col-sm-7">
                <h2 class="product__name">Fiesta Rancho Hotel &amp; Casino <?php echo $i; ?></h2>    
                <span class="product__rating"><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span></span>
              </div>
              <div class="col-sm-5 text--sm--right">
                <span class="product__price">from $150/person <br><small>Incl'd Taxes &amp; Fees</small></span>    
              </div>
            </a>
            <div class="product__buttons row">
              <div class="col-xs-5">
                <button type="button" class="btn-default btn-md btn-block btn" data-toggle="collapse" data-target="#<?php echo $details_id; ?>">Hotel Details</button>  
              </div>
              <div class="col-xs-7">
                <a href="hotel.php" class="btn-warning btn-md btn-block btn">See Rooms &amp; Rates</a>  
              </div>              
            </div>          
          
            <div id="<?php echo $details_id; ?>" class="product__details productdetails__collapse collapse">
              <button type="button" class="details__close badge btn" data-toggle="collapse" data-target="#<?php echo $details_id; ?>">Close <span class="ion-android-close ion"></span></button>
              <ul class="hotel__tabs nav-tabs nav" role="tablist">
                <li class="active" role="presentation"><a href="#product-details" data-toggle="tab">Details</a></li>
                <li role="presentation"><a href="#product-activities" data-toggle="tab">Nearby Activities (4)</a></li>
                <li role="presentation"><a href="#product-reviews" data-toggle="tab">Reviews (23)</a></li>
                <li role="presentation"><a href="#product-map" data-toggle="tab">Map</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active">
                  <div class="row">
                    <div class="col-sm-7 col-md-8">
                      <h2>About the Hotel</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, ex voluptatibus doloribus quae autem iste, fugiat inventore consequuntur et veritatis facere tempora. Natus expedita iste, sequi facere maxime hic sunt.</p>
                      <p>Eum aut nisi a. Dolorem, a rerum numquam blanditiis ipsam perferendis alias, maiores illo officia, eum non libero quibusdam. Fugit, enim, molestias.</p>
                      <h2>Amenities</h2>
                      <ul class="hotel__amenities list-inline list-unstyled">
                        <li class="hotel__amenity btn-default btn"><span class="md-spa mdicon">&#xeb4c;</span> Spa</li>
                        <li class="hotel__amenity btn-default btn"><span class="md-pool mdicon">&#xeb48;</span> Pool</li>
                        <li class="hotel__amenity btn-default btn"><span class="md-fitness_center mdicon">&#xeb43;</span> Gym</li>
                        <li class="hotel__amenity btn-default btn"><span class="md-wifi mdicon">&#xe63e;</span> WiFi</li>
                        <li class="hotel__amenity btn-default btn disabled"><span class="md-beach_access mdicon">&#xeb3e;</span> Beach</li>
                      </ul>
                    </div>
                    <div class="col-sm-5 col-md-4">
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
                  </div>                  
                </div>
                <div class="tab-pane"><h2>...</h2></div>
                <div class="tab-pane"><h2>...</h2></div>
                <div class="tab-pane"><h2>...</h2></div>
              </div>              
            </div> 
          </article>
          <?php } ?>

        </div>
      </section>

      <section class="section--map map showmap__collapse collapse" id="map">
      </section>
      <?php include('_map.php'); ?>

    </main>

<?php include('_footer.php'); ?>