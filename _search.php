<?php
  $value_placeholder = "Search specialty, procedure...";
  $search__class = '';
  if ( isset($is_searching )) { $search__class = 'is--searching'; }
  if ( isset($is_page_destination )) { $search__class = 'is--destination'; }
?>

<form class="search navbar-form navbar-left <?php echo $search__class; ?>" id="search">
          

          <div class="search__inputgroup inputgroup--search input-group-lg input-group">
            <label class="search__icon input-group-addon" for="search__input" id="search__icon"><span class="ion-ios-search ion"></span></label>
            <button type="button" class="search__close btn--close btn"><span class="ion-close-circled ion"></span></button> 
            
            <input type="text" class="form-control input-lg " id="search__input" placeholder="<?php if (isset($value_placeholder) ) { echo $value_placeholder; } ?>" aria-describedby="search__icon" value="<?php if (isset($is_page_destination) ) { echo 'Las Vegas'; } ?>">

            <div class="search__dropdowns" id="search__dropdowns">

              <div class="btngroup--searchoption btn-group">
                <button type="button" class="search__option input--select btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if(isset( $search__option)) echo $search__option; ?></button>
                <ul class="search__options dropdown-menu">
                  <li><a href="activities.php"><span class="md-explore mdicon">&#xe87a;</span> Activities</a></li>
                  <li><a href="hotels.php"><span class="md-hotel mdicon">&#xe53a;</span> Hotels</a></li>
                  <li><a href="car-rentals.php"><span class="md-directions_car mdicon">&#xe531;</span> Car Rental</a></li>
                  <li><a href="airport-transfers.php"><span class="md-swap_horiz mdicon">&#xe8d4;</span> <span class="hidden-xs">Airport</span> Xfers</a></li>
                </ul>
              </div>
              <label class="label--inline">
                in
              </label>
              <div class="btngroup--searchdestination btn-group">
                <button type="button" class="search__destination input--select btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Las Vegas</button>
                <div class="search__destinations panel-default panel dropdown-menu" id="search__destinations">
                  <h2 class="dropdown__header">Selected Destination(s)</h2>
                  <ol class="destinations__list list-group">
                    <li class="destinations__item list-group-item media">
                      <label class="media-left media-middle">
                        <input type="checkbox" id="destination__001">
                      </label>
                      <label class="media-body media-middle" for="destination__001">
                        <span class="destinations__name">Las Vegas, NV</span>
                        <br> <small class="small--upper">Jan 11 &ndash; Jan 12</small>
                      </label>
                      <span class="small--upper media-right media-middle text-center">15 <br> Activities</span>
                      <span class="media-right media-middle">
                        <button type="button" class="btn--remove btn"><span class="md-remove_circle_outline mdicon">&#xe15d;</span></button>
                      </span>
                    </li>
                    <li class="destinations__item list-group-item media">
                      <label class="media-left media-middle">
                        <input type="checkbox" id="destination__002">
                      </label>
                      <label class="media-body media-middle" for="destination__002">
                        <span class="destinations__name">Las Vegas, NV</span>
                        <br> <small class="small--upper">Jan 11 &ndash; Jan 12</small>
                      </label>
                      <span class="small--upper media-right media-middle text-center">15 <br> Activities</span>
                      <span class="media-right media-middle">
                        <button type="button" class="btn--remove btn"><span class="md-remove_circle_outline mdicon">&#xe15d;</span></button>
                      </span>
                    </li>
                  </ol>
                  <div class="panel-footer clearfix">
                    <button class="btn-link btn small--upper">Clear All</button>
                    <a href="#" class="btn-default btn pull-right">Add &amp; Edit Destinations…</a>
                  </div>
                </div>
              </div>

              <button type="button" class="search__detail btn pull-right small--upper" data-toggle="popover" data-content-source="#searchdetails"> <span class="hidden-xs">Details</span> <span class="ion-android-more-vertical ion"></span></button>
             
            </div>

          </div><!-- /.search__inputgroup -->


          <div class="search__results search__popup panel-default panel" id="search__results">
            <div class="panel-heading">
              <label class="checkbox-inline"><input type="checkbox"> All</label>
              <label class="checkbox-inline"><input type="checkbox"> Hotels</label>
              <label class="checkbox-inline"><input type="checkbox"> Activities</label>
            </div>
            <ul class="results__list list-group">
              <li class="results__item list-group-item media">
                <a href="destination.php" class="results__name media-body media-middle media__nowrap">
                  <span class="md-place mdicon text-muted">&#xe55f;</span>
                  <mark>La</mark>s Vegas
                </a>
                <div class="results__options media-body media-middle media__nowrap text-right">
                  <a href="activities.php" class="btn--iconlink btn-link btn"><span class="md-explore mdicon">&#xe87a;</span> <br> Activities</a>
                  <a href="hotels.php" class="btn--iconlink btn-link btn"><span class="md-hotel mdicon">&#xe53a;</span> <br> Hotels</a>
                  <a href="car-rentals.php" class="btn--iconlink btn-link btn"><span class="md-directions_car mdicon">&#xe531;</span> <br> Car Rental</a>
                  <a href="airport-transfers.php" class="btn--iconlink btn-link btn"><span class="md-swap_horiz mdicon">&#xe8d4;</span> <br> <span class="hidden-xs">Airport</span> Xfers</a>
                </div>
              </li>
              <li class="results__item list-group-item media">
                <a href="hotel.php" class="results__name media-body media-middle">
                  <span class="md-hotel mdicon text-muted">&#xe53a;</span>
                  <mark>La</mark>kefront Hotel &amp; Resort
                </a>
                <small class="results__city media-body media-middle text-right">Las Vegas, NV</small>
              </li>
              <li class="results__item list-group-item media">
                <a href="activity.php" class="results__name media-body media-middle">
                  <span class="md-explore mdicon text-muted">&#xe87a;</span>
                  <mark>La</mark>ser Tag Extreme
                </a>
                <small class="results__city media-body media-middle text-right">San Diego, CA</small>
              </li>
              <li class="results__item list-group-item media">
                <a href="destination.php" class="results__name media-body media-middle">
                  <span class="md-hotel mdicon text-muted">&#xe53a;</span>
                  <mark>La</mark>ke Tahoe
                </a>
                <small class="results__city media-body media-middle text-right">Las Vegas, NV</small>
              </li>
              <li class="results__item list-group-item media">
                <a href="destination.php" class="results__name media-body media-middle">
                  <span class="md-hotel mdicon text-muted">&#xe53a;</span>
                  Fort <mark>La</mark>uderdale
                </a>
                <small class="results__city media-body media-middle text-right">Las Vegas, NV</small>
              </li>
              <li class="results__item list-group-item media">
                <a href="destination.php" class="results__name media-body media-middle">
                  <span class="md-hotel mdicon text-muted">&#xe53a;</span>
                  <mark>La</mark>kefront Hotel &amp; Resort
                </a>
                <small class="results__city media-body media-middle text-right">Las Vegas, NV</small>
              </li>
            </ul>
          </div>
        
        </form>

        <div id="searchdetails" class="search__details search__popup popover-content hide">
          <div class="searchdetails__content col-sm-8">
            <header class="searchdetails__header clearfix">
              <h2 class="popover-title pull-left">Las Vegas, NV</h2>
              <div class="pull-right">
                <a class="left" href="#searchdetails__carousel" role="button" data-slide="prev">
                  <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <span class="carousel__index small--upper">1 of 4</span>
                <a class="right" href="#searchdetails__carousel" role="button" data-slide="next">
                  <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </header>
            <small class="small--upper clearfix">About This Destination</small>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum doloribus corrupti aliquid dolor ut deleniti qui. Nesciunt soluta quibusdam, esse culpa earum ea quidem, expedita excepturi, numquam repellat alias voluptatibus.</p>
          </div>
          <div id="searchdetails__carousel" class="searchdetails__carousel carousel slide col-sm-4" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <div class="item active"><img src="http://placehold.it/280x280" alt="Las Vegas, NV photo 1"></div>
              <div class="item"><img src="http://placehold.it/280x280" alt="Las Vegas, NV photo 2"></div>
              <div class="item"><img src="http://placehold.it/280x280" alt="Las Vegas, NV photo 3"></div>
              <div class="item"><img src="http://placehold.it/280x280" alt="Las Vegas, NV photo 4"></div>
            </div>
          </div>
        </div>
        <!--<div id="searchdetails1" class="hide">
          <div class="searchdetails__content col-sm-8">
            <header class="searchdetails__header clearfix">
              <h2 class="popover-title pull-left">Las Vegas, NV</h2>
            </header>

            <small class="small--upper clearfix">About This Destination</small>
            <p>serio, consectetur adipisicing elit. Cum doloribus corrupti aliquid dolor ut deleniti qui. Nesciunt soluta quibusdam, esse culpa earum ea quidem, expedita excepturi, numquam repellat alias voluptatibus.</p>
          </div>
        </div>-->

        