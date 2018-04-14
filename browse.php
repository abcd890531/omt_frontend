<?php include('_header.php'); ?>

    <main class="steps main container-fluid">

      <div class="itinerary__details steps__item">
        <h2 class="steps__title">Itinerary Details</h2>
        <div class="row">
          <div class="form-group col-sm-5 col-md-4">
            <label class="small--upper">Quote Name (Optional)</label>
            <input type="text" class="input--underline form-control" placeholder="Name of Quote…">
          </div>
          <div class="form-group col-sm-4 col-md-3">
            <label for="quote__budget" class="control-label small--upper">Client Budget (Optional)</label>
            <div class="inputgroup--underline input-group">
              <input id="quote__budget" type="text" class="form-control input--underline" placeholder="$0.00">
              <label for="quote__budget" class="input-group-addon">USD</label>
            </div>
          </div>
        </div>      

        <div class="itinerary__map">
          <div id="map"></div>
          <div class="locations panel-default panel">
            <div class="panel-heading">
              <h2 class="locations__title panel-title">Choose a Region</h2>
              <div class="locations__nav media hide">
                <span class="media-left media-middle">
                  <button class="level__back btn"><span class="ion-chevron-left ion"></span></button>
                </span>
                <div class="locations__crumb media-body media-middle">
                  <h3 class="level__name small--upper">Country</h3>
                  <h4 class="level__value">United States</h4>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="locations__region locations__level" data-level-name="Region" data-level-value="">
                <ul class="locations__list list-group">
                  <li class="list-group-item">North America</li>
                  <li class="list-group-item">South America</li>
                  <li class="list-group-item">Europe</li>
                  <li class="list-group-item">Africa</li>
                  <li class="list-group-item">Asia</li>
                  <li class="list-group-item">Australia</li>
                </ul>
              </div>
              <div class="locations__country locations__level hide" data-level-name="Country" data-level-value="">
                <h3 class="locations__header small--upper">Select a Country</h3>
                <ul class="locations__list list-group">
                  <li class="list-group-item">United States</li>
                  <li class="list-group-item">Canada</li>
                </ul>
              </div>
              <div class="locations__city locations__level hide" data-level-name="City" data-level-value="">
                <h3 class="locations__header small--upper">Select Destination(s)</h3>
                <ul class="locations__list list-group">
                  <li class="list-group-item">
                    <div class="city__value">Albuquerque</div>
                    <span class="city__add">+ Add</span>
                    <span class="city__added"><span class="ion-checkmark-round ion"></span> Added</span>
                  </li>
                  <li class="list-group-item">
                    <div class="city__value">Arches</div>
                    <span class="city__add">+ Add</span>
                    <span class="city__added"><span class="ion-checkmark-round ion"></span> Added</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>      

      <div class="itinerary__destinations steps__item">
        <h2 class="steps__title">Select Your Destination(s)</h2>
        <p>Find the destination you want using the map below</p>

        <?php for ( $i = 0; $i < 2; $i++ ) { ?>
        <div class="destination--itinerary row">
          <div class="col-sm-6 col-md-7">
            <header class="media">
              <div class="media-left media-middle"><span class="ion-android-more-vertical ion"></span></div>
              <div class="media-left media-middle">
                <img class="destination__image" src="http://placehold.it/175x75" alt="Destination image">
              </div>
              <div class="media-left media-middle">
                <h3 class="product__name">Las Vegas</h3>
                <span class="small--upper">Nevada</span>
              </div>
              <div class="media-left media-middle">          
                <button type="button" class="btn--remove btn"><span class="md-remove_circle_outline mdicon">&#xe15d;</span></button>
              </div>
            </header>
          </div>
          <div class="form-group col-sm-4 col-md-3">
            <label class="small--upper">Arrival (Optional)</label>
            <div class="inputgroup--date inputgroup--underline input-group">
              <label for="destination__001__date" class="input-group-addon"><span class="ion-android-calendar ion"></span></label>
              <input id="destination__001__date" type="date" class="input--underline form-control" value="2018-01-01">
            </div>
          </div>
          <div class="form-group col-xs-6 col-sm-2 col-md-2">
            <label class="small--upper">Days</label>
            <div class="inputgroup--number inputgroup--underline input-group">
              <label class="minus input-group-addon"><span class="md-remove_circle_outline mdicon">&#xe15d;</span></label>
              <input type="number" class="form-control input--underline" value="1">
              <label class="plus input-group-addon"><span class="md-add_circle_outline mdicon">&#xe148;</span></label>
            </div>
          </div>
        </div>
        <?php } ?>

      </div>      

      <div class="text-right">
        <button type="button" class="btn-link btn small--upper">Remove All Destinations</button>

        <!-- <em>You must select at least one destination.</em> -->
        <a href="activities.php" class="btn-warning btn-lg btn">Save Itinerary &amp; Search</a>
      </div>

    </main>

<?php include('_footer.php'); ?>