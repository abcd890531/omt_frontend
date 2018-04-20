<?php 

$is_switchtoggle = true; 
?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <div>
          <button id="botton_message" type="button" class=" message btn-info btn-sm btn" >Message Center (3)</button>      
      </div>

      <div class="navigating">
        <a href="hospitals_ppt[8-12].php?is_itinerary_details=false" class="btn-default btn"><span class="ion-ios-arrow-back ion"></span> Back to Results</a>
      </div>

      <div class="row">
        <div class="hotel__main col-sm-12">
          <header class="hotel__header row">
              <figure class="product__figure col-sm-4">
              <img class="hotel__image product__image" src="http://placehold.it/220x145" alt="St. Catherine Specialty Hospital photo" width="220" height="145">
              </figure>
              <div class="col-sm-8">
              <h1 class="hotel__name">St. Catherine Specialty Hospital</h1>
              <p class="hotel__rating product__rating"><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span></p>
              <address class="hotel__address">
                  Bračak 8, 49210, Zabok, Croatia <br>
                  <a href="#">www.svkatarina.hr/en</a>
              </address>
              <br>
              <div>
                  <button class="btn-md btn">Knee Replacement: Starting at $12,000</button>
                  <a href="add_to_hospital_ppt[20].php" class="btn-md btn btn-warning">+ Add & Send Records to Hospital</a>
              </div>
              </div>
          </header>
          <ul class="hotel__tabs nav-tabs nav" role="tablist">
            <li class="active" role="presentation"><a href="#hotel-details" data-toggle="tab">Details</a></li>
            <li role="presentation"><a href="#hotel-reviews" data-toggle="tab">Google Reviews</a></li>
            <li role="presentation"><a href="#hotel-map" data-toggle="tab">Map</a></li>
          </ul>
          <div class="hotel__tabcontent tab-content">
            <div id="hotel-details" class="tab-pane active">
              <p>On the shores of Miami Beach, the James Royal Palm is less than a 5-minute walk from the Lincoln Road Mall. This resort features a full spa, as well as 2 outdoor pool and bar. A 42-inch flat-screen cable TV is featured in every modern guest room at this Miami Beach Resort. A minibar is also available in each room and guests will enjoy free Wi-Fi. A fitness center and hot tub are on site at the James Royal Palm Miami Beach. Guests can also enjoy a variety of outdoor activities arranged by the resortâ€™s concierge staff. Florida Cookery, the on-site restaurant, specializes in Southern American cuisine. It is open for breakfast, lunch, and dinner daily. This property is located less than a 5-minute walk from the dining and shopping options of Ocean Drive. The Art Deco Historic District is also less than 1 mile away. South Beach is highly rated by guests for: sushi, live music, art galleries</p>
            </div>
            <div id="hotel-reviews" class="tab-pane">
              <p>google reviews</p>
            </div>
            <div id="hotel-map" class="tab-pane">
              Map
            </div>
          </div>
          
          <h2>Amenities</h2>
          <ul class="hotel__amenities list-inline list-unstyled">
            <li class="btn-default btn"><span class="mdicon">&#xeb43;</span> Fitness Center</li>
            <li class="btn-default btn"><span class="md-pool mdicon">&#xeb48;</span> Pool</li>
            <li class="btn-default btn"><span class="md-beach_access mdicon">&#xeb3e;</span> Beach</li>
            <li class="btn-default btn"><span class="md-spa mdicon">&#xeb4c;</span> Spa Services</li>
            <li class="btn-default btn"><span class="mdicon">local_parking</span> Parking</li>
            <li class="btn-default btn"><span class="mdicon">business_center</span> Business Center</li>
            
          </ul>
          
          <h2>Physician Profiles</h2>
          <a class="hotel__thumbnail" href="#"><img src="http://placehold.it/110x110" alt="Hotel thumbnail photo"></a>
          <a class="hotel__thumbnail" href="#"><img src="http://placehold.it/110x110" alt="Hotel thumbnail photo"></a>
          

        </div>        
              
      </div>   

      

    </main>

<?php include('_footer.php'); ?>