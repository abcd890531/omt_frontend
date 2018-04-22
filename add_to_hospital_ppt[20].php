<?php 

$is_switchtoggle = true; 
?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <div>
          <button id="botton_message" type="button" class=" message btn-info btn-sm btn" >Message Center (3)</button>      
      </div>

      <div class="navigating">
        <a href="hospital_show_ppt[19].php" class="btn-default btn"><span class="ion-ios-arrow-back ion"></span> Back to Results</a>
      </div>

      <div class="row">
        <div class="hotel__main col-sm-7"> 
          <h1>TREATMENT QUOTE</h1>         
          <div class="col-sm-12" style="border:solid 1px; color: RGB(74,126,187); margin-bottom:15px;">
            <ul>
              <h1 class="" style="position: relative;left: 50%; top: 250px; -webkit-transform: rotate(270deg);">Patient questionnaire.</h1>
              <h2>Patient Information: </h2>
              <li style="color: black;">Current symptoms of the patient:</li>
              <li style="color: black;">Current medications being taken:</li>
              <li style="color: black;">Patient First Name:</li>
              <li style="color: black;">Patient Last Name:</li>
              <li style="color: black;">US Social Security Number if Applicable:</li>
              <li style="color: black;">Date of Birth:</li>
              <li style="color: black;">Sex: Male or Female:</li>
              <li style="color: black;">Patient Address:</li>
              <li style="color: black;">City:</li>
              <li style="color: black;">Country:</li>
              <li style="color: black;">Zipe Code:</li>
              <li style="color: black;">Phone Number:</li>
              <li style="color: black;">Cell Phone:</li>
              <li style="color: black;">Work Phone:</li>
              <li style="color: black;">Email:</li>
              <li style="color: black;">Do you have a US Visa?</li>
              <li style="color: black;">Are you deaf?</li>
              <li style="color: black;">Are you visually impaired?</li>
              <li style="color: black;">Preferred Language:</li>
              <li style="color: black;">Employment Status:</li>
              <li style="color: black;">Marital Status:</li>
              <li style="color: black;">Religion:</li>
              <li style="color: black;">Will you need an interpreter?</li>
              <li style="color: black;">Has the patient visited any countries in the last 30 days?</li>
              <li style="color: black;">When would you like to travel?</li>
              <li style="color: black;">Do you have any preferred Doctors?</li>
              <li style="color: black;">How many days will you be available for treatment?</li>
            </ul>
            <hr>
            <ul>
              <h2>Patients less than 18 years old only:</h2>
              <li style="color: black;">Patient's Parent's Name:</li>
              <li style="color: black;">Parent's Date of Birth</li>
            </ul>
            <hr>
            <ul>
              <h2>Who should be notified in an emergency?</h2>
              <li style="color: black;">Name:</li>
              <li style="color: black;">Local Hotel Name if traveling with you:</li>
              <li style="color: black;">Adress:</li>
            </ul>
          </div>
        </div>        

        <div class="hotel__main col-sm-5">
          <img src="http://placehold.it/150x50" alt="File Upload">
          <div style="margin-top: 15px;">
            <h1>YOUR FILES:</h1>
          </div>
          <label for="input" style="cursor: pointer; border-bottom: solid 1px; color: RGB(74,126,187);">Click here to upload your files</label>
          <input type="file" name="input" id="input" style="opacity: 0;">
          
          <table id="file_name"></table>
          
          <div style="margin-top:15px;">
            <textarea class="form-control" rows="15" placeholder="Tell the hospital about your case….."></textarea>
          </div>
          

          <div class="clo-sm-12" style="margin-top:15px;">
            <a href="#quote__add" class="btn btn-primary btn-lg" data-toggle="modal">SEND TO HOSPITAL</a>
            <button class="btn btn-info btn-lg">GO BACK </button>
          </div>

        </div>      
      </div>   

      <!-- begin modal -->
      <div id="quote__add" class="quote__add modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
                         
              <table class="table text-center">
                <thead>
                  <h1 class="text-center">SUCCESS! </h2>
                  
                  <h2 class="text-center">YOUR QUOTE REQUEST HAS BEEN SENT TO THE HOSPITAL FOR REVIEW AND COST CONFIRMATION.</h2>
                  
                  <h2 class="text-center">YOU WILL RECEIVE AN EMAIL CONFIRMATION ONCE THE HOSPITAL CONFIRMS COST.</h2>
                  
                  <h2 class="text-center" style="color: RGB(251,208,173);">IN THE EVENT THE HOSPITAL REQUIRES ADDITIONAL INFORMATION YOU WILL RECEIVE AN EMAIL NOTIFICATION</h2>

                </thead>                
                
              </table>              
                
              <div class="col-sm-7">
                <a href="#" class="btn-info btn-md btn pull-right" data-dismiss="modal">DONE!</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- end modal  -->

    </main>

<?php include('_footer.php'); ?>

<script type="application/javascript">
  var a = [];
  let current = 0;
  
  jQuery('input[type=file]').change(function(){
    var filename = jQuery(this).val().split('\\').pop();
    var idname = jQuery(this).attr('id');
    a.push(filename);
    addOption("check"+current,filename,current++); 
    
  });

  function addOption(name,text,value){ 
    var tr = document.createElement("TR");
    var td = document.createElement("TD");
    var td1 = document.createElement("TD");
    var label = document.createElement("LABEL");
    var check = document.createElement("INPUT");
    
    label.innerText = text;
    label.style.marginRight = "10px";
    check.setAttribute("value",value);
    check.setAttribute("type", "checkbox");
    check.setAttribute("checked", "true");

    var father = window.document.getElementById("file_name"); 

    
    try { 
      father.appendChild(tr, null);
      tr.appendChild(td, null);
      tr.appendChild(td1, null);      
      td.appendChild(label, null);      
      td1.appendChild(check, null);      
    } 
    catch(ex) { 
      
    } 
  } 
</script>