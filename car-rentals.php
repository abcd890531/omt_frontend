<?php 

  $page__title = 'Car Rentals in Las Vegas';
  $is_searching = true;
  $search__option = 'Car Rentals';

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <div class="filtering form-horizontal row">
        <div class="filter__col col-sm-3 col-md-2">
          <label class="small--upper">Date Range</label>
          <button type="button" class="input--daterangepicker input--select btn-block btn">
            <span class="startdate">Jan 11</span> &ndash; <span class="enddate">Feb 17</span>
          </button>
        </div>
        <div class="filter__col col-sm-3 col-md-2">
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
        <div class="filter__col col-sm-6 col-md-3">
          <label class="small--upper">Pick-Up Location</label> <br>
          <button type="button" class="input--select btn-block btn" data-toggle="dropdown">Avis Car Rental</button>
          <div class="pickup__dropdown panel-default panel dropdown-menu">
            <ul class="list-group">
              <?php for ( $i = 0; $i < 3; $i++ ) { ?>
              <li class="list-group-item media">
                <label class="media-left media-middle">
                  <input type="radio" name="nearhotel" id="pickup__<?php echo $i; ?>">
                </label>
                <label class="media-left media-middle" for="pickup__<?php echo $i; ?>">
                  <img class="media-object" src="media/avis.png" alt="Avis logo" width="25">
                </label>
                <label class="media-body media-middle" for="pickup__<?php echo $i; ?>">
                  Avis Car Rental
                  <br> <small class="small--upper">2804 W. Centennial Pkwy Ste 105</small>
                </label>
                <label class="media-body media-middle text-right small--upper" for="pickup__<?php echo $i; ?>">
                  4 Mi from Las (Airport)
                  <a href="#">See on Map</a>
                </label>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="filter__col col-sm-6 col-md-3">
          <label class="small--upper">Drop-Off Location</label> <br>
          <button type="button" class="input--select btn-block btn" data-toggle="dropdown">Same as Pick-up</button>
        </div>
        <div class="filter__col col-xs-12 col-sm-6 col-md-2 pull-right text--sm--right">
          <button class="filter__reset btn-link btn-sm small--upper btn--underline">Reset Filters</button>
        </div>
      </div>

      <div class="sorting clearfix showmap__collapse collapse in">
        <div class="sorting__category pull-left">
          <span class="small--upper">View By Category:</span>
          <div class="btngroup--separate btn-group" data-toggle="buttons">
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> SUV ($50)</label>
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> Small ($31)</label>
            <label class="category__btn btn-default btn-sm btn"><input type="checkbox"> Large ($38</label>
            <label class="category__btn btn-default btn-sm btn disabled"><input type="checkbox"> Van ($61)</label>
            <label class="category__btn btn-default btn-sm btn disabled"><input type="checkbox"> Luxury ($91)</label>
          </div>
        </div>       
        <div class="sorting__showmap pull-right text--sm--right">
          <button type="button" class="sorting__showmap sorting__btn btn-link btn" data-toggle="collapse" data-target=".showmap__collapse">
            <span class="ion-android-map ion"></span>
            Show Map View</span>
          </button>
        </div>         
      </div>
      <div class="sorting row showmap__collapse collapse">
        <div class="col-sm-9 pull-left">
          
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
        <?php for ( $i = 0; $i < 3; $i++ ) { ?>
        <article class="product col-sm-6 col-md-4">
          <a href="activity.php" class="product__link product__figure">
            <img class="product__image" src="http://placehold.it/364x256" alt="Car Rental image">
            <span class="product__pax badge"><span class="ion-ios-people ion"></span> 4&ndash;8</span>
          </a>
          <a href="activity.php" class="product__link product__text row">
            <div class="col-sm-7">
              <small class="product__category small--upper">Small</small>
              <h4 class="product__name">Compact Car <?php echo $i; ?></h4>    
            </div>
            <div class="col-sm-5 text--sm--right">
              <span class="product__price">from $31 <br><small>Incl'd Taxes &amp; Fees</small></span>    
            </div>
          </a>
          <div class="product__buttons row">
            <div class="col-xs-6">
              <small class="small--upper">Chevy Volt</small> <br>
              <img src="media/avis.png" alt="Avis logo">
            </div>
            <div class="col-xs-6">
              <a href="#quote__add" class="btn-warning btn-md btn-block btn" data-toggle="modal">Add to Quote</a>  
            </div>              
          </div>           
        </article>
          <?php } ?>
        </div>
      </section>

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
                    <div class="product__figure media-left media-bottom">
                      <img class="product__logo" src="media/avis.png" width="30" alt="Avis logo">
                      <img class="product__image media-object" src="http://placehold.it/95x52" alt="Compact car photo">
                    </div>
                    <div class="media-body media-middle">
                      <small class="small--upper">Small</small>
                      <h2 class="product__name">Compact</h2>
                      <span class="small--upper">Nissan Versa</span>
                      <span class="product__pax"><span class="ion-ios-people ion"></span> 5</span>
                    </div>
                    <div class="media-right">
                      <span class="product__icon md-directions_car mdicon">&#xe531;</span>
                    </div>
                  </header>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Pick-up Location <a href="#">change</a></th>
                        <td class="text--sm--right">Las Vegas</td>
                      </tr>
                      <tr>
                        <th>Drop-off Location <a href="#">change</a></th>
                        <td class="text--sm--right">LAS (Airport)</td>
                      </tr>
                      <tr>
                        <th>Date <a href="#">change</a></th>
                        <td class="text--sm--right">Jan 11 &ndash; Jan 17</td>
                      </tr>
                      <tr>
                        <th>Price (Incl'd Taxes &amp; Fees</th>
                        <td class="text--sm--right">$31</td>
                      </tr>
                    </tbody>
                  </table>
                  <h3 class="small--upper">Select Insurance</h3>
                  <div class="btn-group btn-group btngroup--separate" data-toggle="buttons">
                    <label class="btn-default btn-block btn text-left active">
                      <input type="radio" name="quote__insurance" checked> Basic Insurance 
                      <span class="pull-right">+$0.00</span>
                    </label>
                    <label class="btn-default btn-block btn text-left">
                      <input type="radio" name="quote__insurance"> Premium Insurance + GPS + Full Tank of Gas 
                      <span class="text-warning pull-right">+$60.00</span>
                    </label>
                  </div>
                  
                  <table class="product__grandtotal table">
                    <tbody>
                      <tr>
                        <th>Grand Total</th>
                        <td class="text-right"><big>$31.00</big></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer clearfix">
              <button class="btn-link btn small--upper pull-left" data-dismiss="modal">Cancel</button>
              <div class="pull-right">
                <a href="quote.php" class="btn-warning btn-md btn">Add &amp; Create New Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="section--map map showmap__collapse collapse" id="map">
      </section>
      <?php include('_map.php'); ?>

    </main>

<?php include('_footer.php'); ?>