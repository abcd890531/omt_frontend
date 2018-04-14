<?php 

  $page__title = 'Quotes';

?>

<?php include('_header.php'); ?>

    <main class="main container-fluid">

      <header class="quotes__header row">
        <div class="form-group col-md-6">
          <h1 class="page-title">Quotes</h1>
          <div class="quotes__search search__inputgroup inputgroup--search input-group-lg input-group">
            <label class="search__icon input-group-addon" for="search__input" id="search__icon"><span class="ion-ios-search ion"></span></label>
            <input type="text" class="form-control input-lg" id="search__input" aria-describedby="search__icon" placeholder="Search for Quote # or Name…" value="">
          </div><!-- /.search__inputgroup -->
        </div>
        <div class="form-group sorting__by col-md-6 pull-right text--sm--right">
          <span class="small--upper">Sort By:</span>
          <div class="btn-group" data-toggle="buttons">
            <label class="sorting__btn btn--underline btn-sm btn active"><input type="radio" name="sort"> Last Updated</label>
            <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Quote #</label>
            <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Alphabetical</label>
            <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Budget</label>
          </div>
        </div>
      </header>   

      <div class="table-responsive">
        <table class="table--outerth table--middle table">
          <thead>
            <tr>
              <th>Quote #</th>
              <th>Name</th>
              <th>Last Updated</th>
              <th>Budget</th>
              <th colspan="2">Quote Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="quote.php">001841</a></td>
              <td><a href="quote.php">May, Jonathan</a></td>
              <td>10/24/17</td>
              <td>$2,000</td>
              <td>$2,100 
                <span title="Prices May Have Changed" class="popovertoggle--hover md-error mdicon text--yellow" data-toggle="popover" data-content-source="#quoteexpired__popover">&#xe001;</span>
                <div class="popover-content hide" id="quoteexpired__popover">
                  <p>The prices within this quote have expired. Refresh to see updated price quotes.</p>
                  <div class="clearfix">
                    <button type="button" class="popover__cancel btn text-muted pull-left">Not now</button>
                    <a href="quotes.php" class="btn pull-right">Yes, Refresh</a>
                  </div>
                </div>
              </td>
              <td class="text-right">
                <button type="button" class="btn--delete btn-link btn"><span class="md-delete mdicon">&#xe872;</span></button>
                <button type="button" class="btn--copy btn-link btn"><span class="md-content_copy mdicon">&#xe14d;</span></button>
                <a href="myitinerary.php" class="btn--send btn-link btn"><span class="ion-android-share ion"></span></a>
                <a href="activity.php#quote" class="btn-default btn">Add to Quote</a>
                <a href="quote.php" class="btn-default btn">View Quote</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>

<?php include('_footer.php'); ?>