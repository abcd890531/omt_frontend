<?php   

  $is_switchtoggle = true; 
  
?>
<?php include('_header.php'); ?>



    <main class="main container-fluid">
      <div class="row">
        <button id="botton_message" type="button" class=" message btn-info btn-sm btn"  data-toggle="collapse" data-target=".showmap__collapse">Message Center (3)</button>      
      </div>

      <div class="itinerary__details steps__item">
        
        <h2 class="steps__title">Itinerary Details</h2>
        <div class="col-md-12">
          
          <div class="form-group col-sm-7 col-md-6" >
            
            <img class="activity__image product__image" src="http://placehold.it/750x850" alt="body parts" style="height:600px;">
            <div id="select_header" class=" inputgroup--search  input-group" style="margin-top: 20px;" onclick="mostrar()">
              <select name="" id="" class="form-control">
                <option value="0">Add treatment(s)…</option>
                <option value="1">Cayman Isla</option>
                <option value="2">Ne Orleans</option>
                <option value="2">New papapa</option>
                <option value="2">Newq asd</option>
              </select>
            </div>

            <div id="select_treatment" class=" inputgroup--search  input-group" style="margin-top: 20px; visibility:hidden;">
              <select name="" id="" class="form-control">
                <option value="0">Knee</option>
                <option value="1">Knee Replacement</option>
                <option value="2">Knee Injections stem cells</option>
              </select>
            </div>
          </div>
          <div class="form-group col-sm-7 col-md-6" >
              <section class="showmap__collapse in" id="map"  >
              </section>
              <?php include('_map.php'); ?>
              
              <div id="select_destination" class=" inputgroup--search  input-group"  style="margin-top: 20px;">
                <select name="" id="" class="form-control">
                  <option value="0"  >Add destination…</option>
                  <option value="1">Croatia</option>
                </select>
              </div>

            </div>
        </div>  
      </div>      
         
      <div class="row col-md-6 col-sm-6">
        <button id="botton_search" type="button" class="message btn-info btn-sm btn">Search</button>      
      </div>
      
    </main>  
            <!-- begin block filter -->
              <div class="filtering form-horizontal row">
                <!-- begin filter for Data -->
                <div class="filter__col col-sm-3 col-md-2 collapse">
                  <label class="small--upper">Date Range</label>
                  <button type="button" class="input--daterangepicker input--select btn-block btn">
                    <span class="startdate">Jan 11</span> &ndash; <span class="enddate">Feb 17</span>
                  </button>
                </div>
                <!-- end filter for Data -->
              
              </div>
              <!-- end block filter -->
    

<?php include('_footer.php'); ?>

<script type="text/javascript">
  function mostrar(){
    document.getElementById('select_treatment').style.visibility = 'visible';
  }
</script>