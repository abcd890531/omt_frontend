
<?php

$is_avatar = false;
$is_switchtoggle = false;
$is_select = true;
$is_itinerary = false;

$arrayElemnt = array("1" => array("name"=>"Cayman Isl","details1"=>"The Westin Grand Cayman","details2"=>"Grand Cayman","details3"=>"Text"),
                     "2" => array("name"=>"New Orlenas","details1"=>"text text text","details2"=>"Text","details3"=>"Text")
                   );
?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <button id="botton_message" type="button" class=" message btn-info btn-sm btn" >Message Center (3)</button></br>

      <?php include('_button_header.php'); ?>

      <div id="welcome">
        <p class="welcome__p h3 text-infort">Welcome to Overseas Medical!</p>
        <div class="row">
          <div class="welcome__left col-sm-7 col-md-8">
            <p class="h4">Create a medical trip for one location here: </p>
          </div>
          <div class="welcome__right col-sm-5 col-md-4">
            <p>
              <a href="Itinerary_details_ppt[14].php" class="btn-info  welcome__btn btn-block btn">Design Your Trip <span class="ion-ios-arrow-right ion"></span></a>
            </p>
          </div>
          <div class="welcome__left col-sm-7 col-md-8">
            <p class="h4">Request bids from multiple providers here:</p>
          </div>
          <div class="welcome__right col-sm-5 col-md-4">
            <p>
              <a href="browse.php" class="btn-primary welcome__btn btn-block btn">Request bids <span class="ion-ios-arrow-right ion"></span></a>
            </p>
            <small>Want to continue working on existing design? <a href="quotes.php">View&nbsp;My&nbsp;Trips</a></small>
          </div>
        </div>
        
      </div>

      <section class="section--destinations destinations" id="destinations">
        <h2 class="destinations__title section__title">Select from your popular destinations</h2>
        <div class="row">
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="Lake Powell">
              <h3 class="destination__name">Lake Powell</h3>
            </a>
          </div>
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="Maui">
              <h3 class="destination__name">Maui</h3>
            </a>
          </div>
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="New Orleans">
              <h3 class="destination__name">New Orleans</h3>
            </a>
          </div>
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="Portland">
              <h3 class="destination__name">Portland</h3>
            </a>
          </div>
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="Naples">
              <h3 class="destination__name">Naples</h3>
            </a>
          </div>
        </div>
        <h2 class="destinations__title section__title">Select from most viewed hospitals</h2>
        <div class="row">
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="Lake Powell">
              <h3 class="destination__name">Lake Powell</h3>
            </a>
          </div>
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="Maui">
              <h3 class="destination__name">Maui</h3>
            </a>
          </div>
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="New Orleans">
              <h3 class="destination__name">New Orleans</h3>
            </a>
          </div>
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="Portland">
              <h3 class="destination__name">Portland</h3>
            </a>
          </div>
          <div class="col-sm--onefifth col-xs-6">
            <a class="destination" href="destination.php">
              <img class="destination__image" src="http://placehold.it/210x113" alt="Naples">
              <h3 class="destination__name">Naples</h3>
            </a>
          </div>
        </div>
      </section>

    </main>

<?php include('_footer.php'); ?>