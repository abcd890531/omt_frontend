<?php 

$is_avatar = false;
$is_switchtoggle = false;
$is_select = true;
$is_itinerary = false;

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">
      
      <div class="form-horizontal row">
        <div class="row">
          <button id="botton_message" type="button" class=" message btn-info btn-sm btn" >Message Center (3)</button>
        </div>

        <button id="botton_primary" type="button" class=" message btn-primary btn-sm btn" style="margin-top: 5px;">Search</button>
      </div>
      
      <!-- begin block filter -->
      <div class="filtering form-horizontal row">
        <!-- begin filter for Data -->
        <div class="filter__col col-sm-3 col-md-2">
          <label class="small--upper">Date Range</label>
          <button type="button" class="input--daterangepicker input--select btn-block btn">
            <span class="startdate">Jan 11</span> &ndash; <span class="enddate">Feb 17</span>
          </button>
        </div>
        <!-- end filter for Data -->
        <!-- begin filter for Price -->
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
        <!-- end filter for Price -->

        <!-- begin filter for Stars -->
        <div class="filter__col col-sm-3 col-md-2">
          <label class="small--upper">Reviews</label> <br>
          <button type="button" class="input--select btn-block btn" data-toggle="dropdown">
            <span class="startprice">1</span> &ndash; <span class="endprice">5 stars</span>
          </button>
          <div class="pricerange__dropdown dropdown-menu">
            <p class="hotel__rating product__rating">
              <a href="#">
                <span class="ion-android-star ion"></span>
              </a>
            </p>  
            <p class="hotel__rating product__rating">
              <a href="#">
                <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
              </a>
            </p>
            <p class="hotel__rating product__rating">
              <a href="#">
                <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
              </a>  
            </p>
            <p class="hotel__rating product__rating">
              <a href="#">
                <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
              </a>  
            </p>   
            <p class="hotel__rating product__rating">
              <a href="#">
                <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
              </a>  
            </p> 
            
          </div>  
        </div>
        <!-- end filter for Stars -->
      </div>
      <!-- end block filter -->
      
      <!-- begin show Map View -->
      <div class="sorting clearfix showmap__collapse collapse in">
            
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
      
      <!-- end show Map View-->

      <!-- begin row sort -->
      
      <!-- end row sort -->
      <section class="section--hotels hotels showmap__collapse collapse in" id="hotels">
        
        <div class="products row">
          <div class="form-group sorting__by col-sm-9 showmap__collapse collapse in">
            <span class="small--upper">Sort By:</span>
            <div class="btn-group" data-toggle="buttons">
              <label class="sorting__btn btn--underline btn-sm btn active"><input type="radio" name="sort"> Price</label>
              <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Category</label>
              <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Hospital Name</label>
            </div>
          </div>
          <div class="col-sm-9 showmap__collapse collapse in">
            <span class="mdicon">&#xe548;</span> <label>Hospitals</label>
          </div>
            <!-- begin articles of hospitals -->
            <article class="product col-sm-6 col-md-4">

              <!-- begin carrousel 1 -->
              <div id="productactivities__carousel" class="carousel--product carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner" role="listbox">
                  <div class="product item active">
                    <figure class="product__figure">
                      <img class="product__image" src="http://placehold.it/348x110" alt="Activity image">
                    </figure>
                  </div>
                  <div class="product item">
                    <figure class="product__figure">
                      <img class="product__image" src="http://placehold.it/348x110" alt="Activity image">
                    </figure>                
                  </div>
                  <div class="product item">
                    <figure class="product__figure">
                      <img class="product__image" src="http://placehold.it/348x110" alt="Activity image">
                    </figure>
                  </div>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#productactivities__carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#productactivities__carousel" data-slide-to="1" class=""></li>
                  <li data-target="#productactivities__carousel" data-slide-to="2" class=""></li>
                </ol>
                <a class="left carousel-control" href="#productactivities__carousel" role="button" data-slide="prev">
                  <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#productactivities__carousel" role="button" data-slide="next">
                  <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <!-- end carroucel 1 -->

              <!-- name -->
              <div>
                <label>Health City Cayman Islands</label>
              </div>              
              <!-- ranking -->
              <div>
                <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
              </div>              
              <!-- button details -->
              <div>
                <button class="btn-md btn" data-toggle="collapse" data-target=".package__details">Hospital Details</button>
                <!-- button rates -->
                <a href="#quote__add" class="btn-info btn-md btn" data-toggle="modal">View Rates</a>
              </div>
              
            </article>
            


            <article class="product col-sm-6 col-md-4">

              <!-- begin carrousel 2 -->
              <div id="productactivities__carousel2" class="carousel--product carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner" role="listbox">
                  <div class="product item active">
                    <figure class="product__figure">
                      <img class="product__image" src="http://placehold.it/348x110" alt="Activity image">
                    </figure>
                  </div>
                  <div class="product item">
                    <figure class="product__figure">
                      <img class="product__image" src="http://placehold.it/348x110" alt="Activity image">
                    </figure>                
                  </div>
                  <div class="product item">
                    <figure class="product__figure">
                      <img class="product__image" src="http://placehold.it/348x110" alt="Activity image">
                    </figure>
                  </div>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#productactivities__carousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#productactivities__carousel2" data-slide-to="1" class=""></li>
                  <li data-target="#productactivities__carousel2" data-slide-to="2" class=""></li>
                </ol>
                <a class="left carousel-control" href="#productactivities__carousel2" role="button" data-slide="prev">
                  <span class="ion-ios-arrow-back ion" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#productactivities__carousel2" role="button" data-slide="next">
                  <span class="ion-ios-arrow-forward ion" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <!-- end carroucel 2 -->

              <!-- name -->
              <div>
                <label>Regenexx Cayman</label>
              </div>
              
              <!-- ranking -->
              <div>
                <span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span><span class="ion-android-star ion"></span>
              </div>
              
              <!-- button details -->
              <div>
                <button class="btn-md btn" data-toggle="collapse" data-target=".package__details">Hospital Details</button>
                <!-- button rates -->
                <a href="#quote__add" class="btn-info btn-md btn" data-toggle="modal">View Rates</a>
              </div>
              
            </article>
            <!-- begin articles of hospitals -->
        </div>
      </section>

      <!-- begin show details -->
      
      <ul class="nav-tabs nav package__details collapse">
        
          <li class=" active" role="presentation"><a href="#details" data-toggle="tab" aria-expanded="false">Details</a></li>
          <li class="" role="presentation"><a href="#" data-toggle="tab" aria-expanded="false">Nearby Activities (14)</a></li>
          <li class="" role="presentation"><a href="#" data-toggle="tab" aria-expanded="false">Google Reviews</a></li>
          <li class="" role="presentation"><a href="#" data-toggle="tab" aria-expanded="false">Map</a></li>
          <li class="" role="presentation"><a href="#" data-toggle="tab" aria-expanded="false">Services</a></li>
          <li class="" role="presentation"><a href="#Procedures_Specialties" data-toggle="tab" aria-expanded="false">Procedures & Specialties</a></li>
          <li class="" role="presentation"><a href="#" data-toggle="tab" aria-expanded="false">Physicians</a></li>
             
          <button type="button" class="pull-right badge btn" data-target=".package__details"  data-toggle="collapse" style="margin-right:15px; margin-top:5px;">Close <span class="ion-android-close ion"></span></button>        
          <div class="row"></div>
          <div class="tab-content">
            <div id="details" class="tab-pane active" style="margin-left: 10px;margin-bottom: 10px;">
              <div class="package__details collapse" aria-expanded="false" style="height: 0px;">
                <div colspan="5">          
                  <p>Health City Cayman Islands is a medically advanced tertiary hospital located near High Rock in the district of East End in Grand Cayman. We are a unique model of healthcare, built with a focus on the patient and rooted in innovative business models that allow the delivery of high quality, affordable care. As an internationally accredited centre of global excellence, we attract patients from the Cayman Islands, the Caribbean, the U.S, and Latin America.</p>
                  <p>In April 2015, just over a year after we opened, our facility earned the prestigious Gold Seal of Approval from Joint Commission International (JCI), the worldwide leader in accrediting the quality of healthcare. We are the largest hospital in the Caribbean to be accredited by JCI, and our patient services reflect those high standards of care.</p>
                </div>
              </div>
            </div>
            <div id="Procedures_Specialties" class="tab-pane text-center row" style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
              <div class="col-sm-3">
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">BARIATRICS</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">CANCER</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">CARDIOLOGY</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">CHECK UP</button>
              </div>
              <div class="col-sm-3">
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">DIABETES & ENDOCRINOLOGY</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">ENT</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">FERTILITY</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">GASTROENTEROLOGY</button>
              </div>
              <div class="col-sm-3">
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">NEPHROLOGY</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">NEUROLOGY</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">OPHTHALMOLOGY</button>
              <button class="btn-info btn-md btn" style="margin-top: 10px; width:100%;">ORTHOPEDICS</button>
              </div>
            </div>
          </div>
      </ul>

      
        

     
      <!-- end show details -->


      <!-- begin modal -->
      <div id="quote__add" class="quote__add modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
                         
              <table class="table text-center">
                <thead>
                  <h1 class="text-center">Health City Cayman Islands</h2>
                </thead>                
                <tbody>                  
                  <tr>
                    <td> <p>Hip Replacement</p> </td>
                    <td> <p>$15,000 USD</p> </td>                    
                  </tr>
                  <tr>
                    <td> <p>Knee Replacement</p> </td>
                    <td> <p>$15,000 USD</p> </td>                    
                  </tr>
                  <tr>
                    <td> <p>Valve Replacement</p> </td>
                    <td> <p>$20,000 USD</p> </td>                    
                  </tr>                  
                </tbody>
              </table>              
                
              <div class="col-sm-7">
                <a href="#" class="btn-info btn-md btn pull-right" data-dismiss="modal">Inquire</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- end modal  -->

      <section class="section--map map showmap__collapse collapse" id="map">
      </section>
      <?php include('_map.php'); ?>

    </main>

<?php include('_footer.php'); ?>