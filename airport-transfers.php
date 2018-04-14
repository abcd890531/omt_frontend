<?php 

  $page__title = 'Airport Transfers in Las Vegas';
  $is_searching = true;
  $search__option = 'Airport Transfers';

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <div class="filtering form-horizontal row">
        <div class="filter__col col-sm-3 col-md-2">
          <label class="small--upper">Date Range</label>
          <button type="button" class="input--daterangepicker input--select btn-block btn">
           
            <span class="startdate"></span> &ndash; <span class="enddate"></span>

          </button>
        </div>
        <div class="filter__col col-sm-3 col-md-2">
          <label class="small--upper">Transfer Type</label>
          <select name="filter__transfer" id="filter__transfer" class="input--select form-control">
            <option value="">Round Trip</option>
          </select>
        </div>
        <div class="filter__col col-sm-3 col-md-2">
          <label class="small--upper">Pick-Up Location</label> <br>
          <button type="button" class="input--select btn-block btn" data-toggle="dropdown">Las Vegas</button>
          <div class="pickup__dropdown panel-default panel dropdown-menu"></div>
        </div>
        <div class="filter__col col-sm-3 col-md-2">
          <label class="small--upper">Drop-Off Location</label> <br>
          <button type="button" class="input--select btn-block btn" data-toggle="dropdown">LAS (Airport)</button>
        </div>
        <div class="filter__col col-sm-4 col-md-2">
          <label for="filter__people" class="small--upper"># of People</label>
          <select name="filter__people" id="filter__people" class="input--select form-control">
            <option value="">5</option>
          </select>
        </div>
        <div class="filter__col col-xs-12 col-sm-4 col-md-2 pull-right text--sm--right">
          <button class="filter__reset btn-link btn-sm small--upper btn--underline">Reset Filters</button>
        </div>
      </div>

      <section class="section--transfers transfers" id="transfers">

        <p>All Transfers at this Destination Include: Gratuity, airport fee, parking fee, meet and greet, and tax.</p>
        <table class="transfers__table packages__table table">
          <tbody>
            <?php for ($i = 0; $i < 3; $i++) { ?>
            <tr class="package">
              <th><span class="media">
                <span class="media-left">
                  <img class="media-object" src="http://placehold.it/120x50" alt="Car">
                </span>
                <h2 class="product__name h3 media-left media-middle">
                  Sedan
                </h2>
              </span></th>
              <td class="package__attr"><span class="ion-ios-people ion"></span> 2&ndash;5</td>
              <td class="package__price text--sm--right">
                <span class="small--upper">USD</span> <big>$51.06</big>
                <br><small class="text-muted">*Taxes &amp; fees not incl'd</small>
              </td>
              <td class="package__action"><a href="#quote__add" class="btn-warning btn-md btn" data-toggle="modal">Customize…</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

      </section>

      <div id="quote__add" class="quote__add modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span class="ion-close-circled ion"></span></button>
              <ul class="navtabs--lg nav-tabs nav row">
                <li class="active col-xs-12 col-sm-6" role="presentation"><a href="#quote-new" data-toggle="tab">Create New Quote</a></li>
                <li class="col-xs-12 col-sm-6" role="presentation"><a href="#quote-add" data-toggle="tab">Add to Existing Quote</a></li>
              </ul>
              <div class="tab-content">
                <div id="quote-new" class="tab-pane form-horizontal active">
                  <div class="form-group">
                    <div class="col-sm-7">
                      <label for="quote__name" class="control-label small--upper">Quote Name (Optional)</label>
                      <input id="quote__name" type="text" class="form-control input--underline" placeholder="Name of Quote…">
                    </div>
                    <div class="col-sm-5">
                      <label for="quote__budget" class="control-label small--upper">Client Budget (Optional)</label>
                      <div class="inputgroup--underline input-group">
                        <input id="quote__budget" type="text" class="form-control input--underline" placeholder="$0.00">
                        <label for="quote__budget" class="input-group-addon">USD</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="quote-add" class="tab-pane text-center row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <label class="control-label small--upper">Search for an Existing Quote</label>
                    <input type="text" class="form-control input-lg" placeholder="Enter quote name or #…">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <hr class="hr--down">
              
              <div class="product--card panel-default panel">
                <div class="panel-body">
                  <header class="product__header media">
                    <!-- <div class="media-left">
                      <img class="product__image media-object" src="http://placehold.it/95x52" alt="Compact car photo">
                    </div> -->
                    <div class="media-body">
                      <h2 class="product__name">Sedan <span class="product__pax"><span class="ion-ios-people ion"></span> 2&ndash;5</span></h2>
                      <small>Includes: Gratuity, airport fee, parking fee, meet and greet, tax</small>
                    </div>
                    <div class="media-right"><span class="product__icon md-swap_horiz mdicon">&#xe8d4;</span></div>
                  </header>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>From</th>
                        <td class="text--sm--right">Las Vegas</td>
                      </tr>
                      <tr>
                        <th>To</th>
                        <td class="text--sm--right">LAS (Airport)</td>
                      </tr>
                      <tr>
                        <th>Price (Incl'd Taxes &amp; Fees</th>
                        <td class="text--sm--right">$83.04</td>
                      </tr>
                      <tr>
                        <th class="cell--hasarrow">Transfer Type</th>
                        <td class="text--sm--right">
                          <select class="input--select form-control">
                            <option value="">Round Trip</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th class="cell--hasarrow">Date</th>
                        <td class="text--sm--right">
                          <div class="inputgroup--date inputgroup--underline input-group">
                            <label for="quote__date" class="input-group-addon"><span class="ion-android-calendar ion"></span></label>
                            <input id="quote__date" type="date" class="input--underline input-sm form-control" value="2018-01-01">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th class="cell--hasarrow">Flight number</th>
                        <td class="text--sm--right">
                          <input type="text" class="input--underline form-control">
                        </td>
                      </tr>                      
                    </tbody>
                  </table>
                  <h3 class="small--upper">Optional Add-ons</h3>
                  <div class="btngroup--checkvisible btngroup--separate btn-group" data-toggle="buttons">
                    <label class="btn-default btn-block btn text-left active"><span class="media">
                      <span class="media-left media-middle"><input type="checkbox" checked></span>
                      <span class="media-body media-middle">Meet &amp; Greet</span>
                      <span class="media-right media-middle text-right">+$25.00</span>
                    </span></label>
                    <label class="btn-default btn-block btn text-left"><span class="media">
                      <span class="media-left media-middle"><input type="checkbox"></span>
                      <span class="media-body media-middle">Night Supplement <br> <small>11pm to 6am</small></span>
                      <span class="media-right media-middle text-right">+$30.00</span>
                    </span></label>
                    <label class="btn-default btn-block btn text-left"><span class="media">
                      <span class="media-left media-middle"><input type="checkbox"></span>
                      <span class="media-body media-middle">Child Seat </span>
                      <span class="media-right media-middle text-right">+$0.00</span>
                    </span></label>
                  </div>
                  <table class="product__grandtotal table">
                    <tbody>
                      <tr>
                        <th>Grand Total</th>
                        <td class="text-right"><big>$83.04</big></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer clearfix">
              <button class="btn-link btn small--upper pull-left" data-dismiss="modal">Cancel</button>
              <div class="pull-right">
                <a href="quote.php" class="btn-warning btn-md btn">Add &amp; Create New Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

<?php include('_footer.php'); ?>