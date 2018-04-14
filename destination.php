<?php 

  $page__title = 'Choose from hundreds of hotels, car rentals, airport services, and activities in Las Vegas';
  $is_page_destination = true;

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <header class="section--begin begin text-center">

        <div class="destination__marker">
          <span class="marker__icon ion-location ion text-warning"></span> 
          <h1 class="marker__location">Las Vegas, NV</h1>          
        </div>
        
        <h2>Begin your search</h2>
        <p>Select option below to begin. Choose from hundreds of hotels, car rentals, airport services, and activities</p>

        <a href="activities.php" class="destination__option btn-default btn-lg btn"><span class="md-explore mdicon">&#xe87a;</span> <br> Activities</a>
        <a href="hotels.php" class="destination__option btn-default btn-lg btn"><span class="md-hotel mdicon">&#xe53a;</span> <br> Hotels</a>
        <a href="car-rentals.php" class="destination__option btn-default btn-lg btn"><span class="md-directions_car mdicon">&#xe531;</span> <br> Car Rental</a>
        <a href="airport-transfers.php" class="destination__option btn-default btn-lg btn"><span class="md-swap_horiz mdicon">&#xe8d4;</span> <br> Airport Xfers</a>
      </header>

      <section class="section--activities activities" id="activities">
        <h3 class="text-center">Popular activities for this Location</h3>
        <p class="text-center"><a href="#" class="btn-default btn">See All Activities</a></p>

        <div class="products row">
          <?php for ( $i = 0; $i < 6; $i++ ) { ?>
          <article class="product col-sm-6 col-md-4">
            <a href="activity.php" class="product__link product__figure">
              <img class="product__image" src="http://placehold.it/364x256" alt="Activity image">
              <span class="product__pax badge"><span class="ion-ios-people ion"></span> 4&ndash;8</span>
              <span class="product__location badge">Las Vegas</span>
            </a>
            <a href="activity.php" class="product__link row">
              <div class="col-sm-7">
                <small class="product__category small--upper">Adventure, Family</small>
                <h4 class="product__name">Black Canyon Raft</h4>    
              </div>
              <div class="col-sm-5 text-right">
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

    </main>

<?php include('_footer.php'); ?>