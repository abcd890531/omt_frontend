<?php 

  $page__title = 'Helicopter Tour';

?>

<?php include('_header.php'); ?>

  <main class="main container-fluid">

    <div id="quote" class="activequote">
      
    </div>

    <div class="navigating">
      <a href="activities.php" class="btn-default btn"><span class="ion-ios-arrow-back ion"></span> Back to Results</a>
    </div>

    <div class="row">
      <div class="activity__main col-sm-8">
        <header class="activity__header">
          <div class="activity__text">
            <h1 class="activity__name">Helicopter Tour</h1>
            <span class="activity__location">Las Vegas, NV</span>
          </div>
          <a href="#activity__map" class="activity__showmap btn-link btn" data-toggle="modal">Show Map</a>
          <img class="activity__image product__image" src="http://placehold.it/750x310" alt="Helicopter Tour photo">
        </header>
      </div>
      <aside class="activity__sidebar sidebar col-sm-4">
        <h2 class="sidebar__heading"><span class="md-hotel mdicon">&#xe53a;</span> Nearby Hotels</h2>
        <div id="nearbyactivities__carousel" class="carousel--nearby carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner" role="listbox">
            <?php for ( $i = 0; $i < 3; $i++ ) { ?>
            <div class="product item<?php if ( $i == 0 ) { echo ' active'; } ?>">
              <figure class="product__figure">
                <img class="product__image" src="http://placehold.it/350x160" alt="Activity image">
              </figure>
              <div class="row">
                <div class="col-md-7">
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
      </aside>
    </div>

    <div class="packages__header clearfix">
      <h2 class="section__title pull-left">Available Packages</h2>
      <span class="mostpopular pull-right small--upper">
        Most Popular
        <span class="icon--popular ion-android-star ion"></span>
      </span>
    </div>
    <table class="packages__table table">
      <tbody>
        <tr class="package">
          <th class="package__th">
            <h3 class="package__name">Grand Canyon Landing</h3>
            <button type="button" class="package__toggle btn-link" data-toggle="collapse" data-target=".package__details">Activity Details <span class="ion-arrow-down-b ion"></span></button>
          </th>
          <td class="package__attr"><span class="ion-clock ion"></span> 15 min</td>
          <td class="package__attr"><span class="ion-ios-people ion"></span> 1&ndash;7</td>
          <td class="package__price"><span class="small--upper">USD</span> <big>$95</big> / person <br><small class="text-muted">*Taxes &amp; fees not incl'd</small></td>
          <td class="package__action"><a href="#activity__add" class="package__btn btn-warning btn-block btn-md btn" data-toggle="modal">+ Add Activity <span class="icon--popular ion-android-star ion"></span></a></td>
        </tr>
        <tr class="package__details collapse">
          <td colspan="5">
            <div class="row">
              <div class="col-sm-7">
                <h4>Includes</h4>
                <p>Helicopter tour with knowledgeable pilot</p>
                <h4>Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa velit quas at temporibus voluptatem numquam obcaecati quam laborum doloribus, culpa quod cum tempore labore ullam veritatis sapiente vero iusto repudiandae.</p>
              </div>
              <div class="col-sm-5">
                <h4>Meeting Location</h4>
                <p>Vegas Strip</p>
                <h4>Available Dates</h4>
                <p>All year</p>
              </div>
            </div>
            <button type="button" class="details__close badge btn" data-toggle="collapse" data-target=".package__details">Close <span class="ion-android-close ion"></span></button>
          </td>
        </tr>
        <tr class="package disabled">
          <th class="package__th">
            <h3 class="package__name">Silver Cloud</h3>
            <button type="button" class="package__toggle btn-link" data-toggle="collapse" data-target=".package__details">Activity Details <span class="ion-arrow-down-b ion"></span></button>
          </th>
          <td class="package__attr"><span class="ion-clock ion"></span> 3.5 hours</td>
          <td class="package__attr"><span class="ion-ios-people ion"></span> 10+</td>
          <td class="package__price"><span class="small--upper">USD</span> <big>$379</big> / person <br><small class="text-muted">*Taxes &amp; fees not incl'd</small></td>
          <td class="package__action">
            <div href="#activity__add" class="package__notavailable">
              <span class="">Activity Not Available</span>
              <span class="small">Why? <span class="ion-help-circled ion"></span></span>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <div id="activity__map" class="activity__map modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Helicopter Tour</h2>
            <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
          </div>
          <!-- <div class="modal-body"> -->
            <div id="map"></div>
          <!-- </div> -->
        </div>
      </div>
    </div>

  </main>

<?php include('_footer.php'); ?>