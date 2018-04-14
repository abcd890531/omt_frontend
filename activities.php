<?php 

  $page__title = 'Activities in Las Vegas';
  $is_searching = true;
  $search__option = 'Activities';

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <div class="filtering form-horizontal row">
        <div class="filter__col col-sm-4 col-md-2">
          <label class="small--upper">Date Range</label>
          <button type="button" class="input--daterangepicker input--select btn-block btn">
            <span class="startdate">Jan 11</span> &ndash; <span class="enddate">Feb 17</span>
          </button>
        </div>
        <div class="filter__col col-sm-4 col-md-2">
          <label class="small--upper">Price Range</label>
          <button type="button" class="pricerange__input input--select btn-block btn dropdown-toggle" data-toggle="dropdown">
            $<span class="startprice">100</span> &ndash; $<span class="endprice">450</span>
          </button>
          <div class="pricerange__dropdown dropdown-menu">
            <div class="inputgroup--pricerange">
              <span class="pricerange__low pricerange__label">$100</span>
              <input type="text" class="pricerange__input input--pricerange" data-slider-min="100" data-slider-max="500" data-slider-step="10" data-slider-value="[200,400]">
              <span class="pricerange__high pricerange__label">$450</span>
            </div>
          </div>
        </div>
        <div class="filter__col col-sm-4 col-md-1">
          <label for="filter__rating" class="small--upper">People</label>
          <select name="filter__rating" id="filter__rating" class="input--select form-control">
            <option value="">1 &ndash; 4</option>
          </select>
        </div>
        <div class="filter__col col-sm-8 col-md-5">
          <label class="small--upper">Hotels Near an Activity 
            <span class="popovertoggle--hover md-error mdicon" data-toggle="popover" data-content-source="#hotelsnear__popover">&#xe001;</span>
          </label>
          <br>
          <div class="popover-content hide" id="hotelsnear__popover">
            <p>You must already have selected an itinerary which has activities already in it.</p>
            <a href="myitinerary.php">Select from your Itineraries <span class="ion-arrow-right-b ion"></span></a>
          </div>
          <label class="label--inline">Within</label>
          <div class="nearmi btn-group">
            <button class="input--select btn" data-toggle="dropdown">1 Mile</button>
            <div class="nearmi__dropdown dropdown-menu">
              <label class="small--upper">Select Range:</label>
              <div class="btngroup--separate btn-group" data-toggle="buttons">
                <label class="btn-default btn active"><input type="radio" name="filter__nearmi"> 1</label>
                <label class="btn-default btn"><input type="radio" name="filter__nearmi"> 5</label>
                <label class="btn-default btn"><input type="radio" name="filter__nearmi"> 10</label>
                <label class="btn-default btn"><input type="radio" name="filter__nearmi"> 15</label>
                <label class="btn-default btn"><input type="radio" name="filter__nearmi"> 20+</label>
              </div>
            </div>
          </div>
          <label class="label--inline">of</label>
          <div class="nearhotel btn-group">
            <button type="button" class="input--select btn" data-toggle="dropdown">Lucky Dragon Hotel &amp; Casino</button>
            <div class="nearhotel__dropdown panel-default panel dropdown-menu">
              <ul class="list-group">
                <li class="list-group-item media">
                  <label class="media-left media-middle">
                    <input type="radio" name="nearhotel" id="nearhotel__001">
                  </label>
                  <label class="media-body media-middle" for="nearhotel__001">
                    Lucky Dragon Hotel &amp; Casino
                    <br> <small class="small--upper">2804 W. Centennial Pkwy Ste 105</small>
                  </label>
                  <label class="media-body media-middle text-right small--upper" for="nearhotel__001">
                    Las Vegas, NV
                  </label>
                </li>
                <li class="list-group-item media">
                  <label class="media-left media-middle">
                    <input type="radio" name="nearhotel" id="nearhotel__002">
                  </label>
                  <label class="media-body media-middle" for="nearhotel__002">
                    Staybridge Suites San Diego
                    <br> <small class="small--upper">7135 Gilespie St.</small>
                  </label>
                  <label class="media-body media-middle text-right small--upper" for="nearhotel__002">
                    San Diego, CA
                  </label>
                </li>
              </ul>
              <div class="panel-footer row clearfix">
                <div class="col-sm-9">
                  <label for="nearhotel__input" class="small--upper">Or, enter hotel address or destination</label>
                  <input id="nearhotel__input" type="text" class="form-control" placeholder="Enter address or destination…">
                </div>
                <div class="col-sm-3 text--sm--right">
                  <a href="#" class="btn-warning btn-block btn">Add</a>
                </div>                  
              </div>
            </div>
          </div>
        </div>
        <div class="filter__col col-xs-12 col-sm-3 col-md-2 pull-right text--sm--right">
          <button class="filter__reset btn-link btn-sm small--upper btn--underline">Reset Filters</button>
        </div>
      </div>

      <div class="sorting clearfix showmap__collapse collapse in">
        <div class="sorting__by pull-left">
          <span class="small--upper">Sort By:</span>
          <div class="btn-group" data-toggle="buttons">
            <label class="sorting__btn btn--underline btn-sm btn active"><input type="radio" name="sort"> Destination</label>
          </div>
        </div>
        <div class="sorting__showmap pull-right text--sm--right">
          <button type="button" class="sorting__showmap sorting__btn btn-link btn" data-toggle="collapse" data-target=".showmap__collapse">
            <span class="ion-android-map ion"></span>
            Show Map View</span>
          </button>
        </div>
        <div class="sorting__category">
          <span class="small--upper">View By Category:</span>
          <div class="btngroup--separate btn-group" data-toggle="buttons">
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> Private</label>
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> Affordable</label>
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> Family</label>
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> Adventure</label>
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> Culture</label>
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> Bespoke</label>
          </div>
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

      <section class="section--activities activities showmap__collapse collapse in" id="activities">

        <div class="paging clearfix">
          <h1 class="paging__title pull-left">Las Vegas</h1>
          <div class="pull-right">
            <span class="paging__index small--upper">Page 1 of 5</span>
            <a href="#" class="paging__prev"><span class="ion-ios-arrow-back ion"></span></a>
            <a href="#" class="paging__next"><span class="ion-ios-arrow-forward ion"></span></a>
          </div>
        </div>

        <div class="products row">
          <?php for ( $i = 0; $i < 3; $i++ ) { ?>
          <article class="product col-sm-6 col-md-4">
            <a href="activity.php" class="product__link product__figure">
              
              <img class="product__image" src="http://placehold.it/364x256" alt="Activity image">

              <span class="product__pax badge"><span class="ion-ios-people ion"></span> 4&ndash;8</span>
              <span class="product__location badge">Las Vegas</span>
            </a>
            <a href="activity.php" class="product__link product__text row">
              <div class="col-sm-7">
                <small class="product__category small--upper">Culture</small>
                <h4 class="product__name">Helicopter Tour</h4>    
              </div>
              <div class="col-sm-5 text--sm--right">
                <span class="product__price">from $150/person <br><small>Incl'd Taxes &amp; Fees</small></span>    
              </div>
            </a>
            <div class="product__buttons row">
              <div class="col-xs-6">
                <a href="#" class="btn-default btn-md btn-block btn">+ Add to Quote</a>  
              </div>
              <div class="col-xs-6">
                <a href="#" class="btn-warning btn-md btn-block btn">See All Options</a>  
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