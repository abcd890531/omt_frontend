<?php 

  $page__title = 'Account';

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">
      
      <header class="account__header clearfix">
        <div class="account__company media">
          <div class="media-left media-middle">
            <img class="media-object" src="http://placehold.it/60x60" alt="Company avatar">
          </div>
          <div class="media-body media-middle">
            <span class="small--upper">Company Name</span>
            <h1>Twin City Travel &amp; Tourism</h1>
          </div>
        </div>
        <ul class="account__tabs navtabs--icon nav-tabs nav" role="tablist">
          <li role="presentation" class="active"><a href="#profile" data-toggle="tab"><span class="navtabs__icon ion-ios-person ion"></span> My Profile</a></li>
          <li role="presentation"><a href="#company" data-toggle="tab"><span class="navtabs__icon ion-ios-gear ion"></span> Company Details</a></li>
          <li role="presentation"><a href="#users" data-toggle="tab"><span class="navtabs__icon ion-person-stalker ion"></span> Users</a></li>
          <li role="presentation"><a href="#commission" data-toggle="tab"><span class="navtabs__icon ion-social-usd-outline ion"></span> Commission Rate</a></li>
        </ul>
      </header>

      <div class="tab-content">

        <div id="profile" class="tab-pane">
          <h2 class="tab__title">My Profile</h2>
          <div class="row">
            <div class="account__photo col-sm-4 col-md-3 text-center">
              <label class="control-label small--upper text-left">Profile Photo</label>            
              <figure>
                <img class="img-thumbnail" src="http://placehold.it/130x130" alt="My profile photo">
              </figure>
              <p class="help-block small">Recommended 200x200 pixels</small></p>
              <p class="form-group"><button type="button" class="btn-default btn-md btn"> Upload New…</button></p>
              <button type="button" class="btn-link btn"> Remove Photo</button>
            </div>  
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <label for="user__name" class="control-label small--upper">Name</label>
                  <input id="user__name" type="text" class="input--underline form-control" value="Melanie Armstrong">
                </div>
                <div class="col-sm-4 form-group">
                  <label for="user__title" class="control-label small--upper">Title</label>
                  <input id="user__title" type="text" class="input--underline form-control" value="Agent" readonly>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <label for="user__email" class="control-label small--upper">Email Address</label>
                  <input id="user__email" type="email" class="input--underline form-control" value="">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 form-group">
                  <label for="user__phone" class="control-label small--upper">Phone</label>
                  <input id="user__phone" type="tel" class="input--underline form-control" value="555-555-1838">
                </div>
                <div class="col-sm-2 form-group">
                  <label for="user__ext" class="control-label small--upper">Ext.</label>
                  <input id="user__ext" type="text" class="input--underline form-control" value="112">
                </div>
              </div>
              <label class="control-label small--upper">Preferred Languages</label>
              <div class="row">
                <label class="col-sm-3 col-md-2"><input type="checkbox"> English</label>
                <label class="col-sm-3 col-md-2"><input type="checkbox"> French</label>
                <label class="col-sm-3 col-md-2"><input type="checkbox"> Chinese</label>
                <label class="col-sm-3 col-md-2"><input type="checkbox"> Arabic</label>
              </div>
              <div class="row">
                <label class="col-sm-3 col-md-2"><input type="checkbox"> Spanish</label>
                <label class="col-sm-3 col-md-2"><input type="checkbox"> Portuguese</label>
                <label class="col-sm-3 col-md-2"><input type="checkbox"> Hindi</label>
                <label class="col-sm-3 col-md-2"><input type="checkbox"> Russian</label>
              </div>
            </div>
          </div>
        </div>
        <div id="company" class="tab-pane">
          <h2 class="tab__title">Company Details</h2>
          <div class="row">
            <div class="account__photo col-sm-4 col-md-3 text-center">
              <label class="control-label small--upper text-left">Company Photo</label>            
              <figure>
                <img class="img-thumbnail" src="http://placehold.it/180x180" alt="My profile photo">
              </figure>
              <p class="help-block small">Recommended 200x200 pixels</small></p>
              <p class="form-group"><button type="button" class="btn-default btn-md btn"> Upload New…</button></p>
              <button type="button" class="btn-link btn"> Remove Photo</button>
            </div>  
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <label for="company__name" class="control-label small--upper">Company Name</label>
                  <input id="company__name" type="text" class="input--underline form-control" value="Twin City Travel &amp; Tourism">
                </div>
                <div class="col-sm-6 form-group">
                  <label for="company__url" class="control-label small--upper">Company Website</label>
                  <input id="company__url" type="url" class="input--underline form-control" value="www.twincitytravel.com">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <label for="company__address" class="control-label small--upper">Address</label>
                  <input id="company__address" type="text" class="input--underline form-control" placeholder="Address line 1" value="1344 N. Main St.">
                  <input id="company__address2" type="text" class="input--underline form-control" placeholder="Address line 2" value="">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label for="company__city" class="control-label small--upper">City</label>
                  <input id="company__city" type="text" class="input--underline form-control" value="New York">
                </div>
                <div class="col-sm-3 form-group">
                  <label for="company__state" class="control-label small--upper">State/Province</label>
                  <select id="company__state" class="input--select form-control">
                    <option value="">NY</option>
                  </select>
                </div>
                <div class="col-sm-4 form-group">
                  <label for="company__phone" class="control-label small--upper">Phone</label>
                  <input id="company__phone" type="tel" class="input--underline form-control" value="555-555-1838">
                </div>
                <div class="col-sm-2 form-group">
                  <label for="company__ext" class="control-label small--upper">Ext.</label>
                  <input id="company__ext" type="text" class="input--underline form-control" value="112">
                </div>
                <div class="col-sm-2 form-group">
                  <label for="company__zip" class="control-label small--upper">ZIP</label>
                  <input id="company__zip" type="text" class="input--underline form-control" value="11104">
                </div>
              </div>
              <label class="control-label small--upper">Preferred Languages</label>
              <div class="row">
                <label class="col-xs-12 col-sm-3 col-md-2"><input type="checkbox"> English</label>
                <label class="col-xs-12 col-sm-3 col-md-2"><input type="checkbox"> French</label>
                <label class="col-xs-12 col-sm-3 col-md-2"><input type="checkbox"> Chinese</label>
                <label class="col-xs-12 col-sm-3 col-md-2"><input type="checkbox"> Arabic</label>
              </div>
              <div class="row">
                <label class="col-xs-12 col-sm-3 col-md-2"><input type="checkbox"> Spanish</label>
                <label class="col-xs-12 col-sm-3 col-md-2"><input type="checkbox"> Portuguese</label>
                <label class="col-xs-12 col-sm-3 col-md-2"><input type="checkbox"> Hindi</label>
                <label class="col-xs-12 col-sm-3 col-md-2"><input type="checkbox"> Russian</label>
              </div>
            </div>
          </div>
        </div>
        <div id="users" class="tab-pane active">
          <div class="clearfix">
            <h2 class="tab__title pull-left">All Users</h2>
            <a href="#user__add" class="btn-primary btn pull-right" data-toggle="modal">Add New User</a>
          </div>
          <div class="table-responsive">
            <table class="table--outerth table--middle table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email Address</th>
                  <th>Phone</th>
                  <th>Title</th>
                  <th>Sales in Last 6 Months</th>
                  <th colspan="2">Confirmed Quotes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Roliand Spagnoli</td>
                  <td>mthurn@live.com</td>
                  <td>(555) 555-1858</td>
                  <td>Agent</td>
                  <td>$140,048.12</td>
                  <td>31 of 88 <span class="text-muted">(38%)</span></td>
                  <td>
                    <button type="button" class="btn--delete btn-link btn"><span class="md-delete mdicon">&#xe872;</span></button>
                    <button type="button" class="btn--edit btn-link btn"><span class="md-edit mdicon">&#xe3c9;</span></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="user__add" class="user__add modal modal--plain fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modalheader--center modal-header">
                  <h2>Add New User</h2>
                  <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                      <div class="form-group">
                        <label for="adduser__name" class="control-label small--upper">Name</label>
                        <input id="adduser__name" type="text" class="input--underline form-control" placeholder="Enter name…">
                      </div>
                      <div class="form-group">
                        <label for="adduser__email" class="control-label small--upper">Email Address</label>
                        <input id="adduser__email" type="email" class="input--underline form-control" placeholder="Enter email address…">
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox">Send 'account creation' email to this user</label>
                      </div>
                      <div class="form-group">
                        <label for="adduser__title" class="control-label small--upper">Title (optional)</label>
                        <input id="adduser__title" type="text" class="input--underline form-control" placeholder="Enter title…">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer clearfix">
                  <button class="btn-link btn small--upper pull-left" data-dismiss="modal">Cancel</button>
                  <div class="pull-right">
                    <a href="quote.php" class="btn-warning btn-md btn">Add User</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="commission" class="tab-pane">          

          <div id="commission__rates" class="commission__rates">
            <h2 class="tab__title">Default Commission Rate</h2>
            <div class="rate panel-default panel text-center">
              <div class="panel-body">
                <div class="rate__icon md-hotel mdicon">&#xe53a;</div>
                <h3 class="rate__name small--upper">Hotels</h3>
                <div class="rate__inputgroup inputgroup--underline input-group">
                  <input id="rate__hotels" type="number" class="input--underline form-control" value="18">
                  <label for="rate__hotels" class="input-group-addon">%</label>
                </div>
                <div class="btngroup--separate btn-group" data-toggle="buttons">
                  <label class="rate__btn btn--pill btn-default btn-sm btn active"><input type="radio" name="rate__hotels__option" checked>Custom</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__hotels__option">5%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__hotels__option">10%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__hotels__option">15%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__hotels__option">20%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__hotels__option">25%</label>
                </div>
              </div>
            </div>
            <div class="rate panel-default panel text-center">
              <div class="panel-body">
                <div class="rate__icon md-explore mdicon">&#xe87a;</div>
                <h3 class="rate__name small--upper">Activities</h3>
                <div class="rate__inputgroup inputgroup--underline input-group">
                  <input id="rate__hotels" type="number" class="input--underline form-control" value="18">
                  <label for="rate__hotels" class="input-group-addon">%</label>
                </div>
                <div class="btngroup--separate btn-group" data-toggle="buttons">
                  <label class="rate__btn btn--pill btn-default btn-sm btn active"><input type="radio" name="rate__activities__option" checked>Custom</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__activities__option">5%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__activities__option">10%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__activities__option">15%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__activities__option">20%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__activities__option">25%</label>
                </div>
              </div>
            </div>
            <div class="rate panel-default panel text-center">
              <div class="panel-body">
                <div class="rate__icon md-swap_horiz mdicon">&#xe8d4;</div>
                <h3 class="rate__name small--upper">Transfers</h3>
                <div class="rate__inputgroup inputgroup--underline input-group">
                  <input id="rate__hotels" type="number" class="input--underline form-control" value="18">
                  <label for="rate__hotels" class="input-group-addon">%</label>
                </div>
                <div class="btngroup--separate btn-group" data-toggle="buttons">
                  <label class="rate__btn btn--pill btn-default btn-sm btn active"><input type="radio" name="rate__transfers__option" checked>Custom</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__transfers__option">5%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__transfers__option">10%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__transfers__option">15%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__transfers__option">20%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__transfers__option">25%</label>
                </div>
              </div>
            </div>
            <div class="rate panel-default panel text-center">
              <div class="panel-body">
                <div class="rate__icon md-directions_car mdicon">&#xe531;</div>
                <h3 class="rate__name small--upper">Car Rental</h3>
                <div class="rate__inputgroup inputgroup--underline input-group">
                  <input id="rate__hotels" type="number" class="input--underline form-control" value="18">
                  <label for="rate__hotels" class="input-group-addon">%</label>
                </div>
                <div class="btngroup--separate btn-group" data-toggle="buttons">
                  <label class="rate__btn btn--pill btn-default btn-sm btn active"><input type="radio" name="rate__rental__option" checked>Custom</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__rental__option">5%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__rental__option">10%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__rental__option">15%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__rental__option">20%</label>
                  <label class="rate__btn btn--pill btn-default btn-sm btn"><input type="radio" name="rate__rental__option">25%</label>
                </div>
              </div>
            </div>
            <p class="text-right"><button type="button" class="btn-warning btn-lg btn">Save All Rates</button></p>
          </div>

          <div class="commission__view panel-default panel panel-body">
            <div class="row">
              <div class="col-sm-8 col-md-10">
                <h2>Client View Commission Rate Change</h2>
                <p>Turning this option on allows you to discreetly adjust commission rates while in 'Client View' <a class="commission__example__toggle" href="#commission__example">See Example</a></p>
              </div>
              <div class="col-sm-4 col-md-2 text--sm--right">
                <label class="switchtoggle">
                  <input type="checkbox" checked>
                  <span class="switchtoggle__label">On</span>
                  <span class="switchtoggle__handle"></span>
                  <span class="switchtoggle__label">Off</span>
                </label>
              </div>
            </div>
          </div>

          <div id="commission__example" class="commission__example text-center hide">
            <div class="example__text">
              <p>
                <span class="ion-ios-arrow-thin-right ion"></span>
                <br><em>See example</em>
              </p>
              <button type="button" class="commission__example__toggle btn-warning btn">Done</button>
            </div>

            <div class="commission__flyout flyout panel-default panel active">
              <div class="inputgroup--vertical inputgroup--number inputgroup--underline input-group">
                <label class="minus input-group-addon"><span class="md-remove_circle_outline mdicon">&#xe15d;</span></label>
                <input type="text" class="form-control input--underline" value="18">
                <span class="sign input-group-addon"><span class="md-hotel mdicon">&#xe53a;</span></span>
                <label class="plus input-group-addon"><span class="md-add_circle_outline mdicon">&#xe148;</span></label>
              </div>
              <button type="button" class="flyout__close btn"><span class="ion-arrow-right-b ion"></span> <span class="ion-arrow-left-b ion"></span></button>
            </div>

          </div>

        </div>

      </div>

    </main>

<?php include('_footer.php'); ?>